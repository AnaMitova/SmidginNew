<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="./output.css" rel="stylesheet" type="text/css"/>
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://kit.fontawesome.com/e70ea989f6.js" crossorigin="anonymous"></script>
    <script>
        // Global Modal Functions - Defined Once
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
        #slideshowReviews {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #slideshowReviews::-webkit-scrollbar {
          display: none; 
        }

        

    </style>
        <style>
        /* Removing number arrows for a cleaner look */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

</head>
<a href="#top"
   id="backToTop"
   class="fixed bottom-6 right-6 z-[9999]
          w-12 h-12 flex justify-center items-center
          bg-white text-red-500 rounded-full
          shadow-2xl shadow-black hover:scale-110
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
    <div id="AGE">
<div id="top" class="overflow-hidden"> <div id="age-gate" class="hidden fixed inset-0 z-[10000] flex flex-col items-center justify-center bg-white/50 backdrop-blur-lg transition-opacity duration-700">
        <h1 class="text-4xl font-Baskervville md:text-5xl tracking-[0.2em] font-light text-black mb-2 uppercase text-center px-4">
            Welcome to <span class="text-[#ff5a4e]">Smidgin</span>
        </h1>
        
        <p class="text-sm  font-montserrat text-gray-700 mb-12 text-center px-6">
            Enter your birth year to prove you're of legal drinking age.
        </p>

        <div class="flex gap-4 md:gap-6 font-montserrat">
            <div class="flex flex-col items-center font-montserrat">
                <input type="number" id="day" placeholder="DD"
    min="1" max="31"
    oninput="limitDigits(this,2); autoNext(this,'month')"
    class="w-16 md:w-20 text-xl text-center bg-transparent border-b-2 border-[#ff5a4e] placeholder-[#ff5a4e] text-[#ff5a4e] focus:outline-none">
            </div>
            <div class="flex flex-col items-center">
            <input type="number" id="month" placeholder="MM"
    min="1" max="12"
    oninput="limitDigits(this,2); autoNext(this,'year')"
    class="w-16 md:w-20 text-xl text-center bg-transparent border-b-2 border-[#ff5a4e] placeholder-[#ff5a4e] text-[#ff5a4e] focus:outline-none">
            </div>
            <div class="flex flex-col items-center">
        <input type="number" id="year" placeholder="YYYY"
    min="1900" max="2100"
    oninput="limitDigits(this,4); checkAge()"
    class="w-24 md:w-32 text-xl text-center bg-transparent border-b-2 border-[#ff5a4e] placeholder-[#ff5a4e] text-[#ff5a4e] focus:outline-none">            </div>
        </div>

        <p id="error" class="hidden mt-6 text-red-600 text-xs font-sans font-bold">
            You must be 18 or older to enter.
        </p>
    </div>

    <div id="content-wrapper" class="blur-md transition-all duration-700">
        
        <a href="#top" id="backToTop" class="fixed bottom-6 right-6 z-[9999] w-12 h-12 flex justify-center items-center bg-white text-red-500 rounded-full shadow-2xl shadow-black hover:scale-110 transition-all duration-300 opacity-0 pointer-events-none">
            <i class="fa-solid fa-arrow-up text-xl"></i>
        </a>



        </div>
        <script>
function limitDigits(el, max) {
    if (el.value.length > max) {
        el.value = el.value.slice(0, max);
    }
}
</script>

<script>
function isRealDate(y, m, d) {
    const test = new Date(y, m - 1, d);
    return test.getFullYear() == y &&
           test.getMonth() == m - 1 &&
           test.getDate() == d;
}

function checkAge() {
    const d = parseInt(day.value);
    const m = parseInt(month.value);
    const y = parseInt(year.value);

    if (!d || !m || !y || year.value.length !== 4) return;

    // ❌ invalid calendar date
    if (!isRealDate(y, m, d)) {
        document.getElementById('error').textContent = "Invalid birth date.";
        document.getElementById('error').classList.remove('hidden');
        return;
    }

    const birthDate = new Date(y, m - 1, d);
    const today = new Date();

    let age = today.getFullYear() - birthDate.getFullYear();
    const mdiff = today.getMonth() - birthDate.getMonth();

    if (mdiff < 0 || (mdiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    if (age >= 18) {
        localStorage.setItem("ageVerified", "true");

        const gate = document.getElementById('age-gate');
        const wrapper = document.getElementById('content-wrapper');

        gate.classList.add('opacity-0');
        wrapper.classList.remove('blur-md');
        document.body.classList.remove('overflow-hidden');

        setTimeout(() => gate.classList.add('hidden'), 700);
    } else {
        document.getElementById('error').textContent =
            "You must be 18 or older to enter.";
        document.getElementById('error').classList.remove('hidden');
    }
}

</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const gate = document.getElementById("age-gate");
    const wrapper = document.getElementById("content-wrapper");

    if (localStorage.getItem("ageVerified") === "true") {
        gate.classList.add("hidden");
        wrapper.classList.remove("blur-md");
        document.body.classList.remove("overflow-hidden");
    } else {
        gate.classList.remove("hidden"); // 👈 show only now
        document.body.classList.add("overflow-hidden");
    }
});
</script>


