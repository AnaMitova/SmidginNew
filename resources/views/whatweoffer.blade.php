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
        #BookATour {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #BookATour::-webkit-scrollbar {
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
<div id="homepage" class="font-montserrat md:px-28 pt-14 pb-12 space-y-16 flex flex-col items-center">
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
            <a href="./whatweoffer.html" class="border-b-[2.7px] border-b-red-500 text-red-500 font-semibold  pb-[1.7px]">WHAT WE OFFER</a>
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

<div id="request" class="fixed hidden font-montserrat inset-0 flex items-center h-[700px] justify-center z-50 overflow-y-auto"> <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-5 md:p-10 w-full md:w-[752px] max-h-screen md:h-[700px] relative">
    <button class="absolute top-4 right-4 text-gray-500 text-xl font-bold" onclick="closeModal('request')">✕</button>

    <h2 class="text-2xl md:text-[28px] font-bold pt-4 pl-0 md:pl-4" >SEND REQUEST</h2>

    <form 
    id="requestForm"
    class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-8 md:pt-16 "
>
    <input type="hidden" id="tour" name="tour" value="Distillery">

    <div class="flex flex-col gap-1 md:gap-8"> <div>
            <label class="block text-sm font-medium mb-1">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full border border-black text-[14px] rounded-md px-3 py-2 focus:ring focus:ring-gray-400" required/>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="w-full border border-black text-[14px] rounded-md px-3 py-2 focus:ring focus:ring-gray-400" required/>
        </div>
        <div>
            <label class="block text-sm font-medium mb-2">Choose Date</label>
            <div class="border rounded-md p-3">
                <input type="date" id="date" name="date" class="w-full border-black text-[14px] border-none focus:outline-none" required/>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-6 md:gap-8"> <div>
            <label class="block text-sm font-medium mb-1">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Enter your e-mail" class="w-full border-black border text-[14px] rounded-md px-3 py-2 focus:ring focus:ring-gray-400" required/>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Visitors</label>
                <input type="number" id="visitors" name="visitors" placeholder="Number" class="w-full border border-black text-[14px] rounded-md px-3 py-2 focus:ring focus:ring-gray-400" required/>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Time</label>
                <input type="time" id="time" name="time" class="w-full border border-black text-[14px] rounded-md px-3 py-2 focus:ring focus:ring-gray-400" required/>
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Leave a note</label>
            <textarea placeholder="Anything we should know?" id="note" name="note" class="w-full border border-black text-[14px] rounded-md px-3 py-2 h-20 md:h-28 focus:ring focus:ring-gray-400"></textarea>
        </div>
<DIV class="flex justify-between">
        <label class="flex items-center gap-2 text-base">
            <input type="checkbox" name="companyVisit" id="companyVisit" class="rounded border-gray-400"/>
            This is a company visit
        </label>
    <button type="submit" id="submitBtn" class="md:hidden px-5 w-[40%] py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">
        SEND REQUEST
    </button>
    </div>

    <button type="submit" id="submitBtn" class="px-5 hidden md:block py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">
        SEND REQUEST
    </button>
</DIV>
</form>



  </div>
</div>
<div id="requestSent" class="fixed inset-0 hidden flex items-center justify-center z-50">
  <div id="requestSentContent" class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-2xl p-20 w-[474px] h-[247px] relative flex flex-col justify-center items-center">
    <h1 class="font-Baskervville text-center text-[32px] pb-3">Request sent!</h1>
    <p class="font-montserrat text-center text-[16px]">Our team will contact you within the day to confirm the details. Cheers!</p>
  </div>
</div>

<script>
  const requestSent = document.getElementById("requestSent");
  const requestSentContent = document.getElementById("requestSentContent");

  // Click anywhere on the overlay
  requestSent.addEventListener("click", () => {
    requestSent.classList.add("hidden");
  });

  // Prevent closing when clicking inside the content box
  requestSentContent.addEventListener("click", (e) => {
    e.stopPropagation();
  });
</script>


<script>
let selectedTour = '';

function openRequestModal(tourName) {
  selectedTour = tourName;
  const tourInput = document.getElementById('tour');
  if (tourInput) tourInput.value = tourName;
  openModal('request');
}

