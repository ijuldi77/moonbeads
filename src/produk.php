<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- gfont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Playpen+Sans:wght@200;400;500;600&family=Poppins:ital,wght@0,300;0, 400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet" />
    <!-- alpine js -->
    <script src="../public/script.js"></script>
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <!-- tailwind -->
    <link href="../output.css" rel="stylesheet" />
    <title>Product</title>
</head>

<body class="font-poppins h-auto bg-background scroll-smooth">
    <!-- navbar atas -->
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
                            <a href="home.html">Home</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="produk.html">Produk</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="akun.html">Akun</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="order-3 hidden md:order-2 sm:block">
                    <a href="logincek.html">
                        <button class="grow bg-white px-8 py-4 font-bold text-grey rounded-full text-sm">
                            Login
                        </button>
                    </a>
                    <a href="register.html">
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
                    <a href="home.html">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="home-outline" class="text-2xl text-ungu"></ion-icon>
                            <span class="text-ungu text-base font-bold">Home</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="produk.html">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="albums-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Produk</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="akun.html">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="ribbon-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Akun</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="contact.html">
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
                <a href="logincek.html">
                    <button class="grow bg-white px-8 py-4 font-bold text-grey rounded-full text-sm">
                        Login
                    </button>
                </a>
                <a href="register.html">
                    <button class="grow bg-ungu px-8 py-4 font-bold text-white rounded-full text-sm">
                        Sign Up
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <!-- main -->
    <section class="bg-main w-full min-h-screen flex flex-col justify-between"
        x-data="{ showWhatsApp: false, showInstagram: false, showFacebook: false, showEmail: false }">
        <div class="flex-grow">
            <!-- Konten yang sudah ada -->
            <div class="w-full">
                <section class="mt-[70px]" x-data="{ open: false }">
                    <!-- judul -->
                    <div class="bg-pink font-bold text-gray-200 flex justify-between items-center pl-3 pr-5 lg:px-12">
                        <div class="font-bold text-lg lg:text-2xl p-1 lg:p-4">Katalog Product</div>
                        <div class="flex gap-x-8">
                            <!-- <h3 class="bg-yellow-300 p-4">All</h3>
                    <h3 class="bg-purple-600 p-4">Rings</h3>
                    <h3 class="bg-orange p-4">Beads</h3>
                    <h3 class="bg-pink p-4">Bracelets</h3>
                    <h3 class="bg-pink p-4">Phone Strap</h3> -->
                            <div class="relative inline-block z-10 text-left">
                                <div>
                                    <button @click="open = !open" type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                        Categories
                                        <!-- Heroicon name: chevron-down -->
                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 11.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <div x-show="open" @click.away="open = false"
                                    class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                    <div class="py-1" role="menu" aria-orientation="vertical"
                                        aria-labelledby="options-menu">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">All</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">Rings</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">Bracelets</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">Phone Strap</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center gap-2 items-center">
                                <input type="search" name="cariproduk" id="cariproduk"
                                    class="h-10 rounded-md hidden border-none text-gray-600"
                                    placeholder="masukkan kata kunci" />
                                <button type="submit" class="bg-button text-gray-200 rounded-lg hover:text-white p-2">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- list -->
                    <div
                        class="w-full lg:grid-flow-col lg:mt-6 relative grid grid-cols-2 md:grid-cols-3 place-items-center gap-3 md:gap-2 md:px-2 lg:grid-cols-5 lg:gap-3 py-3">
                        <!-- card 1 -->
                        <div
                            class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                            <picture class="rounded-lg block overflow-hidden">
                                <img class="hover:scale-125 ease-in-out duration-200"
                                    src="../public/img/produk/gelang1.jpg" alt="product image" />
                            </picture>
                            <div class="px-5 py-4 flex flex-col justify-center items-center">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                        Gelang
                                    </h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">10K</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white"
                              >10K</span
                            > -->
                                    <a href="#"
                                        class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Beli</a>
                                </div>
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div
                            class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                            <picture class="rounded-lg block overflow-hidden">
                                <img class="hover:scale-125 ease-in-out duration-200"
                                    src="../public/img/produk/gelang1.jpg" alt="product image" />
                            </picture>
                            <div class="px-5 py-4 flex flex-col justify-center items-center">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                        Gelang
                                    </h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">10K</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white"
                              >10K</span
                            > -->
                                    <a href="#"
                                        class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Beli</a>
                                </div>
                            </div>
                        </div>
                        <!-- card 3 -->
                        <div
                            class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                            <picture class="rounded-lg block overflow-hidden">
                                <img class="hover:scale-125 ease-in-out duration-200"
                                    src="../public/img/produk/gelang1.jpg" alt="product image" />
                            </picture>
                            <div class="px-5 py-4 flex flex-col justify-center items-center">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                        Gelang
                                    </h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">12K</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white"
                              >10K</span
                            > -->
                                    <a href="#"
                                        class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Beli</a>
                                </div>
                            </div>
                        </div>
                        <!-- card 4 -->
                        <div
                            class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                            <picture class="rounded-lg block overflow-hidden">
                                <img class="hover:scale-125 ease-in-out duration-200"
                                    src="../public/img/produk/gelang1.jpg" alt="product image" />
                            </picture>
                            <div class="px-5 py-4 flex flex-col justify-center items-center">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                        Gelang
                                    </h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">12K</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white"
                              >10K</span
                            > -->
                                    <a href="#"
                                        class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Beli</a>
                                </div>
                            </div>
                        </div>
                        <!-- card 5 -->
                        <div
                            class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                            <picture class="rounded-lg block overflow-hidden">
                                <img class="hover:scale-125 ease-in-out duration-200"
                                    src="../public/img/produk/gelang1.jpg" alt="product image" />
                            </picture>
                            <div class="px-5 py-4 flex flex-col justify-center items-center">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                        Gelang
                                    </h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">8K</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white"
                              >10K</span
                            > -->
                                    <a href="#"
                                        class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Beli</a>
                                </div>
                            </div>
                        </div>
                        <!-- card 6 -->
                        <div
                            class="p-4 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                            <picture class="rounded-lg block overflow-hidden">
                                <img class="hover:scale-125 ease-in-out duration-200"
                                    src="../public/img/produk/gelang1.jpg" alt="product image" />
                            </picture>
                            <div class="px-5 py-4 flex flex-col justify-center items-center">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                        Gelang
                                    </h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">8K</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <a href="#"
                                        class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ... -->
            </div>
        </div>
        <div>
            <!-- Bagian footer yang ingin tetap di bagian bawah halaman -->
            <div class="flex items-center p-3 justify-between border-b-2 border-violet-300">
                <a href="#main" class="text-3xl ml-4 text-ungu font-semibold">
                    <span class="text-pink font-bold">Moon</span>Beads</a>
                <ul class="flex gap-x-2 md:justify-around md:w-1/2 lg:w-1/2 lg:justify-around text-gray-500">
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
            <!-- ... -->
        </div>
        <span class="block text-sm my-2 text-gray-500 text-center">
            © 2023 <a href="#" class="hover:underline">MoonBeads™</a>. All Rights Reserved.
        </span>
        </div>
    </section>

    <!-- lcdn -->
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>