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
        <!-- Homepage Section -->
<div id="homepage" class="font-montserrat md:px-28 pt-14 pb-12 space-y-16 flex flex-col items-center">
    <div id="navbar" class="flex w-[99%] md:px-0 px-9 justify-between items-center">
        <a href="./" id="logo" class="md:w-[208px] w-[180px]">
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
</script>        <div id="navs" class="hidden md:flex space-x-11 text-base items-center">
            <a href="./whoweare" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
            <a href="./ourgin" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
            <a href="./whatweoffer" class="border-b-[2.7px] border-b-red-500 text-red-500 font-semibold  pb-[1.7px]">WHAT WE OFFER</a>
            <a href="./findourstores" class="border-b-[1.5px] border-b-black pb-[1.7px]">FIND OUR STORES</a>
            <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="px-3 py-3 bg-red-500  shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BUY ONLINE</a>
        </div>
    </div> 
</div>
<div id="ham-menu" class="fixed inset-0 bg-[#EF4135] z-50 hidden flex flex-col  pt-12 items-start justify-start space-y-0">
    <i onclick="closeModal('ham-menu')" class="fa-solid fa-xmark text-white text-3xl absolute top-6 right-6 cursor-pointer"></i>
    <div class="flex pl-9 pb-10 w-full justify-start" >
      <img class="h-[42px]" src="./img/image.png" loading="lazy" decoding="async"/>
    </div>
    <div class="flex flex-col w-full pl-9 space-y-3 justify-start">
      <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">BUY ONLINE</a>
      <a href=""" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">WHO WE ARE</a>
    <a href=""" class="text-black hover:text-white  font-medium font-montserrat underline text-2xl">OUR GIN</a>
    <a href=""" class="text-black underline hover:text-white  font-medium font-montserrat text-2xl">WHAT WE OFFER</a>
    <a href=""" class="text-black underline hover:text-white font-medium font-montserrat text-2xl">FIND OUR STORES</a>
    </div>