document.getElementById('requestForm').addEventListener('submit', async (e) => {
  e.preventDefault();

  const form = e.target;
  const submitBtn = document.getElementById('submitBtn');
  
  // Disable button and show loading state
  submitBtn.disabled = true;
  submitBtn.textContent = 'SENDING...';

  // Create FormData object from the form
  const formData = new FormData(form);
  
  // Set the tour value from selectedTour
  formData.set('tour', selectedTour || form.tour.value);
  
  // Convert checkbox to Yes/No
  formData.set('companyVisit', form.companyVisit.checked ? 'Yes' : 'No');

  try {
    const res = await fetch('https://script.google.com/macros/s/AKfycbzk6Fd7biCUDELicrYfPjDRK7iwPyRGANMY73Y1apzSxMWglIJ6ImGVGA5fYnHTlxjo/exec', {
      method: 'POST',
      body: formData
    });

    const result = await res.json();
    console.log('Response:', result);

    // Check if submission was successful
    if (result.status === 'success' || res.ok) {
      openModal('requestSent');
      closeModal('request');
      form.reset();
      selectedTour = '';
    } else {
      alert('Something went wrong. Please try again.');
    }
  } catch (err) {
    console.error('Fetch error:', err);
    alert('Error sending request. Please check your connection and try again.');
  } finally {
    // Re-enable button
    submitBtn.disabled = false;
    submitBtn.textContent = 'SEND REQUEST';
  }
});



