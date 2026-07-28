@php
    /**
     * Subscription popup.
     *
     * Self-contained apart from the shared flag sprite: scoped CSS (all classes
     * prefixed `sgsub-`) and vanilla JS in one file, so it drops into any page
     * without a build step. Country/flag data lives in App\Support\CountryFlags.
     */
    // Home market first, then alphabetical (array + keeps the left-hand key order).
    $sgsubCountries = ['MK' => \App\Support\CountryFlags::all()['MK']]
        + \App\Support\CountryFlags::all();

    // Editable from the "Претплатници" tab of the admin panel.
    $sgsubCode = \App\Models\SubscriptionSetting::discountCode();
    $sgsubOffer = \App\Models\SubscriptionSetting::discountText();
@endphp

@include('partials.flag-sprite')

<div id="sgsub"
     data-endpoint="{{ url('/api/subscribe') }}"
     data-token="{{ csrf_token() }}"
     data-code="{{ $sgsubCode }}"
     hidden>

    {{-- ───────────────────────────── Modal ───────────────────────────── --}}
    <div class="sgsub-overlay" id="sgsub-overlay" hidden>
        <div class="sgsub-modal" id="sgsub-modal" role="dialog" aria-modal="true" aria-labelledby="sgsub-heading">

            <button type="button" class="sgsub-x" id="sgsub-x" aria-label="Close">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
            </button>

            {{-- Form view --}}
            <div class="sgsub-view sgsub-view--form" id="sgsub-view-form">

                <div class="sgsub-media">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('img/subscribePopup_mobile.png') }}">
                        <img src="{{ asset('img/subscribePopup.png') }}" alt="Friends toasting with Smidgin gin and tonics" loading="lazy" decoding="async">
                    </picture>
                </div>

                <div class="sgsub-panel">
                    <h2 class="sgsub-heading" id="sgsub-heading">Welcome to Smidgin!</h2>

                    <p class="sgsub-lede">
                        Subscribe for exclusive updates, special offers, and <strong>{{ $sgsubOffer }}</strong> your first order.
                    </p>

                    <form class="sgsub-form" id="sgsub-form" novalidate>

                        <div class="sgsub-field">
                            <input type="text" id="sgsub-first-name" name="first_name" class="sgsub-input"
                                   placeholder="First Name" autocomplete="given-name" maxlength="100">
                            <p class="sgsub-error" id="sgsub-error-first_name" role="alert"></p>
                        </div>

                        <div class="sgsub-field">
                            <input type="email" id="sgsub-email" name="email" class="sgsub-input"
                                   placeholder="Enter your e-mail" autocomplete="email" maxlength="255">
                            <p class="sgsub-error" id="sgsub-error-email" role="alert"></p>
                        </div>

                        <div class="sgsub-field">
                            <div class="sgsub-phone">

                                <div class="sgsub-cc">
                                    <button type="button" class="sgsub-cc-btn" id="sgsub-cc-btn"
                                            aria-haspopup="listbox" aria-expanded="false" aria-label="Country calling code">
                                        <span class="sgsub-flag">
                                            <svg id="sgsub-cc-flag" viewBox="0 0 24 16" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                                                <use href="#{{ \App\Support\CountryFlags::spriteId('MK') }}"></use>
                                            </svg>
                                        </span>
                                        <span class="sgsub-cc-dial" id="sgsub-cc-dial">+389</span>
                                        <svg class="sgsub-caret" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>

                                    <div class="sgsub-cc-pop" id="sgsub-cc-pop" hidden>
                                        <input type="text" class="sgsub-cc-search" id="sgsub-cc-search"
                                               placeholder="Search country" aria-label="Search country">
                                        <ul class="sgsub-cc-list" id="sgsub-cc-list" role="listbox">
                                            @foreach($sgsubCountries as $sgsubIso => $sgsubCountry)
                                                <li>
                                                    <button type="button" class="sgsub-cc-item"
                                                            role="option" aria-selected="{{ $sgsubIso === 'MK' ? 'true' : 'false' }}"
                                                            data-iso="{{ $sgsubIso }}"
                                                            data-dial="{{ $sgsubCountry['dial'] }}"
                                                            data-name="{{ mb_strtolower($sgsubCountry['name']) }}">
                                                        <span class="sgsub-flag">
                                                            <svg viewBox="0 0 24 16" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                                                                <use href="#{{ \App\Support\CountryFlags::spriteId($sgsubIso) }}"></use>
                                                            </svg>
                                                        </span>
                                                        <span class="sgsub-cc-name">{{ $sgsubCountry['name'] }}</span>
                                                        <span class="sgsub-cc-code">{{ $sgsubCountry['dial'] }}</span>
                                                    </button>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <p class="sgsub-cc-empty" id="sgsub-cc-empty" hidden>No matches</p>
                                    </div>
                                </div>

                                <input type="tel" id="sgsub-phone" name="phone" class="sgsub-input sgsub-input--phone"
                                       placeholder="000 000 000" autocomplete="tel-national" inputmode="tel" maxlength="25">
                            </div>
                            <p class="sgsub-error" id="sgsub-error-phone" role="alert"></p>
                        </div>

                        <p class="sgsub-error sgsub-error--form" id="sgsub-error-form" role="alert"></p>

                        <div class="sgsub-actions">
                            <button type="button" class="sgsub-cancel" id="sgsub-cancel">Cancel</button>
                            <button type="submit" class="sgsub-submit" id="sgsub-submit">
                                <span class="sgsub-submit-label">SUBSCRIBE</span>
                                <span class="sgsub-spinner" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>

                    <p class="sgsub-legal">
                        By signing up, you agree to receive marketing emails and text messages.
                        View our <a href="{{ url('/privacypolicy') }}">privacy policy</a> and
                        <a href="{{ url('/termsandconditions') }}">terms of service</a> for more info.
                    </p>
                </div>
            </div>

            {{-- Success view --}}
            <div class="sgsub-view sgsub-view--success" id="sgsub-view-success" hidden>
                <h2 class="sgsub-heading sgsub-heading--success">Welcome to Smidgin!</h2>

                <div class="sgsub-code-row">
                    <span class="sgsub-code" id="sgsub-code">{{ $sgsubCode }}</span>
                    <button type="button" class="sgsub-copy" id="sgsub-copy" aria-label="Copy discount code">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3.5" y="3.5" width="12" height="14" rx="3" fill="currentColor"/>
                            <rect x="8.5" y="7.5" width="12" height="14" rx="3" fill="currentColor" stroke="#E8E8E8" stroke-width="2"/>
                        </svg>
                    </button>
                </div>

                <p class="sgsub-success-note">
                    Check your email or use this code at checkout.<br>
                    Enjoy a small taste of perfection.
                </p>
            </div>
        </div>
    </div>

    {{-- ─────────────────────────── Launcher pill ─────────────────────────── --}}
    <div class="sgsub-launcher" id="sgsub-launcher" hidden>
        <button type="button" class="sgsub-launcher-open" id="sgsub-launcher-open">
            Unlock {{ $sgsubOffer }} Your First Order
        </button>
        <button type="button" class="sgsub-launcher-x" id="sgsub-launcher-x" aria-label="Dismiss offer">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
    </div>

    {{-- Toast --}}
    <div class="sgsub-toast" id="sgsub-toast" role="status" aria-live="polite" hidden>Copied!</div>
