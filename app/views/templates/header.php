<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
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
    <script src="<?= BaseURL; ?>/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- flowbite -->
    <link href="<?= BaseURL; ?>/css/flowbite.min.css" rel="stylesheet" />
    <!-- animasi -->
    <link rel="stylesheet" href="<?= BaseURL; ?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?= BaseURL; ?>/css/aos.css" />
    <link rel="stylesheet" href="<?= BaseURL; ?>/css/sweetalert2.min.css" />
    <script src="<?= BaseURL; ?>/js/sweetalert2.min.js"></script>
    <!-- css -->
    <link href="<?= BaseURL; ?>/css/output.css" rel="stylesheet" />
    <title>
        <?= $data['judul']; ?>
    </title>
</head>

<body class="font-poppins h-auto bg-background scroll-smooth overflow-x-hidden">
    <!-- Navbar atas -->
    <nav class="fixed left-0 border-b-slate-50 border-b-2 right-0 -top-2 lg:top-0 md:top-0 py-2 px-4 bg-main z-50"
        x-data="{navOpen : false}">
        <div class="container mx-auto">
            <div class="flex items-center justify-between gap-x-2">
                <a href="<?= BaseURL; ?>" class="text-4xl md:order-1 text-ungu font-semibold">
                    <span class="text-pink font-bold">Moon</span>Beads</a>
                <div class="lg:hidden md:order-3 order-1">
                    <img @click="navOpen = !navOpen" src="<?= BaseURL; ?>/img/logo/toogle.svg" alt="" />
                </div>
                <button type="button" data-modal-target="co_modal" data-modal-toggle="co_modal"
                    class="inline-flex lg:hidden md:hidden items-center px-4 py-2 text-sm font-medium text-center text-white bg-violet-700 rounded-lg hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 relative">
                    <ion-icon name="cart-outline" class="text-white text-lg font-semibold"></ion-icon>
                    <div
                        class="absolute flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full top-0 right-0 -mt-1 -mr-1">
                        1
                    </div>
                </button>

                <div class="order-2 hidden lg:block">
                    <ul class="flex gap-16 ">
                        <li class="text-grey font-bold opacity-50 h over:text-violet-400 hover:opacity-90 text-sm">
                            <a href="<?= BaseURL; ?>">Home</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="<?= BaseURL; ?>/produk">Produk</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="<?= BaseURL; ?>/akun">Akun</a>
                        </li>
                        <li class="text-grey font-bold opacity-50 hover:text-violet-400 hover:opacity-90 text-sm">
                            <a href="<?= BaseURL; ?>/about">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- 
                <div class="order-2 relative">
                   
                </div> -->

                <div class="order-3 hidden md:order-2 sm:block">
                    <button type="button" data-modal-target="co_modal" data-modal-toggle="co_modal"
                        class="inline-flex items-center mr-5 px-4 py-2 text-sm font-medium text-center text-white bg-violet-700 rounded-lg hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 relative">
                        <ion-icon name="cart-outline" class="text-white font-semibold"></ion-icon>
                        <div
                            class="absolute flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full top-0 right-0 -mt-1 -mr-1">
                            1
                        </div>
                    </button>
                    <!-- <a href="<?= BaseURL; ?>/login"> -->
                    <a href="<?= isset($_SESSION['role']) ? BaseURL . '/logout' : BaseURL . '/login' ?>">
                        <button class="grow bg-white px-8 py-4 font-bold text-grey rounded-full text-sm">
                            <?= isset($_SESSION['role']) ? 'Logout' : 'Login' ?>
                        </button>
                    </a>
                    <a
                        href="<?= isset($_SESSION['role']) ? (($_SESSION['role'] === 1) ? BaseURL . '/akun' : BaseURL . '/akun') : BaseURL . '/register' ?>">
                        <button class="grow bg-ungu px-8 py-4 font-bold text-white rounded-full text-sm">
                            <?= isset($_SESSION['role']) ? (($_SESSION['role'] === 1) ? 'Seller' : 'Customer') : 'Sign Up' ?>
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
                    <a href="<?= BaseURL; ?>">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="home-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Home</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="<?= BaseURL; ?>/produk">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="albums-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Produk</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="<?= BaseURL; ?>/akun">
                        <button class="flex justify-center flex-col items-center gap-1">
                            <ion-icon name="ribbon-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                            <span class="text-grey opacity-50 text-base font-normal">Akun</span>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="<?= BaseURL; ?>/about">
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
                <a href="<?= BaseURL; ?>/login">
                    <button class="grow bg-white px-8 py-4 font-bold text-grey rounded-full text-sm">
                        Login
                    </button>
                </a>
                <a href="<?= BaseURL; ?>/register">
                    <button class="grow bg-ungu px-8 py-4 font-bold text-white rounded-full text-sm">
                        Sign Up
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <!-- modal co -->
    <div id="co_modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        data-bs->
        <div class="relative p-4 w-[80%] max-w-full max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg max-h-full shadow w-full">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900" id="labelForm">
                        Checkout Produk
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="co_modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="form_cu" action="<?= BaseURL; ?>/produk/cart" method="post" enctype="multipart/form-data"
                class="md:p-5 lg:p-4">
                <input type="hidden" name="id_produk" id="idProduk">
                <table class="w-full border-collapse border">
                    <thead>
                        <tr>
                            <th class="p-3 bg-violet-400">Nama Produk</th>
                            <th class="p-3 bg-violet-400">Harga</th>
                            <th class="p-3 bg-violet-400">Jumlah Produk</th>
                            <th class="p-3 bg-violet-400">Jumlah Harga</th>
                        </tr>
                    </thead>
                    <tbody class="p-5">
                        <tr class="p-3">
                            <th>Violet</th>
                            <th>Rp.10.000</th>
                            <th>3</th>
                            <th>Rp.30.000</th>
                        </tr>
                        <tr class="p-3">
                            <th>Violet</th>
                            <th>Rp.10.000</th>
                            <th>3</th>
                            <th>Rp.30.000</th>
                        </tr>
                        <tr class="p-3">
                            <th>Violet</th>
                            <th>Rp.10.000</th>
                            <th>3</th>
                            <th>Rp.30.000</th>
                        </tr>
                    </tbody>
                </table>
                <div class="flex items-center justify-end gap-x-7">
                    <div class="text-end">
                        <h4>Total Checkout</h4>
                        <p class="">Rp.120.000</p>
                    </div>
                    <button type="submit" id="submitForm"
                        class="text-white inline-flex items-center bg-ungu hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Checkout
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>