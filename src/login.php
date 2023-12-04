<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Playpen+Sans:wght@200;400;500;600&family=Poppins:ital,wght@0,300;0, 400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet" />
    <!-- css -->
    <link href="../output.css" rel="stylesheet" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- alpine js -->
    <script src="../public/script.js"></script>
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <title>Login-cek</title>
</head>

<body>
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
            <a href="#" class="text-center font-semibold text-paletebirumuda hover:text-ungu duration-500">FORGOT
                PASSWORD?</a>

            <p class="text-center text-lg">
                Belum Punya Akun?
                <a href="register.php"
                    class="text-paletebirumuda hover:text-ungu hover:underline underline-offset-4 font-medium">Buat
                    Akun</a>
            </p>
            <div class="flex justify-center font-poppins relative bottom-5">
                <a href="home.html" class="text-2xl text-ungu font-semibold">
                    <span class="text-pink font-bold">Moon</span>Beads</a>
            </div>
        </section>

    </main>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>