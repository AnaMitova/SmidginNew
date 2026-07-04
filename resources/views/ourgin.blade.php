<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="./output.css" rel="stylesheet" type="text/css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/e70ea989f6.js" crossorigin="anonymous"></script>
    <script>
        function openModal(id) {
          document.getElementById(id).classList.remove('hidden')
        }
        function closeModal(id) {
          document.getElementById(id).classList.add('hidden')
        }
    </script>
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        #LetsMakeCocktails {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #LetsMakeCocktails::-webkit-scrollbar {
          display: none; 
        }
        #DiscoverOurGin {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #DiscoverOurGin::-webkit-scrollbar {
          display: none; 
        }

    </style>
    <script>
  // Robust Scrolling Script
  document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("DiscoverOurGinMain");
    const btnLeft = document.getElementById("btn-prev-gin-main");
    const btnRight = document.getElementById("btn-next-gin-main");

    if (container && btnLeft && btnRight) {
      btnLeft.onclick = () => {
        container.scrollBy({ left: -container.clientWidth / 2, behavior: "smooth" });
      };
      btnRight.onclick = () => {
        container.scrollBy({ left: container.clientWidth / 2, behavior: "smooth" });
      };
    }
  });
</script>
<script>
function scrollSlider(id, direction) {
  const slider = document.getElementById(id);
  const scrollAmount = slider.clientWidth * 0.8;

  slider.scrollBy({
    left: direction * scrollAmount,
    behavior: "smooth"
  });
}
</script>
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

<body id="top">
<!-- Homepage Section -->
<div id="homepage" class="font-montserrat md:px-28 pt-14 space-y-16 flex flex-col items-center">
    <div id="navbar" class="flex w-[99%] md:px-0 px-9 justify-between items-center">
        <a href="./index.html" id="logo" class="md:w-[208px] w-[180px]">
            <img src="./img/logo.png"/>
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
</script>
        <div id="navs" class="hidden md:flex space-x-11 text-base items-center">
            <a href="./whoweare.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
            <a href="./ourgin.html" class="border-b-[2.7px] border-b-red-500 text-red-500 font-semibold pb-[1.7px]">OUR GIN</a>
            <a href="./whatweoffer.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHAT WE OFFER</a>
            <a href="findourstores.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">FIND OUR STORES</a>
            <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="px-3 py-3 bg-red-500  shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BUY ONLINE</a>
        </div>
    </div> 
</div>
<div id="ham-menu" class="fixed inset-0 bg-[#EF4135] z-50 hidden flex flex-col  pt-12 items-start justify-start space-y-0">
    <i onclick="closeModal('ham-menu')" class="fa-solid fa-xmark text-white text-3xl absolute top-6 right-6 cursor-pointer"></i>
    <div class="flex pl-9 pb-10 w-full justify-start" >
      <img class="h-[42px]" src="./img/image.png"/>
    </div>
    <div class="flex flex-col w-full pl-9 space-y-3 justify-start">
      <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">BUY ONLINE</a>
      <a href="./whoweare.html" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">WHO WE ARE</a>
    <a href="./ourgin.html" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">OUR GIN</a>
    <a href="./whatweoffer.html" class="text-black underline hover:text-white  font-medium font-montserrat text-2xl">WHAT WE OFFER</a>
    <a href="findourstores.html" class="text-black underline hover:text-white font-medium font-montserrat text-2xl">FIND OUR STORES</a>
    </div>