</div>
    </div>
<div id="homepage" class="font-montserrat md:px-28 pt-14 bg-[#FEF2F1] md:h-[650px] h-[350px] space-y-16 flex flex-col items-center">
    <div id="navbar" class="flex w-[99%] md:px-0 px-9 justify-between items-center">
        <a href="./index.html" id="logo" class="md:w-[208px] w-[180px]">
            <img src="./img/logo.png"/>
        </a>
        <i onclick="openModal('ham-menu')" class="fa-solid right-10 top-12 fixed z-50 cursor-pointer md:hidden w-[46px] text-xl h-[46px] text-center flex justify-center items-center text-white bg-red-500 rounded-full p-2 fa-bars"></i>
        <div id="navs" class="hidden md:flex space-x-11 text-base items-center">
            <a href="./whoweare" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
            <a href="./ourgin" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
            <a href="./whatweoffer" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHAT WE OFFER</a>
            <a href="./findourstores" class="border-b-[1.5px] border-b-black pb-[1.7px]">FIND OUR STORES</a>
            <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="px-3 py-3 bg-red-500  shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BUY ONLINE</a>
        </div>
    </div>
    <div id="video" class="md:w-[99%] w-[90%] -mb-7">
      <video 
        class="w-full rounded-3xl shadow-md shadow-neutral-500"
        src="./SMIDGIN VIDEO.mp4"
        autoplay
        loop
        muted
        playsinline
      >
        Sorry, your browser doesn’t support embedded videos.
      </video>
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

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>





<style>
    /* REMOVED .hotspot-active class */

    /* Add base transition to the bottle image for smooth glow */
    #bottle-image {
        transition: filter 0.2s ease-in-out;
    }

    /* Define the glow effect */
    .bottle-glow {
        /* Tailwind red-500 */
        filter: drop-shadow(0 0 12px rgba(239, 68, 68, 0.8)); 
    }
    
.ingredient-icon {
    /* Ensures the color change is smooth */
    transition: filter 0.2s ease-in-out; 
}

/* This is the key part that changes the icon's color to red-500 */
.ingredient-icon.active {
  /* Red filter on hover/active */
  filter: brightness(0) saturate(100%) invert(27%) sepia(98%) saturate(1500%) hue-rotate(350deg) brightness(95%) contrast(95%);
}
</style>

<div id="gin" class="bg-white font-Baskervville flex md:flex-row flex-row-reverse items-center justify-center md:items-center md:justify-start md:space-x-40 md:px-36 px-0 md:pt-52">
    
    <div class="md:w-1/3 w-[140px] md:pl-14 relative"> <img src="img/classic.png" class=" w-[303px]" id="bottle-image"/>
        
        <div id="hotspot-cap" class="hotspot absolute cursor-pointer" style="top: 0%; left: 38%; width: 24%; height: 10%; border-radius: 50% 50% 10px 10px;"></div>
        <div id="hotspot-glass" class="hotspot absolute cursor-pointer" style="top: 10%; left: 32%; width: 36%; height: 25%; border-radius: 20px 20px 0 0;"></div>
        <div id="hotspot-label" class="hotspot absolute cursor-pointer" style="top: 35%; left: 12%; width: 76%; height: 50%; border-radius: 25px;"></div>
        <div id="hotspot-bottom-glass" class="hotspot absolute cursor-pointer" style="top: 85%; left: 15%; width: 70%; height: 15%; border-radius: 0 0 40% 40%;"></div>
    </div>

    <div id="bottle-headline" class="flex w-[56%]  flex-col space-y-3">
        <div  class="flex md:text-5xl text-[20px] flex-col md:space-y-4 md:min-h-[160px]">
            <p>A BOTTLE BORN OF</p>
            <p><SPAN class="text-red-500">MACEDONIAN</SPAN></p>
            <p>CRAFT</p>
        </div>

        <div class="flex items-center pt-5 space-x-4">
            <i class="fa-solid fa-computer-mouse text-red-500"></i>
            <p class="font-montserrat text-sm text-red-500 h-10 md:h-auto">Hover over the bottle to discover its story</p>
        </div>
    </div>
</div>




