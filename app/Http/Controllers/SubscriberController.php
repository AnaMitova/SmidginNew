<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Code handed out by the subscription popup.
     */
    public const DISCOUNT_CODE = 'WELCOME8';

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
                'discount_code' => self::DISCOUNT_CODE,
                'source'        => $request->headers->get('referer'),
                'ip_address'    => $request->ip(),
                'status'        => 'Subscribed',
            ]
        );

        return response()->json([
            'ok'            => true,
            'discount_code' => $subscriber->discount_code,
        ], 201);
    }
}