<div id="slideshow" class="">

    <div id="DiscoverOurGin" class="overflow-x-auto mt-20">
        <div class="flex flex-nowrap pb-12  pl-4 space-x-0 items-end">
            
            <a href="./classic.html">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/classicFinal.jpeg" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex flex-col w-full items-center">
                        <p class="text-7xl text-red-500 font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-8xl text-red-500 mr-[-150px] font-montserrat pointer-events-auto">Velvet</p>
                    </div>
                    <a href="./velvet.html" class="mt-8 py-3 bg-red-500 rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">CLASSIC</div>
            </div>
             </a>

            <a href="./velvet.html">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/velvet.png" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex flex-col w-full items-center">
                        <p class="text-7xl text-[#4D2957] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-8xl text-[#4D2957] mr-[-150px] font-Velvet pointer-events-auto">Velvet</p>
                    </div>
                    <a href="./velvet.html" class="mt-8 py-3 bg-[#4D2957] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">VELVET</div>
            </div>
             </a>
             
            <a href="./orient.html">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/orient.png" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex -ml-7 flex-col w-full items-center">
                        <p class="text-7xl text-[#821A16] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-7xl text-[#821A16] mr-[-150px] font-Papyrus pointer-events-auto">Orient</p>
                    </div>
                    <a href="./orient.html" class="mt-8 px-5 py-3 bg-[#821A16] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">ORIENT</div>
            </div>
             </a>
             
             <a href="./light.html">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/light.png" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex -ml-7 flex-col w-full items-center">
                        <p class="text-7xl text-[#4164AD] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-7xl text-[#4164AD] mr-[-150px] font-montserrat pointer-events-auto">LIGHT</p>
                    </div>
                    <a href="./light.html" class="mt-8 px-5 py-3 bg-[#4164AD] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">LIGHT</div>
            </div>
             </a>

            <a href="./xo.html">
            <div class="relative group  flex-shrink-0 w-[40%]  snap-start">
                <img src="./icons/xo.png" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex flex-col w-full items-center">
                        <p class="text-7xl text-[#A24B1E] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-7xl text-[#A24B1E] mr-[-150px] font-Baskervville pointer-events-auto">XO</p>
                    </div>
                    <a href="./xo.html" class="mt-8 px-5 py-3 bg-[#A24B1E] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">XO</div>
            </div>
             </a>
        </div>
    </div>
    <i class="fa-solid fa-arrows-left-right flex justify-center -mt-4 text-[30px]"></i>

</div>
    


</div>
<script>
  // Open the modal
  function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
  }

  // Close the modal
  function closeModal(id) {
    document.getElementById(id).classList.add("hidden");
  }

  // // Close when clicking outside the white box
  // document.getElementById("fig-sour").addEventListener("click", function () {
  //   closeModal("fig-sour");
  // });
</script>


<!-- Slideshow Section -->
<div id="slideshow" class="md:pt-20 pt-14">
    <div class="md:pl-36 pl-9 flex justify-start space-x-3 font-Baskervville">
        <p class="md:text-5xl text-[32px]">DISCOVER OUR</p>
        <p class="md:text-5xl text-[32px] text-red-500">GIN</p>
    </div>
    
    <div class="relative group/slider">
        <div id="DiscoverOurGinMain" class="overflow-x-auto md:pt-9 scroll-smooth scrollbar-hide">
            <div class="flex items-end flex-nowrap py-12 md:px-24 pl-4 space-x-2 md:space-x-9">
                
                <a href="./classic.html" class="relative group flex-shrink-0 md:w-1/3 w-1/2 snap-start">
                   <img src="img/Screenshot 2025-09-20 at 04.39.20.png" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                   <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none">
                       <div class="-mt-7 -ml-7 flex flex-col w-full items-center">
                           <p class="text-7xl text-[#EF4135] font-montserrat">Smidgin</p>
                           <p class="text-7xl text-[#EF4135] mr-[-150px] font-montserrat">Classic</p> 
                       </div>
                       <span class="mt-8 px-5 py-3 bg-red-500 rounded-xl font-montserrat text-white text-lg">Read more</span>
                   </div>
                   <div class="md:hidden mt-4 text-[#EF4135] text-[20px] underline font-montserrat text-center">CLASSIC</div>
                </a>

                <a href="./velvet.html" class="relative group flex-shrink-0 md:w-1/3 w-1/2 snap-start">
                    <img src="img/velvet.jpeg" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                    <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none">
                        <div class="flex flex-col w-full items-center">
                            <p class="text-7xl text-[#4D2957] font-montserrat">Smidgin</p>
                            <img class="mr-[-150px] w-[216px]" src="sliki/velvetFont.png"/>
                        </div>
                        <span class="mt-8 px-5 py-3 bg-[#4D2957] rounded-xl font-montserrat text-white text-lg">Read more</span>
                    </div>
                   <div class="md:hidden mt-4 text-[#4D2957] text-[20px] underline font-montserrat text-center">VELVET</div>
                </a>
                 
                <a href="./orient.html" class="relative group flex-shrink-0 md:w-1/3 w-1/2 snap-start">
                    <img src="sliki/orient.png" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                    <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none">
                        <div class="flex -ml-7 flex-col w-full items-center">
                            <p class="text-7xl text-[#821A16] font-montserrat">Smidgin</p>
                            <p class="text-7xl text-[#821A16] mr-[-150px] font-Papyrus">Orient</p>
                        </div>
                        <span class="mt-8 px-5 py-3 bg-[#821A16] rounded-xl font-montserrat text-white text-lg">Read more</span>
                    </div>
                   <div class="md:hidden mt-4 text-[#821A16] text-[20px] underline font-montserrat text-center">ORIENT</div>
                </a>
                 
                <a href="./light.html" class="relative group flex-shrink-0 md:w-1/3 w-1/2 snap-start">
                    <img src="img/Screenshot 2025-11-06 at 01.34.38.png" class="w-[90%] md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                    <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none">
                        <div class="flex -ml-7 flex-col w-full items-center">
                            <p class="text-7xl text-[#4164AD] font-montserrat">Smidgin</p>
                            <p class="text-7xl text-[#4164AD] mr-[-150px] font-montserrat">LIGHT</p>
                        </div>
                        <span class="mt-8 px-5 py-3 bg-[#4164AD] rounded-xl font-montserrat text-white text-lg">Read more</span>
                    </div>
                   <div class="md:hidden mt-4 text-[#4164AD] text-[20px] underline font-montserrat text-center">LIGHT</div>
                </a>

                <a href="./xo.html" class="relative group flex-shrink-0 md:w-1/3 w-1/2 mt-12 snap-start">
                    <img src="./sliki/xo.png" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100"/>
                    <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none">
                        <div class="flex flex-col w-full items-center">
                            <p class="text-7xl text-[#A24B1E] font-montserrat">Smidgin</p>
                            <p class="text-7xl text-[#A24B1E] mr-[-150px] font-Baskervville">XO</p>
                        </div>
                        <span class="mt-8 px-5 py-3 bg-[#A24B1E] rounded-xl font-montserrat text-white text-lg">Read more</span>
                    </div>
                   <div class="md:hidden mt-4 text-[#A24B1E] text-[20px] underline font-montserrat text-center">XO</div>
                </a>
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
      <p class="font-montserrat text-[14px] text-gray-700">Scroll to see more</p><i class="fa-solid text-[16px] text-gray-700 fa-arrow-right text-xl"></i>
    </div>