<div id="slideshow" class="">

    <div id="DiscoverOurGin" class="overflow-x-auto mt-20">
        <div class="flex flex-nowrap pb-12  pl-4 space-x-0 items-end">
            
            <a href=""">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/classicFinal.jpeg" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100" loading="lazy" decoding="async"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex flex-col w-full items-center">
                        <p class="text-7xl text-red-500 font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-8xl text-red-500 mr-[-150px] font-montserrat pointer-events-auto">Velvet</p>
                    </div>
                    <a href=""" class="mt-8 py-3 bg-red-500 rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">CLASSIC</div>
            </div>
             </a>

            <a href=""">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/velvet.webp" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100" loading="lazy" decoding="async"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex flex-col w-full items-center">
                        <p class="text-7xl text-[#4D2957] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-8xl text-[#4D2957] mr-[-150px] font-Velvet pointer-events-auto">Velvet</p>
                    </div>
                    <a href=""" class="mt-8 py-3 bg-[#4D2957] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">VELVET</div>
            </div>
             </a>
             
            <a href=""">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/orient.webp" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100" loading="lazy" decoding="async"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex -ml-7 flex-col w-full items-center">
                        <p class="text-7xl text-[#821A16] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-7xl text-[#821A16] mr-[-150px] font-Papyrus pointer-events-auto">Orient</p>
                    </div>
                    <a href=""" class="mt-8 px-5 py-3 bg-[#821A16] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">ORIENT</div>
            </div>
             </a>
             
             <a href=""">
            <div class="relative group flex-shrink-0 w-[40%] snap-start">
                <img src="icons/light.webp" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100" loading="lazy" decoding="async"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex -ml-7 flex-col w-full items-center">
                        <p class="text-7xl text-[#4164AD] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-7xl text-[#4164AD] mr-[-150px] font-montserrat pointer-events-auto">LIGHT</p>
                    </div>
                    <a href=""" class="mt-8 px-5 py-3 bg-[#4164AD] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
                </div>
               <div class="md:hidden mt-4 text-black text-[20px] underline font-montserrat text-center">LIGHT</div>
            </div>
             </a>

            <a href=""">
            <div class="relative group  flex-shrink-0 w-[40%]  snap-start">
                <img src="./icons/xo.webp" class="w-full md:group-hover:blur-md group-hover:cursor-pointer md:group-hover:opacity-60 duration-500 delay-100" loading="lazy" decoding="async"/>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <div class="flex flex-col w-full items-center">
                        <p class="text-7xl text-[#A24B1E] font-montserrat pointer-events-auto">Smidgin</p>
                        <p class="text-7xl text-[#A24B1E] mr-[-150px] font-Baskervville pointer-events-auto">XO</p>
                    </div>
                    <a href=""" class="mt-8 px-5 py-3 bg-[#A24B1E] rounded-xl font-montserrat text-white pointer-events-auto text-lg">Read more</a>
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
    action="{{ route('requests.store') }}"
    method="POST"
    class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-8 md:pt-16">

    @csrf

    <input type="hidden" id="tour_id" name="tour_id">
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
                <input type="number" id="people" name="people" placeholder="Number" class="w-full border border-black text-[14px] rounded-md px-3 py-2 focus:ring focus:ring-gray-400" required/>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Time</label>
                <input type="time" id="time" name="time" class="w-full border border-black text-[14px] rounded-md px-3 py-2 focus:ring focus:ring-gray-400" required/>
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Leave a note</label>
            <textarea placeholder="Anything we should know?" id="message" name="message" class="w-full border border-black text-[14px] rounded-md px-3 py-2 h-20 md:h-28 focus:ring focus:ring-gray-400"></textarea>
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
document.getElementById('requestForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const form = this;

    const response = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    });

    if (response.ok) {
        // Close request modal
        document.getElementById('request').classList.add('hidden');

        // Show success modal
        const success = document.getElementById('requestSent');
        success.classList.remove('hidden');
        success.classList.add('flex');

        // Reset form
        form.reset();

        // Hide after 3 seconds
        setTimeout(() => {
            success.classList.add('hidden');
            success.classList.remove('flex');
        
            // Restore page scrolling
            document.body.classList.remove('overflow-hidden');
        }, 3000);

        document.getElementById('requestSent').addEventListener('click', function () {
            this.classList.add('hidden');
            this.classList.remove('flex');
            document.body.classList.remove('overflow-hidden');
        });
    } else {
        const data = await response.json();
        alert(data.message || 'Something went wrong.');
    }
});
</script>
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

function openRequestModal(tourId) {

    document.getElementById('tour_id').value = tourId;

    const modal = document.getElementById('request');

    modal.classList.remove('hidden');
    modal.classList.add('flex');

    document.body.classList.add('overflow-hidden');
}




</script>


<!-- Book a tour offer -->
<h1 class="font-Baskervville px-7 md:px-28 md:mt-11 text-[30px] md:text-[43px]">
    BOOK A SMIDGIN <span class="text-red-500">TOUR</span>
</h1>

