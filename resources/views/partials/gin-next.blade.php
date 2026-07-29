@php
    /**
     * "Next gin" teaser at the bottom of a product page.
     *
     * Expects $currentSlug; picks the following gin in the admin panel's order
     * and wraps around at the end of the range.
     */
    $current = \App\Models\Gin::where('slug', $currentSlug)->first();
    $next = $current?->nextGin() ?? \App\Models\Gin::active()->ordered()->first();
@endphp

@if($next)
    <a href="{{ $next->url }}" class="group">
        <div class="flex flex-col justify-center items-center mt-20 md:mt-44">

            @if($next->wordmark_image)
                <div class="self-center md:pt-0 pt-8 flex space-x-4 md:space-x-5 items-center">
                    <p class="font-montserrat text-[34px] md:text-[50px]">SMIDGIN</p>
                    <img class="w-[130px] h-[35px] md:w-[170px] md:h-[50px]" src="{{ asset($next->wordmark_image) }}"
                         alt="{{ $next->name }}" loading="lazy" decoding="async"/>
                </div>
            @else
                <p class="text-[32px] md:text-[64px] font-montserrat">
                    SMIDGIN <span class="{{ $next->name_font }}" style="color: {{ $next->accent_color }}">{{ Str::upper($next->name) }}</span>
                </p>
            @endif

            <img src="{{ asset($next->bottle_image ?: $next->card_image) }}" alt="Smidgin {{ $next->name }}"
                 class="md:w-[300px] md:mt-4 md:h-[400px] w-[220px] h-[320px]
                        object-cover object-top
                        transition-all duration-500 ease-out
                        group-hover:scale-110"
                 loading="lazy" decoding="async"/>
        </div>
    </a>
@endif