</div>

<!-- Contact Booking -->
<div class="flex flex-col items-center space-y-6 py-7 md:py-0 md:pt-0 pt-8">
<p class="md:text-[21px] px-7 text-[15px] font-montserrat text-center md:pt-16">Curious what else Smidgin has <span class="text-red-500 font-bold">in store?<br/> </span><span class="text-red-500 font-bold">Signature gins, custom sets, and more, </span> all in one place.</p>
<a href="https://smidgin-shop.myshopify.com/" class="flex w-[220px] justify-center  py-3 text-center bg-red-500 font-montserrat shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">VIEW SMIDGIN SHOP</a>
</div>




<!-- Perfect  Serve  Suggestions Section -->
<br/>
<br/>

<br/>
<div class="pl-7 pr-11 md:pl-28 md:pt-16 md:pr-0">
    <div class=" flex justify-start space-x-2 md:space-x-3 font-Baskervville">
        <p class="md:text-3xl text-[25px] text-red-500">PERFECT</p>
        <p class="md:text-3xl text-[25px]">SERVE SUGGESTIONS</p>
    </div>
</div>
<div class="relative group">
  <div id="LetsMakeCocktails" class="overflow-x-auto scroll-smooth">

    <div class="flex flex-nowrap items-end py-12 px-4 md:px-24 md:space-x-5 space-x-4">
        <!-- FIG SOUR -->
        <div class="md:min-w-[350px] min-w-[160px] md:px-6 flex flex-col group justify-center items-center">
              <img src="img/figsour.png" class="hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('fig-sour')"/>
              <p class="font-Baskervville md:text-2xl text-[18px] transition-transform group-hover:duration-500 delay-100 group-hover:underline cursor-pointer" onclick="openModal('fig-sour')">Fig Sour</p>   
        </div>

        <div id="fig-sour" class="fixed inset-0 hidden flex items-center md:justify-center z-50">
          <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-20 md:w-[773px] w-[95%] h-auto  max-h-[90vh]  relative flex flex-col justify-center items-center"
            onclick="event.stopPropagation()"
          >
            <h2 class="text-xl md:text-2xl font-Baskervville mb-8 md:mb-14 text-center">Fig Sour</h2>

            <div id="main" class="relative flex items-center justify-center font-montserrat font-bold scale-90 md:scale-100">
              
              <img src="/Strelki/Strelka2.png" class="block absolute bottom-[100%] left-[25%] md:left-[18%] w-[50px] md:w-[80px] h-auto z-0" style="transform: rotate(10deg) translateY(20px);" alt="">
              
              <img src="/Strelki/Strelka3.png" class="block absolute top-[5%] right-[19%] w-[50px] md:w-[80px] h-auto z-0" style="transform: rotate(-10deg);" alt="">
            
              <img src="/Strelki/Strelka4.png" class="block absolute top-[40%] right-[20%] w-[36px] md:w-[60px] h-auto z-0" style="transform: rotate(0deg);" alt="">
             
              <img src="/Strelki/Strelka1.png" class="block absolute bottom-[50%] left-[20%] md:left-[13%] w-[40px] md:w-[70px] h-auto z-0" style="transform: rotate(-20deg);" alt="">

              <img src="/Strelki/Strelka5.png" class="block absolute bottom-[0%] right-[13%] w-[90px] md:w-[155px] h-auto z-0" style="transform: rotate(10deg);" alt="">
              
              <div id="levo" class="relative z-10 flex flex-col space-y-12 md:space-y-32 -mt-12 md:-mt-24 text-[12px] md:text-base text-center">
                <div><p>50ml SMIDGIN <br />CLASSIC</p></div>
                <div><p>20ml SQUEEZED <br />LEMON</p></div>
              </div>

              <div id="sredina" class="relative z-10 -mt-3 md:-mt-5 w-[180px] h-[160px] md:w-[330px] md:h-[292px] overflow-hidden mx-4 md:mx-8">
                <img src="img/figsour.png" class="w-full h-full object-cover object-bottom" />
              </div>

              <div id="desno" class="relative z-10 flex flex-col space-y-5 md:space-y-10 text-[12px] md:text-base text-center">
                <div><p class="-mt-8 md:-mt-16 pb-3 md:pb-7">1 FIG</p></div>
                <div><p>1 EGG WHITE</p></div>
                <div><p class="pl-2 md:pl-5">10ml SHERBET</p></div>
              </div>
            </div>

            <p class="mt-4 text-gray-600 text-xs md:text-sm text-center font-montserrat leading-snug md:leading-relaxed px-2 z-10 relative">
              Combine all ingredients in a shaker with ice. Stir, then strain into a Rocks glass with ice.
              Garnish with fresh Mediterranean fig.
            </p>
          </div>
        </div>

        <script>
          // Open the modal
          function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
          }
        
          // Close the modal
          function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
          }
        
          // Close when clicking outside the white box
          document.getElementById("fig-sour").addEventListener("click", function () {
            closeModal("fig-sour");
          });
        </script>

        
        <!-- VELVET PERFECT -->
        <div class="md:min-w-[350px] min-w-[160px] md:px-6 flex flex-col group justify-center items-center">
    <img src="img/velvetperfect.png" class="h- hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('velvetperfect')"/>
    <p class="font-Baskervville md:text-2xl text-[18px] group-hover:underline transition-transform duration-500 delay-100">Velvet-Perfect Serve</p>  
