<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lappy Valley</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="tailwind-css.css"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
 <!-- Header Section -->
 <header class=" h-[100px] bg-gradient-to-r from-[#380D37] to-[#DC275C] text-white">
    <div class=" flex justify-between items-center h-full px-10">
      <!-- <!- Logo -->
      <div class='pr-2'>
        <a href="#"><img class="h-[80px]" src="img/Logo.svg" alt="Your Logo"></a>
      </div>
      <!-- Search Bar -->

      <div class="relative">
        <i class="fa fa-search absolute text-[aqua] top-[22px] left-4" aria-hidden="true"></i>
        <input type="text" 
        class="w-[750px] border text-left border-gray-300 rounded-[4px] py-4 px-10 placeholder-white-0 focus:outline-none focus:ring focus:border-blue-300"
         placeholder="Search" />
      </div>

      <!-- Right-Side Logos/Icons -->
     <div class='flex justify-center items-center '>
      <!-- <div class="flex item-center "> -->
      <img class='h-[60px]' src="img/Offers.svg" alt="Logo 1" class="">
     <a href="#"><img class='h-[60px]' src="img/Cart.svg" alt="Logo 2" class=""></a>
    <a href="#"> <img class='h-[60px]' src="img/Account.svg" alt="Logo 3" class=""></a>
      <!-- </div> -->
    </div>
    </div>
  </header>
  <!-----------------------header-section-end----->

  <nav class="bg-[#F2F2F2]  py-4 px-10">
    <ul class="font-[Jost] flex justify-between">
      <li class=" jost">
        <a href="product-list.php" class="font-[jost] text-[20px] text-[#353535] flex items-center">All Categories
          <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span>
        </a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">Brand New <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">Pre-owned <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">Gaming Laptop <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">Student Laptop <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">Bussines Laptop <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">Work Station <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">Dubai Variant <span class=" border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
      <li>
        <a href="#" class="font-[jost] text-[20px] text-[#353535] flex items-center">UK Variant <span class="border-[#353535] inline-block w-2 h-2 border-b-2 border-r-2 transform rotate-45 ml-1"></span></a>
      </li>
    </ul>
  </nav>

  <div class='ml-[40px]'>
    <h1 class='font-[jost] text-[20px] font-[400] leading-[23.3px] text-[#353535]'>All Categories/ Brand New</h1>
    <div class='h-1 bg-[#764A8733]'></div>
  </div>


 <!-- Sidenav -->
<div class=" container mx-auto mt-4">
  <div>
  <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px]'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">Availability</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>In Stock</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Pre Order</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Up Coming</span>
      </label>
    </div>
  </div>
  <!-- -----------------------2------------------ -->
  <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">Brands</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Asus</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>MSI</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>HP</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>DELL</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Lenovo</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Acer</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Apple</span>
      </label>
    </div>
  </div>
  <!-- --------------------3-------------------- -->
  <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">Processor Models</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel core i3</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel core i5</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel core i7</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel core i9</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Athlon</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 3</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 5</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 7</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 9</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Apple M1</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Apple M1 Pro</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Apple M1 Pro Max</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Apple M2</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Apple M2 Pro</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Apple M2 Pro Max</span>
      </label>
    </div>
  </div>
  <!-- ---------------------4---------------------- -->
  <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">Processor Generations</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 5th gen</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 6th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 7th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 8th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 9th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 10th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 11th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 12th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Intel 13th gen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 3000 series</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 4000 series</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 5000 series</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 6000 series</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>AMD Ryzen 7000 series</span>
      </label>
    </div>
  </div>
  <!-- ---------------------------------5-------------------- -->
  <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">Display Size</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Bellow 13 inch</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>13 inch to 13.9 inch</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>14 inch to 14.9 inch</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>15 inch to 15.9 inch</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>16 inch to 16.9 inch</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>17 inch to 17.9 inch</span>
      </label>
    </div>
    </div>
    <!-- --------------------6----------------- -->
 
<!-- ---------------------7----------------------- -->
<div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">RAM</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>4 GB</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>8 GB</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>16 GB</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>32 GB</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>64 GB</span>
      </label>
    </div>
    </div>
