<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="./output.css" rel="stylesheet" type="text/css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Edu+VIC+WA+NT+Hand+Pre:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital@1&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=WDXL+Lubrifont+TC&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/0a30fb337a40fc83c501c5604f38dfb6?family=Centra+No2+TRIAL" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/chronicle-display" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e70ea989f6.js" crossorigin="anonymous"></script>

        <script src="https://cdn.tailwindcss.com"></script>



<script id="buyAndTaste">
let currentCity = null; // Will be set when a city is selected

function switchTab(tab) {
  const buy = document.getElementById("buy");
  const taste = document.getElementById("taste");
  const indicator = document.getElementById("indicator");
  const buyBtn = document.getElementById("buy-btn");
  const tasteBtn = document.getElementById("taste-btn");
  const title = document.getElementById('page-title');

  if (!currentCity) return; // no city selected yet

  const isSmallScreen = window.innerWidth < 640; // Tailwind's sm breakpoint

  // Hide both containers
  [buy, taste].forEach(container => {
    container.classList.add("hidden"); 
    container.classList.remove("opacity-0", "-translate-y-10"); 
  });

  // Reset button colors
  buyBtn.classList.remove("text-red-500");
  buyBtn.classList.add("text-gray-500");
  tasteBtn.classList.remove("text-red-500");
  tasteBtn.classList.add("text-gray-500");

  let activeContainer;
  const translateValue = isSmallScreen ? "translateX(72px)" : "translateX(139px)";

  if (tab === "buy") {
    activeContainer = buy;
    indicator.style.transform = "translateX(0px)";
    buyBtn.classList.remove("text-gray-500");
    buyBtn.classList.add("text-red-500");
    title.textContent = `Buy Smidgin in ${currentCity}, Macedonia`;
  } else {
    activeContainer = taste;
    indicator.style.transform = translateValue;
    tasteBtn.classList.remove("text-gray-500");
    tasteBtn.classList.add("text-red-500");
    title.textContent = `Taste Smidgin in ${currentCity}, Macedonia`;
  }

  // Prepare animation start state
  activeContainer.classList.remove("hidden");
  activeContainer.classList.add("opacity-0", "-translate-y-10", "transition-all", "duration-700");

  // Force browser to register the start state before animating
  requestAnimationFrame(() => {
    activeContainer.classList.remove("opacity-0", "-translate-y-10");
  });
}

function setCurrentCity(city) {
  currentCity = city;

  updateCards('buy', cityData[city]?.buy || []);
  updateCards('taste', cityData[city]?.taste || []);

  switchTab("buy");
}

</script>


<script>
const cityData = @json($cityData);

document.addEventListener("DOMContentLoaded", () => {
    const defaultCity = cityData["Skopje"]
        ? "Skopje"
        : Object.keys(cityData)[0];

    if (defaultCity) {
        setCurrentCity(defaultCity);
    }
});

document.addEventListener("DOMContentLoaded", () => {

    const defaultCity = cityData["Skopje"]
        ? "Skopje"
        : Object.keys(cityData)[0];

    if (defaultCity) {
        setCurrentCity(defaultCity);
    }

});

function updateCards(sectionId, data) {
  const container = document.getElementById(sectionId);
  container.innerHTML = '';

  if (!data || data.length === 0) {
    container.innerHTML = '<p class="text-gray-500">No data found</p>';
    return;
  }

  data.forEach(item => {
    const card = `
      <div class="flex flex-col  items-center justify-center shadow-2xl rounded-xl h-[300px] w-[180px] md:h-[524px] md:w-[330px] p-3 md:p-[28px] font-montserrat bg-white">
        <div class="w-[160px] h-[130px] md:w-[274px] md:h-[240px]">
        <img src="/storage/${item.image}" class="rounded-xl w-full h-full object-cover"/>        </div>
        <div class="flex flex-col w-full">
          <div class="flex justify-between pt-4 md:pt-7 items-start">
            <a href="${item.link}" target="_blank" class="font-bold underline text-[11px] md:text-[15px] md:text-xl leading-tight">${item.name}</a>
          </div>
          <div class="space-y-2 md:space-y-4 pt-3 md:pt-4 pb-3 md:pb-7 text-[10px] md:text-[px] text-gray-500 leading-snug">
            <div class="flex items-start space-x-1">
              <i class="fa-solid fa-location-dot text-[12px] md:text-base"></i>
              <p class="text-[11px] md:text-[15px]">  ${item.address}</p>
            </div>
            <div class="flex items-center space-x-1">
              <i class="fa-solid fa-clock text-[12px] md:text-base"></i>
              <p class="text-[11px] md:text-[15px]">${item.hours}</p>
            </div>
            <div class="flex items-center space-x-1">
              <i class="fa-solid fa-phone text-[12px] md:text-base"></i>
              <p class="text-[11px] md:text-[15px]">${item.phone}</p>
            </div>
          </div>
        </div>
      </div>
    `;
    container.innerHTML += card;
  });
}


