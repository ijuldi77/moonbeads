<!-- footer -->
<section class="bg-main w-full mt-2 -mb-2"
    x-data="{ showWhatsApp: false, showInstagram: false, showFacebook: false, showEmail: false }">
    <div class="w-full">
        <div class="flex lg:items-center p-2 lg:p-3 md:p-2 justify-between border-b-2 border-violet-300">
            <a href="<?= BaseURL; ?>" class="text-3xl mx-3 lg:ml-4 md:ml-4 text-ungu font-semibold">
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
        <span class="block text-sm my-2 text-gray-500 text-center">© 2023 <a href="#"
                class="hover:underline">MoonBeads™</a>. All Rights
            Reserved.</span>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="<?= BaseURL; ?>/js/flowbite.min.js"></script>
<script src="<?= BaseURL; ?>/js/sweetalert2.min.js"></script>

<script src="<?= BaseURL; ?>/js/aos.js"></script>
<script>
AOS.init({
    once: true
});
</script>
<script src="<?= BaseURL; ?>/js/ajax.js"></script>
</body>

</html>