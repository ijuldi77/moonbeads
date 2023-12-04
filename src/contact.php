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
    <title>Contact</title>
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
    <!-- main -->
    <section class="w-full font-poppins mt-16">
        <div class="w-full p-4">
            <div class="flex justify-center">
                <h3 class="text-gray-500 font-semibold text-3xl hover:underline underline-offset-4">
                    Contact Us
                </h3>
            </div>
            <div class="flex flex-col space-y-2 justify-center p-2 items-center">
                <h2 class="text-2xl font-semibold text-ungu">Our Address</h2>
                <address class="text-xl font-medium text-gray-700">
                    Gang Family , Kelayan B , Banjarmasin Selatan , Kalimantan Selatan
                </address>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.0605865023094!2d114.59128527378355!3d-3.335208041295919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de42160b3580fef%3A0x82a8504d03659f6e!2sGg.%20Family%2C%20Kelayan%20Tengah%2C%20Kec.%20Banjarmasin%20Sel.%2C%20Kota%20Banjarmasin%2C%20Kalimantan%20Selatan!5e0!3m2!1sid!2sid!4v1701266624175!5m2!1sid!2sid"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="text-xl flex flex-col items-center font-medium text-gray-700 p-3">
                <h2 class="text-2xl font-semibold text-ungu pb-4 text-center">
                    Our Team
                </h2>
                <div class="flex flex-col w-[600px] space-y-3">
                    <div class="flex justify-around">
                        <h2>Muhammad Zulkifli</h2>
                        <ul class="flex gap-x-4">
                            <li>
                                <a href="https://wa.link/suyw8q" class="hover:text-green-500">
                                    <ion-icon name="logo-whatsapp"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/by_zull__" class="hover:text-violet-500">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://mailto:ijuldi77@gmail.com" class="hover:text-red-500">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-around">
                        <h2>Salma Agustina</h2>
                        <ul class="flex gap-x-4">
                            <li>
                                <a href="https://wa.link/tbq4ho" class="hover:text-green-500">
                                    <ion-icon name="logo-whatsapp"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/salmaags__" class="hover:text-violet-500">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://mailto:salmaagustina009@gmail.com" class="hover:text-red-500">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-around">
                        <h2>Assyifa Nornadzilla</h2>
                        <ul class="flex gap-x-4">
                            <li>
                                <a href="https://wa.link/2ykflk" class="hover:text-green-500">
                                    <ion-icon name="logo-whatsapp"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/assyifandz" class="hover:text-violet-500">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://mailto:nornadzilla@gmail.com" class="hover:text-red-500">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-around">
                        <h2>Herlita Kadang</h2>
                        <ul class="flex gap-x-4">
                            <li>
                                <a href="https://wa.link/jpxenr" class="hover:text-green-500">
                                    <ion-icon name="logo-whatsapp"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/hoiittaa" class="hover:text-violet-500">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="https://mailto:herlitakadang2312@gmail.com" class="hover:text-red-500">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- social media -->
            <div>
                <h2 class="text-2xl mt-3 font-semibold text-ungu text-center">
                    Our Social Media
                </h2>
            </div>
            <div class="mt-2 bg-red-300 text-gray-600 font-semibold flex justify-center gap-8">
                <!-- wa -->
                <div class="flex flex-col justify-center items-center p-4 text-xl">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    <h4>WhatsApp</h4>
                    <a href="https://wa.link/u8astz" class="hover:text-violet-500">+62-882-0191-17691</a>
                </div>
                <!-- ig -->
                <div class="flex flex-col justify-center items-center p-4 text-xl">
                    <ion-icon name="logo-instagram"></ion-icon>
                    <h4>Instagram</h4>
                    <a href="https://www.instagram.com/moonbeads_bjm" class="hover:text-violet-500">@moonbeads_bjm</a>
                </div>
                <!-- fb -->
                <div class="flex flex-col justify-center items-center p-4 text-xl">
                    <ion-icon name="logo-facebook"></ion-icon>
                    <h4>Facebook</h4>
                    <a href="https://www.facebook.com/moonbeadsbjm" class="hover:text-violet-500">moonbeadsbjm</a>
                </div>
                <!-- email -->
                <div class="flex flex-col justify-center items-center p-4 text-xl">
                    <ion-icon name="mail-outline"></ion-icon>
                    <h4>Email</h4>
                    <a href="mailto:moonbeadsbjm@gmail.com" class="hover:text-violet-500">moonbeadsbjm@gmail.com</a>
                </div>
            </div>
        </div>
        <!-- about us -->
        <div class="flex flex-col items-center">
            <div class="">
                <h4 class="text-2xl font-semibold text-ungu pb-2 text-center">
                    About MoonBeads™
                </h4>
            </div>
            <div class="text-center text-xl font-semibold text-gray-700 bg-paleteputihpink leading-relaxed p-6">
                <p>
                    MoonBeads™ Adalah sebuah project pembuatan website UMKM yang dimulai
                    pada pertengahan Agustus 2023, berdasarkan Project Base Learning
                    terhadap beberapa mata kuliah seperti : Dasar Pemrograman Website,
                    Digital Marketing, Interaksi Manusia Komputer, Manajemen Project.
                </p>
                <p class="">
                    MoonBeads™ Adalah UMKM yang berfokus pada penjualan aksesoris
                    Beads(Manik-Manik) dengan model yang berbeda seperti : Gelang,
                    Cincin, Phone Starp(Gantungan HP), dll.
                </p>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section class="bg-main w-full mt-2"
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
    <!-- lcdn -->
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>