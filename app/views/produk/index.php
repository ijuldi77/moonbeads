<script>
if (window.location.search) {
    window.history.replaceState({}, document.title, window.location.pathname);
}
</script>

<!-- main -->
<section class="w-full min-h-screen flex flex-col justify-between"
    x-data="{ showWhatsApp: false, showInstagram: false, showFacebook: false, showEmail: false }">
    <div class="flex-grow">
        <!-- Konten yang sudah ada -->
        <div class="w-full">
            <section class="lg:mt-[70px] md:mt-[70px] mt-[64px]" x-data="{ open: false }">
                <!-- judul -->
                <div
                    class="bg-pink font-bold text-gray-200 flex gap-x-2 justify-between items-center pl-3 pr-5 md:py-3 lg:py-1 lg:px-12">
                    <div class="font-bold text-lg lg:text-2xl p-1 md:ml-5 lg:p-4">Katalog Product</div>
                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                        echo '<button data-modal-target="cu_modal" data-modal-toggle="cu_modal"
                        class="lg:block md:block hidden text-white bg-ungu hover:bg-violet-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center tampilTambah"
                        type="button">
                        Tambah
                    </button>';
                    } ?>
                    <button data-modal-target="cu_modal" data-modal-toggle="cu_modal"
                        class="lg:hidden md:hidden text-white bg-ungu hover:bg-violet-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-2 pt-2 pb-[3px] text-center tampilTambah"
                        type="button">
                        <ion-icon name="add-circle-outline" class="text-2xl"></ion-icon>
                    </button>

                    <div class="flex gap-x-4">
                        <div class="relative inline-block z-10 text-center">
                            <div>
                                <button @click="open = !open" type="button"
                                    class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                    Jenis
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
                                    <?php foreach ($data['jenis'] as $jenis): ?>
                                        <a href="/produk/kategori/<?= $jenis['jenis_id']; ?>" class=" block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <?= $jenis['nama_jenis']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="block text-white bg-ungu hover:bg-violet-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 pt-2 pb-[3px] text-center"
                                type="button">
                                <ion-icon name="search" class="text-2xl"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- list -->
                <div>
                    <?php Flasher::flash(); ?>
                </div>
                <div
                    class="w-full lg:grid-flow-row lg:mt-6 relative grid grid-cols-2 md:grid-cols-3 place-items-center gap-2 p-1 md:gap-2 md:px-2 lg:grid-cols-5 lg:gap-3 py-3">
                    <?php foreach ($data['produk'] as $produk): ?>
                    <!-- card 1 -->
                    <div
                        class="pt-4 px-2 w-44 lg:w-52 md:w-52 flex flex-col bg-white border border-gray-200 rounded-xl shadow-md">
                        <picture class="rounded-lg mx-4 block overflow-hidden">
                            <img class="hover:scale-125 h-36 object-center object-cover w-full ease-in-out duration-200"
                                src="<?= BaseURL; ?>/img/produk/<?= $produk['foto']; ?>" alt="product image" />
                        </picture>
                        <div class="px-5 py-4 flex flex-col justify-center items-center">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-normal text-gray-900 dark:text-white">
                                    <?= $produk['nama']; ?>
                                </h5>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">
                                    <?= $produk['harga']; ?>
                                    </span>
                                    </div>
                                    <div class="flex flex-col items-center space-y-2 justify-center">
                                    <a href="#" id="a"
                                        class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center addCart"
                                        data-id="<?= $produk['id_produk']; ?>">Beli</a>
                                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 1): ?>
                                        <div class="flex gap-x-2 justify-center">
                                            <a class="text-white items-end bg-pink hover:text-violet-500 focus:ring-4
                                            focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-1
                                            text-center tampilEdit" data-modal-target="cu_modal"
                                                data-modal-toggle="cu_modal" data-bs-id="<?= $produk['id_produk']; ?>">
                                                <ion-icon name="cut"></ion-icon>
                                            </a>
                                            <a href="#"
                                                class="text-white items-end bg-pink hover:text-violet-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-2 py-1 text-center tampilHapus"
                                                data-id="<?= $produk['id_produk']; ?>">
                                                <ion-icon name="trash"></ion-icon>
                                            </a>
                                        </div>
                                <?php endif; ?>
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
        <div class="flex lg:items-center p-2 lg:p-3 md:p-2 justify-between border-b-2 border-violet-300">
            <a href="#main" class="text-3xl mx-3 lg:ml-4 md:ml-4 text-ungu font-semibold">
                <span class="text-pink font-bold">Moon</span>Beads</a>
            <ul class="sm:hidden gap-x-2 lg:w-1/2 lg:justify-around text-gray-500 hidden md:flex lg:flex">
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
            <ul class="lg:hidden md:hidden gap-x-2 text-gray-500 flex w-1/2 justify-between items-center">
                <li>
                    <a href="https://wa.me/62887435407279" class="hover:text-green-400 text-2xl">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/moonbeads_bjm" class="hover:text-violet-700 text-2xl">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/moonbeadsbjm" class="hover:text-blue-500 text-2xl">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="mailto:moonbeadsbjm@gmail.com" class="hover:text-red-400 text-2xl">
                        <ion-icon name="mail-outline"></ion-icon>
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
<!-- Main modal -->
<div id="cu_modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    data-bs->
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900" id="Labform">
                    Tambah Produk
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-toggle="cu_modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form id="form_cu" action="<?= BaseURL; ?>/produk/tambah" method="post" enctype="multipart/form-data"
                class="p-4 md:p-5">
                <input type="hidden" name="id_produk" id="id_produk">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                        <input type="text" name="nama" id="editNama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan nama produk" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                        <input type="number" name="harga" id="editHarga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="ex:10000" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900">Jenis</label>
                        <select id="editJenis" name="jenis_id"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option value="1">Ring</option>
                            <option value="2">Bracelet</option>
                            <option value="3">Phone Strap</option>
                            <option value="4">Custom</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="editFoto" class="block mb-2 text-sm font-medium text-gray-900">Foto</label>
                        <input type="file" id="editFoto" rows="1" name="foto" accept="image/*"
                            class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300"></input>
                    </div>
                </div>
                <button type="submit" id="subForm"
                    class="text-white inline-flex items-center bg-ungu hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Tambah Produk
                </button>
            </form>
        </div>
    </div>
</div>
<!-- modal search -->
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Cari Produk
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="static-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form class="flex items-center" action="<?= BaseURL; ?>/produk/cari" method="post">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>
                        <input type="text" id="keyword"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ketik Nama Produk" name="keyword" autocomplete="off">
                    </div>
                    <button type="submit" id="tombolCari"
                        class="p-2.5 ms-2 text-sm font-medium text-white bg-violet-700 rounded-lg border border-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- lcdn -->
<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="<?= BaseURL; ?>/js/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="<?= BaseURL; ?>/js/ajax.js"></script>
</body>

</html>