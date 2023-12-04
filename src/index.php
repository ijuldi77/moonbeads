<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../output.css" rel="stylesheet" />
    <!-- gfont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Playpen+Sans:wght@200;400;500;600&family=Poppins:ital,wght@0,300;0, 400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet" />
    <!-- alpine js -->
    <script src="../public/js/script.js"></script>
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <!-- animasi -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Home</title>
</head>

<body class="font-poppins h-auto bg-background scroll-smooth">
    <!-- Navbar atas -->
    <nav class="fixed left-0 border-b-slate-50 border-b-2 right-0 -top-2 py-2 px-4 bg-main z-50"
        x-data="{navOpen : false}">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <a href="home.html" class="text-4xl md:order-1 text-ungu font-semibold">
                    <span class="text-pink font-bold">Moon</span>Beads</a>
                <div class="lg:hidden md:order-3 order-1">
                    <img @click="navOpen = !navOpen" src="../public/logo/toogle.svg" alt="" />
                </div>

                <div class="order-2 hidden lg:block">
                    <ul class="flex gap-16">
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="produk.php">Produk</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="akun.php">Akun</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="order-3 hidden md:order-2 sm:block">
                    <a href="login.php">
                        <button class="grow bg-white px-8 py-4 font-bold text-grey rounded-full text-sm">
                            Login
                        </button>
                    </a>
                    <a href="register.php">
                        <button class="grow bg-ungu px-8 py-4 font-bold text-white rounded-full text-sm">
                            Sign Up
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Hamburger Menu -->
        <div x-show="navOpen" x-data="{open : false}"
            class="fixed bottom-0 right-0 left-0 bg-white p-4 border lg:hidden"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
            <ul class="flex justify-between">
                <li>
                    <a href="index.php">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="home-outline" class="text-2xl text-ungu"></ion-icon>
                            <span class="text-ungu text-base font-bold">Home</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="produk.php">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="albums-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Produk</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="akun.php">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="ribbon-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Akun</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="call-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Contact</span>
                        </button>
                    </a>
                </li>
                <li>
                    <button @click="open = !open" class="flex justify-center flex-col items-center gap-1">
                        <ion-icon name="ellipsis-horizontal-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        <span class="text-grey opacity-50 text-base font-normal">More</span>
                    </button>
                </li>
            </ul>
            <!-- more login sign-up -->
            <div x-show="open" class="absolute bottom-24 left-1/2 w-full -translate-x-1/2 flex gap-4 justify-center"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <a href="login.php">
                    <button class="grow bg-white px-8 py-4 font-bold text-grey rounded-full text-sm">
                        Login
                    </button>
                </a>
                <a href="register.php">
                    <button class="grow bg-ungu px-8 py-4 font-bold text-white rounded-full text-sm">
                        Sign Up
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="w-full mt-14">
        <div class="bg-white py-3 md:py-5 lg:py-4 ">
            <div class="flex justify-center mb-3" id="main">
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
                        <img src="../public/img/produk/Carousel1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../public/img/produk/beads.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../public/img/produk/carousel3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../public/img/produk/carousel2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
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
            <div class="flex justify-center my-3">
                <a href="#" class="text-3xl font-bold">
                    <span class="text-ungu hover:underline underline-offset-8">Kategori</span></a>
            </div>
            <div
                class="w-full relative grid grid-cols-2 md:grid-cols-4 place-items-center gap-3 md:gap-0 md:px-2 lg:grid-cols-4 py-3">
                <!-- card 1 -->
                <div
                    class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                    <picture class="rounded-lg block overflow-hidden">
                        <img class="hover:scale-125 ease-in-out duration-200" src="../public/img/produk/gelang1.jpg"
                            alt="product image" />
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
                <div
                    class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                    <picture class="rounded-lg block overflow-hidden">
                        <img class="hover:scale-125 ease-in-out duration-200" src="../public/img/produk/cincin.jpg"
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
                <div
                    class="p-5 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                    <div>
                        <picture class="rounded-lg block overflow-hidden">
                            <img class="hover:scale-125 ease-in-out duration-200" src="../public/img/produk/hp.jpg"
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
                <div
                    class="p-5 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                    <div>
                        <picture class="rounded-lg block overflow-hidden">
                            <img class="hover:scale-125 ease-in-out duration-200" src="../public/img/produk/hp.jpg"
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
                <div class="my-2">
                    <a href="#" class="text-3xl font-bold text-ungu hover:underline underline-offset-4">
                        Best Seller
                    </a>
                </div>
                <!-- list produk -->
                <div class="w-full grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 place-content-between">
                    <!-- best 1 -->
                    <div class="flex flex-col items-center gap-2 p-2">
                        <img src="../public/img/produk/contoh1.jpg" alt="" class="w-28 h-28 rounded-full" />
                        <h5 class="text-xl font-semibold text-gray-900">Lio</h5>
                        <a href="#"
                            class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                    </div>
                    <!-- best 2 -->
                    <div class="flex flex-col items-center gap-2 p-2">
                        <img src="../public/img/produk/contoh2.jpg" alt="" class="w-28 h-28 rounded-full" />
                        <h5 class="text-xl font-semibold text-gray-900">Angel</h5>
                        <a href="#"
                            class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                    </div>
                    <!-- best 3 -->
                    <div class="flex flex-col items-center gap-2 p-2">
                        <img src="../public/img/produk/contoh3.jpg" alt="" class="w-28 h-28 rounded-full" />
                        <h5 class="text-xl font-semibold text-gray-900">Vio</h5>
                        <a href="#"
                            class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                    </div>
                    <!-- best 4 -->
                    <div class="flex flex-col items-center gap-2 p-2">
                        <img src="../public/img/produk/contoh4.jpg" alt="" class="w-28 h-28 rounded-full" />
                        <h5 class="text-xl font-semibold text-gray-900">Gio</h5>
                        <a href="#"
                            class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimoni -->
        <div class="w-full relative">
            <div class="flex justify-center p-2">
                <h3 class="text-ungu text-3xl font-bold hover:underline underline-offset-4">
                    Testimoni
                </h3>
            </div>
            <div class="flex justify-center items-center gap-6 pt-2 pb-5 px-10">
                <img src="../public/img/testimoni/t1.jpg" alt="testimoni1"
                    class="w-40 hover:scale-110 duration-200 rounded-xl" />
                <img src="../public/img/testimoni/t2.jpg" alt="testimoni1"
                    class="w-40 hover:scale-110 duration-200 rounded-xl" />
                <img src="../public/img/testimoni/t3a.jpg" alt="testimoni1"
                    class="w-40 hover:scale-110 duration-200 rounded-xl" />
                <img src="../public/img/testimoni/t4a.jpg" alt="testimoni1"
                    class="w-40 hover:scale-110 duration-200 rounded-xl" />
                <img src="../public/img/testimoni/t5a.jpg" alt="testimoni1"
                    class="w-40 hover:scale-110 duration-200 rounded-xl" />
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
    <!-- footer -->
    <section class="bg-main w-full"
        x-data="{ showWhatsApp: false, showInstagram: false, showFacebook: false, showEmail: false }">
        <div class="w-full">
            <div class="flex items-center p-3 justify-between border-b-2 border-violet-300">
                <a href="#main" class="text-3xl ml-4 text-ungu font-semibold">
                    <span class="text-pink font-bold">Moon</span>Beads</a>
                <ul class="flex gap-x-2 lg:w-1/2 lg:justify-around text-gray-500">
                    <li @mouseenter="showWhatsApp = true" @mouseleave="showWhatsApp = false">
                        <a href="https://wa.me/62887435407279" class="hover:text-green-400 text-2xl">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                            <span x-show="showWhatsApp"
                                class="animate__animated animate__zoomIn animate__slow">WhatsApp</span>
                        </a>
                    </li>
                    <li @mouseenter="showInstagram = true" @mouseleave="showInstagram = false">
                        <a href="https://www.instagram.com/moonbeads_bjm" class="hover:text-violet-700 text-2xl">
                            <ion-icon name="logo-instagram"></ion-icon>
                            <span x-show="showInstagram"
                                class="animate__animated animate__zoomIn animate__slow">Instagram</span>
                        </a>
                    </li>
                    <li @mouseenter="showFacebook = true" @mouseleave="showFacebook = false">
                        <a href="https://www.facebook.com/moonbeadsbjm" class="hover:text-blue-500 text-2xl">
                            <ion-icon name="logo-facebook"></ion-icon>
                            <span x-show="showFacebook"
                                class="animate__animated animate__zoomIn animate__slow">Facebook</span>
                        </a>
                    </li>
                    <li @mouseenter="showEmail = true" @mouseleave="showEmail = false">
                        <a href="mailto:moonbeadsbjm@gmail.com" class="hover:text-red-400 text-2xl">
                            <ion-icon name="mail-outline"></ion-icon>
                            <span x-show="showEmail"
                                class="animate__animated animate__zoomIn animate__slow">Email</span>
                        </a>
                    </li>
                </ul>
            </div>
            <span class="block text-sm my-2 text-gray-500 text-center">© 2023 <a href="#"
                    class="hover:underline">MoonBeads™</a>. All Rights
                Reserved.</span>
        </div>
    </section>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>