</script>


    <!-- Book a tour offer -->
    <h1 class="font-Baskervville px-7 md:px-28 md:mt-11 text-[30px] md:text-[43px] ">BOOK A SMIDGIN <span class="text-red-500">TOUR</span></h1>

    <div id="BookATour" class="overflow-x-auto pb-12" >
        <div class="flex flex-nowrap md:py-12 md:px-24 px-7 space-x-7">
            <div id="Distillery" class="flex-none md:md:w-[390px] w-[280px]  group md:hover:h-[877px] transition-all duration-300 ease-in-out  h-[600px] bg-white shadow-xl rounded-2xl p-[32px] flex flex-col group justify-start items-start">
                <img class="mb-4 w-[326px] h-[300px] rounded-2xl" src="./img/tour1.jpeg"/>
                <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                    <h1 class="font-bold text-[20px]">DISTILLERY TOUR</h1>
                    <P class="md:text-[16px] text-[12px] text-red-500">Basic</P>
                </div>
                <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start">
                    <p><b>Duration:</b> 1h</p>
                    <p><b>Price per person:</b> 990den.</p>
                    <p><b>Availability: </b>Earliest booking - 10AM, latest booking - 3PM, working days only</p>
                    <p><b>Minimum capacity: </b>None</p>
                    <p class="md:hidden pl-14 text-gray-500" onclick="openModal('DistilleryModal')">read more</p>
                    <p class="hidden md:block text-[16px] opacity-0 group-hover:opacity-100 transition-opacity duration-400 py-4">Visit our MCM distillery and learn how Europe's best and first Macedonian gin is made. <br/>This tour lasts 1hr including tasting of all our gins, appetizers, educational part and one Perfect Serve drink (gin tonic) Available in Macedonian, Serbian and English.</p><a onclick="openRequestModal('Distillery')" class="hover:cursor-pointer hidden md:block px-5 py-3 opacity-0 group-hover:opacity-100 transition-opacity duration-400 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">SEND REQUEST</a>
                </div>
            </div>
            <div id="ExperienceBasic" class="flex-none md:md:w-[390px] w-[280px]  group md:hover:h-[1020px] transition-all duration-300 ease-in-out  h-[600px] bg-white shadow-xl rounded-2xl p-[32px] flex flex-col group justify-start items-start">
                <img class="mb-4 w-[326px] h-[300px] rounded-2xl" src="./sliki/experiencee.jpeg"/>
                <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                    <h1 class="font-bold text-[20px]">SMIDGIN EXPERIENCE</h1>
                    <P class="md:text-[16px] text-[12px] text-red-500">Basic</P>
                </div>
                <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start">
                    <p><b>Duration:</b> 2h</p>
                    <p><b>Price per person:</b> 1500den.</p>
                    <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                    <p><b>Minimum capacity: </b>6</p>
                    <p class="md:hidden pl-14 text-gray-500" onclick="openModal('ExperienceBasicModal')">read more</p>
                    <p class="hidden md:block text-[16px] opacity-0 group-hover:opacity-100 transition-opacity duration-400 py-4">This distillery tour, despite degustation of our gins, gives you unique experience combining the educational part, flavors experience, and two drinks specially made for you (one Gin tonic and one cocktail) accomplished with appetizers. Visit our MCM distillery and learn how Europe's best and first Macedonian gin is made. <br/><b>Includes:</b> degustation, educational part, aroma session, two drinks, appetizers. Latest booking available 08-10pm/ limited on 6-8 people Available in Macedonian, Serbian and English.</p><a onclick="openRequestModal('ExperienceBasic')" class="hover:cursor-pointer hidden md:block px-5 py-3 opacity-0 group-hover:opacity-100 transition-opacity duration-400 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">SEND REQUEST</a>
                </div>
            </div>
            <div id="ExperiencePremium" class="flex-none md:md:w-[390px] w-[280px]  group md:hover:h-[1050px] transition-all duration-300 ease-in-out  h-[600px] bg-white shadow-xl rounded-2xl p-[32px] flex flex-col group justify-start items-start">
                <img class="mb-4 w-[326px] h-[300px] rounded-2xl" src="./img/experience2.jpeg"/>
                <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                    <h1 class="font-bold text-[20px]">SMIDGIN EXPERIENCE</h1>
                    <P class="md:text-[16px] text-[12px] -mt-5 md:-mt-0 text-red-500">Premium</P>
                </div>
                <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start">
                    <p><b>Duration:</b> 2h</p>
                    <p><b>Price per person:</b> 1700den.</p>
                    <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                    <p><b>Minimum capacity: </b>8</p>
                    <p class="md:hidden pl-14 text-gray-500" onclick="openModal('ExperiencePremiumModal')">read more</p>
                    <p class="hidden md:block text-[16px] opacity-0 group-hover:opacity-100 transition-opacity duration-400 py-4">This distillery tour, despite degustation of our gins, gives you unique experience combining the educational part, flavors experience, and three drinks specially made for you by our mixologist (one Gin tonic and two signature cocktails) accomplished with appetizers. Visit our MCM distillery and learn how Europe's best and first Macedonian gin is made. <br/><b>Includes:</b> degustation, mixologist, educational part, aroma session, three drinks, appetizers. Latest booking available 08-10pm/ requests minimum 8 people to be organized Available in Macedonian, Serbian and English.</p><a onclick="openRequestModal('ExperiencePremium')" class="hover:cursor-pointer hidden md:block px-5 py-3 opacity-0 group-hover:opacity-100 transition-opacity duration-400 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">SEND REQUEST</a>
                </div>
            </div>
            <div id="GinMaking" class="flex-none md:w-[390px] w-[280px]  group md:hover:h-[1330px] transition-all duration-300 ease-in-out h-[717px] md:h-[660px] bg-white shadow-xl rounded-2xl p-[32px] flex flex-col group justify-start items-start">
                <img class="mb-4 w-[326px] h-[300px] rounded-2xl" src="./img/ginmaking.jpeg"/>
                <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                    <h1 class="font-bold text-[20px]">GIN MAKING CLASS</h1>
                    <P class="md:text-[16px] -mr-4 md:-mr-0 text-[12px] text-red-500">Limited Premium</P>
                </div>
                <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start">
                    <p><b>Duration:</b> 3h</p>
                    <p><b>Price per person:</b> 3500den. per person + 100 ml small bottle free or 900 den for 0.7L bottle personalized.</p>
                    <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                    <p><b>Minimum capacity: </b>2 - 4 people</p>
                    <p class="md:hidden pl-14 text-gray-500" onclick="openModal('GinMakingModal')">read more</p>
                    <p class="hidden md:block text-[16px] opacity-0 group-hover:opacity-100 transition-opacity duration-400 py-4">Enjoy the premium experience of crafting your own gin batch instructed by our master distiller Milica Pletvarska. You will have opportunity to hear the story of Smidgin firsthand, to enjoy our gins and one gin tonic while choosing the perfect combination of spices for your personal Smidgin bottle. The whole process is taken in small copper still pot giving you charming taste of your imagination. The whole process is finalized with bottling -personalizing with label previously created JUST FOR YOU and adding wax on the top for final touch. <br/><b>Including:</b> Educational part, aroma session, spices introduced, degustation, one gin tonic paired with appetizers, crafting your own gin, personalized label, labeling, waxing, 1 bottle of Personally made gin 0.7L (for 4 people you get 2 bottles 0.7L free) Available in Macedonian, Serbian and English.</p><a onclick="openRequestModal('GinMaking')" class="hover:cursor-pointer hidden md:block px-5 py-3 opacity-0 group-hover:opacity-100 transition-opacity duration-400 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">SEND REQUEST</a>
                </div>
            </div>
            <div id="YourGinForTheWin" class="flex-none md:md:w-[390px] w-[280px]  group md:hover:h-[1540px] transition-all duration-300 ease-in-out h-[705px] md:h-[650px] bg-white shadow-xl rounded-2xl p-[32px] flex flex-col group justify-start items-start">
                <img class="mb-4 w-[326px] h-[300px] rounded-2xl" src="./img/event1.png"/>
                <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                    <h1 class="font-bold text-[20px]">YOUR GIN FOR THE WIN</h1>
                    <P class="md:text-[16px] text-[12px] text-red-500">Competitional</P>
                </div>
                <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start">
                    <p><b>Duration:</b> 5 - 6h</p>
                    <p><b>Price per person:</b> 2700den. per person + 100ml bottle for each</p>
                    <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                    <p><b>Minimum capacity: </b>6 - 12 people</p>
                    <p class="md:hidden pl-14 text-gray-500" onclick="openModal('YourGinForTheWinModal')">read more</p>
                    <p class="hidden md:block text-[16px] opacity-0 group-hover:opacity-100 transition-opacity duration-400 py-4">This event is created for all gin enthusiasts that want to try their skills and create something unique. Ideal for smaller groups, private parties and team building sessions. You will enjoy the premium experience of crafting your own gin batch instructed by our master distiller Milica Pletvarska. During the process you will be divided into two teams creating your own recipe for gin and competing with the other players by blind tasting at the end. This experience is complemented by the opportunity to hear the story of Smidgin firsthand, to enjoy our gins and one gin tonic while choosing the perfect combination of spices for your personal Smidgin bottle. The whole process is taken in small copper still pot giving you charming taste of your imagination. The whole process is finalized with bottling -personalizing with label previously created JUST FOR YOU and adding wax on the top for final touch. <br/><b>Including:</b> Educational part, aroma session, spices introduced, degustation, one gin tonic paired with appetizers, crafting your own gin, personalized label, labeling, waxing, blind tasting and introducing the winner team. Each team member gets 100ml bottle of their crafted product. Available in Macedonian, Serbian and English.</p>