</script>



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
        .active-btn {
            @apply bg-[#FEF2F1] text-red-500 border-red-500;
            
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

<body id="top">


<!-- Homepage Section -->
<div id="homepage" class="font-montserrat md:px-28 pt-14  space-y-16 flex flex-col items-center">
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
            <a href="./whoweare.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
            <a href="./ourgin.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
            <a href="./whatweoffer.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHAT WE OFFER</a>
            <a href="findourstores.html" class="border-b-[2.7px] border-b-red-500 text-red-500 font-semibold  pb-[1.7px]">FIND OUR STORES</a>
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

<div id="world-btn" class="fixed inset-0 hidden flex items-center justify-center z-50 p-4">
  <div class="bg-gray-50/60 backdrop-blur-lg rounded-2xl shadow-2xl p-6 md:p-12 w-full max-w-lg md:max-w-[945px] h-[650px] md:h-[580px] relative flex flex-col md:justify-center justify-start items-start overflow-y-auto">
    
    <button class="absolute top-7 right-7 text-black text-2xl font-bold" onclick="closeModal('world-btn')">✕</button>
    
    <h2 class="text-2xl md:text-[32px] w-full text-left font-montserrat pb-8 md:pb-24 pt-4 md:pt-0">Select a Location</h2>
    
    <div id="Continents" class="flex flex-col space-y-8 md:space-y-12 w-full">
        
        <div id="NorthAmerica" class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-8 font-montserrat items-start md:items-center">
            <p class="text-lg md:text-[20px] font-semibold flex-shrink-0 w-auto md:w-[170px]">North America</p>
            <div class="flex flex-wrap gap-3">
                <div class="w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer border-black bg-white justify-center items-center space-x-2">
                    <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/usa.png"/>
                    <a href="https://potomacwines.com/spirits/gin/smidgin-small-batch-gin" class="text-base md:text-[20px]">United States</a>
                </div>
            </div>
        </div>

        <div id="Europe" class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-12 font-montserrat items-start md:items-center">
            <p class="text-lg md:text-[20px] font-semibold flex-shrink-0 w-auto md:w-[150px]">Europe</p>
            <div class="flex flex-col space-y-3 w-full">
                <div class="flex flex-wrap gap-3">
                    <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                        <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/serbia.png"/>
                        <a class="text-base md:text-[20px]">Serbia</a>
                    </div>
                    <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                        <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/montenegro.png"/>
                        <a class="text-base md:text-[20px]">Montenegro</a>
                    </div>
                    <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                        <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/slo.png"/>
                        <a href="https://makedonija-trade.si/izdelek/premium-gin-smidgin-07-l/" class="text-base md:text-[20px]">Slovenia</a>
                    </div>
                    <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                        <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/italy.png"/>
                        <a href="https://alambicco.shop/gin/14-smidgin-classico.html" class="text-base md:text-[20px]">Italy</a>
                    </div>
                </div>
                <div class="flex flex-wrap gap-3">
                    <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                        <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/germany.png"/>
                        <a href="https://sunny-taste.de/" class="text-base md:text-[20px]">Germany</a>
                    </div>
                    <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                        <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/swit.png"/>
                        <a href="https://www.gin-garage.ch/?s=smidgin" class="text-base md:text-[20px]">Switzerland</a>
                    </div>
                    <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                        <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/malta.png"/>
                        <a href="https://imbierekwines.com/" class="text-base md:text-[20px]">Malta</a>
                    </div>
                </div>
            </div>
        </div> 

        <div id="Asia" class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-11 font-montserrat items-start md:items-center">
            <p class="text-lg md:text-[20px] font-semibold flex-shrink-0 w-auto md:w-[150px]">Asia,<br class="md:hidden"/> Middle East</p> 
            <div class="flex flex-wrap gap-3">
                <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                    <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/dubai.png"/>
                    <a class="text-base md:text-[20px]">UAE, Dubai</a>
                </div>
                <div class="hover:border-red-500 hover:bg-red-50 duration-300 transition-colors hover:cursor-pointer w-auto flex py-2 px-3 md:py-[13px] md:px-[20px] rounded-2xl border border-black bg-white justify-center items-center space-x-2">
                    <img class="w-[20px] h-[15px] md:w-[24px] md:h-[18px] rounded-[4px]" src="./img/australia.png"/>
                    <a href="https://www.virtualliquor.com.au/product/smidgin-gin-classic-700ml/" class="text-base md:text-[20px]">Australia</a>
                </div>
            </div>
        </div>
        
    </div>
  </div>
</div>

<!-- Main Content -->
<main class="md:px-32 md:pt-20 pt-6 mb-20">
    <div class="text-center md:mb-8 mb-12">        
        <br/>
        <h2 class=" justify-center text-3xl flex md:flex-row flex-col sm:text-4xl md:text-5xl font-Baskervville font-thin  text-black mb-4 sm:mb-6">FIND OUR STORES <span class="text-red-500 md:pl-3"> WORLDWIDE</span></h2><br/>
        <p class="text-black hidden md:block font-montserrat w-2/3 mx-auto mb-6 sm:mb-8 text-sm sm:text-base px-4">Smidgin is available in select boutiques, bars, and retailers around the world. Explore our global map to discover where you can sip, shop, and experience the spirit of Smidgin.</p>
        <div class="flex flex-row justify-center items-center space-x-5">
            <div class="relative inline-block text-left">
                <button id="dropdownToggle" aria-haspopup="true" aria-expanded="false" aria-controls="dropdownMenu" class="font-montserrat px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white hover:text-exam-blue duration-150 flex items-center justify-between text-[14px] md:w-40">
                    <span>MACEDONIA</span>
                    <i id="dropdownArrow" class="fa-solid fa-chevron-down ml-2 text-xs transition-all duration-300"></i>
                </button>
                
<div id="dropdownMenu" role="menu" aria-labelledby="dropdownToggle"
  class="absolute font-montserrat flex flex-col items-center justify-start space-y-2 left-0 mt-2 w-40 rounded-lg bg-white shadow-xl z-50 ring-1 ring-black ring-opacity-5 opacity-0 scale-95 pointer-events-none transition-all duration-300 ease-out max-h-52 overflow-y-auto">

  <a href="#" data-city="Skopje" onclick="setCurrentCity('Skopje')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Skopje</a>
  <a href="#" data-city="Bitola" onclick="setCurrentCity('Bitola')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Bitola</a>
  <a href="#" data-city="Kumanovo" onclick="setCurrentCity('Kumanovo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Kumanovo</a>
  <a href="#" data-city="Prilep" onclick="setCurrentCity('Prilep')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Prilep</a>
  <a href="#" data-city="Tetovo" onclick="setCurrentCity('Tetovo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Tetovo</a>
  <a href="#" data-city="Veles" onclick="setCurrentCity('Veles')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Veles</a>
  <a href="#" data-city="Ohrid" onclick="setCurrentCity('Ohrid')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Ohrid</a>
  <a href="#" data-city="Struga" onclick="setCurrentCity('Struga')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Struga</a>
  <a href="#" data-city="Gostivar" onclick="setCurrentCity('Gostivar')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Gostivar</a>
  <a href="#" data-city="Strumica" onclick="setCurrentCity('Strumica')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Strumica</a>
  <a href="#" data-city="Kavadarci" onclick="setCurrentCity('Kavadarci')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Kavadarci</a>
  <a href="#" data-city="Kochani" onclick="setCurrentCity('Kochani')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Kochani</a>
  <a href="#" data-city="Kichevo" onclick="setCurrentCity('Kichevo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Kichevo</a>
  <a href="#" data-city="Shtip" onclick="setCurrentCity('Shtip')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Shtip</a>
  <a href="#" data-city="Radovish" onclick="setCurrentCity('Radovish')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Radovish</a>
  <a href="#" data-city="Gevgelija" onclick="setCurrentCity('Gevgelija')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Gevgelija</a>
  <a href="#" data-city="Debar" onclick="setCurrentCity('Debar')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Debar</a>
  <a href="#" data-city="Kriva Palanka" onclick="setCurrentCity('Kriva Palanka')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Kriva Palanka</a>
  <a href="#" data-city="Sveti Nikole" onclick="setCurrentCity('Sveti Nikole')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Sveti Nikole</a>
  <a href="#" data-city="Negotino" onclick="setCurrentCity('Negotino')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Negotino</a>
  <a href="#" data-city="Delchevo" onclick="setCurrentCity('Delchevo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Delchevo</a>
  <a href="#" data-city="Vinica" onclick="setCurrentCity('Vinica')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Vinica</a>
  <a href="#" data-city="Probishtep" onclick="setCurrentCity('Probishtip')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Probishtep</a>
  <a href="#" data-city="Kratovo" onclick="setCurrentCity('Kratovo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Kratovo</a>
  <a href="#" data-city="Bogdanci" onclick="setCurrentCity('Bogdanci')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Bogdanci</a>
  <a href="#" data-city="Demir Kapija" onclick="setCurrentCity('Demir Kapija')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Demir Kapija</a>
  <a href="#" data-city="Dojran" onclick="setCurrentCity('Dojran')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Dojran</a>
  <a href="#" data-city="Resen" onclick="setCurrentCity('Resen')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Resen</a>
  <a href="#" data-city="Valandovo" onclick="setCurrentCity('Valandovo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Valandovo</a>
  <a href="#" data-city="Berovo" onclick="setCurrentCity('Berovo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Berovo</a>
  <a href="#" data-city="Pehchevo" onclick="setCurrentCity('Pehchevo')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Pehchevo</a>
  <a href="#" data-city="Makedonska Kamenica" onclick="setCurrentCity('Makedonska Kamenica')" role="menuitem" class="text-red-500 text-center w-full hover:bg-red-50 block px-4 py-3 text-sm hover:text-[#1977cc]">Makedonska Kamenica</a>

</div>

                


            </div>
            
            <script>
            document.addEventListener('DOMContentLoaded', () => {
             const toggle = document.getElementById('dropdownToggle');
             const menu = document.getElementById('dropdownMenu');
             const arrow = document.getElementById('dropdownArrow');
           
             function openMenu() {
               menu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
               menu.classList.add('opacity-100', 'scale-100');
               toggle.setAttribute('aria-expanded', 'true');
               arrow.className = "fa-solid fa-chevron-up ml-2 text-xs"; // change icon to up
             }
           
             function closeMenu() {
               menu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
               menu.classList.remove('opacity-100', 'scale-100');
               toggle.setAttribute('aria-expanded', 'false');
               arrow.className = "fa-solid fa-chevron-down ml-2 text-xs"; // change icon back to down
             }
           
             function toggleMenu(e) {
               e.stopPropagation();
               if (menu.classList.contains('opacity-0')) {
                 openMenu();
               } else {
                 closeMenu();
               }
             }
           
             toggle.addEventListener('click', toggleMenu);
           
             document.addEventListener('click', (e) => {
               if (!menu.contains(e.target) && !toggle.contains(e.target)) {
                 closeMenu();
               }
             });
           
             document.addEventListener('keydown', (e) => {
               if (e.key === 'Escape') closeMenu();
             });
           
             window.addEventListener('resize', closeMenu);
           });
            </script>
            

            <button onclick="openModal('world-btn')" id="world" class=" px-8 font-montserrat sm:w-auto border border-white py-3 rounded-xl shadow-2xl hover:border-red-500 hover:bg-red-50 duration-300 transition-colors flex items-center justify-center space-x-2"><span>WORLD</span> <i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>
    <br/>
    
    <div class="flex flex-row justify-between items-center mb-6 sm:mb-8 space-y-4 sm:space-y-0">
        <h3 id="page-title" class="w-1/2 md:text-2xl sm:text-2xl font-montserrat font-semibold text-black text-start md:pl-0 pl-7 md:text-center sm:text-left">Buy Smidgin in Skopje, Macedonia</h3>
        <div class="relative  flex md:right-0 right-8 bg-[#FEF2F1] rounded-md h-[48px] w-[160px] md:w-[280px]">
            <span id="indicator" class="shadow-[0_6px_12px_rgba(239,68,68,0.6)] absolute top-1 left-1 w-[80px] md:w-[126px] h-[40px] rounded-md bg-[#FEF2F1] transition-transform duration-300"></span>
            <button id="buy-btn" onclick="switchTab('buy')" class="relative z-10  px-[32px] py-[12px]    text-[12px] md:text-[18px] flex-1 text-center text-red-500 font-montserrat"> BUY </button>
            <button id="taste-btn" onclick="switchTab('taste')" class="relative z-10 px-[32px] py-[12px] -ml-5 md:-ml-0 text-[12px] md:text-[18px] flex-1 text-center text-gray-500 font-montserrat"> TASTE </button>
        </div>
    </div>
        
<div id="buy" class="transition-all duration-700 flex justify-center flex-wrap md:gap-x-7 gap-x-4 gap-y-8">
</div>

<div id="taste" class="hidden -translate-y-10 pointer-events-none transition-all duration-700 flex justify-center flex-wrap gap-x-4 md:gap-x-7 gap-y-8">
</div>



</main>
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

<script src="main.js"></script>
</body>
</html>
