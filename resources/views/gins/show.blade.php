{{--
    Page for a gin created in the admin panel.

    Mirrors the hand-built product pages (/classic, /velvet, …) but every asset
    and link goes through asset()/url(), since this page lives one level deep
    at /gins/{slug} where the relative "./img/…" paths of those pages break.
--}}
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Smidgin {{ $gin->name }}</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ asset('output.css') }}" rel="stylesheet" type="text/css"/>
  <link rel="icon" type="image/png" href="{{ asset('img/image.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/e70ea989f6.js" crossorigin="anonymous"></script>
  <script>
    function openModal(id) { document.getElementById(id).classList.remove('hidden'); }
    function closeModal(id) { document.getElementById(id).classList.add('hidden'); }
  </script>
  <style>
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    #DiscoverOurGin { -ms-overflow-style: none; scrollbar-width: none; }
    #DiscoverOurGin::-webkit-scrollbar { display: none; }
  </style>
</head>

<a href="#top"
   id="backToTop"
   class="fixed bottom-6 right-6 z-[9999]
          w-12 h-12 flex justify-center items-center
          bg-white rounded-full
          shadow-[0_0_8px_rgba(0,0,0,0.25)]
          hover:scale-110
          transition-all duration-300
          opacity-0 pointer-events-none"
   style="color: {{ $gin->accent_color }}">
  <i class="fa-solid fa-arrow-up text-xl"></i>
</a>
<script>
  const backToTop = document.getElementById("backToTop");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      backToTop.classList.remove("opacity-0", "pointer-events-none");
      backToTop.classList.add("opacity-100");
    } else {
      backToTop.classList.add("opacity-0", "pointer-events-none");
      backToTop.classList.remove("opacity-100");
    }
  });
</script>

<body id="top" class="font-montserrat">

@php
    $banner = \App\Models\PromotionBanner::where('active', true)->first();
@endphp

@if($banner)
    <div class="w-full py-2 px-4 text-center"
         style="background: {{ $banner->background_color }}; color: {{ $banner->text_color }};">
        @if($banner->link)
            <a href="{{ $banner->link }}" class="font-montserrat hover:underline">
                {{ $banner->text }}
                @if($banner->button_text)
                    <span class="ml-3 px-3 py-1 rounded-full bg-white text-black text-sm">{{ $banner->button_text }}</span>
                @endif
            </a>
        @else
            {{ $banner->text }}
        @endif
    </div>