</div>

<style>
#sgsub {
    --sgsub-red: #EF4444;
    --sgsub-red-dark: #E53935;
    --sgsub-panel: #E8E8E8;
    --sgsub-ink: #0F1720;
    --sgsub-ink-soft: #26364A;
    --sgsub-line: #E2E2E2;
    --sgsub-serif: 'Baskervville', 'Times New Roman', Times, serif;
    --sgsub-sans: 'Montserrat', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
}
#sgsub[hidden] { display: none; }
#sgsub *, #sgsub *::before, #sgsub *::after { box-sizing: border-box; }

html.sgsub-locked, body.sgsub-locked { overflow: hidden; }

/* ── Overlay & modal ─────────────────────────────────────────────────── */
.sgsub-overlay {
    position: fixed;
    inset: 0;
    z-index: 99998;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(12, 14, 18, 0.55);
    backdrop-filter: blur(3px);
    opacity: 0;
    transition: opacity .3s ease;
    overflow-y: auto;
}
.sgsub-overlay[hidden] { display: none; }
.sgsub-overlay.is-open { opacity: 1; }

.sgsub-modal {
    position: relative;
    width: 100%;
    max-width: 940px;
    background: var(--sgsub-panel);
    border-radius: 26px;
    box-shadow: 0 30px 70px rgba(0, 0, 0, .35);
    overflow: hidden;
    transform: translateY(18px) scale(.97);
    opacity: 0;
    transition: transform .35s cubic-bezier(.22, 1, .36, 1), opacity .35s ease, max-width .3s ease;
    font-family: var(--sgsub-sans);
}
.sgsub-overlay.is-open .sgsub-modal { transform: translateY(0) scale(1); opacity: 1; }
.sgsub-modal.is-success { max-width: 590px; }

