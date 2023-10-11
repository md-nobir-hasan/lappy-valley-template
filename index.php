<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lappy Valley</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
  <script src="tailwind-css.css"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Header Section -->
  <header class="md:mx-auto h-[78px]  bg-gradient-to-r from-[#380D37] to-[#DC275C] text-white">
    <div class="mx-auto flex justify-center items-center">
      <!-- <!- Logo -->
      <div>
        <img class="md:min-w-[82%] w-[100%] lg:w-[95%] md:w-[90%] h-[60px] " src="img/Logo.svg" alt="Your Logo">
      </div>
      <!-- Search Bar -->

      <div class="relative">
        <i class="fa fa-search absolute text-[aqua] top-[14px] left-4" aria-hidden="true"></i>
        <input type="text" class="xl:min-w-[820px] lg:min-w-[600px] border border-gray-300 rounded-[4px] py-2 px-10 placeholder-white-0 focus:outline-none focus:ring focus:border-blue-300" placeholder="Search" />
      </div>

      <!-- Right-Side Logos/Icons -->

      <!-- <div class="flex item-center "> -->
      <img src="img/Offers.svg" alt="Logo 1" class="">
      <img src="img/Cart.svg" alt="Logo 2" class="">
      <img src="img/Account.svg" alt="Logo 3" class="">
      <!-- </div> -->
    </div>
  </header>
  <!-----------------------header-section-end----->

  <nav class="bg-[#F2F2F2]  p-4">
    <ul class="font-[Jost] flex space-x-4 justify-evenly">
      <li class=" jost">
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">All Categories
          <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span>
        </a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">Brand New <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">Pre-owned <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">Gaming Laptop <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">Student Laptop <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">Bussines Laptop <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">Work Station <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">Dubai Variant <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="jost font-medium text-base text-[#353535] flex items-center">UK Variant <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
    </ul>
  </nav>
  <!--------------------nav-end---------->


  <div class="container mx-auto lg:px-16">

    <!-- Hero Section  -->
    <section>
    <div class="relative">
        <div class="slide relative">
            <img class=""
                src="img/Hero Image.svg">
           
        </div>

        <div class="slide relative">
            <img class=""
                src="img/Hero Image.svg">
          
        </div>

        <div class="slide relative">
            <img class=""
                src="img/Hero Image.svg">
        </div>

        <!-- The previous button -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 -translate-x-[42px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer"
            onclick="moveSlide(-1)"><i class="fa fa-angle-left" aria-hidden="true"></i></a>

        <!-- The next button -->
        <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 translate-x-[42px] text-[40px] text-blue-500 opacity-50 hover:opacity-100 cursor-pointer"
            onclick="moveSlide(1)"><i class="fa fa-angle-right" aria-hidden="true"></i></i></a>

    </div>
    </section>
    <!-- --------hero--section --end ----  -->


    <!-- Feature Laptop  -->
    <section>
      <div class="text-center py-1">
        <h2 class="font-[jost] text-[40px] font-black text-[#353535]">Featurds Laptops </h2>
        <p class="font-[jost] text-[16px] font-extrabold text-[#380D37]">The best we offer is here</p>
      </div>
      <div class="pt-[60px]">
        <button class="py-2 px-16 rounded-[1px] bg-[#380D37] text-white font-[500] text-[20px] font-[jost]">USA</button>
        <button class="py-2 px-16 rounded-[1px] bg-[#F2F2F2] text-black font-[500] text-[20px] font-[jost]">ASIAN</button>
        <div class="container h-1 bg-[#380D37;]"></div>
      </div>

      <!-- Product  -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- New arrival  -->
    <section>
      <!-- heading -->
      <div class="py-[3rem] text-white bg-gradient-to-r from-[#380D37] to-[#DC275C]">
        <h1 class="text-[27px] font-[jost] text-center">New Arrival</h1>
      </div>

      <!-- banner  -->
      <div class="flex gap-2 mt-5 mb-5">
        <div class="pt-[22px] inline-block font-[jost] text-[44px] font-[500] text-[#DC275C]">
          <p class="leading-[59px]"> Our newest <br>products are <br>here, just for you!</p>
          <button class="mt-[-15px] py-2 px-3 text-[16px] text-[#F2F2F2] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C] ">
            Visit Now!
          </button>
        </div>
        <div>
          <img class=" w-[820px] h-[352px]" src="img/Hero Image.svg" alt="">
        </div>
      </div>

      <!-- Products  -->
      <!-- Product  -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Feature Laptop  -->
    <section>
      <div class="text-center py-1">
        <h2 class="font-[jost] text-[40px] font-black text-[#353535]">Featurds Laptops </h2>
        <p class="font-[jost] text-[16px] font-extrabold text-[#380D37]">The best we offer is here</p>
      </div>
      <div class="pt-[60px]">
        <button class="py-2 px-16 rounded-[1px] bg-[#380D37] text-white font-[500] text-[20px] font-[jost]">USA</button>
        <button class="py-2 px-16 rounded-[1px] bg-[#F2F2F2] text-black font-[500] text-[20px] font-[jost]">ASIAN</button>
        <div class="container h-1 bg-[#380D37;]"></div>
      </div>

      <!-- Product  -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Differential products  -->
    <!-- Feature Laptop  -->
    <section>
      <div class="text-center py-1">
        <h2 class="font-[jost] text-[40px] font-black text-[#353535]">Differential Laptops </h2>
        <p class="font-[jost] text-[16px] font-extrabold text-[#380D37]">The best we offer is here</p>
      </div>
      <div class="pt-[60px]">
        <button class="py-2 px-16 rounded-[1px] bg-[#380D37] text-white font-[500] text-[20px] font-[jost]">USA</button>
        <button class="py-2 px-16 rounded-[1px] bg-[#F2F2F2] text-black font-[500] text-[20px] font-[jost]">ASIAN</button>
        <div class="container h-1 bg-[#380D37;]"></div>
      </div>

      <!-- Product  -->
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-col-5 gap-2 mt-6 mb-[78px]">
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow-[2px_2px_5px_2px_#0000001A] p-2">
          <div class="bg-white rounded-lg">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class="">
              <p class="font-[jost] text-[16px] font-[500] leading-[23px] text-left text-[#380D37]">
                Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey</p>
              <div class="py-[12px] flex justify-between px-2">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-left text-[#DC275C]">1,50,000TK</a>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px] text-left">Add to Cart</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- See more button  -->
      <button class=" items-center justify-center flex my-[60px] mx-auto text-[16px] text-[#F2F4F8] w-[116px] h-[44px] rounded-[4px] bg-gradient-to-r from-[#380D37] to-[#DC275C]">
        <a href="">See More</a>
      </button>
    </section>

    <!-- Currention code from this line upto footer  -->
    <section>
      <div>
        <h2 class="mt-8 text-center font-[jost] text-[40px] font-[500] leading-[58px] text-left text-[#353535]">Why Choose Us?</h2>
      </div>
      <div class="grid grid-cols-5 gap-2 my-[50px] ">
        <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
          <img class="mx-auto" src="img/Group 27.svg" alt="Product">
          <h2 class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[20px] font-black leading-[35px] text-center ">Wide Varieties</h2>
          <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We have a wide collection of laptops from different brands. We have brand new and pre-ownedlaptops in our collection.</p>
        </div>
        <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
          <img class="mx-auto" src="img/trust 1.svg" alt="Product">
          <h2 class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[19px] font-black leading-[35px] text-center ">Trusted and Reliable</h2>
          <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We are trusted and reliable shop. We provide you with the best services and good quality products.</p>
        </div>
        <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
          <img class="mx-auto" src="img/Group 27 (2).svg" alt="Product">
          <h2 class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[20px] font-black leading-[35px] text-center ">Best Service</h2>
          <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We provide you with the best after sell services. Any problem, you take it to us and we will solve it.</p>
        </div>
        <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
          <img class="mx-auto" src="img/best-price 1.svg" alt="Product">
          <h2 class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[19px] font-black leading-[35px] text-center ">Best Price in Market</h2>
          <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We will give you the best and lowest possible price in market.</p>
        </div>
        <div class=" rounded-[4px] shadow-[2px_2px_5px_2px_#0000001A] p-3">
          <img class="mx-auto" src="img/fast-delivery 1.svg" alt="Product">
          <h2 class=" mt-[25px] mb-[10px] text-[#DC275C] font-[jost] text-[20px] font-black leading-[35px] text-center ">Fast Delivary</h2>
          <p class="font-[jost] text-[14px] font-[500] leading-[20px] text-left text-[#380D37]">We deliver our products carefully as fast as possible at your door step.</p>
        </div>
    </section>


    <!-- ----------------choose-secton--end-------- -->

    <!-- About us  -->
    <section>
      <div class="mb-3">
        <h2 class="text-center text-[40px] font-[jost] text-[#353535] font-black">About Us</h2>
      </div>
      <div>
        <p class="font-[jost] text-[#353535] font-bold leading-[1.3rem]">Brand New and used Laptop import from USA, Dubai & Japan. MacBook, HP,ASUS, Dell, Lenovo, MSI, Acer, Microsoft
          Surface, Toshiba, Razer Blade & Samsung laptop are available in different models with a very competitive market price.</p>
      </div>
    </section>

    <!-- What our client says  -->
    <section class="mt-16">
      <h2 class="mb-12 text-center font-black font-[jost] text-[42px] text-[#353535]">What Our Clients Say About Us</h2>
      <div class="grid grid-cols-3 gap-3">
        <div class="rounded-[12px] py-4 px-8 bg-white shadow-[2px_2px_5px_2px_#0000001A]">
          <div class="flex justify-center">
            <div class="flex items-center">
              <img class="rounded-[100%]" src="img/Ellipse 5.svg" alt="">
              <div class="ml-2">
                <h1 class="font-[Lato] text-[18px] font-[700] leading-[22px] text-center text-[#353535]">
                  Leo</h1>
                <p class="font-[Lato] text-[12px] font-[400] leading-[14px] text-center text-[#353535]">
                  Lead Designer</p>
              </div>
            </div>
            <!-- <div class="flex items-baseline"> -->

            <!-- <div class="flex items-center"> -->
            <div class="flex mt-[21px] ml-auto">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star (1).svg" alt="">
            </div>
            <!-- </div> -->
            <!-- </div> -->

          </div>



          <h1 class="my-[19px] font-[Lato] font-[700] text-[18px] leading-[22px] text-center text-[#353535]">
            It was a very good experience</h1>
          <p class="my-[17px] font-[jost] font-[400] text-[13px] leading-[14px] text-left text-[#353535]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci lectus maecenas.
            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue
            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacusarcu.</p>
        </div>

        <div class="rounded-[12px] py-4 px-8 bg-white shadow-[2px_2px_5px_2px_#0000001A]">
          <div class="flex justify-center">
            <div class="flex items-center">
              <img class="rounded-[100%]" src="img/Ellipse 5.svg" alt="">
              <div class="ml-2">
                <h1 class="font-[Lato] text-[18px] font-[700] leading-[22px] text-center text-[#353535]">
                  Leo</h1>
                <p class="font-[Lato] text-[12px] font-[400] leading-[14px] text-center text-[#353535]">
                  Lead Designer</p>
              </div>
            </div>
            <!-- <div class="flex items-baseline"> -->

            <!-- <div class="flex items-center"> -->
            <div class="flex mt-[21px] ml-auto">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star (1).svg" alt="">
            </div>
            <!-- </div> -->
            <!-- </div> -->

          </div>



          <h1 class="my-[19px] font-[Lato] font-[700] text-[18px] leading-[22px] text-center text-[#353535]">
            It was a very good experience</h1>
          <p class="my-[17px] font-[jost] font-[400] text-[13px] leading-[14px] text-left text-[#353535]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci lectus maecenas.
            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue
            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacusarcu.</p>
        </div>

        <div class="rounded-[12px] py-4 px-8 bg-white shadow-[2px_2px_5px_2px_#0000001A]">
          <div class="flex justify-center">
            <div class="flex items-center">
              <img class="rounded-[100%]" src="img/Ellipse 5.svg" alt="">
              <div class="ml-2">
                <h1 class="font-[Lato] text-[18px] font-[700] leading-[22px] text-center text-[#353535]">
                  Leo</h1>
                <p class="font-[Lato] text-[12px] font-[400] leading-[14px] text-center text-[#353535]">
                  Lead Designer</p>
              </div>
            </div>
            <!-- <div class="flex items-baseline"> -->

            <!-- <div class="flex items-center"> -->
            <div class="flex mt-[21px] ml-auto">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star.svg" alt="">
              <img class="pt-[1.25px] pr-[1.25px] pb-[1.86px] pl-[1.25]" src="img/star (1).svg" alt="">
            </div>
            <!-- </div> -->
            <!-- </div> -->

          </div>



          <h1 class="my-[19px] font-[Lato] font-[700] text-[18px] leading-[22px] text-center text-[#353535]">
            It was a very good experience</h1>
          <p class="my-[17px] font-[jost] font-[400] text-[13px] leading-[14px] text-left text-[#353535]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursusnibh mauris, nec turpis orci lectus maecenas.
            Suspendisse sed magnaeget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue
            sit cursus pellentesqueenim arcu.Elementum felis magna pretium in tincidunt.
            Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacusarcu.</p>
        </div>

      </div>

      <div class="flex justify-evenly mx-auto w-[300px] pt-[40px] ">
        <img src="img/Vector (1).svg" alt="">
        <img src="img/Ellipse 5 (1).svg" alt="">
        <img src="img/Ellipse 6.svg" alt="">
        <img src="img/Ellipse 6.svg" alt="">
        <img src="img/Ellipse 6.svg" alt="">
        <img src="img/Ellipse 6.svg" alt="">
        <img src="img/Ellipse 6.svg" alt="">
        <img src=" img/Vector (2).svg" alt="">
      </div>
      <div class="mt-16 h-1 bg-[#380D37]"></div>
    </section>

    <!-- Drop/submit a review  -->
    <section class="mt-16 mb-5">
      <div class="text-center font-black font-[jost] text-[42px] font-[500] leading-[61px] text-[#380D37]">
        <h1>Drop a review!</h1>
          </div>
            <div class="grid grid-cols-2 mt-20">
              <div>
                <div>
                  <h1 class="font-[jost] text-[40px] font-[500] leading-[55px] text-[#DC275C]">We Believe in the </br> power of </br> Communication</h1>
                   </div>
                     <div>   
                      <p class="mt-8 font-[jost] text-[24px] font-[500] leading-[30px] text-[#353535]">Share your experience with us.</br> Drop a comment and we will look into it.</p>
                        </div>
                          </div>
                           <form>
                            <div class="grid grid-cols-2 gap-2">
                           <input class="bg-[#F2F2F2] font-[jost] text-[16px] italic font-[500] leading-[23px] text-left py-[8px] px-[12px]" id="name" type="text" placeholder="Name*">
                          <input class="bg-[#F2F2F2] font-[jost] text-[16px] italic font-[500] leading-[23px]  py-[8px] px-[12px]" id="email" type="email" placeholder="Email*">
                         </div>
                        <div>
                      <input class="w-full py-2 px-3 bg-[#F2F2F2] font-[jost] text-[16px] mt-[20px] mb-[20px] italic font-[500] " id="subject" type="text" placeholder="Subject(optional)">
                    </div>
                  <div>
                <textarea class=" w-full py-2 pb-32 px-3 bg-[#F2F2F2] font-[jost] text-[16px]  italic font-[500] " id="message" rows="4" placeholder=" Message"></textarea>
              </div>
            <div class="items-center">
          <button class="text-[#F2F2F2] font-[jost] text-[16px] font-[500] mt-[15px] pt-[5px] pr-[30px] pl-[30px] pb-[5px] bg-gradient-to-r from-[#380D37] to-[#DC275C] " type="submit">Post
        </button>
      </div>
    </form>
 </div>
 </section>
 
 <!-- --------------form------end--------------------- -->
 
 <footer class="bg-gradient-to-r from-[#380D37] to-[#DC275C] pt-4 text-white mt-20 h-[400px]">
 <div class="flex justify-evenly">
 
  <div class="">
    <p class="text-[#F2F2F2] font-[jost] text-[40px] font-[500] text-left my-3">Address</p>
    <ul class="text-[#F2F2F2] font-[jost] text-[15px] font-[500] leading-[23px] text-left">
      <li>
        <a href="#" class="hover:text-gray-300">Address: </a>
      </li>
      <li>
        <a href="#" class="hover:text-gray-300">Shop # 4A-009A, Block # A, Level #04,</a>
      </li>
      <li class="mb-[15px]">
        <a href="#" class="hover:text-gray-300">Jamuna Future Park, Dhaka -1229</a>
      </li>
      <li>
        <a href="#" class="hover:text-gray-300"> Shop # 607(5th Floor),</a>
      </li>
      <li>
        <a href="#" class="hover:text-gray-300">Rajuk Commercial-Complex, </a>
      </li>
      <li class="mb-[15px]">
        <a href="#" class="hover:text-gray-300">Azampur, Uttara, Dhaka-1230</a>
      </li>
      <li>
        <a href="#" class="hover:text-gray-300">Trade license : 202984t</a>
      </li>
      <li>
        <a href="#" class="hover:text-gray-300">Bin Number : 0049818790102</a>
      </li>
    </ul>
  </div>
 
  <div>
    <p class="text-[#F2F2F2] font-[jost] text-[40px] font-[500] text-left my-3">Company</p>
    <ul class="text-[#F2F2F2] font-[jost] text-[14px] font-[500] leading-[23px] text-left">
      <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Terms& Conditions</a></li>
      <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Privay Policy</a></li>
      <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">My account</a></li>
      <li class="mb-[25px] list-disc hover:bg-blue-950"><a href="#">Refund & Service Policy</a></li>
    </ul>
  </div>
 
  <div class="">
    <p class="text-[#F2F2F2] font-[jost] text-[40px] font-[500] text-left my-3">
      Contact</p>
    <ul class="text-[#F2F2F2] font-[jost] text-[15px] font-[500] leading-[23px] text-left">
      <li class="mt-[15px]"><a href="#" class="hover:text-gray-300"> Phone:</a></li>
      <li><a href="#" class="hover:text-gray-300">+8801757773557, +8801712644209,</a></li>
      <li class="mb-[15px]"><a href="#" class="hover:text-gray-300">+8801736361123, +8801722288944</a>
      </li>
      <li><a href="#" class="hover:text-gray-300">Email:</a></li>
      <li class="mb-[15px]"><a href="#" class="hover:text-gray-300">info@lappyvalley.com</a></li>
      <li><a href="#" class="hover:text-gray-300">Trade license : 202984</a></li>
      <li><a href="#" class="hover:text-gray-300">Bin Number : 0049818790102</a></li>
    </ul>
 
    <!-- -------social----------icon------------- -->
    <div class="mt-[20px] flex justify-evenly">
      <a href=""> <img class="h-[24px]" src="img/Vector.svg" alt=""></a>
      <a href=""> <img class="h-[24px]" src="img/Vector (7).svg" alt=""></a>
      <a href=""> <img class="h-[24px]" src="img/Vector (4).svg" alt=""></a>
      <a href=""></a><img class="h-[24px]" src="img/Vector (5).svg" alt=""></a>
      <a href=""></a><img class="h-[24px]" src="img/Vector (6).svg" alt=""></a>
    </div>
    </ul>
  </div>
 </div>
 </footer>
 
 <!-- ---------------footer--section----end---------- -->
   

      <!-- Javascript code -->
      <script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName('dot');
            
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // remove active status from all dots
            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove('bg-yellow-500');
                dots[i].classList.add('bg-green-600');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');

            // highlight the active dot
            dots[slideIndex - 1].classList.remove('bg-green-600');
            dots[slideIndex - 1].classList.add('bg-yellow-500');
        }
    </script>

 </body>


</html>
                    
                          