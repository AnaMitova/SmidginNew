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

<body id="top">    <!-- Homepage Section -->
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

    <!-- Return offer -->
    <a href="javascript:history.back()" class="font-montserrat  md:px-32"><i class="fa-solid pt-12 fa-arrow-left md:ml-0 ml-7 pr-4 "></i>BACK</a>
    
    <div class="flex flex-col space-y-3 pb-12">
        <h1 class="font-Baskervville text-[28px] px-7 md:text-5xl md:px-32 pt-7">TERMS AND CONDITIONS</h1>
    </div>
    <p class="font-montserrat text-[17px] md:text-[20px] px-7 md:px-32 pb-12">
<B>Terms and Conditions of sale</B><br/>
Please read these terms and conditions carefully as they affect your rights and liabilities under the law and set out the terms under which we makes our products available to you.
​<br/><br/>
<b>Cancellation of tours</b><br/>
We regret that no refunds or re-scheduling of tours are available for bookings cancelled less than 48 hours prior to the pre-booked tour. Should a cancellation be made more than 48 hours prior to the tour but less than one week, a refund of 50% of the price paid will be applied.  A full refund will be applicable in all other cases.  Should you miss your allocated time, entry to the distillery or transfer to a later time slot cannot be guaranteed. For any questions or queries, use our <u>contact form </u>email us at <u><u>orders@smidgin.mk</u></u>,
​<br/><br/>
<b>Tour Gift Voucher Conditions</b><br/>
All our MCM Distillery tours are by appointment. To redeem a voucher you must book a tour in advance by using the tour <u>booking form</u> on this website, emailing <u>tours@smidgin.mk</u>.
​<br/><br/>
Vouchers are valid for 12 months from the date that the voucher is created, with restrictions and dependent on the distillery availability. Vouchers cannot be extended or exchanged. Please be advised that MCM Distillery is a working distillery and therefore standing is required.
​<br/><br/>
<b>Information about us</b><br/>
The Smidgin Gin online shop is operated by Senderoski and Lowther DOO (“we”). We are registered in North Macedonia under company number xxxxx with our registered office at xxxxx
The Trade Marks SMIDGIN and SMIDGIN GIN and the graphic lion device are Trade Marks of Skenderoski and Lowther DOO and/or are the subject of Trade Mark applications and/or registrations in North Macedonia, EU and elsewhere around the world.
 <br/><br/>
<b>Use of the online shop</b><br/>
Our online shop is only intended for use by people resident in North Macedooia. We do not accept orders for individuals outside of Macedonia. All orders for goods placed by you via the online order form shall be deemed to be an offer by you, the buyer, to purchase goods pursuant to these terms and conditions. You, the buyer, shall be responsible for ensuring the accuracy of the details provided in your order and we will not be obliged to accept an order unless all details requested have been provided correctly.
 <br/><br/>
<b>Your Status</b><br/>
By placing an order you warrant that:
(a) you are legally capable of entering into binding contracts;<br/>(b) you are at least 18 years old;<br/>(c) you are resident in the North Macedonia;<br/>(d) you are placing your order from North Macedonia; and<br/>(e) all details provided on your order for the purpose of purchasing the goods are correct.
 <br/><br/>
<b>Prices</b><br/>
All prices are in MKD (Macedonian Dinar). The prices payable for the products that you order are clearly set out in the website. If, by mistake, we have under-priced an item, we will not be liable to supply that item to you at the stated price, provided that we notify you before we despatch the item concerned. All prices are expressed inclusive of any VAT payable, but exclusive of delivery costs. You will be advised of the cost of delivery on the website at the time your order is accepted. Skenderoski and Lowther DOO reserves the right to alter the prices of the goods on offer online at any time without prior notice.
 <br/><br/>
<b>Taxes and duties</b><br/>
The total price we charge you for the Goods in your order includes all applicable taxes payable in North Macedonia.
 <br/><br/>
<b>Stock availability</b><br/>
All of MCM Distillery’s products and services are subject to availability.If we are unable to fulfil your order we will contact you within 3 working days of receiving your order.
 <br/><br/>
<b>Pre-ordering of goods and return of pre-orders</b><br/>
Where a product is open for pre-order by us, with a delayed date of release, payment will be taken immediately upon receipt of a pre-order and the product will then be dispatched to you as soon as reasonably practicable after the release date. Should you wish to cancel your pre-order with us, you must notify us within 14 days after the date of the pre-order to be eligible for a full refund.
 <br/><br/>
