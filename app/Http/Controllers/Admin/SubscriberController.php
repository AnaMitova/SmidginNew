<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use App\Models\SubscriptionSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SubscriberController extends Controller
{
    /**
     * Change what the subscription popup offers from now on — the discount
     * code it hands out and the offer wording it advertises.
     *
     * Subscribers already in the list keep the code they were given.
     */
    public function updateSettings(Request $request)
    {
        // Redirect by hand (rather than $request->validate()) so both outcomes
        // land back on the Претплатници tab — the panel picks it from the hash.
        $back = route('stores.index') . '#subscribers';

        $validator = Validator::make($request->all(), [
            'discount_code' => ['required', 'string', 'max:50', 'regex:/^[A-Za-z0-9._-]+$/'],
            'discount_text' => ['required', 'string', 'max:60'],
        ], [
            'discount_code.required' => 'Внесете код за попуст.',
            'discount_code.max'      => 'Кодот може да има највеќе 50 знаци.',
            'discount_code.regex'    => 'Кодот може да содржи само букви, бројки и знаците . _ -',
            'discount_text.required' => 'Внесете текст за понудата.',
            'discount_text.max'      => 'Текстот може да има највеќе 60 знаци.',
        ]);

        if ($validator->fails()) {
            return redirect()->to($back)->withErrors($validator)->withInput();
        }

        $data = $validator->validated();

        SubscriptionSetting::current()->update([
            'discount_code' => trim($data['discount_code']),
            'discount_text' => trim($data['discount_text']),
        ]);

        return redirect()->to($back)->with('success', 'Поставките за попапот се зачувани.');
    }

    /**
     * Download the full lead list as CSV.
     */
    public function export(): StreamedResponse
    {
        $filename = 'smidgin-subscribers-' . now()->format('Y-m-d_His') . '.csv';

        $headers = [
            'Content-Type'        => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Pragma'              => 'no-cache',
            'Cache-Control'       => 'no-store, no-cache, must-revalidate',
        ];

        return response()->stream(function () {
            $out = fopen('php://output', 'w');

            // BOM so Excel opens UTF-8 correctly.
            fwrite($out, "\xEF\xBB\xBF");

            fputcsv($out, ['ID', 'Date', 'First name', 'Email', 'Phone', 'Country', 'Code', 'Status']);

            Subscriber::latest()->chunk(200, function ($subscribers) use ($out) {
                foreach ($subscribers as $subscriber) {
                    fputcsv($out, [
                        $subscriber->id,
                        $subscriber->created_at->format('d.m.Y H:i'),
                        $subscriber->first_name,
                        $subscriber->email,
                        $subscriber->full_phone,
                        $subscriber->country_iso,
                        $subscriber->discount_code,
                        $subscriber->status,
                    ]);
                }
            });

            fclose($out);
        }, 200, $headers);
    }

    /**
     * Remove a lead from the list.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

        return back()->with('success', 'Subscriber deleted.');
    }
}
