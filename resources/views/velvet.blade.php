<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smidgin Velvet</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="./output.css" rel="stylesheet" type="text/css"/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/e70ea989f6.js" crossorigin="anonymous"></script>
  <style>
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
            #DiscoverOurGin {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #DiscoverOurGin::-webkit-scrollbar {
          display: none; 
        }
  </style>
</head>
<a href="#top"
   id="backToTop"
   class="fixed bottom-6 right-6 z-[9999]
          w-12 h-12 flex justify-center items-center
          bg-white text-red-500 rounded-full
          shadow-[0_0_8px_rgba(0,0,0,0.25)]
          hover:scale-110
          transition-all duration-300
          opacity-0 pointer-events-none">
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
    // Содржината на оваа страница доаѓа од табот „Џинови“ во админ панелот.
    $gin = \App\Models\Gin::where('slug', 'velvet')->first()
        ?: new \App\Models\Gin(['name' => 'velvet', 'accent_color' => '#EF4135', 'name_font' => 'font-montserrat']);
@endphp
      @php
    $banner = \App\Models\PromotionBanner::where('active', true)->first();
@endphp

@if($banner)
<div
    class="w-full py-2 px-4 text-center"
    style="background: {{ $banner->background_color }}; color: {{ $banner->text_color }};">
    
    @if($banner->link)
        <a href="{{ $banner->link }}" class="font-montserrat hover:underline">
            {{ $banner->text }}

            @if($banner->button_text)
                <span class="ml-3 px-3 py-1 rounded-full bg-white text-black text-sm">
                    {{ $banner->button_text }}
                </span>
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
        <img src="./img/logo.png" loading="lazy" decoding="async"/>
      </a>
<i 
  id="floating-menu" 
  onclick="openModal('ham-menu')" 
  class="fa-solid right-10 top-12 fixed z-50 cursor-pointer md:hidden
         w-[46px] h-[46px] text-xl text-center
         flex justify-center items-center
         text-white bg-red-500 rounded-full p-2
         shadow-[0_0_8px_rgba(0,0,0,0.25)]
         fa-bars transition-transform duration-300 ease-in-out"
></i>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const menuBtn = document.getElementById('floating-menu');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop) {
            // DOWN: Hide
            menuBtn.classList.add('-translate-y-[210%]');
        } else {
            // UP: Show
            menuBtn.classList.remove('-translate-y-[210%]');
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
});
</script>      <div id="navs" class="hidden md:flex space-x-11 text-base items-center">
        <a href="./whoweare" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
        <a href="./ourgin" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
        <a href="./whatweoffer" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHAT WE OFFER</a>
        <a href="./findourstores" class="border-b-[1.5px] border-b-black pb-[1.7px]">FIND OUR STORES</a>
        <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="px-3 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BUY ONLINE</a>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
<div id="ham-menu" class="fixed inset-0 bg-[#EF4135] z-50 hidden flex flex-col  pt-12 items-start justify-start space-y-0">
    <i onclick="closeModal('ham-menu')" class="fa-solid fa-xmark text-white text-3xl absolute top-6 right-6 cursor-pointer"></i>
    <div class="flex pl-9 pb-10 w-full justify-start" >
      <img class="h-[42px]" src="./img/image.png" loading="lazy" decoding="async"/>
    </div>
    <div class="flex flex-col w-full pl-9 space-y-3 justify-start">
      <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">BUY ONLINE</a>
      <a href="{{ url('/whoweare') }}" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">WHO WE ARE</a>
    <a href="{{ url('/ourgin') }}" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">OUR GIN</a>
    <a href="{{ url('/whatweoffer') }}" class="text-black underline hover:text-white  font-medium font-montserrat text-2xl">WHAT WE OFFER</a>
    <a href="{{ url('/findourstores') }}" class="text-black underline hover:text-white font-medium font-montserrat text-2xl">FIND OUR STORES</a>
    </div>