<div id="BookATour" class="overflow-x-auto pb-12 scrollbar-hide">
    <div class="flex flex-nowrap md:py-12 md:px-24 px-7 space-x-7">

        @foreach($tours as $tour)

        <!-- Card -->
        <div
            class="flex-none md:w-[390px] w-[280px] h-[630px] bg-white shadow-xl rounded-2xl p-8 flex flex-col">

            <img
                src="{{ asset('storage/' . $tour->image) }}"
                class="mb-4 w-full h-[300px] rounded-2xl object-cover"
                loading="lazy"
                decoding="async">

            <div class="font-montserrat flex py-4 justify-between items-center">

                <h2 class="font-bold text-[20px]">
                    {{ strtoupper($tour->title) }}
                </h2>

                <p class="text-red-500 md:text-base text-xs">
                    {{ $tour->category }}
                </p>

            </div>

            <div class="font-montserrat flex flex-col gap-3 flex-grow">

                <p><b>Duration:</b> {{ $tour->duration }}</p>

                <p><b>Price per person:</b> {{ $tour->price }}</p>

                <p><b>Availability:</b> {{ $tour->availability }}</p>

                <p><b>Minimum capacity:</b> {{ $tour->capacity }}</p>

                <div class="mt-auto pt-3">

                    <button
                        onclick="openModal('tourModal{{ $tour->id }}')"
                        class="font-semibold text-gray-500 hover:text-red-500 transition">

                        Read More

                    </button>

                </div>

            </div>

        </div>

        <!-- Modal -->
        <div
            id="tourModal{{ $tour->id }}"
            class="fixed inset-0 z-50 hidden items-center justify-center p-5">

            <div class="bg-white rounded-3xl shadow-2xl w-[800px] overflow-hidden">

                <div class="flex flex-col lg:flex-row">

                    <!-- Image -->

                    <img
                        src="{{ asset('storage/'.$tour->image) }}"
                        class="w-full lg:w-[45%] h-72 lg:h-auto object-cover p-6 rounded-[40px]">

                    <!-- Content -->

                    <div class="flex flex-col p-8 flex-1">

                        <h2 class=" font-montserrat text-2xl font-semibold mb-8">

                            {{ strtoupper($tour->title) }}

                        </h2>

                        <div class="font-montserrat text-[15px] space-y-2 mb-8">

                            <p><b>Duration:</b> {{ $tour->duration }}</p>

                            <p><b>Price:</b> {{ $tour->price }}</p>

                            <p><b>Availability:</b> {{ $tour->availability }}</p>

                            <p><b>Minimum capacity:</b> {{ $tour->capacity }}</p>

                        </div>

                        <div class="font-montserrat text-gray-700 leading-6 flex-grow whitespace-pre-line">

                            {{ $tour->description }}

                        </div>

                        <div class="flex justify-between items-center mt-10">

                            <button
                                onclick="closeModal('tourModal{{ $tour->id }}')"
                                class="underline font-montserrat">

                                Cancel

                            </button>

                              <button
                                onclick="closeModal('tourModal{{ $tour->id }}'); openRequestModal({{ $tour->id }})"
                                class="px-6 py-3 rounded-xl font-montserrat bg-red-500 text-white shadow-lg hover:bg-red-600 transition">
                                SEND REQUEST
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @endforeach

    </div>
</div>

<script>
    function openModal(id) {
    const modal = document.getElementById(id);

    modal.classList.remove("hidden");
    modal.classList.add("flex");

    document.body.classList.add("overflow-hidden");
}

function closeModal(id) {
    const modal = document.getElementById(id);

    modal.classList.add("hidden");
    modal.classList.remove("flex");

    document.body.classList.remove("overflow-hidden");
}

document.querySelectorAll("[id^='tourModal']").forEach(modal => {

    modal.addEventListener("click", function(e) {

        if (e.target === modal) {

            closeModal(modal.id);

        }

    });

});
</script>

        </div>
    </div>

    <!-- SMIGIN event -->
    <h1 class="font-Baskervville px-7 md:px-28 md:pt-8 text-[30px] md:text-[43px] ">SMIDGIN EVENTS</h1>
    <div class="flex flex-nowrap md:py-12 md:px-24 px-7 space-x-7">

@foreach($events as $event)

