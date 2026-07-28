{{--
    Inline SVG flag sprite, shared by the subscription popup and the store
    locator. @once keeps it to a single copy even when both partials render on
    the same page. Reference a flag with:

        <svg viewBox="0 0 24 16"><use href="#sgflag-MK"></use></svg>
--}}
@once
    <svg class="sg-flag-sprite" aria-hidden="true" focusable="false"
         style="position:absolute;width:0;height:0;overflow:hidden"><defs>
        @foreach(\App\Support\CountryFlags::all() as $sgFlagIso => $sgFlagCountry)
            <symbol id="{{ \App\Support\CountryFlags::spriteId($sgFlagIso) }}" viewBox="0 0 24 16">{!! $sgFlagCountry['svg'] !!}</symbol>
        @endforeach
    </defs></svg>
@endonce