@include('partials.gin-menu-strip')
    


</div>

  <script>
    function openModal(id) {
      document.getElementById(id).classList.remove("hidden");
    }
    function closeModal(id) {
      document.getElementById(id).classList.add("hidden");
    }
  </script>

  <!-- Return Offer Section -->
  <div class="flex md:flex-row flex-col md:pt-16 justify-between md:pl-32 md:pr-52 items-center">
    <div class="self-start md:pl-0 pl-7 md:pt-0 pt-10">
      <a href="javascript:history.back()" class="font-montserrat"><i class="fa-solid fa-arrow-left pr-4"></i>BACK</a>
    </div>
    <div class="self-center md:hidden md:pt-0 pt-8 flex space-x-4 md:space-x-5 md:mr-20 items-center">
      <p class=" font-montserrat text-[34px] md:text-[50px]">SMIDGIN</p>                       
      <img class="w-[130px] h-[35px] md:w-[170px] md:h-[50px]" src="sliki/velvetFont.png" loading="lazy" decoding="async"/>
    </div>
  </div>

  <!-- Content Section -->
  <div class="md:px-32 px-7 md:pt-16 flex md:flex-row flex-col items-center md:items-end justify-between">
    <div id="bottle" class="w-1/3 md:w-1/2 flex justify-start items-start self-start">
      <img class="pr-28 pl-14 w-full " src="{{ asset($gin->bottle_image) }}" loading="lazy" decoding="async"/>
    </div>
    <div class="md:w-1/2 md:pr-11 md:space-y-2 flex-col flex ">   
      @include('partials.gin-copy', ['gin' => $gin])

      {{-- Коктелот се прикажува само ако нема слика качена во админ панелот. --}}
      @if(! $gin->image_three)
      <div class="flex md:items-end items-center justify-center md:justify-start mt-8">
        <div class="w-[250px]  md:pr-12 flex flex-col group justify-center items-center">
                <img src="img/velvetperfect.webp" class="h- hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('velvetperfect')" loading="lazy" decoding="async"/>
                <p class="font-Baskervville md:text-xl text-[18px] group-hover:underline  transition-transform duration-500 delay-100">Velvet-Perfect Serve</p>  
        </div>
<div id="velvetperfect" class="fixed inset-0 hidden flex items-center justify-center z-50">
  <div
    class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-20 md:w-[773px] w-[95%] h-auto max-h-[90vh]  relative flex flex-col justify-center items-center"
    onclick="event.stopPropagation()"
  >
    <h2 class="text-xl md:text-2xl font-Baskervville mb-6 md:mb-3 text-center">Velvet - Perfect Serve</h2>

    <div class="flex items-center justify-center font-montserrat font-bold scale-90 md:scale-100">
      <div class="-mt-12 md:-mt-24 w-1/3 text-[12px] md:text-[18px] text-center" id="levo-velvet">
        <p>50ml SMIDGIN <br />VELVET</p>
      </div>

      <div
        class="w-[180px] h-[220px] md:w-[312px] md:h-[388px] -mr-6 md:-mr-12 overflow-hidden -mt-5 mx-2 md:mx-0"
        id="sredina-velvet"
      >
        <img src="img/velvetperfect.webp" class="w-full h-full object-cover object-bottom"  loading="lazy" decoding="async"/>
      </div>

      <div class="w-1/2 text-[12px] md:text-[18px] text-center -mb-16 md:-mb-32" id="desno-velvet">
        <p>100ml GRAPEFRUIT <br />SODA</p>
      </div>
    </div>

    <p class="mt-4 text-gray-600 text-xs md:text-sm text-center font-montserrat leading-snug md:leading-relaxed px-2">
      Pour Smidgin Velvet into a glass filled with ice and top with grapefruit soda. Gently stir and
      garnish with grapefruit slice, juniper berries and lavender.
    </p>
  </div>
