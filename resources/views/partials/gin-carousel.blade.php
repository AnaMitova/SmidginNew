@php
    /**
     * "Discover Our Gin" carousel for the home page.
     *
     * Cards come from the Gins tab of the admin panel. Colours are inline
     * styles rather than Tailwind classes because they are data, not markup.
     */
    $gins = \App\Models\Gin::active()->ordered()->get();
@endphp

<div id="slideshow" class="md:pt-20 pt-14">
    <div class="md:pl-36 pl-9 flex justify-start space-x-3 font-Baskervville">
        <p class="md:text-5xl text-[32px]">DISCOVER OUR</p>
        <p class="md:text-5xl text-[32px] text-red-500">GIN</p>
    </div>

    <div class="relative group/slider">
        <div id="DiscoverOurGinMain" class="overflow-x-auto md:pt-9 scroll-smooth scrollbar-hide">
            <div class="flex items-end flex-nowrap py-12 md:px-24 pl-4 space-x-2 md:space-x-9">

                @foreach($gins as $gin)
                    <a href="{{ $gin->url }}" class="relative group flex-shrink-0 md:w-1/3 w-1/2 snap-start">
                        <img src="{{ asset($gin->card_image) }}" alt="Smidgin {{ $gin->name }}"
                             class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"
                             loading="lazy" decoding="async"/>

                        <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none">
                            <div class="flex flex-col w-full items-center">
                                <p class="text-7xl font-montserrat" style="color: {{ $gin->accent_color }}">Smidgin</p>

                                @if($gin->wordmark_image)
                                    <img class="mr-[-150px] w-[216px]" src="{{ asset($gin->wordmark_image) }}"
                                         alt="{{ $gin->name }}" loading="lazy" decoding="async"/>
                                @else
                                    <p class="text-7xl mr-[-150px] {{ $gin->name_font }}" style="color: {{ $gin->accent_color }}">
                                        {{ $gin->name }}
                                    </p>
                                @endif
                            </div>

                            <span class="mt-8 px-5 py-3 rounded-xl font-montserrat text-white text-lg"
                                  style="background-color: {{ $gin->accent_color }}">Read more</span>
                        </div>

                        <div class="md:hidden mt-4 text-[20px] underline font-montserrat text-center"
                             style="color: {{ $gin->accent_color }}">{{ Str::upper($gin->name) }}</div>
                    </a>
                @endforeach

            </div>
        </div>

        <button id="btn-prev-gin-main" class="absolute left-4 top-1/2 -translate-y-1/2 z-30 hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-xl opacity-100 cursor-pointer">
            <i class="fa-solid fa-chevron-left text-red-500 text-xl"></i>
        </button>
        <button id="btn-next-gin-main" class="absolute right-4 top-1/2 -translate-y-1/2 z-30 hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-xl opacity-100 cursor-pointer">
            <i class="fa-solid fa-chevron-right text-red-500 text-xl"></i>
        </button>
    </div>

    <div class="flex space-x-3 justify-end md:hidden pr-8 items-center -mt-5">
        <p class="font-montserrat text-[14px] text-gray-700">Scroll to see more</p>
        <i class="fa-solid text-[16px] text-gray-700 fa-arrow-right text-xl"></i>
    </div>
</div>