.sgsub-x {
    position: absolute;
    top: 18px;
    right: 18px;
    z-index: 3;
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 0;
    border-radius: 50%;
    background: transparent;
    color: var(--sgsub-ink);
    cursor: pointer;
    transition: background .2s ease, transform .2s ease;
}
.sgsub-x:hover { background: rgba(0, 0, 0, .07); transform: rotate(90deg); }
.sgsub-x svg { width: 22px; height: 22px; }

.sgsub-view[hidden] { display: none; }

/* ── Form view ───────────────────────────────────────────────────────── */
.sgsub-view--form { display: grid; grid-template-columns: 1fr 1fr; }

.sgsub-media { position: relative; min-height: 100%; background: #1a1512; }
.sgsub-media picture { display: block; width: 100%; height: 100%; }
.sgsub-media img { width: 100%; height: 100%; object-fit: cover; display: block; }

.sgsub-panel { padding: 44px 44px 30px; display: flex; flex-direction: column; justify-content: center; }

.sgsub-heading {
    margin: 0 0 14px;
    font-family: var(--sgsub-serif);
    font-size: 40px;
    line-height: 1.1;
    font-weight: 400;
    color: var(--sgsub-ink);
    text-align: center;
    letter-spacing: .2px;
}

.sgsub-lede {
    margin: 0 0 22px;
    font-size: 14px;
    line-height: 1.55;
    color: var(--sgsub-ink-soft);
    text-align: center;
}
.sgsub-lede strong { font-weight: 700; }

.sgsub-form { display: flex; flex-direction: column; gap: 12px; }
.sgsub-field { display: flex; flex-direction: column; }

.sgsub-input {
    width: 100%;
    height: 52px;
    padding: 0 18px;
    font-family: var(--sgsub-sans);
    font-size: 14px;
    color: var(--sgsub-ink);
    background: #fff;
    border: 1px solid var(--sgsub-line);
    border-radius: 12px;
    outline: none;
    transition: border-color .2s ease, box-shadow .2s ease;
}
.sgsub-input::placeholder { color: #9AA1A9; }
.sgsub-input:focus { border-color: var(--sgsub-red); box-shadow: 0 0 0 3px rgba(239, 68, 68, .16); }
.sgsub-input.is-invalid { border-color: var(--sgsub-red); }

.sgsub-error {
    margin: 6px 2px 0;
    font-size: 11.5px;
    line-height: 1.35;
    color: var(--sgsub-red-dark);
    font-weight: 600;
}
.sgsub-error:empty { display: none; }
.sgsub-error--form { text-align: center; margin-top: 0; }

/* ── Phone + country code ────────────────────────────────────────────── */
.sgsub-phone { display: flex; gap: 8px; }
.sgsub-cc { position: relative; flex: 0 0 auto; }

.sgsub-cc-btn {
    display: flex;
    align-items: center;
    gap: 7px;
    height: 52px;
    padding: 0 12px;
    font-family: var(--sgsub-sans);
    font-size: 14px;
    font-weight: 600;
    color: var(--sgsub-ink);
    background: #fff;
    border: 1px solid var(--sgsub-line);
    border-radius: 12px;
    cursor: pointer;
    white-space: nowrap;
    transition: border-color .2s ease, box-shadow .2s ease;
}
.sgsub-cc-btn:hover { border-color: #CFCFCF; }
.sgsub-cc-btn:focus-visible { border-color: var(--sgsub-red); box-shadow: 0 0 0 3px rgba(239, 68, 68, .16); outline: none; }
.sgsub-caret { width: 14px; height: 14px; color: #6B7280; transition: transform .2s ease; }
.sgsub-cc-btn[aria-expanded="true"] .sgsub-caret { transform: rotate(180deg); }

.sgsub-flag {
    display: inline-block;
    flex: 0 0 auto;
    width: 19px;
    height: 19px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .08);
}
.sgsub-flag svg { display: block; width: 100%; height: 100%; }

.sgsub-cc-pop {
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    z-index: 5;
    width: 264px;
    max-width: min(264px, 78vw);
    padding: 8px;
    background: #fff;
    border: 1px solid var(--sgsub-line);
    border-radius: 14px;
    box-shadow: 0 16px 36px rgba(0, 0, 0, .18);
}
.sgsub-cc-pop[hidden] { display: none; }

.sgsub-cc-search {
    width: 100%;
    height: 36px;
    margin-bottom: 6px;
    padding: 0 10px;
    font-family: var(--sgsub-sans);
    font-size: 13px;
    color: var(--sgsub-ink);
    background: #F5F5F5;
    border: 1px solid transparent;
    border-radius: 9px;
    outline: none;
}
.sgsub-cc-search:focus { border-color: var(--sgsub-red); background: #fff; }

.sgsub-cc-list { max-height: 210px; margin: 0; padding: 0; overflow-y: auto; list-style: none; }
.sgsub-cc-list li { list-style: none; }
.sgsub-cc-list li[hidden] { display: none; }

.sgsub-cc-item {
    display: flex;
    align-items: center;
    gap: 9px;
    width: 100%;
    padding: 8px 9px;
    font-family: var(--sgsub-sans);
    font-size: 13px;
    color: var(--sgsub-ink);
    text-align: left;
    background: transparent;
    border: 0;
    border-radius: 9px;
    cursor: pointer;
}
.sgsub-cc-item:hover, .sgsub-cc-item:focus-visible { background: #F3F4F6; outline: none; }
.sgsub-cc-item[aria-selected="true"] { background: rgba(239, 68, 68, .1); }
.sgsub-cc-item[hidden] { display: none; }
.sgsub-cc-name { flex: 1 1 auto; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
.sgsub-cc-code { flex: 0 0 auto; color: #6B7280; font-weight: 600; font-size: 12px; }
.sgsub-cc-empty { margin: 10px 0; font-size: 12.5px; color: #6B7280; text-align: center; }
.sgsub-cc-empty[hidden] { display: none; }

.sgsub-input--phone { flex: 1 1 auto; min-width: 0; }

/* ── Actions ─────────────────────────────────────────────────────────── */
.sgsub-actions { display: flex; gap: 10px; margin-top: 6px; }

.sgsub-cancel {
    display: none;
    flex: 1 1 0;
    height: 48px;
    font-family: var(--sgsub-sans);
    font-size: 13px;
    font-weight: 600;
    color: var(--sgsub-ink);
    background: #fff;
    border: 1px solid var(--sgsub-line);
    border-radius: 12px;
    cursor: pointer;
    transition: background .2s ease;
}
.sgsub-cancel:hover { background: #F5F5F5; }

.sgsub-submit {
    position: relative;
    flex: 1 1 0;
    height: 52px;
    font-family: var(--sgsub-sans);
    font-size: 15px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: #fff;
    background: var(--sgsub-red);
    border: 0;
    border-radius: 12px;
    cursor: pointer;
    box-shadow: 0 8px 20px rgba(239, 68, 68, .45);
    transition: background .2s ease, transform .15s ease, box-shadow .2s ease;
}
.sgsub-submit:hover { background: var(--sgsub-red-dark); box-shadow: 0 10px 24px rgba(239, 68, 68, .55); }
.sgsub-submit:active { transform: translateY(1px); }
.sgsub-submit[disabled] { opacity: .75; cursor: default; }

.sgsub-spinner {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 18px;
    height: 18px;
    margin: -9px 0 0 -9px;
    border: 2px solid rgba(255, 255, 255, .45);
    border-top-color: #fff;
    border-radius: 50%;
    animation: sgsub-spin .7s linear infinite;
}
.sgsub-submit.is-loading .sgsub-submit-label { visibility: hidden; }
.sgsub-submit.is-loading .sgsub-spinner { display: block; }
@keyframes sgsub-spin { to { transform: rotate(360deg); } }

.sgsub-legal {
    margin: 16px 0 0;
    font-size: 10.5px;
    line-height: 1.5;
    color: #4A5A6E;
    text-align: center;
}
.sgsub-legal a { color: inherit; text-decoration: underline; }

/* ── Success view ────────────────────────────────────────────────────── */
.sgsub-view--success { padding: 46px 40px 44px; text-align: center; }
.sgsub-heading--success { margin-bottom: 22px; font-size: 34px; }

.sgsub-code-row { display: flex; align-items: center; justify-content: center; gap: 14px; margin-bottom: 22px; }
.sgsub-code {
    font-family: var(--sgsub-sans);
    font-size: 40px;
    font-weight: 700;
    letter-spacing: .02em;
    color: var(--sgsub-red);
    line-height: 1;
}
.sgsub-copy {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    padding: 0;
    color: var(--sgsub-red);
    background: transparent;
    border: 0;
    border-radius: 10px;
    cursor: pointer;
    transition: background .2s ease, transform .15s ease;
}
.sgsub-copy:hover { background: rgba(239, 68, 68, .12); }
.sgsub-copy:active { transform: scale(.92); }
.sgsub-copy svg { width: 30px; height: 30px; }

.sgsub-success-note { margin: 0; font-size: 14px; line-height: 1.6; color: var(--sgsub-ink-soft); }

/* ── Launcher pill ───────────────────────────────────────────────────── */
.sgsub-launcher {
    position: fixed;
    left: 22px;
    bottom: 22px;
    z-index: 99990;
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 6px 10px 6px 8px;
    background: #fff;
    border-radius: 999px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, .18);
    font-family: var(--sgsub-sans);
    opacity: 0;
    transform: translateY(14px);
    transition: opacity .35s ease, transform .35s ease;
}
.sgsub-launcher[hidden] { display: none; }
.sgsub-launcher.is-open { opacity: 1; transform: translateY(0); }

.sgsub-launcher-open {
    padding: 8px 12px;
    font-family: var(--sgsub-serif);
    font-size: 16px;
    color: var(--sgsub-ink);
    background: transparent;
    border: 0;
    border-radius: 999px;
    cursor: pointer;
    white-space: nowrap;
    transition: color .2s ease;
}
.sgsub-launcher-open:hover { color: var(--sgsub-red); }

.sgsub-launcher-x {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    padding: 0;
    color: #1F2937;
    background: transparent;
    border: 0;
    border-radius: 50%;
    cursor: pointer;
    transition: background .2s ease;
}
.sgsub-launcher-x:hover { background: rgba(0, 0, 0, .07); }
.sgsub-launcher-x svg { width: 17px; height: 17px; }

/* ── Toast ───────────────────────────────────────────────────────────── */
.sgsub-toast {
    position: fixed;
    left: 50%;
    bottom: 34px;
    z-index: 100000;
    padding: 10px 20px;
    font-family: var(--sgsub-sans);
    font-size: 13px;
    font-weight: 600;
    color: #fff;
    background: rgba(15, 23, 32, .94);
    border-radius: 999px;
    box-shadow: 0 10px 26px rgba(0, 0, 0, .3);
    opacity: 0;
    transform: translate(-50%, 12px);
    transition: opacity .25s ease, transform .25s ease;
    pointer-events: none;
}
.sgsub-toast[hidden] { display: none; }
.sgsub-toast.is-open { opacity: 1; transform: translate(-50%, 0); }

/* ── Mobile ──────────────────────────────────────────────────────────── */
@media (max-width: 767px) {
    .sgsub-overlay { padding: 16px; align-items: flex-start; }
    .sgsub-modal { max-width: 380px; margin: auto; border-radius: 22px; }
    .sgsub-modal.is-success { max-width: 380px; }

    .sgsub-view--form { grid-template-columns: 1fr; }
    .sgsub-media { padding: 14px 14px 0; min-height: 0; background: transparent; }
    .sgsub-media img { height: 172px; border-radius: 14px; }

    .sgsub-panel { padding: 18px 20px 22px; }
    .sgsub-heading { font-size: 26px; margin-bottom: 10px; }
    .sgsub-lede { font-size: 13.5px; margin-bottom: 18px; }

    .sgsub-input, .sgsub-cc-btn { height: 48px; font-size: 13.5px; }
    .sgsub-cancel { display: block; height: 46px; }
    .sgsub-submit { height: 46px; font-size: 13.5px; }
    .sgsub-legal { font-size: 10px; }

    /* Mobile form uses the explicit Cancel button instead of the corner X. */
    .sgsub-modal:not(.is-success) .sgsub-x { display: none; }

    .sgsub-view--success { padding: 40px 24px 34px; }
    .sgsub-heading--success { font-size: 26px; }
    .sgsub-code { font-size: 30px; }
    .sgsub-copy svg { width: 24px; height: 24px; }
    .sgsub-success-note { font-size: 13px; }

    .sgsub-launcher { left: 12px; right: 12px; bottom: 14px; justify-content: space-between; }
    .sgsub-launcher-open { font-size: 15px; white-space: normal; text-align: left; }
}

@media (prefers-reduced-motion: reduce) {
    #sgsub * { transition-duration: .01ms !important; animation-duration: .01ms !important; }
}
</style>

<script>
(function () {
    var root = document.getElementById('sgsub');
    if (!root || root.dataset.sgsubReady === '1') return;
    root.dataset.sgsubReady = '1';

    var SUBSCRIBED_KEY = 'hasSubscribed';        // localStorage — permanent
    var MODAL_KEY      = 'sgsubModalDismissed';  // sessionStorage
    var PILL_KEY       = 'sgsubPillDismissed';   // sessionStorage
    var OPEN_DELAY     = 1200;

    /* Storage helpers — private browsing can throw on access. */
    function read(store, key) {
        try { return window[store].getItem(key); } catch (e) { return null; }
    }
    function write(store, key, value) {
        try { window[store].setItem(key, value); } catch (e) { /* ignore */ }
    }

    var overlay      = document.getElementById('sgsub-overlay');
    var modal        = document.getElementById('sgsub-modal');
    var viewForm     = document.getElementById('sgsub-view-form');
    var viewSuccess  = document.getElementById('sgsub-view-success');
    var form         = document.getElementById('sgsub-form');
    var submitBtn    = document.getElementById('sgsub-submit');
    var launcher     = document.getElementById('sgsub-launcher');
    var toast        = document.getElementById('sgsub-toast');
    var ccBtn        = document.getElementById('sgsub-cc-btn');
    var ccPop        = document.getElementById('sgsub-cc-pop');
    var ccSearch     = document.getElementById('sgsub-cc-search');
    var ccList       = document.getElementById('sgsub-cc-list');
    var ccEmpty      = document.getElementById('sgsub-cc-empty');
    var ccFlagUse    = document.querySelector('#sgsub-cc-flag use');
    var ccDial       = document.getElementById('sgsub-cc-dial');

    var fields = {
        first_name: document.getElementById('sgsub-first-name'),
        email:      document.getElementById('sgsub-email'),
        phone:      document.getElementById('sgsub-phone')
    };

    var country = { iso: 'MK', dial: '+389' };
    var lastFocused = null;
    var toastTimer = null;

    /**
     * Flip a class on after forcing a reflow, so the CSS transition has a
     * starting state to animate from. A reflow (not rAF) because rAF is paused
     * in background tabs, which would leave the element stuck at opacity 0.
     */
    function transitionIn(element, className) {
        void element.offsetWidth;
        element.classList.add(className);
    }

    root.hidden = false;

    /* ── Modal open / close ──────────────────────────────────────────── */
    function openModal() {
        if (!overlay.hidden) return;
        lastFocused = document.activeElement;
        overlay.hidden = false;
        document.documentElement.classList.add('sgsub-locked');
        document.body.classList.add('sgsub-locked');
        transitionIn(overlay, 'is-open');

        var focusTarget = viewSuccess.hidden ? fields.first_name : document.getElementById('sgsub-copy');
        setTimeout(function () { if (focusTarget) focusTarget.focus(); }, 120);
    }

    function closeModal(dismissed) {
        if (overlay.hidden) return;
        closeCountryPicker();
        overlay.classList.remove('is-open');
        document.documentElement.classList.remove('sgsub-locked');
        document.body.classList.remove('sgsub-locked');

        setTimeout(function () {
            overlay.hidden = true;
            if (lastFocused && typeof lastFocused.focus === 'function') lastFocused.focus();
        }, 300);

        if (dismissed && !isSubscribed()) {
            write('sessionStorage', MODAL_KEY, 'true');
            if (read('sessionStorage', PILL_KEY) !== 'true') showLauncher();
        }
    }

    function isSubscribed() {
        return read('localStorage', SUBSCRIBED_KEY) === 'true';
    }

    /* ── Launcher pill ───────────────────────────────────────────────── */
    function showLauncher() {
        if (isSubscribed()) return;
        launcher.hidden = false;
        transitionIn(launcher, 'is-open');
    }

    function hideLauncher() {
        launcher.classList.remove('is-open');
        setTimeout(function () { launcher.hidden = true; }, 300);
    }

    document.getElementById('sgsub-launcher-open').addEventListener('click', openModal);
    document.getElementById('sgsub-launcher-x').addEventListener('click', function () {
        write('sessionStorage', PILL_KEY, 'true');
        hideLauncher();
    });

    document.getElementById('sgsub-x').addEventListener('click', function () { closeModal(true); });
    document.getElementById('sgsub-cancel').addEventListener('click', function () { closeModal(true); });

    overlay.addEventListener('mousedown', function (event) {
        if (event.target === overlay) closeModal(true);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key !== 'Escape' && event.key !== 'Esc') return;
        if (overlay.hidden) return;
        if (!ccPop.hidden) { closeCountryPicker(); ccBtn.focus(); return; }
        closeModal(true);
    });

    /* Keep tabbing inside the dialog while it is open. */
    modal.addEventListener('keydown', function (event) {
        if (event.key !== 'Tab') return;
        var focusable = modal.querySelectorAll(
            'button:not([disabled]), input:not([disabled]), a[href], [tabindex]:not([tabindex="-1"])'
        );
        var visible = [];
        for (var i = 0; i < focusable.length; i++) {
            if (focusable[i].offsetParent !== null) visible.push(focusable[i]);
        }
        if (!visible.length) return;

        var first = visible[0];
        var last = visible[visible.length - 1];
        if (event.shiftKey && document.activeElement === first) {
            event.preventDefault();
            last.focus();
        } else if (!event.shiftKey && document.activeElement === last) {
            event.preventDefault();
            first.focus();
        }
    });

    /* ── Country code picker ─────────────────────────────────────────── */
    function openCountryPicker() {
        ccPop.hidden = false;
        ccBtn.setAttribute('aria-expanded', 'true');
        ccSearch.value = '';
        filterCountries('');
        ccSearch.focus();
    }

    function closeCountryPicker() {
        ccPop.hidden = true;
        ccBtn.setAttribute('aria-expanded', 'false');
    }

    function filterCountries(term) {
        var items = ccList.querySelectorAll('.sgsub-cc-item');
        var matches = 0;
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            var hit = term === '' ||
                item.dataset.name.indexOf(term) !== -1 ||
                item.dataset.dial.indexOf(term) !== -1 ||
                item.dataset.iso.toLowerCase().indexOf(term) !== -1;
            item.parentElement.hidden = !hit;
            if (hit) matches++;
        }
        ccEmpty.hidden = matches > 0;
    }

    function selectCountry(item) {
        country.iso = item.dataset.iso;
        country.dial = item.dataset.dial;
        ccFlagUse.setAttribute('href', '#{{ \App\Support\CountryFlags::SPRITE_PREFIX }}' + country.iso);
        ccDial.textContent = country.dial;

        var items = ccList.querySelectorAll('.sgsub-cc-item');
        for (var i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-selected', items[i] === item ? 'true' : 'false');
        }
        closeCountryPicker();
        ccBtn.focus();
    }

    ccBtn.addEventListener('click', function () {
        if (ccPop.hidden) openCountryPicker(); else closeCountryPicker();
    });

    ccSearch.addEventListener('input', function () {
        filterCountries(this.value.trim().toLowerCase());
    });

    ccSearch.addEventListener('keydown', function (event) {
        if (event.key !== 'Enter') return;
        event.preventDefault();
        var first = ccList.querySelector('li:not([hidden]) .sgsub-cc-item');
        if (first) selectCountry(first);
    });

    ccList.addEventListener('click', function (event) {
        var item = event.target.closest('.sgsub-cc-item');
        if (item) selectCountry(item);
    });

    document.addEventListener('mousedown', function (event) {
        if (ccPop.hidden) return;
        if (!ccPop.contains(event.target) && !ccBtn.contains(event.target)) closeCountryPicker();
    });

    /* ── Validation & submit ─────────────────────────────────────────── */
    var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[a-z]{2,}$/i;

    function setError(name, message) {
        var box = document.getElementById('sgsub-error-' + name);
        if (box) box.textContent = message || '';
        if (fields[name]) fields[name].classList.toggle('is-invalid', !!message);
    }

    function clearErrors() {
        ['first_name', 'email', 'phone', 'form'].forEach(function (name) { setError(name, ''); });
    }

    function validate() {
        var ok = true;

        if (!fields.first_name.value.trim()) {
            setError('first_name', 'Please enter your first name.');
            ok = false;
        }

        var email = fields.email.value.trim();
        if (!email) {
            setError('email', 'Please enter your e-mail address.');
            ok = false;
        } else if (!EMAIL_RE.test(email)) {
            setError('email', 'Please enter a valid e-mail address.');
            ok = false;
        }

        var digits = fields.phone.value.replace(/[^0-9]/g, '');
        if (!digits) {
            setError('phone', 'Please enter your phone number.');
            ok = false;
        } else if (digits.length < 5) {
            setError('phone', 'Please enter a valid phone number.');
            ok = false;
        }

        return ok;
    }

    Object.keys(fields).forEach(function (name) {
        fields[name].addEventListener('input', function () { setError(name, ''); setError('form', ''); });
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        clearErrors();
        if (!validate()) return;

        submitBtn.disabled = true;
        submitBtn.classList.add('is-loading');

        fetch(root.dataset.endpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': root.dataset.token,
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                first_name: fields.first_name.value.trim(),
                email: fields.email.value.trim(),
                country_iso: country.iso,
                country_code: country.dial,
                phone: fields.phone.value.replace(/[^0-9]/g, '')
            })
        }).then(function (response) {
            return response.json().catch(function () { return {}; }).then(function (payload) {
                return { status: response.status, ok: response.ok, payload: payload };
            });
        }).then(function (result) {
            if (result.ok) {
                showSuccess(result.payload.discount_code);
                return;
            }
            if (result.status === 422 && result.payload.errors) {
                Object.keys(result.payload.errors).forEach(function (name) {
                    setError(name, result.payload.errors[name][0]);
                });
                return;
            }
            setError('form', 'Something went wrong. Please try again.');
        }).catch(function () {
            setError('form', 'Network error. Please check your connection and try again.');
        }).then(function () {
            submitBtn.disabled = false;
            submitBtn.classList.remove('is-loading');
        });
    });

    function showSuccess(code) {
        write('localStorage', SUBSCRIBED_KEY, 'true');
        if (code) document.getElementById('sgsub-code').textContent = code;

        // Subscribed users never see the launcher again.
        launcher.classList.remove('is-open');
        launcher.hidden = true;

        viewForm.hidden = true;
        viewSuccess.hidden = false;
        modal.classList.add('is-success');
        setTimeout(function () { document.getElementById('sgsub-copy').focus(); }, 60);
    }

    /* ── Copy to clipboard ───────────────────────────────────────────── */
    function showToast(message) {
        toast.textContent = message;
        toast.hidden = false;
        transitionIn(toast, 'is-open');

        clearTimeout(toastTimer);
        toastTimer = setTimeout(function () {
            toast.classList.remove('is-open');
            setTimeout(function () { toast.hidden = true; }, 250);
        }, 1600);
    }

    function legacyCopy(text) {
        var scratch = document.createElement('textarea');
        scratch.value = text;
        scratch.setAttribute('readonly', '');
        scratch.style.position = 'fixed';
        scratch.style.opacity = '0';
        document.body.appendChild(scratch);
        scratch.select();
        var copied = false;
        try { copied = document.execCommand('copy'); } catch (e) { copied = false; }
        document.body.removeChild(scratch);
        return copied;
    }

    document.getElementById('sgsub-copy').addEventListener('click', function () {
        var code = document.getElementById('sgsub-code').textContent.trim();

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(code).then(function () {
                showToast('Copied!');
            }).catch(function () {
                showToast(legacyCopy(code) ? 'Copied!' : 'Press Ctrl+C to copy');
            });
            return;
        }
        showToast(legacyCopy(code) ? 'Copied!' : 'Press Ctrl+C to copy');
    });

    /* ── First-visit decision ────────────────────────────────────────── */
    function boot() {
        if (isSubscribed()) return;                                   // never bother them again
        if (read('sessionStorage', PILL_KEY) === 'true') return;      // pill dismissed for the session

        if (read('sessionStorage', MODAL_KEY) === 'true') {
            showLauncher();
            return;
        }
        setTimeout(openModal, OPEN_DELAY);
    }

    /* The homepage age gate owns the screen first — wait it out. */
    var ageGate = document.getElementById('age-gate');
    if (ageGate && read('sessionStorage', 'ageVerified') !== 'true') {
        var poll = setInterval(function () {
            if (read('sessionStorage', 'ageVerified') === 'true') {
                clearInterval(poll);
                boot();
            }
        }, 400);
    } else {
        boot();
    }
})();
</script>
