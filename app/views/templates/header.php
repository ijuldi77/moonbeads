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
            <div class="flex items-center justify-between">
                <a href="<?= BaseURL; ?>" class="text-4xl md:order-1 text-ungu font-semibold">
                    <span class="text-pink font-bold">Moon</span>Beads</a>
                <div class="lg:hidden md:order-3 order-1">
                    <img @click="navOpen = !navOpen" src="<?= BaseURL; ?>/img/logo/toogle.svg" alt="" />
                </div>

                <div class="order-2 hidden lg:block">
                    <ul class="flex gap-16">
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

                <div class="order-3 hidden md:order-2 sm:block">
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