<a onclick="openRequestModal('YourGinForTheWin')" 
   class="hover:cursor-pointer hidden md:block px-5 py-3 opacity-0 group-hover:opacity-100 transition-opacity duration-400 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">
   SEND REQUEST
</a>

                </div>
            </div>


        </div>
    </div>

    <!-- SMIGIN event -->
    <h1 class="font-Baskervville px-7 md:px-28 md:pt-8 text-[30px] md:text-[43px] ">SMIDGIN EVENTS</h1>
    <div id="BookATour" class="overflow-x-auto">
        <div class="flex flex-nowrap py-12 md:px-24 px-7 space-x-7">
            <div id="AcademyEvent" class="flex-none md:w-[390px] w-[280px]  group md:hover:h-[1340px] transition-all duration-300 ease-in-out  h-[678px] bg-white shadow-xl rounded-2xl p-[32px] flex flex-col group justify-start items-start">
                <img class="mb-4 w-[326px] h-[300px] rounded-2xl" src="./img/event2.png"/>
                <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                    <h1 class="font-bold text-[20px]">SMIDGIN COCKTAIL ACADEMY EVENT</h1>
                    <P class="md:text-[16px] text-[12px] text-red-500"></P>
                </div>
                <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start">
                    <p><b>Duration:</b> 2h</p>
                    <p><b>Price per person:</b> 590 denari per person + 100ml bottle gift + certificate</p>
                    <p><b>Availability: </b>Monthly available on specific dates with individual ticket purchase or on request as private event</p>
                    <p><b>Minimum capacity: </b>6 - 8 people</p>
                    <p class="md:hidden pl-14 text-gray-500" onclick="openModal('AcademyEventModal')">read more</p>
                    <p class="hidden md:block text-[16px] opacity-0 group-hover:opacity-100 transition-opacity duration-400 py-4">This event gives unique opportunity to get used to the bartender equipment, learn how to prepare basic cocktails and enjoy the time spent on fun and educational activities. A beginner's cocktail academy focuses on foundational skills, using common tools, and making classic cocktails. It gives some knowledge in proper techniques like shaking and muddling, and the fundamentals of balancing flavors to create a variety of drinks. It is created for all gin enthusiasts that want to learn and improve bartending skills. Ideal for smaller groups, private parties and team building sessions. <br/><b>Including:</b> Educational introduction of the bar equipment and preparation of cocktails by mixologist, one gin tonic paired with appetizers, cocktail making activities lead by mixologist. Each person gets 100ml bottle Smidgin Classic as a gift. Available in Macedonian, Serbian and English.</p>
                    <a href="https://smidgin-shop.myshopify.com/" class="hidden md:block px-5 py-3 opacity-0 group-hover:opacity-100 transition-opacity duration-400 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">GO TO SHOP</a>
                </div>
            </div>



        </div>
    </div>

    <!-- PERSONALIZED BOTTLES -->
