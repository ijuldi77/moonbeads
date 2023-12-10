<main class="flex justify-center items-center font-poppins w-full min-h-screen bg-background text-headline mx-auto">
    <section class="w-[30rem] m-9 flex flex-col space-y-9">
        <div class="flex items-center justify-center mb-10">
            <span class="bg-pink py-2 text-3xl text-white font-medium px-3 rounded-tl-3xl">Log</span>
            <span
                class="border-y-4 border-paletepink py-[4px] text-3xl text-pink font-medium rounded-br-3xl px-3">In</span>
        </div>
        <div
            class="w-full border-b-2 border-button text-lg focus-within:border-pink-500 focus:outline-none duration-500 transform">
            <input type="email" name="email" placeholder="Email" autocomplete="off"
                class="bg-transparent border-none w-full focus:outline-none placeholder:italic">
        </div>
        <div class="w-full border-b-2 border-button text-lg focus-within:border-pink duration-500 transform">
            <input type="password" name="password" autocomplete="off" placeholder="Password"
                class="border-none bg-transparent w-full focus:outline-none placeholder:italic">
        </div>
        <button class="bg-button p-2 text-white rounded-lg hover:bg-opacity-70 duration-300 font-bold">LOG
            IN</button>
        <a data-modal-target="static-modal" data-modal-toggle="static-modal"
            class="text-center font-semibold text-paletebirumuda hover:text-ungu duration-500">FORGOT
            PASSWORD?</a>
        <p class="text-center text-lg">
            Belum Punya Akun?
            <a href="<?= BaseURL;?>/register"
                class="text-paletebirumuda hover:text-ungu hover:underline underline-offset-4 font-medium">Buat
                Akun</a>
        </p>
        <div class="flex justify-center font-poppins relative bottom-5">
            <a href="<?= BaseURL;?>" class="text-2xl text-ungu font-semibold">
                <span class="text-pink font-bold">Moon</span>Beads</a>
        </div>
    </section>

</main>
<!-- modal search -->
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Forgot Password
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
                <form class="flex items-center" action="<?= BaseURL; ?>/user/forgotPassword" method="post">
                    <label for="simple-search" class="sr-only">Forgot Password</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <input type="text" id="keyword"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ketik Email Yang Terdaftar" name="keyword" autocomplete="off">
                    </div>
                    <button type="submit" id="tombolCari"
                        class="p-2.5 ms-2 text-sm font-medium text-white bg-violet-700 rounded-lg border border-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300">
                        <ion-icon name="send-outline"></ion-icon>
                        <span class="sr-only">Submit</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>