</div>

<div id="velvetperfect" class="fixed inset-0 hidden flex items-center md:justify-center z-50">
  <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-20 md:w-[773px] w-[95%] h-auto max-h-[90vh] relative flex flex-col justify-center items-center" onclick="event.stopPropagation()">
    <h2 class="text-xl md:text-2xl font-Baskervville mb-6 md:mb-3 text-center">Velvet - Perfect Serve</h2>

    <div class="relative flex items-center justify-center font-montserrat font-bold scale-90 md:scale-100">
      <img src="/Strelki/Strelka1.png" class="block absolute top-[53%] md:top-[50%] left-[15%] w-[75px] md:w-[120px] h-auto z-0" style="transform: rotate(10deg);" alt="">
      <img src="/Strelki/Strelka2.png" class=" flip-hor block absolute bottom-[40%] right-[15%] w-[93px] md:w-[150px] h-auto z-0" style="transform: rotate(-10deg); transform: scaleY(-1); transform: scaleX(-1);" alt="">

      <div class="relative z-10 -mt-12 md:-mt-24 w-1/3 text-[12px] md:text-[18px] text-center" id="levo-velvet">
        <p>50ml SMIDGIN <br />VELVET</p>
      </div>

      <div class="relative z-10 w-[180px] h-[220px] md:w-[312px] md:h-[388px] -mr-6 md:-mr-12 overflow-hidden -mt-5 mx-2 md:mx-0" id="sredina-velvet">
        <img src="img/velvetperfect.png" class="w-full h-full object-cover object-bottom" />
      </div>

      <div class="relative z-10 w-1/2 text-[12px] md:text-[18px] text-center -mb-16 md:-mb-32" id="desno-velvet">
        <p>100ml GRAPEFRUIT <br />SODA</p>
      </div>
    </div>

    <p class="mt-4 text-gray-600 text-xs md:text-sm text-center font-montserrat leading-snug md:leading-relaxed px-2 z-10 relative">
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
        </script>
        


        <!-- GIN TONIC -->
  <div class="md:min-w-[350px] min-w-[160px] md:px-6 flex flex-col group justify-center items-center">
    <img src="img/gintonik.png" class="h- hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('S&T')"/>
    <p class="font-Baskervville md:text-2xl text-[18px] group-hover:underline transition-transform duration-500 delay-100">S&T</p>  