<h1 class="font-Baskervville md:px-48 px-5 py-12 md:py-20 text-3xl md:text-[43px]">PERSONALIZED BOTTLES</h1>
    <div class="flex flex-col justify-center space-y-8 md:space-y-14 items-center px-5 md:px-0">
        <div class="flex flex-col md:flex-row justify-between space-x-0 md:space-x-4 px-5 md:px-7 py-5 md:py-7 items-center w-full md:w-[1057px] rounded-2xl text-center bg-white shadow-2xl">
            <div class="w-full md:w-1/2">
                <img class="w-full h-auto md:h-[306px] object-cover" src="./img/personalizedbottle1.png"/>
            </div>
            <div class="font-montserrat flex flex-col text-start h-full w-full md:w-1/2 pt-5 md:pt-0">
                <h1 class="text-[18px] font-bold">PERSONALIZED SMIDGIN BOTTLE</h1><br/>
                <p class="text-[16px]">Choose a one-of-a-kind Smidgin bottle complete with your custom text, wax seal color, and ribbon, crafted for every special moment. Once your order is placed, our team will reach out to help bring your design to life. <br/><br/>Wax seal shades: red, purple, silver, or gold. Ribbon hues: red, purple, or blue</p><br/>
                <a href="https://smidgin-shop.myshopify.com/products/personalized-smidgin-bottle" class="px-5 py-3 w-full md:w-[174px] text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">GO TO SHOP</a>
            </div>
        </div>

        <div class="flex flex-col md:flex-row-reverse justify-between space-x-0 md:space-x-4 px-5 md:px-7 py-5 md:py-7 items-center w-full md:w-[1057px] rounded-2xl text-center bg-white shadow-2xl">
            <div class="w-full md:w-1/2">
                <img class="w-full h-auto md:h-[306px] object-cover" src="./img/personalizedbottle2.png"/>
            </div>
            <div class="font-montserrat flex flex-col text-start h-full w-full md:w-1/2 pt-5 md:pt-0">
                <h1 class="text-[18px] font-bold">PERSONALIZED SMIDGIN SET</h1><br/>
                <p class="text-[16px]">Create your own set with a personalized 0.7L Smidgin bottle and our signature branded glass. Whether you're gifting it or treating yourself, it's the perfect way to make your Smidgin moment truly yours.<br/><br/>Your name, your message, your style, all in one bold and memorable package.</p><br/>
                <a href="https://smidgin-shop.myshopify.com/products/personalized-smidgin-bottle" class="px-5 py-3 w-full md:w-[174px] text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">GO TO SHOP</a>
            </div>
        </div>
    </div>

    <p class="text-base md:text-[19px] font-montserrat text-center pt-16 md:pt-28 px-5">You can also contact us for bookings at <br/><span class="text-red-500 font-bold">076 405 175</span> or via email at <span class="text-red-500 font-bold">info@smidgin.mk.</span></p>
     <br/><p class="text-base md:text-[19px] font-montserrat text-center px-5">Want to explore more? <a href="https://acrobat.adobe.com/id/urn:aaid:sc:VA6C2:c93b5299-cd8f-4b30-ba5c-48452863c302" class="text-red-500 font-bold underline">Download our catalog </a></p>






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