<script>
// Self-executing function to avoid polluting global scope
(function() {
    // Media query to define what a "small screen" is (max-width: 767px matches Tailwind's 'md' breakpoint)
    const isSmallScreen = window.matchMedia('(max-width: 767px)').matches;
    let currentActiveHotspot = null; // Track the currently active hotspot for the click toggle

    // Wait for the DOM to be fully loaded before running script
    document.addEventListener('DOMContentLoaded', () => {

        // --- Interactive Bottle Story ---
        const capHotspot = document.getElementById('hotspot-cap');
        const glassHotspot = document.getElementById('hotspot-glass');
        const labelHotspot = document.getElementById('hotspot-label');
        const bottomGlassHotspot = document.getElementById('hotspot-bottom-glass');
        
        // Target the headline div
        const storyText = document.getElementById('bottle-headline');
        
        // Get the bottle image itself
        const bottleImage = document.getElementById('bottle-image');

        // Get the instruction text element
        const instructionText = document.querySelector('#gin .font-montserrat.text-sm.text-red-500');

        // Fix: Update instruction text for small screens to say "Click"
        if (isSmallScreen && instructionText) {
             instructionText.textContent = 'Click over the bottle to discover its story';
        }
        
        // Check if the storyText element exists before proceeding
        if (storyText && bottleImage) {
            // Store the default HTML
            const defaultStoryHTML = storyText.innerHTML; 

            // Define the stories as HTML strings (formatted to fit the space)
            const stories = {
                cap: `<div class="flex flex-col md:-mt-24">
                <img src="sliki/wax.png" alt="Hand-Dipped Wax Seal" class="w-[120px] md:w-[250px] hidden md:block self-start mx-auto md:mx-0 "/>
                      <p class="text-red-500 md:text-4xl text-2xl">HAND-DIPPED WAX SEAL</p>
                      <p class="font-montserrat md:text-lg text-sm pt-2">Hand-applied wax seal,carefully curved for easy opening.Each seal is beautifully embossed with the iconic Macedonian lion,symbolyzing the rich history of the centuries-old heritage of the region</p>
                    <img src="sliki/cap.png" alt="Hand-Dipped Wax Seal" class="w-[90px] md:w-[200px] self-end -mb-0 md:-mb-20 mx-auto md:mx-0 "/>

                      </div>`,
                glass: `<div class="flex-col flex">
                <img src="sliki/mask.png" alt="The Bottle Design" class="w-2/3 -pr-20 x-auto md:mx-0 self-end"/>
                        <p class="text-red-500 md:text-4xl text-2xl -mt-8">THE BOTTLE</p>
                        <p class="font-montserrat md:text-lg text-sm pt-2">The timeless design of our flavor bottle is inspired by the elegant and sophisticated gold mask from roman times discovered in the picturesque Ohrid region,exuding reinfimenet and class in every detail.</p>
                        <p class="font-montserrat md:text-lg text-sm pt-2 md:min-h-0 min-h-[140px]"></p>
                        </div>`,
                label: `<p class="text-red-500 md:text-4xl text-2xl">OUR LABEL</p>
                        <p class="font-montserrat md:text-lg text-sm pt-2">Experience the epitome of refinement and class with our award-winning design label.Each bottle is carefully hand-applied with precision and an eye for detail,elevating any space with timeless elegance and sophistication.</p>
                        <img src="sliki/hands.png" alt="Our Label Design" class="w-2/3 mb-4 mx-auto md:mx-0 rounded-xl shadow-lg"/>`
            };

            // Function to change text and add hover effect
            function showStory(html) {
                // Ensure the container class is maintained while updating content
                storyText.className = "flex w-[56%]  flex-col space-y-3 pl-3"; 
                storyText.innerHTML = html;
                bottleImage.classList.add('bottle-glow');
            }

            // Function to reset text and remove hover effect
            function resetStory() {
                storyText.innerHTML = defaultStoryHTML;
                // Reapply the necessary classes for the default view
                storyText.className = "flex w-[56%]  flex-col space-y-3 pl-3"; 
                bottleImage.classList.remove('bottle-glow');
            }

            // --- Event Handling Logic ---
            const hotspots = [
                { element: capHotspot, story: stories.cap, name: 'cap' },
                { element: glassHotspot, story: stories.glass, name: 'glass' },
                { element: labelHotspot, story: stories.label, name: 'label' },
                // Use bottomGlassHotspot for the 'glass' story
                { element: bottomGlassHotspot, story: stories.glass, name: 'glass' } 
            ];

            // Attach events based on screen size
            if (isSmallScreen) {
                // Use click event for small screens (toggle functionality)
                hotspots.forEach(hotspot => {
                    if (hotspot.element) {
                        // Use the unique element ID for the hotspot name tracking
                        const hotspotName = hotspot.element.id; 
                        
                        hotspot.element.addEventListener('click', (e) => {
                            e.stopPropagation(); // Prevent the document listener from firing immediately
                            
                            // Check if this specific hotspot is already active
                            if (currentActiveHotspot === hotspotName) {
                                // If already active, reset (toggle off)
                                resetStory();
                                currentActiveHotspot = null;
                            } else {
                                // If a different hotspot or none is active, show the new story
                                showStory(hotspot.story);
                                currentActiveHotspot = hotspotName;
                            }
                        });
                    }
                });
                
                // Add a document click listener to reset if the user clicks anywhere else
                document.addEventListener('click', (e) => {
                    // Check if the click target is inside ANY of the hotspot elements
                    const isClickOnHotspot = hotspots.some(h => h.element && h.element.contains(e.target));
                    
                    // If the click was NOT on a hotspot AND there is an active story, reset it
                    if (!isClickOnHotspot && currentActiveHotspot !== null) {
                        resetStory();
                        currentActiveHotspot = null;
                    }
                });

            } else {
                // Use mouseenter/mouseleave for large screens (hover functionality)
                hotspots.forEach(hotspot => {
                    if (hotspot.element) {
                        hotspot.element.addEventListener('mouseenter', () => showStory(hotspot.story));
                        hotspot.element.addEventListener('mouseleave', () => resetStory());
                    }
                });
            }

        } else {
            console.error("Bottle headline ('bottle-headline') or image ('bottle-image') not found.");
        }
    });
})();
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

