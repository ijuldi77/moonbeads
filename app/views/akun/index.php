<!-- main -->
<section class="bg-main w-full min-h-screen flex flex-col justify-between"
    x-data="{ showWhatsApp: false, showInstagram: false, showFacebook: false, showEmail: false }">
    <div class="flex-grow">
        <!-- Konten yang sudah ada -->
        <div class="w-full">
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
                        <span x-show="showEmail" class="animate__animated animate__zoomIn animate__slow">Email</span>
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