</div>

<div id="S&T" class="fixed inset-0 hidden flex items-center md:justify-center z-50">
  <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-20 md:w-[773px] w-[95%] h-auto max-h-[90vh] relative flex flex-col justify-center items-center" onclick="event.stopPropagation()">
    <h2 class="text-xl md:text-2xl font-Baskervville mb-6 md:mb-3 text-center">S&T</h2>

    <div class="relative flex items-center justify-center font-montserrat font-bold scale-90 md:scale-100">
      <img src="/Strelki/Strelka1.png" class="block absolute md:top-[13%] top-[2%] left-[14%] w-[50px] md:w-[110px] h-auto z-0" style="transform: rotate(15deg);" alt="">
      <img src="/Strelki/Strelka2.png" class="block absolute bottom-[41%] left-[22%] w-[45px] md:w-[100px] h-auto z-0" style="transform: rotate(-10deg);" alt="">
      <img src="/Strelki/Strelka3.png" class="block absolute bottom-[42%]  right-[22%] w-[50px] md:w-[110px] h-auto z-0" style="transform: rotate(10deg);" alt="">

      <div class="relative z-10 -mb-2 w-1/3 -mr-4 md:-mr-7 text-[12px] md:text-[18px] text-center space-y-10 md:space-y-20">
        <div><p>50ml SMIDGIN <br />VELVET</p></div>
        <div><p>100ml TONIC WATER</p></div>
      </div>

      <div class="relative z-10 w-[180px] h-[220px] md:w-[312px] md:h-[388px] -mr-10 md:-mr-20 overflow-hidden -mt-5">
        <img src="img/gintonik.png" class="w-full h-full object-cover object-bottom" />
      </div>

      <div class="relative z-10 w-1/2 text-[12px] md:text-[18px] text-center -mb-16 md:-mb-32">
        <p>LIME SQUEEZE</p>
      </div>
    </div>

    <p class="mt-4 text-gray-600 text-xs md:text-sm text-center font-montserrat leading-snug md:leading-relaxed px-2 z-10 relative">
      Pour Smidgin into a glass filled with ice and top with tonic water. Gently stir and garnish with
      juniper berries, mountain tea and lime.
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
        
          // Close when clicking outside (special handling for "&" in ID)
          document.querySelector('#S\\&T').addEventListener('click', function () {
            closeModal('S&T');
          });
        </script>




        <!-- NEGRONI  -->
     <div class="md:min-w-[350px] min-w-[160px] md:px-6 flex flex-col group justify-center items-center">
    <img src="img/negroni.png" class="h- hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('negroni')"/>
    <p class="font-Baskervville md:text-2xl text-[18px] group-hover:underline transition-transform duration-500 delay-100">Negroni</p>  
</div>