<b>Accessibility and other information</b><br/>
As we are a working distillery, our tours takes place in the room that we make every single drop of our award-winning gin. Upon joining a tour, you might even get a glimpse at our team in action depending on when you visit us. During production, the distillery and its contents can become very hot and we ask all guests to avoid touching any of our precious equipment and listen carefully to the instructions given by our guides. Additionally, we advise that the tour is not suitable for children or babies and as a production site, we are unable to allow any pets in the distillery.
 <br/><br/>
Our distillery is a small space and we cannot provide permanent seating on our tours. Should you or a member of your party have accessibility or mobility issues, please advise us in advance and we can take steps to ensure your visit is as accommodating and comfortable as possible.
 <br/><br/>
<b>Acceptance</b><br/>
As all products and services are subject to availability, there will be no contract of any kind between you and us unless and until we actually process and dispatch the goods to you. At any point up until then, we may decline to supply the goods to you without giving any reason. At the moment that the goods are processed and dispatched, and not before, a contract will be made between you and us. We cannot sell alcoholic products to anyone under 18.  By using this website shop, you confirm that you are at least 18 years of age and of legal drinking age in your country of residence. For this reason, we may refuse an order at our discretion and orders may not be transferred from the customer to any other person.
 <br/><br/>
<b>Payment</b><br/>
You can pay by any Visa or Mastercard credit card, Visa Delta or Maestro debit card.
<br/>Your payment details will be encrypted to minimise the possibility of unauthorised access or disclosure. Authority for payment must be given at the time of order. You will be automatically charged for your order once your order has been acknowledged. Our liability to you in connection with any order will not exceed the total price charged for the relevant items.
 <br/><br/>
<b>Delivery information</b><br/>
Please note that we can only deliver gin to addresses within North Macedonia.  Delivery is by courier. We will deliver to the address as you have entered it on the order.  We cannot accept any liability for late or failed delivery if the quoted address is incorrect or incomplete. Please check the delivery address if you are uncertain.  If you request a delivery to a business, we shall consider the delivery to be successful, if it is delivered to a reception area and signed for by a representative at that address.
​<br/><br/>
Orders will normally be delivered within 4 working days of receipt. If goods fail to arrive after 14 days from date of order, please notify us on: <u>orders@smidgin.mk</u>.  We do our best to secure delivery within 14 days of the date of your order, but shall not be liable for loss occasioned by delay in delivery arising out of any cause beyond our control.
​<br/><br/>
In the event that the order is returned to us by the courier or otherwise due to non-delivery, MCM Distillery gives the purchaser the option of resending the purchase at the purchaser’s expense or refunding the purchase less the cost of postage and packing. We cannot deliver to PO boxes.
​<br/><br/>
<b>Returns & refunds</b><br/>
We hope you will be happy with your purchase. However, should you feel it necessary to return an item because it is faulty or different to those ordered, we aim to make the returns process as simple as possible. If you believe that there is a product quality issue, then please contact us on: <u>orders@smidgin.mk</u>. We must be notified of damaged goods within 2 days of delivery. We will refund the credit/debit card/Paypal account used to make the purchase including postage charges incurred when we receive the items back. Purchasers may cancel the order by informing MCM Distillery up to 7 days after receiving the order. Goods must be returned unopened, sealed and in original condition with the tax stamp intact and unbroken, together with the original invoice within 7 days of the date cancelled. MCM Distillery will refund the purchase within 30 days of you notifying us about the return. T he cost of returning the product is the responsibility of the purchaser. Liability for loss or damage during transit is also the responsibility of the purchaser.
 <br/><br/>
<b>Contact us</b><br/>
If you have an order query, please use our <u>contact form</u> email us at <u>orders@smidgin.mk</u>,
    </p>
    <div class="flex justify-center md:justify-start">
       <a href="https://f6df1594-625f-438a-b926-815781ef3fa2.filesusr.com/ugd/f4cdbe_8355c9d579204246813e135f784b61db.pdf" class="px-[32px] hover:bg-red-50 duration-200 cursor-pointer  md:ml-32 py-[16px] border-[1px] shadow-lg bg-white border-red-500 rounded-2xl font-montserrat">Protection of Personal Data</a>
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