</div>
        
        <script>
          // Open a modal
          function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
          }
        
          // Close a modal
          function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
          }
        
          // Close when clicking outside the modal content
          document.getElementById("velvetperfect").addEventListener("click", function () {
            closeModal("velvetperfect");
          });
        </script>      </div>
      @endif
    </div>
  </div>

  <!-- Next Product -->
@include('partials.gin-next', ['currentSlug' => 'velvet'])


<!-- Footer -->
<div>
<div class="hidden md:flex px-32  items-end justify-between pt-16">
   <div class="w-1/3">
       <img src="./img/logoFooter.png" class="w-[241px]" loading="lazy" decoding="async"/>
       <p class="font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
   </div>
   <div class="font-montserrat underline text-center w-1/3">
       <a href="{{ url('/returnoffer') }}">Bottle Return Offer</a><br/>
       <a href="{{ url('/privacypolicy') }}">Privacy Policy</a><br/>
       <a href="{{ url('/termsandconditions') }}">Terms and Conditions</a>
   </div>
   <div class="w-1/3 flex  flex-col items-end space-y-7  md:pr-8">
     <div id="socialmedia" class="flex space-x-3 ">
        <a href="mailto:info@smidgin.mk"><img src="footer/Column (3).png"  loading="lazy" decoding="async"/></a>
        <a href="https://www.facebook.com/smidgin.mk/"><img src="footer/Row (2).png"  loading="lazy" decoding="async"/></a>
        <a href="https://www.instagram.com/smidgin.mk/?hl=en"><img src="footer/Row (3).png"  loading="lazy" decoding="async"/></a>
        <a href="https://mk.linkedin.com/company/smidgin"><img src="footer/Row (4).png"  loading="lazy" decoding="async"/></a>
     </div>
     <div id="priznanija" class="flex justify-center space-x-4 items-center">
        <a href="https://www.momondo.de/city-guides/discover-skopje.18146.guide.ksp"><img class="w-[80px]" src="footer/be033833fdb4fe0437189251af49834c8d63ea3a.png"  loading="lazy" decoding="async"/></a>
        <a href="https://www.kayak.es/Skopje.18146.guide"><img class="w-[80px]" src="footer/86ef22e36b59f7cf1d14803514de703ab033752c.png"  loading="lazy" decoding="async"/></a>
     </div>
   </div>
</div>
<div class="md:hidden mt-12">
<div class="flex flex-col justify-center items-center">
    <img src="./img/logoFooter.png" class="w-1/3" loading="lazy" decoding="async"/>
    <img src="./img/Screenshot 2025-10-31 at 00.17.38.png" class="w-1/3 mt-2" loading="lazy" decoding="async"/>
    <a class="underline text-gray-500 font-montserrat text-[14px] mt-5" href="{{ url('/returnoffer') }}">Bottle Return Offer</a><br/>
    <a class="underline text-gray-500 font-montserrat text-[14px] -mt-5" href="{{ url('/privacypolicy') }}">Privacy Policy</a><br/>
    <a class="underline text-gray-500 font-montserrat text-[14px] -mt-5" href="{{ url('/termsandconditions') }}">Terms and Conditions</a>
</div>

<div class="flex justify-between pr-7">
    <div>
        <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
        <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
        <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
    </div>
    <div class="flex flex-col space-y-2">
        <a href="https://www.momondo.de/city-guides/discover-skopje.18146.guide.ksp"><img class="w-[60px]" src="footer/be033833fdb4fe0437189251af49834c8d63ea3a.png"  loading="lazy" decoding="async"/></a>
        <a href="https://www.kayak.es/Skopje.18146.guide"><img class="w-[60px]" src="footer/86ef22e36b59f7cf1d14803514de703ab033752c.png"  loading="lazy" decoding="async"/></a>
    </div>
    <!-- Back to Top Arrow -->
</div>


</div>



 

     <br/>
     <br/>
     <br/>
</div>

@include('partials.subscribe-popup')
@include('partials.store-locator')
</body>
</html>