<!-- ----------------------8---------------------- -->
<div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">HDD</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>1 TB</span>
      </label>
    </div>
    </div>
    <!-- -------------------9---------------- -->

    <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">SSD</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>128 GB</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>256 GB</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>512 GB</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>1 TB</span>
      </label>
    </div>
    </div>

    <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">Graphics</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Integrated/Shared</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Dedicated 2GB</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Dedicated 4GB</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Dedicated 6GB</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Dedicated 8GB</span>
      </label>
    </div>
    </div>

    <div class=' faq bg-[#F2F2F2] shadow-[0_2px_4px_rgba(0,0,0,.1)] rounded-[10px] mt-3'>
    <div class='border-b-[2px] border-[#380D3733] flex justify-between px-[20px] py-[14px]'>
      <span class='text-[#380D37] font-[jost] font-[600] text-[20px] leading-[20.23px] ' for="text">Special Features</span>
      <a href="#"><i class="fa fa-angle-up active:rotate-180 text-[#000000] text-[20px] cursor-pointer" aria-hidden="true"></i></a>
    </div>
    <div class='px-[20px] py-[14px]'>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Backlit Keyboard</span>
      </label>
      <label class='block' for="#">
        <input class='border-[1px] border-[#764A87]' class='' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Finger Print</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>360 Degree</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Touch Screen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Touch Screen</span>
      </label>
      <label class='block' for="#">
        <input  class='border-[1px] border-[#764A87]' type="checkbox" name='status' valu='7'>
        <span class='font-[jost] text-[20px] text-[#380D37]'>Type-C Port</span>
      </label>
    </div>
    </div>
  </div>






        <div class="shadow-[2px_2px_5px_2px_#0000001A] py-2 px-4">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
            <div class="">
              <p class="font-[jost] text-[18px] font-[500] leading-[23px] text-left text-[#380D37]">
              Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
              </div>
              <div class='mt-1'>
              <ul class='text-[#353535] list-decimal px-4 text-[13px] leading-[25px]'>
                <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                <li>Display: 15.6" FHD (1920X1080)</li>
                <li>Features: Type-C</li>
              </ul>
              </div>
              </div>
              <div class=" text-center my-3">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-[#DC275C] block">1,50,000 TAKA</a>
                <button class='bg-[#380D37] text-white py-1 px-14 rounded-[5px] my-[10px]'>Buy Now</button>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px]">Add to Cart</p>
              </div>
          </div>
  


        <div class="shadow-[2px_2px_5px_2px_#0000001A] py-2 px-4">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
            <div class="">
              <p class="font-[jost] text-[18px] font-[500] leading-[23px] text-left text-[#380D37]">
              Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
              </div>
              <div class='mt-1'>
              <ul class='text-[#353535] list-decimal px-4 text-[13px] leading-[25px]'>
                <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                <li>Display: 15.6" FHD (1920X1080)</li>
                <li>Features: Type-C</li>
              </ul>
              </div>
              </div>
              <div class=" text-center my-3">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-[#DC275C] block">1,50,000 TAKA</a>
                <button class='bg-[#380D37] text-white py-1 px-14 rounded-[5px] my-[10px]'>Buy Now</button>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px]">Add to Cart</p>
              </div>
            </div>
     

        <div class="shadow-[2px_2px_5px_2px_#0000001A] py-2 px-4">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
            <div class="">
              <p class="font-[jost] text-[18px] font-[500] leading-[23px] text-left text-[#380D37]">
              Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
              </div>
              <div class='mt-1'>
              <ul class='text-[#353535] list-decimal px-4 text-[13px] leading-[25px]'>
                <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                <li>Display: 15.6" FHD (1920X1080)</li>
                <li>Features: Type-C</li>
              </ul>
              </div>
              </div>
              <div class=" text-center my-3">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-[#DC275C] block">1,50,000 TAKA</a>
                <button class='bg-[#380D37] text-white py-1 px-14 rounded-[5px] my-[10px]'>Buy Now</button>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px]">Add to Cart</p>
              </div>
            </div>
        

        <div class="shadow-[2px_2px_5px_2px_#0000001A] py-2 px-4">
            <img class="object-center" src="https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg" alt="">
            <div class='border-t-[1px] border-b-[1px] border-[#380D3733] py-2'>
            <div class="">
              <p class="font-[jost] text-[18px] font-[500] leading-[23px] text-left text-[#380D37]">
              Lenovo IdeaPad 15AMN7 AMD Ryzen 5 7520U 8-512 GB</p>
              </div>
              <div class='mt-1'>
              <ul class='text-[#353535] list-decimal px-4 text-[13px] leading-[25px]'>
                <li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li>
                <li>RAM: 8GB DDR5 5500MHz, Storage: 256GB SSD</li>
                <li>Display: 15.6" FHD (1920X1080)</li>
                <li>Features: Type-C</li>
              </ul>
              </div>
              </div>
              <div class=" text-center my-3">
                <a href="#" class="font-[jost] text-[14px] font-[600] leading-[20px] text-[#DC275C] block">1,50,000 TAKA</a>
                <button class='bg-[#380D37] text-white py-1 px-14 rounded-[5px] my-[10px]'>Buy Now</button>
                <p class="font-[jost] text-[14px] font-[600] leading-[20px]">Add to Cart</p>
              </div>
            </div>
      </div>
   


    </div>
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
    <div class="mt-[20px] grid grid-cols-5 gap-2 text-[24px]">
      <a href=""> <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
    </div>
    </ul>
  </div>
 </div>
 </footer>

 <!-- // Initialization for ES Users -->
<!-- Sidebar -->

<script>
const faqs = document.querySelectorAll('.faq');
faqs.forEach(faq =>){
  faq.addEventListener('click',() => {
    faq.classList.toggle('active')
  })
}

</script>




 </body>
</html>
                    
                          