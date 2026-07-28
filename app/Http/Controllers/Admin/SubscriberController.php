<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SubscriberController extends Controller
{
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
