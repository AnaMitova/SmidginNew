@php
    /**
     * The text column of a gin page — title, tagline, buy button and the three
     * sections — all of it from the Gins tab of the admin panel.
     *
     * Expects $gin. Sits inside the page's own right-hand column, so the
     * surrounding layout stays whatever that page already had.
     */
@endphp

@if($gin->wordmark_image)
    <div class="self-start hidden md:flex -mt-20 pb-10 space-x-4 md:space-x-5 items-center">
        <p class="font-montserrat text-[34px] md:text-[50px]">SMIDGIN</p>
        <img class="w-[130px] h-[35px] md:w-[170px] md:h-[50px]" src="{{ asset($gin->wordmark_image) }}"
             alt="{{ $gin->name }}" loading="lazy" decoding="async"/>
    </div>
@else
    <p class="md:pr-24 hidden md:block -mt-20 pb-7 font-montserrat text-[34px] md:text-[50px]">
        SMIDGIN <span class="{{ $gin->name_font }}" style="color: {{ $gin->accent_color }}">{{ Str::upper($gin->name) }}</span>
    </p>
@endif

@if($gin->tagline)
    <p class="italic text-[17px] md:text-[20px] text-gray-500 font-serif mb-12">{{ $gin->tagline }}</p>
@endif

@if($gin->buy_url)
    <a href="{{ $gin->buy_url }}"
       class="md:self-start self-center font-montserrat px-5 py-3 rounded-xl text-white"
       style="background-color: {{ $gin->accent_color }}; box-shadow: 0 8px 16px {{ $gin->accent_color }}99;">
        BUY {{ Str::upper($gin->name) }}
    </a>
@endif

{{-- First two sections: heading over text. --}}
@foreach([[$gin->heading_one, $gin->body_one], [$gin->heading_two, $gin->body_two]] as [$heading, $body])
    @if($body)
        @if($heading)
            <p class="text-[30px] mb-7 mt-12 font-Baskervville font-semibold">{!! $gin->highlight($heading) !!}</p>
        @endif
        <p class="text-[18px] font-montserrat">{!! $gin->highlight($body) !!}</p>
    @endif
@endforeach

{{-- Third section: the picture from the panel sits to the right of the text. --}}
@if($gin->body_three)
    @if($gin->heading_three)
        <p class="text-[30px] mb-7 mt-12 font-Baskervville font-semibold">{!! $gin->highlight($gin->heading_three) !!}</p>
    @endif

    <div class="flex md:flex-row flex-col items-center md:items-start md:space-x-9">
        <p class="text-[18px] font-montserrat {{ $gin->image_three ? 'md:w-2/3' : '' }}">{!! $gin->highlight($gin->body_three) !!}</p>

        @if($gin->image_three)
            <img class="md:w-1/3 w-2/3 mx-auto mt-5 md:mt-0 object-cover" src="{{ asset($gin->image_three) }}"
                 alt="How to enjoy Smidgin {{ $gin->name }}" loading="lazy" decoding="async"/>
        @endif
    </div>
@endif
