<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberWelcome;
use App\Models\Subscriber;
use App\Models\SubscriptionSetting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SubscriberController extends Controller
{
    /**
     * Store a lead coming from the subscription popup.
     */
    public function store(Request $request): JsonResponse
    {
        // Accept numbers however they were typed — "070 123 456", "(070) 123-456".
        $request->merge([
            'phone' => preg_replace('/[^0-9]/', '', (string) $request->input('phone')),
        ]);

        $data = $request->validate([
            'first_name'   => 'required|string|max:100',
            'email'        => 'required|email|max:255',
            'country_iso'  => 'nullable|string|size:2',
            'country_code' => 'required|string|regex:/^\+[0-9]{1,4}$/',
            'phone'        => 'required|digits_between:5,15',
        ], [
            'country_code.regex'         => 'Please pick a valid country code.',
            'phone.digits_between'       => 'Please enter a valid phone number.',
        ]);

        $subscriber = Subscriber::updateOrCreate(
            ['email' => mb_strtolower($data['email'])],
            [
                'first_name'    => $data['first_name'],
                'country_iso'   => strtoupper($data['country_iso'] ?? 'MK'),
                'country_code'  => $data['country_code'],
                'phone'         => $data['phone'],
                'discount_code' => SubscriptionSetting::discountCode(),
                'source'        => $request->headers->get('referer'),
                'ip_address'    => $request->ip(),
                'status'        => 'Subscribed',
            ]
        );

        // Sent inline (no queue worker to babysit) and never allowed to fail the
        // request — the popup shows the code either way, and losing the lead
        // over a mail server hiccup would be worse than a missing email.
        try {
            Mail::to($subscriber->email)
                ->send(new SubscriberWelcome($subscriber, SubscriptionSetting::discountText()));
        } catch (Throwable $e) {
            Log::warning('Subscriber welcome email failed: ' . $e->getMessage(), [
                'email' => $subscriber->email,
            ]);
        }

        return response()->json([
            'ok'            => true,
            'discount_code' => $subscriber->discount_code,
        ], 201);
    }
}