<!-- 14 Botanicals Section -->
<!-- 14 BOTANICALS  -->
<div class="min-h-screen -mt-7 flex flex-col items-center justify-center p-4 font-sans overflow-hidden">
    
    <div class="flex flex-col items-center gap-8 w-full max-w-[1600px] lg:flex-row lg:justify-center lg:items-center lg:gap-10 xl:gap-20 mx-auto">
        
        <div class="relative flex-shrink-0 order-2 lg:order-1
                    w-[320px] h-[320px] 
                    sm:w-[500px] sm:h-[500px] 
                    lg:w-[500px] lg:h-[500px] 
                    xl:w-[600px] xl:h-[600px] 
                    2xl:w-[700px] 2xl:h-[700px]"> 
            
            <div id="logo-center" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 transition-opacity duration-300">
                <img 
                    src="./icons/logo.png" 
                    alt="SMIDGIN Logo" 
                    class="object-contain
                           w-32 h-32 
                           sm:w-52 sm:h-52 
                           lg:w-48 lg:h-48 
                           xl:w-60 xl:h-60 
                           2xl:w-72 2xl:h-72"/>
            </div>
            
            <div id="ingredients-container" class="absolute inset-0"></div>

            <div id="mobile-description-overlay" class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[60%] h-[60%] p-2 z-20 flex items-center justify-center transition-all duration-300 rounded-xl">
            </div>
        </div>

        <div id="description-panel-wrapper" class="w-full max-w-lg lg:w-[400px] xl:w-[500px] h-fit lg:h-[450px] xl:h-[500px] flex-shrink-0 order-1 lg:order-2 mb-4 lg:mb-0 z-20">
            <div id="description-panel" class="h-full font-Baskervville flex flex-col items-center lg:items-start justify-center text-center lg:text-left gap-4 lg:gap-6 p-4 bg-white/90 lg:bg-transparent rounded-xl lg:rounded-none">
            </div>
        </div>
        
    </div>
</div>