<div id="negroni" class="fixed inset-0 hidden flex items-center md:justify-center z-50">
  <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-20 md:w-[773px] w-[95%] h-auto max-h-[90vh] relative flex flex-col justify-center items-center" onclick="event.stopPropagation()">
    <h2 class="text-xl md:text-2xl font-Baskervville mb-10 md:mb-20 text-center">Negroni</h2>

    <div class="relative flex items-center justify-center font-montserrat font-bold scale-90 md:scale-100">
      <img src="/Strelki/Strelka1.png" class="block absolute top-[42%] left-[15%] w-[50px] md:w-[100px] h-auto z-0" style="transform: rotate(20deg);" alt="">
      <img src="/Strelki/Strelka2.png" class="block absolute top-[-18%] right-[1%] w-[60px] md:w-[120px] h-auto z-0" style="transform: rotate(-10deg) scaleX(-1) scaleY(-1);" alt="">
      <img src="/Strelki/Strelka3.png" class="block absolute bottom-[55%] right-[15%] w-[45px] md:w-[80px] h-auto z-0" style="transform: rotate(5deg); " alt="">

      <div class="relative z-10 mb-20 md:mb-40 -mr-4 md:-mr-7 text-[12px] md:text-[18px] text-center space-y-10 md:space-y-20">
        <p>50ml SMIDGIN <br />CLASSIC</p>
      </div>

      <div class="relative z-10 w-[200px] h-[190px] md:w-[362px] md:h-[350px] -mt-24 md:-mt-44 -mr-4 md:-mr-10 overflow-hidden">
        <img src="img/negroni.png" class="w-full h-full object-cover" />
      </div>

      <div class="relative z-10 flex flex-col text-[12px] md:text-[18px] text-center">
        <div><p class="-mt-20 md:-mt-44 md:-mr-16">25ml CAMPARI</p></div>
        <div><p>25ml SWEET <br />VERMOUTH</p></div>
      </div>
    </div>

    <p class="mt-4 text-gray-600 text-xs md:text-sm text-center font-montserrat leading-snug md:leading-relaxed px-2 z-10 relative">
      Combine all ingredients in a shaker with ice. Stir, then strain into Rocks glass with ice.
      Garnish with Orange Twist.
    </p>
  </div>
</div>
        <script>
          // Open modal
          function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
          }
        
          // Close modal
          function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
          }
        
          // Close when clicking outside
          document.getElementById("negroni").addEventListener("click", function () {
            closeModal("negroni");
          });
        </script>

  </div>

  <!-- LEFT ARROW -->
  <button
    onclick="scrollSlider('LetsMakeCocktails', -1)"
    class="absolute left-3 top-1/2 -translate-y-1/2 z-20
           hidden md:flex items-center justify-center
           w-12 h-12 rounded-full bg-white/70
           hover:bg-white shadow-lg transition
           opacity-0 group-hover:opacity-100">
    <i class="fa-solid fa-chevron-left text-red-500 text-xl"></i>
  </button>

  <!-- RIGHT ARROW -->
  <button
    onclick="scrollSlider('LetsMakeCocktails', 1)"
    class="absolute right-3 top-1/2 -translate-y-1/2 z-20
           hidden md:flex items-center justify-center
           w-12 h-12 rounded-full bg-white/70
           hover:bg-white shadow-lg transition
           opacity-0 group-hover:opacity-100">
    <i class="fa-solid fa-chevron-right text-red-500 text-xl"></i>
  </button>
</div>
</div>
    <div class="flex space-x-3 justify-end md:hidden pr-8 items-center -mt-5">
      <p class="font-montserrat text-[14px] text-gray-700">Scroll to see more</p><i class="fa-solid text-[16px] text-gray-700 fa-arrow-right text-xl"></i>
    </div>

<!-- Have a cocktail idea? -->
<div class="md:px-36 px-7">
    <div class="flex justify-between items-center md:pt-32 pt-9 md:pr-36">
        <div class="font-montserrat text-[17px] md:w-[75%] pr-6 md:text-[22px] md:pl-20 ">
            <h1 class="font-semibold">Have a Cocktail Idea? We're listening.</h1>
            <br/>
            <h2>Created something delicious with Smidgin? Share your recipe with us, we're always excited to see how our gin inspires new mixes.</h2>
        </div>
        <div>
            <i onclick="openModal('writerecipe')" class="cursor-pointer md:text-3xl text-[18px] bg-red-500 md:p-7 p-5 shadow-lg shadow-red-500 text-white rounded-full fa-solid fa-pencil"></i>            
        </div>
    </div>