<!-- Modals -->
<div id="DistilleryModal" class="fixed inset-0 bg-black/75 flex items-center justify-center z-50 hidden p-4">
    <div class="bg-white/80  backdrop-blur-sm rounded-2xl p-6 w-[90%] mx-auto shadow-2xl overflow-y-auto max-h-[75vh] md:max-h-full md:w-auto">
        <div class="flex flex-col">
            <img class="mb-4 h-[140px] w-full object-cover rounded-2xl" src="./img/tour1.jpeg" alt="Distillery Tour Group"/>
            
            <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                <h1 class="font-bold text-[20px]">DISTILLERY TOUR</h1>
                <p class="text-[16px] text-red-500">Basic</p>
            </div>
            
            <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start mb-6">
                <p><b>Duration:</b> 1h</p>
                <p><b>Price per person:</b> 990den.</p>
                <p><b>Availability: </b>Earliest booking - 10AM, latest booking - 3PM, working days only</p>
                <p><b>Minimum capacity: </b>None</p>
                
                <p class="mt-4">
                    Visit our MCM distillery and learn how Europe's best and first Macedonian gin is made. This tour lasts 1hr including tasting of all our gins, appetizers, educational part and one Perfect Serve drink (gin tonic). Available in Macedonian, Serbian and English.
                </p>
            </div>
            
            <div class="flex justify-end gap-3">
                <button onclick="closeModal('DistilleryModal')" class=" font-montserrat px-6 py-2 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-100">Cancel</button>
                <button onclick="openRequestModal('Distillery')" class="font-montserrat hover:cursor-pointer  px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl   text-white  hover:bg-red-600">SEND REQUEST</button>
            </div>
        </div>
    </div>
</div>

<div id="ExperienceBasicModal" class="fixed inset-0 bg-black/75 flex items-center justify-center z-50 hidden p-4">
    <div class="bg-white/80  backdrop-blur-sm rounded-2xl p-6 w-[89%] h-[80%] mx-auto shadow-2xl overflow-y-auto">
        <div class="flex flex-col">
            <img class="mb-4 h-[140px] w-full object-cover rounded-2xl" src="./sliki/experiencee.jpeg" alt="Smidgin Experience Basic Group"/>
            <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                <h1 class="font-bold text-[20px]">SMIDGIN EXPERIENCE</h1>
                <p class="text-[16px] text-red-500">Basic</p>
            </div>
            <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start mb-6">
                <p><b>Duration:</b> 2h</p>
                <p><b>Price per person:</b> 1500den.</p>
                <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                <p><b>Minimum capacity: </b>6</p>
                <p class="mt-4">
                    This distillery tour, despite degustation of our gins, gives you unique experience combining the educational part, flavors experience, and two drinks specially made for you (one Gin tonic and one cocktail) accomplished with appetizers. Visit our MCM distillery and learn how Europe's best and first Macedonian gin is made.
                </p>
                <p class="mt-2">
                    <b>Includes:</b> degustation, educational part, aroma session, two drinks, appetizers. Latest booking available 08-10pm/ limited on 6-8 people. Available in Macedonian, Serbian and English.
                </p>
            </div>
            <div class="flex justify-end gap-3">
                <button onclick="closeModal('ExperienceBasicModal')" class=" font-montserrat px-6 py-2 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-100">Cancel</button>
                <button onclick="openRequestModal('ExperienceBasic')" class="font-montserrat hover:cursor-pointer  px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl   text-white  hover:bg-red-600">SEND REQUEST</button>
            </div>
        </div>
    </div>
</div>