<!-- Card -->
<div class="flex-none md:w-[390px] w-[280px] h-[630px] bg-white shadow-xl rounded-2xl p-8 flex flex-col">

    <img
        src="{{ asset('storage/' . $event->image) }}"
        class="mb-4 w-full h-[300px] rounded-2xl object-cover"
        loading="lazy"
        decoding="async">

    <div class="font-montserrat flex py-4 justify-between items-center">

        <h2 class="font-bold text-[20px]">
            {{ strtoupper($event->title) }}
        </h2>

        <p class="text-red-500 md:text-base text-xs">
            {{ $event->category }}
        </p>

    </div>

    <div class="font-montserrat flex flex-col gap-3 flex-grow">

        <p><b>Date:</b> {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>

        <p><b>Location:</b> {{ $event->location }}</p>

        <p><b>Price:</b> {{ $event->price }}</p>

        <div class="mt-auto pt-3">

            <button
                onclick="openModal('eventModal{{ $event->id }}')"
                class="font-semibold text-gray-500 hover:text-red-500 transition">

                Read More

            </button>

        </div>

    </div>

</div>

<!-- Modal -->
<div
    id="eventModal{{ $event->id }}"
    class="fixed inset-0 z-50 hidden items-center justify-center p-5">

    <div class="bg-white rounded-3xl shadow-2xl w-[800px] overflow-hidden">

        <div class="flex flex-col lg:flex-row">

            <!-- Image -->
            <img
                src="{{ asset('storage/'.$event->image) }}"
                class="w-full lg:w-[45%] h-72 lg:h-auto object-cover p-6 rounded-[40px]">

            <!-- Content -->
            <div class="flex flex-col p-8 flex-1">

                <h2 class="font-montserrat text-2xl font-semibold mb-8">
                    {{ strtoupper($event->title) }}
                </h2>

                <div class="font-montserrat text-[15px] space-y-2 mb-8">

                    <p><b>Category:</b> {{ $event->category }}</p>

                    <p><b>Date:</b> {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>

                    <p><b>Location:</b> {{ $event->location }}</p>

                    <p><b>Price:</b> {{ $event->price }}</p>

                </div>

                <div class="font-montserrat text-gray-700 leading-6 flex-grow whitespace-pre-line">

                    {{ $event->description }}

                </div>

                <div class="flex justify-between items-center mt-10">

                    <button
                        onclick="closeModal('eventModal{{ $event->id }}')"
                        class="underline font-montserrat">

                        Cancel

                    </button>

                    @if($event->shop_link)
                        <a
                            href="{{ $event->shop_link }}"
                            target="_blank"
                            class="px-6 py-3 rounded-xl font-montserrat bg-red-500 text-white shadow-lg hover:bg-red-600 transition">
                            BUY TICKET
                        </a>
                    @endif

                </div>

            </div>

        </div>

    </div>

</div>


@endforeach

    </div>

    <!-- PERSONALIZED BOTTLES -->
<h1 class="font-Baskervville md:px-48 px-5 py-12 md:py-20 text-3xl md:text-[43px]">PERSONALIZED BOTTLES</h1>
    <div class="flex flex-col justify-center space-y-8 md:space-y-14 items-center px-5 md:px-0">
        <div class="flex flex-col md:flex-row justify-between space-x-0 md:space-x-4 px-5 md:px-7 py-5 md:py-7 items-center w-full md:w-[1057px] rounded-2xl text-center bg-white shadow-2xl">
            <div class="w-full md:w-1/2">
                <img class="w-full h-auto md:h-[306px] object-cover" src="./img/personalizedbottle1.webp" loading="lazy" decoding="async"/>
            </div>
            <div class="font-montserrat flex flex-col text-start h-full w-full md:w-1/2 pt-5 md:pt-0">
                <h1 class="text-[18px] font-bold">PERSONALIZED SMIDGIN BOTTLE</h1><br/>
                <p class="text-[16px]">Choose a one-of-a-kind Smidgin bottle complete with your custom text, wax seal color, and ribbon, crafted for every special moment. Once your order is placed, our team will reach out to help bring your design to life. <br/><br/>Wax seal shades: red, purple, silver, or gold. Ribbon hues: red, purple, or blue</p><br/>
                <a href="https://smidgin-shop.myshopify.com/products/personalized-smidgin-bottle" class="px-5 py-3 w-full md:w-[174px] text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">GO TO SHOP</a>
            </div>
        </div>

        <div class="flex flex-col md:flex-row-reverse justify-between space-x-0 md:space-x-4 px-5 md:px-7 py-5 md:py-7 items-center w-full md:w-[1057px] rounded-2xl text-center bg-white shadow-2xl">
            <div class="w-full md:w-1/2">
                <img class="w-full h-auto md:h-[306px] object-cover" src="./img/personalizedbottle2.webp" loading="lazy" decoding="async"/>
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
       <img src="./img/logoFooter.png" class="w-[241px]" loading="lazy" decoding="async"/>
       <p class="font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
   </div>
   <div class="font-montserrat underline text-center w-1/3">
       <a href=""">Bottle Return Offer</a><br/>
       <a href=""">Privacy Policy</a><br/>
       <a href=""">Terms and Conditions</a>
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
    <a class="underline text-gray-500 font-montserrat text-[14px] mt-5" href=""">Bottle Return Offer</a><br/>
    <a class="underline text-gray-500 font-montserrat text-[14px] -mt-5" href=""">Privacy Policy</a><br/>
    <a class="underline text-gray-500 font-montserrat text-[14px] -mt-5" href=""">Terms and Conditions</a>
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