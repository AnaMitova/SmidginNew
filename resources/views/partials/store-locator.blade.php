@php
    /**
     * "Select a Location" modal.
     *
     * Self-contained apart from the shared flag sprite: scoped CSS (all classes
     * prefixed `sgloc-`) and vanilla JS in one file, so it drops into any page
     * without a build step.
     *
     * Open it from anywhere on the page with:
     *     <button data-store-locator>Find our stores in the world</button>
     */
    $sglocRegions = \App\Models\StoreLocation::groupedByRegion();
@endphp

@if($sglocRegions->isNotEmpty())

@include('partials.flag-sprite')

<div class="sgloc-overlay" id="sgloc-overlay" hidden>
    <div class="sgloc-modal" role="dialog" aria-modal="true" aria-labelledby="sgloc-title" id="sgloc-modal">

        <div class="sgloc-head">
            <h2 class="sgloc-title" id="sgloc-title">Select a Location</h2>
            <button type="button" class="sgloc-x" id="sgloc-x" aria-label="Close">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </button>
        </div>

        <div class="sgloc-body">
            @foreach($sglocRegions as $sglocRegion => $sglocLocations)
                <div class="sgloc-row">
                    <p class="sgloc-region">{!! nl2br(e(str_replace(', ', ",\n", $sglocRegion))) !!}</p>

                    <div class="sgloc-pills">
                        @foreach($sglocLocations as $sglocLocation)
                            {{-- Markets without a shop link yet render as plain, non-clickable pills. --}}
                            @php $sglocTag = $sglocLocation->store_url ? 'a' : 'span'; @endphp

                            <{{ $sglocTag }} class="sgloc-pill @unless($sglocLocation->store_url) sgloc-pill--static @endunless"
                               @if($sglocLocation->store_url)
                                   href="{{ $sglocLocation->store_url }}"
                                   @if($sglocLocation->opens_in_new_tab) target="_blank" rel="noopener noreferrer" @endif
                               @endif>
                                <span class="sgloc-flag">
                                    @if($sglocLocation->flag_image)
                                        <img src="{{ asset('storage/' . $sglocLocation->flag_image) }}" alt="" loading="lazy" decoding="async">
                                    @elseif($sglocLocation->flag_sprite_id)
                                        <svg viewBox="0 0 24 16" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                                            <use href="#{{ $sglocLocation->flag_sprite_id }}"></use>
                                        </svg>
                                    @endif
                                </span>
                                <span class="sgloc-name">{{ $sglocLocation->name }}</span>
                            </{{ $sglocTag }}>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
#sgloc-overlay {
    --sgloc-card: #E8E8E8;
    --sgloc-ink: #0F1720;
    --sgloc-sans: 'Montserrat', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;

    position: fixed;
    inset: 0;
    z-index: 99997;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    background: rgba(12, 14, 18, .55);
    backdrop-filter: blur(3px);
    opacity: 0;
    transition: opacity .3s ease;
    overflow-y: auto;
}
#sgloc-overlay[hidden] { display: none; }
#sgloc-overlay.is-open { opacity: 1; }
#sgloc-overlay *, #sgloc-overlay *::before, #sgloc-overlay *::after { box-sizing: border-box; }

html.sgloc-locked, body.sgloc-locked { overflow: hidden; }

.sgloc-modal {
    position: relative;
    width: 100%;
    max-width: 980px;
    max-height: calc(100vh - 48px);
    display: flex;
    flex-direction: column;
    padding: 30px 34px 34px;
    background: var(--sgloc-card);
    border-radius: 26px;
    box-shadow: 0 30px 70px rgba(0, 0, 0, .35);
    font-family: var(--sgloc-sans);
    transform: translateY(18px) scale(.97);
    opacity: 0;
    transition: transform .35s cubic-bezier(.22, 1, .36, 1), opacity .35s ease;
}
#sgloc-overlay.is-open .sgloc-modal { transform: translateY(0) scale(1); opacity: 1; }

.sgloc-head { display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; margin-bottom: 26px; }

.sgloc-title {
    margin: 0;
    font-size: 27px;
    font-weight: 500;
    letter-spacing: -.01em;
    color: var(--sgloc-ink);
}

.sgloc-x {
    flex: 0 0 auto;
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    color: var(--sgloc-ink);
    background: transparent;
    border: 0;
    border-radius: 50%;
    cursor: pointer;
    transition: background .2s ease, transform .2s ease;
}
.sgloc-x:hover { background: rgba(0, 0, 0, .07); transform: rotate(90deg); }
.sgloc-x svg { width: 22px; height: 22px; }

/* Scrolls on its own so the card never grows past the viewport. */
.sgloc-body { overflow-y: auto; margin: -6px -6px -6px 0; padding: 6px 6px 6px 0; }

