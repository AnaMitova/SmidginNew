<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./output.css" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e70ea989f6.js" crossorigin="anonymous"></script>
    <style>
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
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

<body id="top"><!-- Homepage Section -->
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
            <a href="./whoweare.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
            <a href="./ourgin.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
            <a href="./whatweoffer.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHAT WE OFFER</a>
            <a href="findourstores.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">FIND OUR STORES</a>
            <a href="https://smidgin-shop.myshopify.com/?srsltid=AfmBOoqJHd6Cccrm3CCQvzWikXUkEKywegonf-rx2u145ZDkvLJxZu05" class="px-3 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BUY ONLINE</a>
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
function openModal(id) { document.getElementById(id).classList.remove("hidden"); }
function closeModal(id) { document.getElementById(id).classList.add("hidden"); }
</script>

<!-- Privacy Policy Content -->
<a href="javascript:history.back()" class="font-montserrat md:px-32"><i class="fa-solid pt-12 fa-arrow-left md:ml-0 ml-7 pr-4 "></i>BACK</a>

<div class="flex flex-col space-y-3 pb-12 md:pb-20">
    <h1 class="font-Baskervville text-[28px] md:text-5xl md:px-32 px-7 pt-7">PRIVACY POLICY</h1>
</div>

<div class="flex flex-col md:flex-row px-7 md:px-32 justify-between space-y-6 md:space-y-0">
    <p class="md:w-[45%] font-montserrat text-[17px] md:text-[18px]">
        We hope you will enjoy Smidgin craft gin and using the Smidgin website (our “website”) and we want to make sure your experience is as safe and useful as possible. Here you can find out how our website works, what data we collect from you, how we use it, conditions where we may disclose this data to others and how we keep it secure. By using our website you agree to be bound by the terms of this policy.<br/><br/>
        Skenderoski and Lowther DOO (“Smidgin”, “we” and “us”) takes the issue of security and data protection very seriously and strictly adheres to guidelines published in The General Data Protection Regulation (GDPR), agreed upon by the European Parliament 2016/679 which is in force since the 25th May 2018. We are the data controller of any personal data that you provide us.<br/><br/>
        Any questions relating to this policy and our privacy practices should be sent to info@smidgin.mk
    </p>
    <img src="./img/privacypolicy.jpeg" class="md:w-[48%] rounded-3xl"/>
</div>

<p class="font-montserrat text-[17px] md:text-[18px] px-7 md:px-32 pt-16">
<b>How we collect information from you and what information we collect</b><br/>
We collect personal information that you give us by filling in forms on our website or purchasing products on our website. It includes information that you provide when you become a Gin Friend and place an order on our website.<br/><br/>
We collect the following personal information about you:
Name, e-mail address, shipping address, and financial and credit card information;
your IP address and clicks on our website from your use of our online services.<br/><br/>

<b>Why we need this information about you</b><br/>
We need your information and use the information we collect about you:
<ul class="list-disc pl-5 font-montserrat px-7 md:px-32 text-[17px] md:text-[18px]">
<li>to enable us to supply you with products and services that you have requested;</li>
<li>to help us with understanding more about how our site is used;</li>
<li>to be able to send you communications that may be of interest to you, either electronically or otherwise;</li>
<li>for all other purposes consistent with the proper performance of our operations.</li>
</ul><br/>
<div class="font-montserrat px-7 md:px-32 text-[17px] md:text-[18px]">
<b>Marketing</b><br/>
It is your choice whether you receive information such as marketing from us. If you indicated that you are interested in receiving regular information about Smidgin Gin’s activities by signing up to become a Gin Friend, we will send you communications electronically. We will not contact you for marketing purposes unless you have given your prior consent. If, at any time, you no longer wish to receive this information, please send a written request to info@smidgin.mk.<br/><br/>

<b>Trustpilot Reviews</b><br/>
Skenderoski and Lowther DOO may contact you via email to invite you to review any services and/or products you received from us in order to collect your feedback and improve our services and products.
</p>
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
</body>
</html>