<!-- WRITE RECIPE -->
<div id="writerecipe" class="fixed inset-0 hidden flex items-center justify-center z-50">
  <div
    class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-20 md:w-[773px] w-[95%] h-auto md:h-[600px] max-h-[90vh] overflow-y-auto relative flex flex-col justify-start items-center"
    onclick="event.stopPropagation()"
  >
    <h1 class="font-Baskervville text-center text-[22px] md:text-[32px] pb-6 md:pb-10">
      Write Your Recipe
    </h1>

    <div class="relative w-full">
      <textarea
        id="recipeText" 
        rows="8"
        placeholder="Write your recipe here"
        class="border border-black font-montserrat rounded-2xl p-4 md:p-8 w-full text-sm md:text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
      ></textarea>

      <input type="file" id="recipePhoto" accept="image/*" class="hidden" onchange="previewFile()" />

      <img
        src="./img/uploadpic.png"
        class="absolute bottom-4 right-4 w-[24px] h-[24px] md:w-[32px] md:h-[32px] cursor-pointer hover:opacity-70 transition"
        onclick="document.getElementById('recipePhoto').click()"
      />
      <p id="fileNameDisplay" class="absolute bottom-4 left-4 text-xs text-gray-500"></p>
    </div>

    <div class="flex w-full justify-end mt-8 md:mt-11 items-center space-x-5 md:space-x-7">
      <p
        class="cursor-pointer underline font-montserrat text-sm md:text-base"
        onclick="closeModal('writerecipe')"
      >
        Cancel
      </p>
      
      <button
        id="submitBtn"
        class="cursor-pointer font-montserrat text-sm md:text-base px-4 md:px-5 py-2 md:py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white hover:bg-red-600 transition"
        onclick="submitRecipe()"
      >
        SUBMIT
      </button>
    </div>
  </div>
</div>

<script>
  // 1. PASTE YOUR GOOGLE WEB APP URL HERE
  const SCRIPT_URL = "https://script.google.com/macros/s/AKfycbylI2C9dzvwrYiHurlY9zIeTYKGI_3N-dYumhuecRhA-BAX90n-2PIQjaqP7jusNSnW4A/exec";

  // Display file name when selected
  function previewFile() {
    const fileInput = document.getElementById('recipePhoto');
    const display = document.getElementById('fileNameDisplay');
    if (fileInput.files.length > 0) {
      display.textContent = "Selected: " + fileInput.files[0].name;
    }
  }

  function submitRecipe() {
    const submitBtn = document.getElementById('submitBtn');
    const textData = document.getElementById('recipeText').value;
    const fileInput = document.getElementById('recipePhoto');
    
    // Basic validation
    if(!textData) {
      alert("Please write a recipe first.");
      return;
    }

    // Change button text to indicate loading
    const originalBtnText = submitBtn.innerText;
    submitBtn.innerText = "SENDING...";
    submitBtn.disabled = true;

    // Prepare the payload
    const payload = {
      recipe: textData,
      image: "",
      imageName: ""
    };

// Helper function to send data
    const sendData = (dataObj) => {
      fetch(SCRIPT_URL, {
        method: "POST",
        // CRITICAL CHANGE: We use text/plain to avoid CORS preflight checks
        headers: { "Content-Type": "text/plain;charset=utf-8" },
        body: JSON.stringify(dataObj)
      })
      .then(response => {
        // Reset UI
        submitBtn.innerText = originalBtnText;
        submitBtn.disabled = false;
        document.getElementById('recipeText').value = "";
        document.getElementById('fileNameDisplay').textContent = "";
        fileInput.value = ""; 
        
        closeModal('writerecipe');
        openModal('cheerstoyou'); 
      })
      .catch(error => {
        console.error('Error:', error);
        submitBtn.innerText = originalBtnText;
        submitBtn.disabled = false;
        alert("Something went wrong. Please try again.");
      });
    };

    // Check if there is an image to process
    if (fileInput.files.length > 0) {
      const file = fileInput.files[0];
      const reader = new FileReader();
      
      reader.onload = function(e) {
        payload.image = e.target.result; // Base64 string
        payload.imageName = file.name;
        sendData(payload);
      };
      
      reader.readAsDataURL(file);
    } else {
      // Send text only
      sendData(payload);
    }
  }

  // Ensure you have these helper functions defined somewhere in your code
  // function openModal(id) { document.getElementById(id).classList.remove('hidden'); }
  // function closeModal(id) { document.getElementById(id).classList.add('hidden'); }
</script>