@endif

  <!-- Navbar -->
  <div id="homepage" class="md:px-28 pt-14 space-y-16 flex flex-col items-center">
    <div id="navbar" class="flex w-[99%] md:px-0 px-9 justify-between items-center">
      <a href="{{ url('/') }}" id="logo" class="md:w-[208px] w-[180px]">
        <img src="{{ asset('img/logo.png') }}" alt="Smidgin" loading="lazy" decoding="async"/>
      </a>

      <i id="floating-menu"
         onclick="openModal('ham-menu')"
         class="fa-solid right-10 top-12 fixed z-50 cursor-pointer md:hidden
                w-[46px] h-[46px] text-xl text-center
                flex justify-center items-center
                text-white bg-red-500 rounded-full p-2
                shadow-[0_0_8px_rgba(0,0,0,0.25)]
                fa-bars transition-transform duration-300 ease-in-out"></i>

      <div id="navs" class="hidden md:flex space-x-11 text-base items-center">
        <a href="{{ url('/whoweare') }}" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
        <a href="{{ url('/ourgin') }}" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
        <a href="{{ url('/whatweoffer') }}" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHAT WE OFFER</a>
        <a href="{{ url('/findourstores') }}" class="border-b-[1.5px] border-b-black pb-[1.7px]">FIND OUR STORES</a>
        <a href="{{ $gin->buy_url ?: 'https://smidgin-shop.myshopify.com/' }}"
           class="px-3 py-3 rounded-xl text-white" style="background-color: {{ $gin->accent_color }}">BUY ONLINE</a>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="ham-menu" class="fixed inset-0 bg-[#EF4135] z-50 hidden flex flex-col pt-12 items-start justify-start space-y-0">
    <i onclick="closeModal('ham-menu')" class="fa-solid fa-xmark text-white text-3xl absolute top-6 right-6 cursor-pointer"></i>

    <div class="flex pl-9 pb-10 w-full justify-start">
      <img class="h-[42px]" src="{{ asset('img/image.png') }}" alt="Smidgin" loading="lazy" decoding="async"/>
    </div>

    <div class="flex flex-col w-full pl-9 space-y-3 justify-start">
      <a href="{{ $gin->buy_url ?: 'https://smidgin-shop.myshopify.com/' }}" class="text-black hover:text-white font-medium font-montserrat underline text-2xl">BUY ONLINE</a>
      <a href="{{ url('/whoweare') }}" class="text-black hover:text-white font-medium font-montserrat underline text-2xl">WHO WE ARE</a>
      <a href="{{ url('/ourgin') }}" class="text-black hover:text-white font-medium font-montserrat underline text-2xl">OUR GIN</a>
      <a href="{{ url('/whatweoffer') }}" class="text-black underline hover:text-white font-medium font-montserrat text-2xl">WHAT WE OFFER</a>
      <a href="{{ url('/findourstores') }}" class="text-black underline hover:text-white font-medium font-montserrat text-2xl">FIND OUR STORES</a>
    </div>

    @include('partials.gin-menu-strip')
  </div>

  <!-- Back link + mobile title -->
  <div class="flex md:flex-row flex-col md:pt-16 justify-between md:pl-32 md:pr-36 items-center">
    <div class="self-start md:pl-0 pl-7 md:pt-0 pt-10">
      <a href="javascript:history.back()" class="font-montserrat"><i class="fa-solid fa-arrow-left pr-4"></i>BACK</a>
    </div>
    <div class="self-center md:hidden md:pt-0 pt-8">
      <p class="md:pr-24 font-montserrat text-[34px] md:text-[50px]">
        SMIDGIN <span class="{{ $gin->name_font }}" style="color: {{ $gin->accent_color }}">{{ Str::upper($gin->name) }}</span>
      </p>
    </div>
  </div>

  <!-- Product -->
  <div class="md:px-32 px-7 md:pt-16 flex md:flex-row flex-col items-center justify-between">
    <div id="bottle" class="w-1/3 md:w-1/2">
      @if($gin->bottle_image)
        <img class="py-5 w-full h-auto md:w-[471px]" src="{{ asset($gin->bottle_image) }}"
             alt="Smidgin {{ $gin->name }}" loading="lazy" decoding="async"/>
      @endif
    </div>

    <div class="md:w-1/2 md:pr-11 flex-col flex">
      <p class="hidden md:block pb-12 -mt-20 font-montserrat text-[34px] md:text-[50px]">
        SMIDGIN <span class="{{ $gin->name_font }}" style="color: {{ $gin->accent_color }}">{{ Str::upper($gin->name) }}</span>
      </p>

      @if($gin->tagline)
        <p class="italic text-[17px] md:text-[20px] text-gray-500 font-serif mb-12">{{ $gin->tagline }}</p>
      @endif

      @if($gin->buy_url)
        <a href="{{ $gin->buy_url }}"
           class="md:self-start self-center font-montserrat px-5 py-3 rounded-xl text-white"
           style="background-color: {{ $gin->accent_color }}">BUY {{ Str::upper($gin->name) }}</a>
      @endif

      {{-- A heading with nothing under it is just noise, so the body decides. --}}
      @foreach([[$gin->heading_one, $gin->body_one], [$gin->heading_two, $gin->body_two], [$gin->heading_three, $gin->body_three]] as [$heading, $body])
        @if($body)
          @if($heading)
            <p class="text-[30px] mb-7 mt-12 font-Baskervville font-semibold">{{ $heading }}</p>
          @endif
          <p class="text-[18px] font-montserrat whitespace-pre-line">{{ $body }}</p>
        @endif
      @endforeach
    </div>
  </div>

  <!-- Next gin -->
  @include('partials.gin-next', ['currentSlug' => $gin->slug])

  <!-- Footer -->
  <div>
    <div class="hidden md:flex px-32 items-end justify-between pt-16">
      <div class="w-1/3">
        <img src="{{ asset('img/logoFooter.png') }}" class="w-[241px]" alt="Smidgin" loading="lazy" decoding="async"/>
        <p class="font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
        <p class="font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
        <p class="font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
      </div>

      <div class="font-montserrat underline text-center w-1/3">
        <a href="{{ url('/returnoffer') }}">Bottle Return Offer</a><br/>
        <a href="{{ url('/privacypolicy') }}">Privacy Policy</a><br/>
        <a href="{{ url('/termsandconditions') }}">Terms and Conditions</a>
      </div>

      <div class="w-1/3 flex flex-col items-end space-y-7 md:pr-8">
        <div id="socialmedia" class="flex space-x-3">
          <a href="mailto:info@smidgin.mk"><img src="{{ asset('footer/Column (3).png') }}" alt="Email" loading="lazy" decoding="async"/></a>
          <a href="https://www.facebook.com/smidgin.mk/"><img src="{{ asset('footer/Row (2).png') }}" alt="Facebook" loading="lazy" decoding="async"/></a>
          <a href="https://www.instagram.com/smidgin.mk/?hl=en"><img src="{{ asset('footer/Row (3).png') }}" alt="Instagram" loading="lazy" decoding="async"/></a>
          <a href="https://mk.linkedin.com/company/smidgin"><img src="{{ asset('footer/Row (4).png') }}" alt="LinkedIn" loading="lazy" decoding="async"/></a>
        </div>

        <div id="priznanija" class="flex justify-center space-x-4 items-center">
          <a href="https://www.momondo.de/city-guides/discover-skopje.18146.guide.ksp"><img class="w-[80px]" src="{{ asset('footer/be033833fdb4fe0437189251af49834c8d63ea3a.png') }}" alt="" loading="lazy" decoding="async"/></a>
          <a href="https://www.kayak.es/Skopje.18146.guide"><img class="w-[80px]" src="{{ asset('footer/86ef22e36b59f7cf1d14803514de703ab033752c.png') }}" alt="" loading="lazy" decoding="async"/></a>
        </div>
      </div>
    </div>

    <div class="md:hidden mt-12">
      <div class="flex flex-col justify-center items-center">
        <img src="{{ asset('img/logoFooter.png') }}" class="w-1/3" alt="Smidgin" loading="lazy" decoding="async"/>
        <a class="underline text-gray-500 font-montserrat text-[14px] mt-5" href="{{ url('/returnoffer') }}">Bottle Return Offer</a>
        <a class="underline text-gray-500 font-montserrat text-[14px] mt-2" href="{{ url('/privacypolicy') }}">Privacy Policy</a>
        <a class="underline text-gray-500 font-montserrat text-[14px] mt-2" href="{{ url('/termsandconditions') }}">Terms and Conditions</a>
      </div>

      <div class="flex justify-between pr-7">
        <div>
          <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
          <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
          <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
        </div>

        <div class="flex flex-col space-y-2">
          <a href="https://www.momondo.de/city-guides/discover-skopje.18146.guide.ksp"><img class="w-[60px]" src="{{ asset('footer/be033833fdb4fe0437189251af49834c8d63ea3a.png') }}" alt="" loading="lazy" decoding="async"/></a>
          <a href="https://www.kayak.es/Skopje.18146.guide"><img class="w-[60px]" src="{{ asset('footer/86ef22e36b59f7cf1d14803514de703ab033752c.png') }}" alt="" loading="lazy" decoding="async"/></a>
        </div>
      </div>

      <br/><br/><br/>
    </div>
  </div>

@include('partials.subscribe-popup')
@include('partials.store-locator')
</body>
</html>