.sgloc-row { display: grid; grid-template-columns: 150px 1fr; align-items: start; gap: 16px; }
.sgloc-row + .sgloc-row { margin-top: 18px; }

.sgloc-region {
    margin: 0;
    padding-top: 13px;
    font-size: 14.5px;
    font-weight: 700;
    line-height: 1.3;
    color: var(--sgloc-ink);
}

.sgloc-pills { display: flex; flex-wrap: wrap; gap: 12px; }

.sgloc-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 22px 12px 16px;
    background: #fff;
    border: 1px solid #E3E3E3;
    border-radius: 14px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, .06);
    color: var(--sgloc-ink);
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;
    white-space: nowrap;
    transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
}
.sgloc-pill:hover,
.sgloc-pill:focus-visible {
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 8px 18px rgba(0, 0, 0, .13);
    border-color: #CFCFCF;
    outline: none;
}
.sgloc-pill:focus-visible { border-color: #EF4444; box-shadow: 0 8px 18px rgba(239, 68, 68, .25); }
.sgloc-pill:active { transform: translateY(0) scale(.99); }

/* No shop link configured yet — present, but not interactive. */
.sgloc-pill--static { cursor: default; color: #55606D; }
.sgloc-pill--static:hover { transform: none; box-shadow: 0 2px 6px rgba(0, 0, 0, .06); border-color: #E3E3E3; }

.sgloc-flag {
    flex: 0 0 auto;
    width: 22px;
    height: 16px;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .08);
}
.sgloc-flag svg, .sgloc-flag img { display: block; width: 100%; height: 100%; object-fit: cover; }

/* ── Mobile: region label stacks above its buttons ───────────────────── */
@media (max-width: 1023px) {
    #sgloc-overlay { padding: 14px; align-items: flex-start; }

    .sgloc-modal { max-width: 100%; max-height: calc(100vh - 28px); padding: 22px 18px 24px; border-radius: 20px; margin: auto; }
    .sgloc-title { font-size: 21px; }
    .sgloc-head { margin-bottom: 18px; }

    .sgloc-row { grid-template-columns: 1fr; gap: 9px; }
    .sgloc-row + .sgloc-row { margin-top: 22px; }
    .sgloc-region { padding-top: 0; font-size: 13px; text-transform: uppercase; letter-spacing: .04em; color: #4A5A6E; }
    /* Region names are split onto two lines on desktop; keep them inline here. */
    .sgloc-region br { display: none; }

    .sgloc-pills { gap: 9px; }
    .sgloc-pill { padding: 11px 16px 11px 13px; font-size: 14px; border-radius: 12px; }
}

@media (prefers-reduced-motion: reduce) {
    #sgloc-overlay, #sgloc-overlay * { transition-duration: .01ms !important; }
}
</style>

<script>
(function () {
    var overlay = document.getElementById('sgloc-overlay');
    if (!overlay || overlay.dataset.ready === '1') return;
    overlay.dataset.ready = '1';

    var modal = document.getElementById('sgloc-modal');
    var lastFocused = null;

    function open() {
        if (!overlay.hidden) return;
        lastFocused = document.activeElement;
        overlay.hidden = false;
        document.documentElement.classList.add('sgloc-locked');
        document.body.classList.add('sgloc-locked');

        // Reflow rather than rAF, which is paused in background tabs.
        void overlay.offsetWidth;
        overlay.classList.add('is-open');

        setTimeout(function () { document.getElementById('sgloc-x').focus(); }, 100);
    }

    function close() {
        if (overlay.hidden) return;
        overlay.classList.remove('is-open');
        document.documentElement.classList.remove('sgloc-locked');
        document.body.classList.remove('sgloc-locked');

        setTimeout(function () {
            overlay.hidden = true;
            if (lastFocused && typeof lastFocused.focus === 'function') lastFocused.focus();
        }, 300);
    }

    // Any element on the page can act as a trigger.
    document.addEventListener('click', function (event) {
        var trigger = event.target.closest('[data-store-locator]');
        if (!trigger) return;
        event.preventDefault();
        open();
    });

    document.getElementById('sgloc-x').addEventListener('click', close);

    overlay.addEventListener('mousedown', function (event) {
        if (event.target === overlay) close();
    });

    document.addEventListener('keydown', function (event) {
        if ((event.key === 'Escape' || event.key === 'Esc') && !overlay.hidden) close();
    });

    modal.addEventListener('keydown', function (event) {
        if (event.key !== 'Tab') return;

        var focusable = modal.querySelectorAll('a[href], button:not([disabled])');
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

    window.smidginStoreLocator = { open: open, close: close };
})();
</script>

@endif
