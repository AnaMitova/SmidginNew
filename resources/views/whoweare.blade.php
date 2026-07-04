<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="./output.css" rel="stylesheet" type="text/css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        @keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.spin-circle {
  animation: spin 12s linear infinite;
}

    </style>

    <script>
    function openModal(id) {
      document.getElementById(id).classList.remove('hidden')
    }
    function closeModal(id) {
      document.getElementById(id).classList.add('hidden')
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

<div id="didyouknow" class="fixed hidden font-montserrat inset-0 flex items-center justify-center z-50">
  <div class="bg-[#EF4135] p-10 w-full h-full relative">
    <button class="absolute top-9 md:top-16 right-11 md:right-20 text-black text-[28px] md:text-3xl font-bold" onclick="closeModal('didyouknow')">✕</button>
    <img src="./sliki/lav.png" class="absolute top-16 left-20"/>
    <!-- Title -->
     <div class="flex flex-col justify-center items-center md:space-y-14 space-y-7 pt-28 md:pt-32">
        <h2 class="text-[25px] md:text-[40px] md:pl-0 pl-[250px] font-Baskervville text-white text-start w-[874px]">WHY <span class="text-black">THE NAME</span> SMIDGIN?</h2>
        <div class="p-[32px] border border-white rounded-2xl w-[300px] md:w-[874px] md:h-[230px] flex justify-center items-center">
            <p class="font-montserrat text-[16px] md:text-[19px]">It means a <b>small amount</b>  and that’s how we craft our gin: small batches, carefully distilled. Because <b>small doesn’t mean simple.</b> Every bottle is made with precision, passion, and just a smidgin of the right stuff, enough to create something truly special.</p>
        </div>
     </div>
    <img src="./sliki/list.png" class="absolute hidden md:block right-1 bottom-1"/>
    <img src="./sliki/caski.png" class="absolute h-[270px] md:h-[416px] w-auto md:left-9 -bottom-11 md:-bottom-16"/>
    <img src="./img/classic.png" class="absolute h-[270px] md:h-[495px] w-auto md:-left-5 left-5 bottom-1"/>
  </div>
</div>
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
</script>        <div id="navs" class="hidden md:flex space-x-11 text-base items-center">
            <a href="./whoweare.html" class="border-b-[2.7px] border-b-red-500 text-red-500 font-semibold  pb-[1.7px]">WHO WE ARE</a>
            <a href="./ourgin.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
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

    <!-- The story behind smidgin -->
     <div class="font-Baskervville text-[30px] md:text-5xl pt-12 md:pt-24 flex flex-col " >
        <h1 class="md:px-36 px-7 pb-20">THE STORY <BR/><p class="-mt-2 md:-mt-0">BEHIND <span class="text-red-500">SMIDGIN</span> </p></h1>
        <img class="hidden md:block" src="./img/Screenshot 2025-09-16 at 11.48.33.png"/>
        <img class="md:hidden -mt-9 " src="./sliki/Screenshot 2025-11-07 at 02.14.34.png"/>
     </div>

    <!-- Who we are -->
    <div class="pt-12">
       <h1 class="font-Baskervville text-[27px] md:text-3xl font-semibold px-7 md:px-36 pb-8 md:pb-16">WHO WE ARE</h1>
        <div class="md:flex px-7 md:px-36 justify-center font-montserrat">
            <div class="flex flex-col md:items-start items-center justify-center md:justify-start space-y-9">
                <p class="text-[16px] md:text-[18px]">Smidgin started with two gin lovers, Ivan and Graeme, who weren’t just looking for a good gin, they were after <span class="text-red-500 font-bold">the one</span> Their search took them from mountain trails to alembic stills, and finally to Skopje, where they set up our small MCM distillery.</p>
                <div class="flex">
                    <img src="./img/Screenshot 2025-09-16 at 11.55.18.png" class="w-[90%]"/>
                    <img onclick="openModal('didyouknow')" class="md:hidden  hover:cursor-pointer h-[140px] -ml-16 mt-7" src="./sliki/didYOUknow.png"/>
                </div>

            </div>
            <div class="flex flex-col items-center space-y-9 mt-11 md:mt-36">
                <p class="text-[16px] md:text-[18px]">Smidgin is more than a drink. It’s a celebration of North Macedonia’s wild nature, especially the fresh juniper berries and mountain tea that grow high on our hills. That’s why we distill everything here, close to the source, in small batches, using only what we need and nothing we don’t.</p>
                <img src="./img/Screenshot 2025-09-16 at 11.57.57.png" class="w-[367px] md:w-[75%]"/>
            </div>
        </div>
    </div>

    <!-- The people behind the gin -->
     <div class="md:pt-28 pt-16">
        <h1 class="font-Baskervville hidden md:block text-3xl font-semibold px-32 pb-14">MEET THE PEOPLE BEHIND THE BOTTLE</h1>
        <h1 class="font-Baskervville  md:hidden text-[28px] font-semibold px-7 pb-7 md:pb-14">TEAM SMIDGIN</h1>
        <div id="IvanAndGreame" class="flex md:flex-row items-center flex-col px-7 md:px-32 space-x-0 md:space-x-14">
            <img src="./img/Screenshot 2025-09-16 at 12.07.17.png" class="w-[100%] md:w-[45%]"/>
            <p class="font-montserrat text-[16px] md:text-[18px] pt-7 md:pb-0 pb-6 md:pt-4"><span class="text-red-500  font-bold">Ivan Skenderoski</span> and <span class="text-red-500 font-bold">Graeme Lowther</span> — two friends, founders, and gin enthusiasts — were inspired by the craft gin movement in Scotland. After years of experimenting with alembic stills, they stumbled upon something extraordinary: the vibrant flavor of freshly foraged juniper berries from the Macedonian mountains. They knew then, the best gin deserved to be made where the berries grow.
                <br/><br/>That’s where Milica comes in.</p> 
        </div>
        <div id="MilicaPhone" class="md:hidden flex px-7 space-x-5 items-center pt-9">
            <img class=" h-[230px] rounded-xl " src="./img/milica.jpeg"/>
            <div id="MilicaText" class="flex w-[75%] justify-between items-center">
                <p class="text-[14px] font-montserrat"><span class="text-red-500 font-bold">Milica Pletvarska</span>, our master distiller and experienced enologist, joined the journey with her deep knowledge of wine and brandy. On a tour of distilleries in London and Edinburgh, the trio shaped their gin-making philosophy. Milica aimed to create a distinctive mouthfeel  without using additives like glycerin.</p>
            </div>
        </div>
        <div class="md:hidden">
            <p class="text-[18px] pl-28 italic pt-7 font-serif">Her secret?</p>
            <p class="text-[16px] px-7 pt-5 font-montserrat">Wild Macedonian mountain tea, an herb known not just for its flavor, but for its health benefits too. Fascinated by botanicals, Milica carefully balanced complexity, aroma, and smoothness  crafting a gin that’s as refined as it is rooted in nature.</p>

        </div>
        <div id="CELO" class="hidden  px-36 md:flex space-x-12">
            <div id="levo" class="w-2/3 flex flex-col">
                <div id="MilicaText" class="flex w-[75%] justify-between items-center">
                    <p class="text-[18px] font-montserrat pt-12"><span class="text-red-500 font-bold">Milica Pletvarska</span>, our master distiller and experienced enologist, joined the journey with her deep knowledge of wine and brandy. On a tour of distilleries in London and Edinburgh, the trio shaped their gin-making philosophy. Milica aimed to create a distinctive mouthfeel  without using additives like glycerin.</p>
                </div>
                <div id="HerSecret" class="space-x-14 flex justify-between pl-28 pt-20 items-center">
                    <div>
                        <img class="w-[360px] rounded-xl " src="./img/milica.jpeg"/>
                    </div>
                    <div class="flex w-[363px] flex-col space-y-12">
                        <p class="text-[18px] italic font-serif">Her secret?</p>
                        <p class="text-[18px] font-montserrat">Wild Macedonian mountain tea, an herb known not just for its flavor, but for its health benefits too. Fascinated by botanicals, Milica carefully balanced complexity, aroma, and smoothness  crafting a gin that’s as refined as it is rooted in nature.</p>
                    </div>
                </div>
            </div>
            <div id="desno" class="w-1/3 flex justify-center items-start">
                <img onclick="openModal('didyouknow')" class="pt-32  hover:cursor-pointer w-[197px]  -mb-96 " src="./img/diduknow.png"/>
            </div>
        </div>



     </div>

    <!-- The heart of craft -->
    <div class="flex md:flex-row flex-col px-7 md:px-32 justify-between pt-16 md:pt-36">
       <h1 class="font-Baskervville text-[28px] md:text-3xl font-semibold">THE HEART OF CRAFT</h1>
       <P class="md:w-1/2 text-[16px] md:text-[18px] pt-6 md:pt-0 font-montserrat">Smidgin is more than a gin, it's a place, a progress, and a passion. Every bottle is distilled and bottled in the iconic <span class="text-red-500 font-bold">MCM</span> building in Debar Maalo, one of Skopje's most recognizable landmarks. Originally the house of the Ruben family, this place now holds our small copper alembic still where precision, tradition, and flavor come together.</P>
    </div>
<div class="hidden md:flex">

  
    <div class="flex items-start justify-start pl-28 pt-14">
        <div id="laptop" class="flex items-end">
            <img class="w-[250.00000268337186px] h-[250.00000268337186px] -mr-16 z-50" src="img/image 17.png"/>
            <img class="w-[424px]" src="img/image 19.png"/>
    
        </div> 
    <!-- BOOK A TOUR SPINNING CIRCLE -->
         <div class="flex justify-center items-center pt-20 md:pt-4 md:-ml-24">
           <div class="relative w-[280px] h-[280px] md:w-[320px] md:h-[320px]">
         
             <!-- Spinning text -->
             <svg
               viewBox="0 0 300 300"
               class="absolute inset-0 w-full h-full spin-circle"
             >
               <defs>
         <path
           id="circlePath"
           d="
             M 150,150
             m -100,0
             a 100,100 0 1,1 200,0
             a 100,100 0 1,1 -200,0
           "
         />
         
               </defs>
         
               <text
                 class="font-montserrat uppercase tracking-[1.7px] fill-gray-500 text-[12px]"
               >
                 <textPath href="#circlePath">
                   BOOK A TOUR ~ BOOK A TOUR ~ BOOK A TOUR ~ BOOK A TOUR ~ BOOK A TOUR ~ 
                 </textPath>
               </text>
             </svg>
         
             <!-- Center red circle -->
             <a
               href="./whatweoffer.html"
               class="absolute top-1/2 left-1/2
                      -translate-x-1/2 -translate-y-1/2
                      w-[170px] h-[170px] md:w-[190px] md:h-[190px]
                      bg-[#EF4135] rounded-full
                      flex justify-center items-center text-center
                      font-montserrat text-white text-[17px] md:text-[17px]
                      leading-tight 
                      hover:scale-105 transition-transform duration-300"
             >
               The distillery<br>
               is open to the<br>
               public
             </a>
         
           </div>
         </div>       
    </div>    
</div>
<div class="md:hidden ">

  
    <div class="flex md:flex-row flex-col items-start justify-start -pl-20 md:pt-12 ">
      <img class="w-[68%] md:pt-0 pt-20 ml-14" src="img/image 19.png"/>
    
      <!-- BOOK A TOUR SPINNING CIRCLE -->
      <div class="flex md:pt-56 -mt-32 md:-mt-0">
        <div class="relative w-[240px] h-[240px] md:left-0 left-36 md:right-32">
      
          <!-- Spinning text -->
          <svg viewBox="0 0 300 300" class="absolute inset-0 w-full h-full spin-circle">
            <defs>
              <path
                id="circlePath"
                d="
                  M 150,150
                  m -80,0
                  a 80,80 0 1,1 160,0
                  a 80,80 0 1,1 -160,0
                "
              />
            </defs>
      
            <text class="font-montserrat uppercase tracking-[1px] fill-gray-500 text-[13px]">
              <textPath href="#circlePath">
                BOOK A TOUR ~ BOOK A TOUR ~ BOOK A TOUR ~ BOOK A TOUR ~ BOOK A TOUR ~ 
              </textPath>
            </text>
          </svg>
      
          <!-- Center red circle -->
          <a
            href="./whatweoffer.html"
            class="absolute top-1/2 left-1/2
                   -translate-x-1/2 -translate-y-1/2
                   w-[140px] h-[140px] md:w-[160px] md:h-[160px]
                   bg-[#EF4135] rounded-full
                   flex justify-center items-center text-center
                   font-montserrat text-white text-[15px] md:text-[16px]
                   leading-tight 
                   hover:scale-105 transition-transform duration-300"
          >
            The distillery<br>
            is open to the<br>
            public
          </a>
      
        </div>
      </div>
      
    </div>    
</div>



    <div class="flex md:flex-row flex-col md:px-32 px-7 items-center pt-2 md:space-x-4">
       <p class="text-[16px] md:text-[18px] font-montserrat">Inside, everything is done the old-fashioned way by hand, with heart. Each bottle is carefully filled, sealed with our signature red wax, and labeled one at a time by our own distillers. No conveyor belts. No shortcuts. Just a small team, steady hands, and a commitment to doing things properly, because every detail matters when you're making something this good.</p>
       <img src="./img/Screenshot 2025-09-16 at 12.24.20.png" class="mt-8 md:w-1/2 hidden md:block"/> 
       <img src="./sliki/Screenshot 2025-11-07 at 02.42.31.png" class="mt-8 -ml-5 md:w-1/2 md:hidden"/> 
    </div>

    <!-- WE care for nature -->
    <div class="flex items-center md:px-32 pt-20 md:pt-28">
        <div class="hidden md:block">
            <img src="./img/Screenshot 2025-09-16 at 12.26.47.png"/>
        </div>
        <div class="flex flex-col space-y-5 items-center"> 
            <h1 class="text-[25px] md:text-3xl font-semibold font-Baskervville">WE CARE FOR THE NATURE</h1>
            <img class="md:hidden pb-5 w-[70%]" src="./img/Screenshot 2025-09-16 at 12.26.47.png"/>           
            <a onclick="openReturnSlides()" class="md:hidden hover:cursor-pointer px-5 py-3 bg-red-500 font-montserrat shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">READ MORE</a>
            <p class="font-montserrat text-[16px] md:text-[18px] md:px-0 px-7 pb-10 pt-10">Sustainability isn't just a trend for us, it's part of how we distill, bottle, and serve.<br/>• We use <span class="text-red-500 font-bold">locally sourced ingredients </span>to support our community and reduce our footprint.<br/>• We <span class="text-red-500 font-bold">reuse</span>, our <span class="text-red-500 font-bold">bottle return program</span>  helps us keep waste low and vibes high.<br/>• We pack your gin in <span class="text-red-500 font-bold">eco-friendly boxes</span>  because the planet deserves good packaging too.</p>
            <a onclick="openReturnSlides()" class="hover:cursor-pointer hidden md:block px-5 py-3 bg-red-500 font-montserrat shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">READ MORE</a>
        </div>
    </div>

<!-- MODAL -->
<div id="returnModal" class="fixed inset-0 hidden z-[9999] bg-black/70 flex items-center justify-center">

<div class="relative w-[88%] max-w-[620px] bg-white rounded-2xl overflow-hidden shadow-2xl">

    <!-- Close -->
    <button onclick="closeModal('returnModal')" 
      class="absolute top-4 right-5 text-2xl font-bold z-10">
      ✕
    </button>

    <!-- Slides -->
    <div class="relative">

      <img id="slideImage"
           src="./slides/slide1.png"
           class="w-full h-auto object-contain"/>

      <!-- Left -->
      <button onclick="prevSlide()"
        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white w-12 h-12 rounded-full shadow flex items-center justify-center">
        <i class="fa-solid fa-arrow-left"></i>
      </button>

      <!-- Right -->
      <button onclick="nextSlide()"
        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white w-12 h-12 rounded-full shadow flex items-center justify-center">
        <i class="fa-solid fa-arrow-right"></i>
      </button>

    </div>

  </div>
</div>

<script>
/* base modal helpers */
function openModal(id){
  document.getElementById(id).classList.remove("hidden");
}
function closeModal(id){
  document.getElementById(id).classList.add("hidden");
}

/* slideshow */
const slides = [
  "./slides/slide1.png",
  "./slides/slide2.png",
  "./slides/slide3.png"
];

let currentSlide = 0;

function openReturnSlides(){
  currentSlide = 0;
  updateSlide();
  openModal("returnModal");
}

function updateSlide(){
  document.getElementById("slideImage").src = slides[currentSlide];
}

function nextSlide(){
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlide();
}

function prevSlide(){
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  updateSlide();
}

/* keyboard controls */
document.addEventListener("keydown", (e)=>{
  const modal = document.getElementById("returnModal");
  if (!modal.classList.contains("hidden")){
    if (e.key === "ArrowRight") nextSlide();
    if (e.key === "ArrowLeft") prevSlide();
    if (e.key === "Escape") closeModal("returnModal");
  }
});
</script>


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
