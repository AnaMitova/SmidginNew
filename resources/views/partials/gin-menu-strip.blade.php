@php
    /**
     * Gin strip inside the hamburger menu of the product pages.
     * Same source as the home carousel — the Gins tab of the admin panel.
     */
    $gins = \App\Models\Gin::active()->ordered()->get();
@endphp

<div id="slideshow" class="">
    <div id="DiscoverOurGin" class="overflow-x-auto mt-20">
        <div class="flex flex-nowrap pb-12 pl-4 space-x-0 items-end">

            @foreach($gins as $gin)
                <a href="{{ $gin->url }}">
                    <div class="relative group flex-shrink-0 w-[40%] snap-start">
                        <img src="{{ asset($gin->card_image) }}" alt="Smidgin {{ $gin->name }}"
                             class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"
                             loading="lazy" decoding="async"/>

                        <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                            <div class="flex flex-col w-full items-center">
                                <p class="text-7xl font-montserrat pointer-events-auto" style="color: {{ $gin->accent_color }}">Smidgin</p>

                                @if($gin->wordmark_image)
                                    <img class="mr-[-150px] w-[216px] pointer-events-auto" src="{{ asset($gin->wordmark_image) }}"
                                         alt="{{ $gin->name }}" loading="lazy" decoding="async"/>
                                @else
                                    <p class="text-8xl mr-[-150px] {{ $gin->name_font }} pointer-events-auto" style="color: {{ $gin->accent_color }}">
                                        {{ $gin->name }}
                                    </p>
                                @endif
                            </div>

                            <span class="mt-8 px-5 py-3 rounded-xl font-montserrat text-white pointer-events-auto text-lg"
                                  style="background-color: {{ $gin->accent_color }}">Read more</span>
                        </div>

                        <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">
                            {{ Str::upper($gin->name) }}
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
    <i class="fa-solid fa-arrows-left-right flex justify-center -mt-4 text-[30px]"></i>
</div>
