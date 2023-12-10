   <!-- Hero Section -->
   <section class="w-full mt-14">
       <div class="bg-main py-3 md:py-5 lg:py-4">
           <div class="flex justify-center mb-3" id="main" data-aos="zoom-in" data-aos-duration="2000">
               <a href="" class="text-3xl text-gray-400 font-bold hover:underline decoration-ungu underline-offset-4">
                   <span class="text-ungu">Promo</span> Now</a>
           </div>
           <!-- carousel -->
           <div id="default-carousel"
               class="relative lg:h-[600px] md:h-[480px] h-[200px] overflow-hidden lg:overflow-hidden"
               data-carousel="slide">
               <!-- Carousel wrapper -->
               <div class="relative h-full rounded-lg">
                   <!-- Item 1 -->
                   <div class="hidden duration-700 ease-in-out" data-carousel-item>
                       <img src="<?= BaseURL; ?>/img/carousel/1.png"
                           class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                   </div>
                   <!-- Item 2 -->
                   <div class="hidden duration-700 ease-in-out" data-carousel-item>
                       <img src="<?= BaseURL; ?>/img/carousel/2.png"
                           class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                   </div>
                   <!-- Item 3 -->
                   <div class="hidden duration-700 ease-in-out" data-carousel-item>
                       <img src="<?= BaseURL; ?>/img/carousel/3.png"
                           class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                   </div>
                   <!-- Item 4 -->
                   <div class="hidden duration-700 ease-in-out" data-carousel-item>
                       <img src="<?= BaseURL; ?>/img/carousel/4.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="<?= BaseURL; ?>/img/carousel/5.png"
                           class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
                   </div>
               </div>
               <!-- Slider indicators -->
               <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                   <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                       data-carousel-slide-to="0"></button>
                   <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                       data-carousel-slide-to="1"></button>
                   <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                       data-carousel-slide-to="2"></button>
                   <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                       data-carousel-slide-to="3"></button>
                   <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                       data-carousel-slide-to="4"></button>
               </div>
               <!-- Slider controls -->
               <button type="button"
                   class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                   data-carousel-prev>
                   <span
                       class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                       <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                           xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M5 1 1 5l4 4" />
                       </svg>
                       <span class="sr-only">Previous</span>
                   </span>
               </button>
               <button type="button"
                   class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                   data-carousel-next>
                   <span
                       class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                       <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                           xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="m1 9 4-4-4-4" />
                       </svg>
                       <span class="sr-only">Next</span>
                   </span>
               </button>
           </div>
       </div>
       <!-- produk -->
       <div class="relative w-full">
           <!-- Judul Bagian 1 -->
           <div class="flex justify-center my-3" data-aos="zoom-in" data-aos-duration="2000">
               <a href="#" class="text-3xl font-bold">
                   <span class="text-ungu hover:underline underline-offset-8">Kategori</span></a>
           </div>
           <div
               class="w-full relative grid grid-cols-2 md:grid-cols-4 place-items-center gap-3 md:gap-1 md:px-1 lg:grid-cols-4 py-3">
               <!-- card 1 -->
               <div class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md"
                   data-aos="zoom-in-up" data-aos-duration="2000">
                   <picture class="rounded-lg block overflow-hidden">
                       <img class="hover:scale-125 ease-in-out duration-200"
                           src="<?= BaseURL; ?>/img/produk/gelang1.jpg" alt="product image" />
                   </picture>
                   <div class="px-5 py-4 flex flex-col justify-center items-center">
                       <a href="#">
                           <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                               Gelang
                           </h5>
                       </a>
                       <div class="flex items-center mt-2.5 mb-5">
                           <span
                               class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                       </div>
                       <div class="flex items-center justify-center">
                           <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white"
                    >10K</span
                  > -->
                           <a href="#"
                               class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">More</a>
                       </div>
                   </div>
               </div>
               <!-- card 2 -->
               <div class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md"
                   data-aos="zoom-in-up" data-aos-duration="2000">
                   <picture class="rounded-lg block overflow-hidden">
                       <img class="hover:scale-125 ease-in-out duration-200" src="<?= BaseURL; ?>/img/produk/cincin.jpg"
                           alt="product image" />
                   </picture>
                   <div class="px-5 py-4 flex flex-col justify-center items-center">
                       <a href="#">
                           <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                               Cincin
                           </h5>
                       </a>
                       <div class="flex items-center mt-2.5 mb-5">
                           <span
                               class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                       </div>
                       <div class="flex items-center justify-center">
                           <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white"
                    >10K</span
                  > -->
                           <a href="#"
                               class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">More</a>
                       </div>
                   </div>
               </div>
               <!-- card 3 -->
               <div class="p-5 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md"
                   data-aos="zoom-in-up" data-aos-duration="2000">
                   <div>
                       <picture class="rounded-lg block overflow-hidden">
                           <img class="hover:scale-125 ease-in-out duration-200" src="<?= BaseURL; ?>/img/produk/hp.jpg"
                               alt="product image" />
                       </picture>
                   </div>
                   <div class="px-5 py-4 flex flex-col justify-center items-center">
                       <a href="#">
                           <h5 class="text-xl text-center font-semibold tracking-normal text-gray-900 dark:text-white">
                               Phone Strap
                           </h5>
                       </a>
                       <div class="flex items-center mt-2.5 mb-5">
                           <span
                               class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                       </div>
                       <div class="flex items-center justify-center">
                           <a href="#"
                               class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">More</a>
                       </div>
                   </div>
               </div>
               <!-- card 4 -->
               <div class="p-5 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md"
                   data-aos="zoom-in-up" data-aos-duration="2000">
                   <div>
                       <picture class="rounded-lg block overflow-hidden">
                           <img class="hover:scale-125 ease-in-out duration-200" src="<?= BaseURL; ?>/img/produk/hp.jpg"
                               alt="product image" />
                       </picture>
                   </div>
                   <div class="px-5 py-4 flex flex-col justify-center items-center">
                       <a href="#">
                           <h5 class="text-xl font-semibold tracking-normal text-center text-gray-900 dark:text-white">
                               Custom You
                           </h5>
                       </a>
                       <div class="flex items-center mt-2.5 mb-5">
                           <span
                               class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                       </div>
                       <div class="flex items-center justify-center">
                           <a href="#"
                               class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">More</a>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Best Produk -->
           <div class="promo flex flex-col items-center justify-center p-4 mt-3 relative w-full bg-red-200">
               <div class="my-2" data-aos="zoom-in" data-aos-duration="2000">
                   <a href="#" class="text-3xl font-bold text-ungu hover:underline underline-offset-4">
                       Best Seller
                   </a>
               </div>
               <!-- list produk -->
               <div class="w-full grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 place-content-between">
                   <!-- best 1 -->
                   <div class="flex flex-col items-center gap-2 p-2" data-aos="zoom-in" data-aos-duration="1000">
                       <img src="<?= BaseURL; ?>/img/produk/contoh1.jpg" alt="" class="w-28 h-28 rounded-full" />
                       <h5 class="text-xl font-semibold text-gray-900">Lio</h5>
                       <a href="#"
                           class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                   </div>
                   <!-- best 2 -->
                   <div class="flex flex-col items-center gap-2 p-2" data-aos="zoom-in" data-aos-duration="1000">
                       <img src="<?= BaseURL; ?>/img/produk/contoh2.jpg" alt="" class="w-28 h-28 rounded-full" />
                       <h5 class="text-xl font-semibold text-gray-900">Angel</h5>
                       <a href="#"
                           class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                   </div>
                   <!-- best 3 -->
                   <div class="flex flex-col items-center gap-2 p-2" data-aos="zoom-in" data-aos-duration="1000">
                       <img src="<?= BaseURL; ?>/img/produk/contoh3.jpg" alt="" class="w-28 h-28 rounded-full" />
                       <h5 class="text-xl font-semibold text-gray-900">Vio</h5>
                       <a href="#"
                           class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                   </div>
                   <!-- best 4 -->
                   <div class="flex flex-col items-center gap-2 p-2" data-aos="zoom-in" data-aos-duration="1000">
                       <img src="<?= BaseURL; ?>/img/produk/contoh4.jpg" alt="" class="w-28 h-28 rounded-full" />
                       <h5 class="text-xl font-semibold text-gray-900">Gio</h5>
                       <a href="#"
                           class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                   </div>
               </div>
           </div>
       </div>
       <!-- testimoni -->
       <div class="w-full relative">
           <div class="flex justify-center p-2" data-aos="zoom-out" data-aos-duration="2000">
               <h3 class="text-ungu text-3xl font-bold hover:underline underline-offset-4">
                   Testimoni
               </h3>
           </div>
           <!-- <div class="flex md:flex-col bg-blue-500 justify-center items-center gap-6 pt-2 pb-5 px-10"> -->
           <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 w-full place-items-center px-4 py-3 gap-4">
               <div class="">
                   <img src="<?= BaseURL; ?>/img/testimoni/t1.jpg" alt="testimoni1"
                       class="w-40 hover:scale-110 duration-200 rounded-xl" data-aos="zoom-in-up"
                       data-aos-duration="2000" />
               </div>
               <div class="">
                   <img src="<?= BaseURL; ?>/img/testimoni/t2.jpg" alt="testimoni1"
                       class="w-40 hover:scale-110 duration-200 rounded-xl" data-aos="zoom-in-up"
                       data-aos-duration="2000" />
               </div>
               <div class="">
                   <img src="<?= BaseURL; ?>/img/testimoni/t3a.jpg" alt="testimoni1"
                       class="w-40 hover:scale-110 duration-200 rounded-xl" data-aos="zoom-in-up"
                       data-aos-duration="2000" />
               </div>
               <div class="">
                   <img src="<?= BaseURL; ?>/img/testimoni/t4a.jpg" alt="testimoni1"
                       class="w-40 hover:scale-110 duration-200 rounded-xl" data-aos="zoom-in-up"
                       data-aos-duration="2000" />
               </div>
               <div class="">
                   <img src="<?= BaseURL; ?>/img/testimoni/t5a.jpg" alt="testimoni1"
                       class="w-40 hover:scale-200 duration-200 rounded-xl" data-aos="zoom-in-up"
                       data-aos-duration="2000" />
               </div>
               <div class="">
                   <img src="<?= BaseURL; ?>/img/testimoni/t5a.jpg" alt="testimoni1"
                       class="w-40 hover:scale-110 duration-200 rounded-xl" data-aos="zoom-in-up"
                       data-aos-duration="2000" />
               </div>
           </div>
           <div class="lg:h-5 w-full md:h-12 h-9 md:bottom-36 bottom-11 relative lg:bottom-72 -z-10">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="">
                   <path fill="#5D50C6" fill-opacity="1"
                       d="M0,96L48,128C96,160,192,224,288,234.7C384,245,480,203,576,181.3C672,160,768,160,864,176C960,192,1056,224,1152,245.3C1248,267,1344,277,1392,282.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                   </path>
               </svg>
           </div>
       </div>
   </section>