<div id="ExperiencePremiumModal" class="fixed inset-0 bg-black/75 flex items-center justify-center z-50 hidden p-4">
    <div class="bg-white/80  backdrop-blur-sm  rounded-2xl p-6 w-[89%] h-[80%] mx-auto shadow-2xl overflow-y-auto">
        <div class="flex flex-col">
            <img class="mb-4 h-[140px] w-full object-cover rounded-2xl" src="./img/experience2.jpeg" alt="Smidgin Experience Premium Group"/>
            <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                <h1 class="font-bold text-[20px]">SMIDGIN EXPERIENCE</h1>
                <p class="text-[16px] text-red-500">Premium</p>
            </div>
            <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start mb-6">
                <p><b>Duration:</b> 2h</p>
                <p><b>Price per person:</b> 1700den.</p>
                <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                <p><b>Minimum capacity: </b>8</p>
                <p class="mt-4">
                    This distillery tour, despite degustation of our gins, gives you unique experience combining the educational part, flavors experience, and three drinks specially made for you by our mixologist (one Gin tonic and two signature cocktails) accomplished with appetizers. Visit our MCM distillery and learn how Europe's best and first Macedonian gin is made.
                </p>
                <p class="mt-2">
                    <b>Includes:</b> degustation, mixologist, educational part, aroma session, three drinks, appetizers. Latest booking available 08-10pm/ requests minimum 8 people to be organized. Available in Macedonian, Serbian and English.
                </p>
            </div>
            <div class="flex justify-end gap-3">
                <button onclick="closeModal('ExperiencePremiumModal')" class=" font-montserrat px-6 py-2 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-100">Cancel</button>
                <button onclick="openRequestModal('ExperiencePremium')" class="font-montserrat hover:cursor-pointer  px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl   text-white  hover:bg-red-600">SEND REQUEST</button>
            </div>
        </div>
    </div>
</div>

<div id="YourGinForTheWinModal" class="fixed inset-0 bg-black/75 flex items-center justify-center z-50 hidden p-4">
    <div class="bg-white/80  backdrop-blur-sm rounded-2xl p-6 w-[89%] h-[80%] mx-auto shadow-2xl overflow-y-auto">
        <div class="flex flex-col">
            <img class="mb-4 h-[140px] w-full object-cover rounded-2xl" src="./img/event1.png" alt="Your Gin For The Win Group"/>
            <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                <h1 class="font-bold text-[20px]">YOUR GIN FOR THE WIN</h1>
                <p class="text-[16px] text-red-500">Competitional</p>
            </div>
            <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start mb-6">
                <p><b>Duration:</b> 5 - 6h</p>
                <p><b>Price per person:</b> 2700den. per person + 100ml bottle for each</p>
                <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                <p><b>Minimum capacity: </b>6 - 12 people</p>
                <p class="mt-4">
                    This event is created for all gin enthusiasts that want to try their skills and create something unique. Ideal for smaller groups, private parties and team building sessions. You will enjoy the premium experience of crafting your own gin batch instructed by our master distiller Milica Pletvarska. During the process you will be divided into two teams creating your own recipe for gin and competing with the other players by blind tasting at the end. This experience is complemented by the opportunity to hear the story of Smidgin firsthand, to enjoy our gins and one gin tonic while choosing the perfect combination of spices for your personal Smidgin bottle. The whole process is taken in small copper still pot giving you charming taste of your imagination. The whole process is finalized with bottling -personalizing with label previously created JUST FOR YOU and adding wax on the top for final touch.
                </p>
                <p class="mt-2">
                    <b>Including:</b> Educational part, aroma session, spices introduced, degustation, one gin tonic paired with appetizers, crafting your own gin, personalized label, labeling, waxing, blind tasting and introducing the winner team. Each team member gets 100ml bottle of their crafted product. Available in Macedonian, Serbian and English.
                </p>
            </div>
            <div class="flex justify-end gap-3">
                <button onclick="closeModal('YourGinForTheWinModal')" class=" font-montserrat px-6 py-2 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-100">Cancel</button>
                <button onclick="openRequestModal('YourGinForTheWin')" class="font-montserrat hover:cursor-pointer  px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl   text-white  hover:bg-red-600">SEND REQUEST</button>
            </div>
        </div>
    </div>
</div>