<script>
    const ingredients = [
        { name: "DRY GRAPE", description: "Ripe dry grape, specific sweet, fruity aroma", image: "icons/icon14.png", angle: 0 },
        { name: "LIME RIND", description: "Fresh fragrant aromas, bright subtlety that ties everything together", image: "icons/icon12.png", angle: 25.7 },
        { name: "ALMOND", description: "Almonds lend a delectable creaminess and rich structure in mouthfeel", image: "icons/icon4.png", angle: 51.4 },
        { name: "ORANGE PEEL", description: "Sweet orange zest on the aroma and aftertaste", image: "icons/icon3.png", angle: 77.1 },
        { name: "MOUNTAIN TEA", description: "Macedonian mountain tea, our stamp, soft, sweet floral aroma", image: "icons/icon2.png", angle: 102.8 },
        { name: "GRAPEFRUIT RIND", description: "Bitter fresh grapefruit aroma, reaches in aftertaste", image: "icons/icon7.png", angle: 128.5 },
        { name: "LEMON RIND", description: "Contribute fresh citrus note, crispness in the aroma", image: "icons/icon11.png", angle: 154.2 },
        { name: "GINGER", description: "Sweet, peppery flavor with a delicate touch of warmth and freshness", image: "icons/icon8.png", angle: 179.9 },
        { name: "CORIANDER", description: "Second most used botanical, spicy, nutty and slightly citrusy notes", image: "icons/icon10.png", angle: 205.6 },
        { name: "BLACK PEPPER", description: "Piquant, spicy and warming", image: "icons/icon6.png", angle: 231.3 },
        { name: "WHOLE CLOVES", description: "Woody spicy aroma and complexity on aroma and aftertaste", image: "icons/icon13.png", angle: 257 },
        { name: "CINNAMON BARK", description: "Warm spicy notes, sweetness on taste and reaches on the aftertaste", image: "icons/icon9.png", angle: 282.7 },
        { name: "JUNIPER BERRIES", description: "Juniper provides gin with its distinctive freshness, aromas as pine, resiny and hint", image: "icons/icon1.png", angle: 308.4 },
        { name: "ANGELICA ROOT", description: "Warm and nutty with sweet, spicy undertones that add depth and a cozy aromatic touch.", image: "icons/icon5.png", angle: 334.1 }
    ];

    const container = document.getElementById('ingredients-container');
    const descriptionPanel = document.getElementById('description-panel');
    const mobileOverlay = document.getElementById('mobile-description-overlay');
    const centerLogo = document.getElementById('logo-center');
    
    const LAPTOP_BREAKPOINT = 1024; 

    // --- Core Functions ---

    function setInitialDescription() {
        const isSmallScreen = window.innerWidth < LAPTOP_BREAKPOINT;
        
        descriptionPanel.innerHTML = `
            <div class="flex -mt-3 justify-center ${isSmallScreen ? '' : 'justify-start'} items-end space-x-3">
                <p class="text-[40px] md:text-5xl lg:text-6xl xl:text-7xl text-red-500">14</p>
                <p class="text-[30px] md:text-4xl lg:text-4xl xl:text-5xl">BOTANICALS </p>
            </div>
            <p class="text-[30px] md:text-4xl lg:text-4xl xl:text-5xl -mt-4 lg:-mt-4 text-center lg:text-start">FOR A DISTINCT GIN</p>
            <div class="flex items-center pt-5 space-x-4">
                <i class="fa-solid ${isSmallScreen ? 'fa-hand-pointer' : 'fa-computer-mouse'} text-red-500"></i>
                <p class="font-montserrat text-xs text-red-500">
                    ${isSmallScreen ? 'Tap icons to learn more' : 'Hover over icons to learn more'}
                </p>
            </div>
        `;
        mobileOverlay.classList.add('hidden'); 
        centerLogo.classList.remove('hidden'); 
    }

    function displayDesktopDescription(ingredient) {
        descriptionPanel.innerHTML = `
            <div class="flex flex-col items-start font-montserrat text-red-500 justify-center h-full gap-4 lg:gap-6 px-2">
                <img src="${ingredient.image}" alt="${ingredient.name}" class="w-20 h-20 lg:w-24 lg:h-24 xl:w-28 xl:h-28 object-contain mb-2">
                <div class ="flex flex-col items-start justify-start">
                    <h3 class="text-2xl lg:text-2xl xl:text-3xl font-bold text-red-500 mb-2">${ingredient.name}</h3> 
                    <p class="text-base lg:text-base xl:text-lg text-start text-red-500 leading-relaxed">${ingredient.description}</p> 
                </div>
            </div>
        `;
    }

    function displayMobileOverlay(ingredient) {
        centerLogo.classList.add('hidden'); 
        mobileOverlay.classList.remove('hidden'); 
        
        const isTablet = window.innerWidth >= 640 && window.innerWidth < 1024;
        const widthClass = isTablet ? 'w-[50%]' : 'w-[70%]';

        mobileOverlay.className = `absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ${widthClass} h-[70%] p-2 z-20 flex items-center justify-center transition-all duration-300 rounded-xl`;
        
        mobileOverlay.innerHTML = `
            <div class="flex flex-col items-center justify-center text-center font-montserrat text-red-500 z-30 p-1 bg-white/95 rounded-xl shadow-lg border border-red-100 p-6">
                <img src="${ingredient.image}" alt="${ingredient.name}" class="w-16 h-16 sm:w-20 sm:h-20 object-contain mb-3">
                <h3 class="text-lg sm:text-2xl font-bold text-red-500 mb-2">${ingredient.name}</h3> 
                <p class="text-sm sm:text-base text-red-500 leading-snug max-w-xs px-1">${ingredient.description}</p>
                <button id="close-overlay" class="mt-4 px-5 py-2 bg-red-500 text-white font-bold rounded-full text-sm shadow-md hover:bg-red-600 transition duration-150">CLOSE</button>
            </div>
        `;

        document.getElementById('close-overlay').addEventListener('click', (e) => {
            e.stopPropagation();
            setInitialDescription(); 
        });
    }

    // --- Main Renderer ---

    function renderIngredients() {
        container.innerHTML = ''; 
        setInitialDescription();

        const containerRect = container.getBoundingClientRect();
        const centerX = containerRect.width / 2;
        const centerY = containerRect.height / 2;

        const width = window.innerWidth;
        const isLaptopOrDesktop = width >= LAPTOP_BREAKPOINT;

        // --- RESPONSIVE SCALING LOGIC ---
        let radiusMultiplier;
        let iconSize;

        if (width < 640) {
            // Phone
            radiusMultiplier = 0.45;
            iconSize = 52;
        } else if (width < 1024) {
            // Tablet (Vertical Layout)
            radiusMultiplier = 0.42; 
            iconSize = 64; 
        } else if (width < 1280) {
            // Small Laptop (13"-14" screen)
            radiusMultiplier = 0.38; 
            iconSize = 58; 
        } else if (width < 1536) {
            // Large Laptop / Standard Desktop (15"-24" screen)
            radiusMultiplier = 0.38; 
            iconSize = 68;
        } else {
            // Large Monitor
            radiusMultiplier = 0.38;
            iconSize = 76;
        }
        
        const radius = Math.min(containerRect.width, containerRect.height) * radiusMultiplier;

        ingredients.forEach((ingredient) => {
            const angleRad = (ingredient.angle * Math.PI) / 180;
            const x = radius * Math.cos(angleRad) + centerX;
            const y = radius * Math.sin(angleRad) + centerY;

            const iconDiv = document.createElement('div');
            iconDiv.className = 'absolute transform -translate-x-1/2 -translate-y-1/2 cursor-pointer transition-all duration-200 hover:z-30 hover:scale-110';
            iconDiv.style.left = `${x}px`;
            iconDiv.style.top = `${y}px`;
            
            const img = document.createElement('img');
            img.src = ingredient.image;
            img.alt = ingredient.name;
            img.className = 'ingredient-icon object-contain transition-transform duration-200 ease-in-out';
            img.style.width = `${iconSize}px`;
            img.style.height = `${iconSize}px`;

            iconDiv.appendChild(img);
            container.appendChild(iconDiv);

            if (!isLaptopOrDesktop) {
                // Click interaction for Mobile & Tablet
                iconDiv.addEventListener('click', () => {
                    displayMobileOverlay(ingredient);
                });
                
                iconDiv.addEventListener('touchstart', () => img.classList.add('active'));
                iconDiv.addEventListener('touchend', () => setTimeout(() => img.classList.remove('active'), 300));

            } else {
                // Hover interaction for Laptops & Desktops
                iconDiv.addEventListener('mouseenter', () => {
                  img.classList.add('active');
                    displayDesktopDescription(ingredient);
                });

                iconDiv.addEventListener('mouseleave', () => {
                  img.classList.remove('active');
                    setInitialDescription();
                });
            }
        });
    }

    renderIngredients();
    window.addEventListener('resize', renderIngredients);
