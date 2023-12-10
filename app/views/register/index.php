<main class="flex justify-center items-center font-poppins w-full min-h-screen bg-background text-headline mx-auto">
    <section class="w-[30rem] m-9 flex flex-col space-y-9">
        <div class="flex items-center justify-center mb-10">
            <span class="bg-pink py-2 text-3xl text-white font-medium px-3 rounded-tl-3xl">Sign</span>
            <span
                class="border-y-4 border-paletepink py-[4px] text-3xl text-pink font-medium rounded-br-3xl px-3">Up</span>
        </div>
        <form action="<?= BaseURL; ?>/register/daftar" method="post" class="w-full flex flex-col space-y-9">
            <div
                class="w-full border-b-2 border-button text-lg focus-within:border-paleteputihpink focus:outline-none duration-500 transform">
                <input type="email" name="email" placeholder="Email" autocomplete="off"
                    class="bg-transparent border-none w-full focus:outline-pink placeholder:italic">
            </div>
            <div class="w-full border-b-2 border-button text-lg focus-within:border-pink duration-500 transform">
                <input type="password" name="password" placeholder="Password" autocomplete="off"
                    class="border-none bg-transparent w-full focus:outline-none placeholder:italic">
            </div>
            <div class="w-full border-b-2 border-button text-lg focus-within:border-pink duration-500 transform">
                <input type="password" name="confirmPassword" autocomplete="off" placeholder="Confirm Password"
                    class="border-none bg-transparent w-full focus:outline-none placeholder:italic">
            </div>
            <button type="submit"
                class="bg-button p-2 text-white rounded-lg hover:bg-opacity-70 duration-300 font-bold">Sign
                Up</button>
        </form>

        <p class="text-center text-lg">
            Sudah Punya Akun?
            <a href="<?= BaseURL;?>/login"
                class="text-paletebirumuda hover:text-ungu hover:underline underline-offset-4 font-medium">Login</a>
        </p>
        <div class="flex justify-center font-poppins relative bottom-5">
            <a href="<?= BaseURL;?>" class="text-2xl text-ungu font-semibold">
                <span class="text-pink font-bold">Moon</span>Beads</a>
        </div>
    </section>

</main>