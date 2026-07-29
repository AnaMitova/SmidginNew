@php
    // Where the code gets redeemed. Change this if the shop moves.
    $shopUrl = 'https://smidgin-shop.myshopify.com/';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Welcome to Smidgin!</title>
</head>
<body style="margin:0; padding:0; background:#F4F4F4;">

    {{-- Inbox preview line, hidden in the body itself. --}}
    <div style="display:none; max-height:0; overflow:hidden; opacity:0;">
        Your code is {{ $subscriber->discount_code }} — {{ $discountText }} your first order.
    </div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#F4F4F4;">
        <tr>
            <td align="center" style="padding:28px 16px;">

                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                       style="max-width:560px; background:#E8E8E8; border-radius:22px;">

                    <tr>
                        <td align="center" style="padding:40px 34px 8px;">
                            <p style="margin:0 0 22px; font-family:Georgia,'Times New Roman',serif; font-size:15px; letter-spacing:.22em; text-transform:uppercase; color:#26364A;">
                                Smidgin
                            </p>

                            <h1 style="margin:0 0 16px; font-family:Georgia,'Times New Roman',serif; font-size:32px; line-height:1.15; font-weight:400; color:#0F1720;">
                                Welcome to Smidgin!
                            </h1>

                            <p style="margin:0 0 26px; font-family:Arial,Helvetica,sans-serif; font-size:14px; line-height:1.6; color:#26364A;">
                                Hi {{ $subscriber->first_name }}, thanks for subscribing. Here is your code for
                                <strong>{{ $discountText }}</strong> your first order.
                            </p>
                        </td>
                    </tr>

                    {{-- The code --}}
                    <tr>
                        <td align="center" style="padding:0 34px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0"
                                   style="background:#FFFFFF; border-radius:14px;">
                                <tr>
                                    <td align="center" style="padding:22px 40px;">
                                        <p style="margin:0 0 6px; font-family:Arial,Helvetica,sans-serif; font-size:11px; letter-spacing:.14em; text-transform:uppercase; color:#8A939D;">
                                            Your discount code
                                        </p>
                                        <p style="margin:0; font-family:Arial,Helvetica,sans-serif; font-size:32px; font-weight:bold; letter-spacing:.02em; color:#EF4444;">
                                            {{ $subscriber->discount_code }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Call to action --}}
                    <tr>
                        <td align="center" style="padding:26px 34px 0;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center" style="background:#EF4444; border-radius:12px;">
                                        <a href="{{ $shopUrl }}"
                                           style="display:inline-block; padding:15px 38px; font-family:Arial,Helvetica,sans-serif; font-size:14px; font-weight:bold; letter-spacing:.06em; text-transform:uppercase; color:#FFFFFF; text-decoration:none;">
                                            Shop now
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:24px 34px 38px;">
                            <p style="margin:0; font-family:Arial,Helvetica,sans-serif; font-size:13px; line-height:1.6; color:#26364A;">
                                Use the code at checkout.<br>
                                Enjoy a small taste of perfection.
                            </p>
                        </td>
                    </tr>
                </table>

                {{-- Footer --}}
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width:560px;">
                    <tr>
                        <td align="center" style="padding:20px 24px 0;">
                            <p style="margin:0 0 8px; font-family:Arial,Helvetica,sans-serif; font-size:11px; line-height:1.6; color:#7A828B;">
                                You are receiving this email because you subscribed at
                                <a href="{{ url('/') }}" style="color:#7A828B;">{{ parse_url(url('/'), PHP_URL_HOST) }}</a>.
                            </p>
                            <p style="margin:0; font-family:Arial,Helvetica,sans-serif; font-size:11px; line-height:1.6; color:#7A828B;">
                                <a href="{{ url('/privacypolicy') }}" style="color:#7A828B;">Privacy policy</a>
                                &nbsp;·&nbsp;
                                <a href="{{ url('/termsandconditions') }}" style="color:#7A828B;">Terms of service</a>
                            </p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>
</html>