</script>
<!-- 14 BOTANICALS END -->

<div id="Distillery" class="md:pt-16 pt-16">
    <div class="flex md:flex-row flex-col px-8 md:px-36 justify-between ">
            <div id="levo" class="md:w-1/2 font-Baskervville flex flex-col md:-space-y-3 -space-y-7">
                <div class="flex space-x-3">
                    <p class="md:text-5xl text-[30px]">VISIT THE <span class="text-red-500">SMIDGIN</span></p>
                </div>
                    <br/>
                    <p class="md:text-5xl text-[30px] ">DISTILLERY</p>
                </div>
            <div id="desno" class="md:w-1/2 mt-5 md:mt-0 font-montserrat md:text-xl text-[16px]">
                <p>Smidgin is distilled and bottled at a unique location in the center of Skopje, in the historic <span class="text-red-500 font-semibold">MCM building</span>, the house of the Ruben family, in Debar Maalo.</p>
            </div>
    </div>
    <div class="flex md:flex-row flex-col items-center justify-center md:justify-start md:pl-36 md:space-x-14 pt-9">
        <div class="hidden md:block md:w-1/2">
            <img src="./img/Screenshot 2025-08-30 at 14.26.32.png"/>
        </div>
        <div class="md:hidden block w-2/3 -mr-14">
            <img src="./img/Screenshot 2025-10-30 at 22.45.13.png"/>
        </div>
        <div class=" font-montserrat md:w-1/2 md:pr-24 flex flex-col items-center space-y-8">
            <p class="text-center px-7 md:px-0 mt-7 md:mt-0 text-[16px] md:text-[20px]">Join us for a behind-the-scenes look at how Smidgin comes to life. You'll explore, taste, laugh, and leave with a new favorite spirit, and maybe a few fun facts to share at your next night out.</p>
            <a href="./whatweoffer.html" class="px-5 py-3 w-40 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BOOK A TOUR</a>
        </div>
    </div>
</div>

<br/>
<br/>

<div class="font-Baskervville md:hidden block text-[32px] md:pt-12 pt-9 px-7">
    <h1 class="">MAKE IT <span class="text-red-500">YOURS</span></h1>
</div>

