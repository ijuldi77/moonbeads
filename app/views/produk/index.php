<!-- main -->
<section class="w-full min-h-screen flex flex-col justify-between"
    x-data="{ showWhatsApp: false, showInstagram: false, showFacebook: false, showEmail: false }">
    <div class="flex-grow">
        <!-- Konten yang sudah ada -->
        <div class="w-full">
            <section class="mt-[70px]" x-data="{ open: false }">
                <!-- judul -->
                <div class="bg-pink font-bold text-gray-200 flex justify-between items-center pl-3 pr-5 lg:px-12">
                    <div class="font-bold text-lg lg:text-2xl p-1 lg:p-4">Katalog Product</div>
                    <div class="flex gap-x-8">
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
                    <?php foreach ($data['produk'] as $produk): ?>
                    <!-- card 1 -->
                    <div
                        class="pt-4 px-2 w-40 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                        <picture class="rounded-lg mx-4 block overflow-hidden">
                            <img class="hover:scale-125 h-36 object-center object-cover w-full ease-in-out duration-200"
                                src="../public/img/produk/<?= $produk['foto']; ?>" alt="product image" />
                        </picture>
                        <div class="px-5 py-4 flex flex-col justify-center items-center">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                    <?= $produk['nama']; ?>
                                </h5>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?= $produk['harga']; ?></span>
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
                    <?php endforeach; ?>
                </div>
            </section>
            <!-- ... -->
        </div>
    </div>
    <div class="bg-main">
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
                        <span x-show="showEmail" class="animate__animated animate__zoomIn animate__slow">Email</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ... -->

        <span class="block text-sm my-2 text-gray-500 text-center">
            © 2023 <a href="#" class="hover:underline">MoonBeads™</a>. All Rights Reserved.
        </span>
    </div>
    </div>
</section>

<!-- lcdn -->
<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>