<div id="AcademyEventModal" class="fixed inset-0 bg-black/75 flex items-center justify-center z-50 hidden p-4">
    <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 w-[90%] mx-auto shadow-2xl overflow-y-auto max-h-[75vh] md:max-h-full md:w-auto">
        <div class="flex flex-col">
            <img class="mb-4 h-[140px] w-full object-cover rounded-2xl" src="./img/event2.png" alt="Smidgin Cocktail Academy Event"/>

            <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                <h1 class="font-bold text-[20px]">SMIDGIN COCKTAIL ACADEMY EVENT</h1>
                <p class="text-[16px] text-red-500"></p> 
            </div>

            <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start mb-6">
                <p><b>Duration:</b> 2h</p>
                <p><b>Price per person:</b> 590 denari per person + 100ml bottle gift + certificate</p>
                <p><b>Availability: </b>Monthly available on specific dates with individual ticket purchase or on request as private event</p>
                <p><b>Minimum capacity: </b>6 - 8 people</p>
                
                <p class="mt-4">
                    This event gives unique opportunity to get used to the bartender equipment, learn how to prepare basic cocktails and enjoy the time spent on fun and educational activities. A beginner's cocktail academy focuses on foundational skills, using common tools, and making classic cocktails. It gives some knowledge in proper techniques like shaking and muddling, and the fundamentals of balancing flavors to create a variety of drinks. It is created for all gin enthusiasts that want to learn and improve bartending skills. Ideal for smaller groups, private parties and team building sessions.
                </p>
                <p class="mt-2">
                    <b>Including:</b> Educational introduction of the bar equipment and preparation of cocktails by mixologist, one gin tonic paired with appetizers, cocktail making activities lead by mixologist. Each person gets 100ml bottle Smidgin Classic as a gift. Available in Macedonian, Serbian and English.
                </p>
            </div>

            <div class="flex justify-end gap-3">
                <button onclick="closeModal('AcademyEventModal')" class="font-montserrat px-6 py-2 text-gray-700 hover:text-gray-900">Cancel</button>
                <a href="https://smidgin-shop.myshopify.com/" class="font-montserrat hover:cursor-pointer px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white hover:bg-red-600">GO TO SHOP</a>
            </div>
        </div>
    </div>
</div>

<div id="GinMakingModal" class="fixed inset-0 bg-black/75 flex items-center justify-center z-50 hidden p-4">
    <div class="bg-white/80  backdrop-blur-sm rounded-2xl p-6 w-[89%] h-[80%] mx-auto shadow-2xl overflow-y-auto">
        <div class="flex flex-col">
            <img class="mb-4 h-[140px] w-full object-cover rounded-2xl" src="./img/ginmaking.jpeg" alt="Gin Making Class Group"/>
            <div class="font-montserrat flex py-[16px] justify-between items-center w-full">
                <h1 class="font-bold text-[20px]">GIN MAKING CLASS</h1>
                <p class="text-[16px] text-red-500">Limited Premium</p>
            </div>
            <div class="flex flex-col font-montserrat gap-[10px] justify-start items-start mb-6">
                <p><b>Duration:</b> 3h</p>
                <p><b>Price per person:</b> 3500den. per person + 100 ml small bottle free or 900 den for 0.7L bottle personalized.</p>
                <p><b>Availability: </b>On request, confirmed with reservation ticket paid</p>
                <p><b>Minimum capacity: </b>2 - 4 people</p>
                <p class="mt-4">
                    Enjoy the premium experience of crafting your own gin batch instructed by our master distiller Milica Pletvarska. You will have opportunity to hear the story of Smidgin firsthand, to enjoy our gins and one gin tonic while choosing the perfect combination of spices for your personal Smidgin bottle. The whole process is taken in small copper still pot giving you charming taste of your imagination. The whole process is finalized with bottling -personalizing with label previously created JUST FOR YOU and adding wax on the top for final touch.
                </p>
                <p class="mt-2">
                    <b>Including:</b> Educational part, aroma session, spices introduced, degustation, one gin tonic paired with appetizers, crafting your own gin, personalized label, labeling, waxing, 1 bottle of Personally made gin 0.7L (for 4 people you get 2 bottles 0.7L free). Available in Macedonian, Serbian and English.
                </p>
            </div>
            <div class="flex justify-end gap-3">
                <button onclick="closeModal('GinMakingModal')" class=" font-montserrat px-6 py-2 border border-gray-300 rounded-xl text-gray-700 hover:bg-gray-100">Cancel</button>
                <button onclick="openRequestModal('GinMaking')" class="font-montserrat hover:cursor-pointer  px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl   text-white  hover:bg-red-600">SEND REQUEST</button>
        </div>
    </div>
</div>





</body>
</html>