<div class="flex md:flex-row flex-col-reverse justify-between md:px-40 md:items-center">
    <div class="flex md:h-[600px] md:w-1/2 flex-col items-center md:items-start md:space-y-6">
        <br/>
        <h1 class="font-Baskervville text-start hidden md:block text-[48px]">MAKE IT <span class="text-red-500">YOURS</span></h1>
        <br/>
        <h2 class="md:text-[22px] px-7 md:px-0 text-[19px] w-full text-start font-montserrat font-semibold">Custom Labels for Every Occasion</h2>
        <p class="md:text-[22px] px-7 md:px-0 text-[16px] pt-5 md:pt-0 font-montserrat">Celebrate in style with a personalized Smidgin bottle. Whether it's a birthday, wedding, corporate gift, or a just-because moment, you choose the  name, message or logo, and we'll design a custom label that makes your bottle truly one-of-a-kind.</p>
        <br/>
        <br/>
        <a href="./whatweoffer.html" class="-mt-4 px-5 font-montserrat text-center py-[16px] w-[298px] h-[55px] bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">PERSONALIZE YOUR BOTTLE</a>
    </div>
    <div class="hidden md:flex md:items-center md:w-[510px] w-[94%] md:h-[510px]">
        <img class="w-full h-full " src="./img/Screenshot 2025-08-30 at 14.38.07.png"/>
    </div>
    <div class="block self-center md:hidden md:w-[469px] w-[90%] mt-5 md:mt-0 md:h-[444px]">
        <img src="./img/Screenshot 2025-10-30 at 23.00.51.png"/>
    </div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>


<!-- COCKTAILS -->



<div class="md:pl-36">
    <div class="flex md:justify-between justify-center md:pr-36 items-end">
        <div class="font-Baskervville md:text-5xl text-[32px]">
            <p>LET'S MAKE</p>
            <p class="text-red-500 pl-1 md:ml-0 md:mt-0 -mt-3">COCKTAILS</p>
        </div>
        <div>
            <p class="md:block hidden text-[22px] italic font-serif ">Easy to mix. Impossible to forget</p>
        </div>
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


<div class="md:px-36 px-7 flex pt-28 md:pt-32">
    <div class="md:w-2/3 flex flex-col space-y-16">
        <div class="font-Baskervville text-[32px] md:text-5xl">
            <h1 class="hidden md:block">THE STORY <br/>BEHIND THE <span class="text-red-500">SPIRIT</span></h1>
            <div class="md:hidden flex flex-col">
               <h1>THE STORY</h1>
               <h1 class="-mt-3">BEHIND THE <span class="text-red-500">SPIRIT</span></h1>
            </div>

        </div>
        <div class="flex md:flex-row flex-col">
            <div class="flex -mt-7 md:mt-0 flex-col space-y-7 md:space-y-14 items-center md:w-1/2 ">
                <p class="md:text-[18px] text-[14px] font-montserrat">Conceived by two gin enthusiasts in search of the perfect spirit, Smidgin is a one-shot London Dry Gin, distilled at our MCM craft distillery in the heart of Skopje. The recipe is rooted in wild Macedonian nature, blending fresh foraged juniper berries and mountain tea into every small batch.</p>
                <img class="md:hidden -mr-5" src="./img/Untitled design.png"/>
                <a href="./whoweare.html" class="px-5 py-3 w-36 text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] font-montserrat rounded-xl text-white">READ MORE</a>
            </div>
            <div class="md:block hidden w-1/2 pl-10">
                <img src="./img/Screenshot 2025-09-01 at 04.15.36.png"/>
            </div>

        </div>
    </div>
    <div class="md:block hidden w-1/3 pl-7">
        <img src="./img/Screenshot 2025-09-01 at 04.21.57.png"/>
    </div>
</div> 

<div class="font-Baskervville text-[32px] md:text-5xl text-center pt-20 md:pt-32">
    <h1>FIND OUR STORES <p class="text-red-500 md:mt-0 -mt-3">WORLDWIDE</p></h1>
</div>
<div class="md:px-44 px-2 pt-6">
    <img src="./img/Screenshot 2026-02-01 at 18.05.51.png"/>
</div>
<div class="font-montserrat pt-9 flex flex-col space-y-6 items-center">
    <h1 class="text-center text-[14px] md:text-[20px] px-5 md:px-52">Smidgin is available in select boutiques, bars, and retailers around the world. Explore our global map to discover where you can sip, shop, and experience the spirit of Smidgin.</h1>
    <a href="./findourstores.html" class="px-5 py-3 w-60 text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">DISCOVER LOCATIONS</a>
</div>

<div class="pt-24 md:pt-32">
   <div class="font-Baskervville text-[32px] md:text-5xl text-center">
       <h1>AWARD <SPAN class="text-red-500">WINNING</SPAN> GIN</h1>
   </div>
   <div class="md:px-36  pt-7 md:pt-16">
       <img src="./img/Screenshot 2025-09-02 at 00.09.29.png"/>
   </div>
   <div class="flex flex-col-reverse md:flex-row font-montserrat md:px-64 md:space-x-6 justify-between items-center pt-20">
       <div class="px-6 mt-14 md:mt-0 md:px-0 md:w-2/3 text-[15px] md:text-xl">
           <p class="text-center md:text-start">At Smidgin, we’ve always believed that doing things the right way, carefully, slowly, and by hand, speaks for itself. But it’s even better when others speak for us.</p>
       </div>
       <div class="md:w-1/3 md:pl-24">
          <a href="reviews.html" class="px-5 py-3 w-60 text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white whitespace-nowrap"> READ REVIEWS</a>       
       </div>
   </div>