<!-- CHEERS TO YOU -->
<div id="cheerstoyou" class="fixed inset-0 hidden flex items-center justify-center z-50">
  <div
    id="cheerstoyouContent"
    class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-2xl p-6 md:p-20 md:w-[474px] w-[85%] md:h-[287px] h-[230px] overflow-y-auto relative flex flex-col justify-center items-center text-center"
  >
    <h1 class="font-Baskervville text-[22px] md:text-[32px] pb-2 md:pb-3">
      Cheers to you!
    </h1>
    <p class="font-montserrat text-[14px] md:text-[16px] leading-snug md:leading-normal">
      Your Smidgin cocktail recipe is on its way to our tasting list.
    </p>
  </div>
</div>

    
    <script>
      const cheersModal = document.getElementById("cheerstoyou");
      const cheersContent = document.getElementById("cheerstoyouContent");
    
      // Click outside the content closes the modal
      cheersModal.addEventListener("click", () => {
        cheersModal.classList.add("hidden");
      });
    
      // Clicking inside content doesn't close it
      cheersContent.addEventListener("click", (e) => {
        e.stopPropagation();
      });
    </script>
</div>

<p class="text-[16px] md:text-[19px] pt-14 font-montserrat text-center">Want to explore more? <a href="https://acrobat.adobe.com/id/urn:aaid:sc:VA6C2:c93b5299-cd8f-4b30-ba5c-48452863c302" class="text-red-500 font-bold underline">Download our catalog </a></p>



<!-- Footer -->
<div>
<div class="hidden md:flex px-32  items-end justify-between pt-16">
   <div class="w-1/3">
       <img src="./img/logoFooter.png" class="w-[241px]"/>
       <p class="font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
   </div>
   <div class="font-montserrat underline text-center w-1/3">
       <a href="./returnoffer.html">Bottle Return Offer</a><br/>
       <a href="./privacypolicy.html">Privacy Policy</a><br/>
       <a href="./termsandconditions.html">Terms and Conditions</a>
   </div>
   <div class="w-1/3 flex  flex-col items-end space-y-7  md:pr-8">
     <div id="socialmedia" class="flex space-x-3 ">
        <a href="mailto:info@smidgin.mk"><img src="footer/Column (3).png" /></a>
        <a href="https://www.facebook.com/smidgin.mk/"><img src="footer/Row (2).png" /></a>
        <a href="https://www.instagram.com/smidgin.mk/?hl=en"><img src="footer/Row (3).png" /></a>
        <a href="https://mk.linkedin.com/company/smidgin"><img src="footer/Row (4).png" /></a>
     </div>
     <div id="priznanija" class="flex justify-center space-x-4 items-center">
        <a href="https://www.momondo.de/city-guides/discover-skopje.18146.guide.ksp"><img class="w-[80px]" src="footer/be033833fdb4fe0437189251af49834c8d63ea3a.png" /></a>
        <a href="https://www.kayak.es/Skopje.18146.guide"><img class="w-[80px]" src="footer/86ef22e36b59f7cf1d14803514de703ab033752c.png" /></a>
     </div>
   </div>
</div>
<div class="md:hidden mt-12">
<div class="flex flex-col justify-center items-center">
    <img src="./img/logoFooter.png" class="w-1/3"/>
    <img src="./img/Screenshot 2025-10-31 at 00.17.38.png" class="w-1/3 mt-2"/>
    <a class="underline text-gray-500 font-montserrat text-[14px] mt-5" href="./returnoffer.html">Bottle Return Offer</a><br/>
    <a class="underline text-gray-500 font-montserrat text-[14px] -mt-5" href="./privacypolicy.html">Privacy Policy</a><br/>
    <a class="underline text-gray-500 font-montserrat text-[14px] -mt-5" href="./termsandconditions.html">Terms and Conditions</a>
</div>

<div class="flex justify-between pr-7">
    <div>
        <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
        <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
        <p class="pl-7 text-gray-500 text-[14px] font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
    </div>
    <div class="flex flex-col space-y-2">
        <a href="https://www.momondo.de/city-guides/discover-skopje.18146.guide.ksp"><img class="w-[60px]" src="footer/be033833fdb4fe0437189251af49834c8d63ea3a.png" /></a>
        <a href="https://www.kayak.es/Skopje.18146.guide"><img class="w-[60px]" src="footer/86ef22e36b59f7cf1d14803514de703ab033752c.png" /></a>
    </div>
    <!-- Back to Top Arrow -->
</div>


</div>



 

     <br/>
     <br/>
     <br/>
</div>

</body>
</html>