</div>

<div>
    <div class="flex items-end justify-between px-7 md:px-36 pt-20 md:pt-36">
        <h1 class="font-Baskervville md:block hidden  md:text-5xl ">VOICES OF <BR/> <span class="text-red-500">OUR CUSTOMERS</span></h1>
        <div class="flex flex-col -space-y-3">
            <h1 class="md:hidden block font-Baskervville text-[25px] ">VOICES OF</h1>
            <h1 class="md:hidden block font-Baskervville text-[25px] text-red-500 ">OUR COSTUMERS</h1>
        </div>
        <p class="font-montserrat text-[14px] md:text-[18px] italic">Testimonials</p>
    </div>
    <div id="slideshowReviews" class="hidden md:block overflow-x-auto pt-16">
        <div class="flex flex-nowrap py-12 md:px-24 px-24  space-x-9">
            <div class="relative group flex-shrink-0 w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.24.59.png"/>
            </div>
            <div class="relative group flex-shrink-0 w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.25.16.png"/>

            </div>
            <div class="relative group flex-shrink-0 w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.25.58.png"/>

            </div>
            <div class="relative group flex-shrink-0  w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.26.48.png"/>

            </div>
            <div class="relative group flex-shrink-0  w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.27.09.png"/>

            </div>
        </div>
    </div>
    <div id="slideshowReviews" class="block md:hidden overflow-x-auto pt-3 md:pt-16">
        <div class="flex flex-nowrap py-12 md:px-24 px-4  space-x-3">
            <div class="relative group flex-shrink-0 w-[60%]  snap-start">
                <img src="./img/Screenshot 2025-10-31 at 00.10.54.png"/>
            </div>
            <div class="relative group flex-shrink-0 w-[60%]  snap-start">
                <img src="./img/Screenshot 2025-10-31 at 00.13.43.png"/>

            </div>
            <div class="relative group flex-shrink-0 w-[60%]   snap-start">
                <img src="./img/Screenshot 2025-10-31 at 00.14.13.png"/>

            </div>
            <div class="relative group flex-shrink-0 w-[60%] snap-start">
                <img src="./img/Screenshot 2025-10-31 at 00.14.35.png"/>

            </div>
            <div class="relative group flex-shrink-0 w-[60%] snap-start">
                <img src="./img/Screenshot 2025-10-31 at 00.14.56.png"/>

            </div>
        </div>
    </div>

</div>

<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>

<div id="InstagramBig" class="hidden md:flex flex-col items-center py-14 bg-white font-sans">
    <div class="text-4xl self-start pl-48 font-Baskervville font-medium mb-10 text-gray-800 flex space-x-2">
        <p class="text-red-500">FOLLOW</p> 
        <p class=""> THE JOURNEY</p>
    </div>

    <div class="w-[76%] rounded-2xl shadow-2xl pb-9 px-6 bg-white">
        

<div class="w-full mt-2 px-4">
            <iframe src="//lightwidget.com/widgets/6eada317a7b8588da7e0ba99550ceaaa.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>

    </div>
</div>

<div id="InstagramSmall" class="flex md:hidden flex-col items-center py-14 bg-white font-sans">
    <div class="text-[25px] self-start font-Baskervville pl-8 font-medium mb-5 text-gray-800 flex space-x-2">
        <p class="text-red-500">FOLLOW</p> 
        <p class=""> THE JOURNEY</p>
    </div>
<div class="w-full mt-2 px-4">
            <iframe src="//lightwidget.com/widgets/6eada317a7b8588da7e0ba99550ceaaa.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>
</div>

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

<script>
    // --- CONSOLIDATED AND ROBUST MODAL CLOSING LOGIC ---
    
    // Function to set up click-outside-to-close for a modal
    function setupModalClosing(modalId) {
        const modal = document.getElementById(modalId);
        if (!modal) return;
        
        // Listener for the backdrop (modal wrapper)
        modal.addEventListener("click", function (e) {
            // Only close the modal if the click target is the backdrop itself
            if (e.target === modal) {
                closeModal(modalId);
            }
        });
        
        // Note: The modal content div for each modal must have 
        // onclick="event.stopPropagation()" to prevent closing on content clicks.
    }
    
    // Setup for all cocktail and form modals
    setupModalClosing('fig-sour');
    setupModalClosing('velvetperfect');
    setupModalClosing('S&T');
    setupModalClosing('negroni');
    setupModalClosing('writerecipe');
    setupModalClosing('cheerstoyou');
</script>



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


</body>
</html>