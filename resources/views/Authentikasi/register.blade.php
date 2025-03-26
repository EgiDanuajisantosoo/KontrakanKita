<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
    <title>Registration Page</title>
    @vite('resources/css/app.css')
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            /* overflow: hidden; */
            /* Prevent scrolling */
        }

        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
        }
    </style>
</head>

<body class="flex justify-center items-center bg-gray-100 h-screen poppins-regular md:p-16 ">
    <div id="leftBlue" class="flex flex-col md:flex-row md:rounded-lg md:overflow-hidden shadow-lg bg-white w-full h-full max-w-8xl">
        <div class="w-full md:w-1/2 bg-blue-600 text-white flex items-center justify-center flex-col p-6">
            <h1 class="text-2xl sm:text-3xl font-bold mb-4">Selamat Datang!</h1>
            <p class="mb-6 text-center">Daftar untuk menikmati fitur terbaik kami</p>
            <button
                class="px-12 sm:px-16 py-3 sm:py-4 border border-white rounded-full hover:bg-white hover:text-blue-600 transition duration-200"
                onclick="toggleLogin()">SIGN IN</button>
        </div>

        <div class="w-full md:w-1/2 p-6 sm:p-10 md:p-20 flex flex-col justify-center">
            <h2 class="text-xl sm:text-2xl mb-4 mt-6 text-center poppins-bold">Register</h2>
            <div class="flex items-center justify-center mb-4">
                <button
                    class="w-10 h-10 sm:w-12 sm:h-12 border border-gray-300 text-gray-700 flex items-center justify-center transition duration-200 hover:bg-gray-200 font-bold text-xl rounded-full">
                    G
                </button>
            </div>
            <p class="text-center my-3">atau menggunakan emailmu untuk registrasi</p>
            <form id="registerForm" class="text-center">
                <p class="text-left text-lg">Nama</p>
                <input type="text" id="name" class="w-full p-2 px-4 border-2 border-black rounded-full"
                    required>
                <p class="mt-5 text-left text-lg">Email</p>
                <input type="email" id="email" class="w-full p-2 px-4 border-2 border-black rounded-full"
                    required>
                <p class="mt-5 text-left text-lg">Password</p>
                <input type="password" id="password" class="w-full p-2 px-4 border-2 border-black rounded-full"
                    required>
                <button type="submit"
                    class="px-16 py-4 my-5 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">SIGN
                    UP</button>
            </form>
        </div>
    </div>

    <div id="rightBlue" class="hidden flex flex-col md:flex-row md:rounded-lg md:overflow-hidden shadow-lg bg-white w-full h-full max-w-8xl">
        <div class="w-full md:w-1/2 p-6 sm:p-10 md:p-20 flex flex-col justify-center">
            <h2 class="text-xl sm:text-2xl mb-4 mt-6 text-center poppins-bold">Login</h2>
            <div class="flex items-center justify-center mb-4">
                <button
                    class="w-10 h-10 sm:w-12 sm:h-12 border border-gray-300 text-gray-700 flex items-center justify-center transition duration-200 hover:bg-gray-200 font-bold text-xl rounded-full">
                    G
                </button>
            </div>
            <p class="text-center my-5">atau sudah memiliki akun?</p>
            <form id="loginForm" class="text-center">
                <p class="mb-1 text-left text-lg">Email</p>
                <input type="email" id="email" class="w-full p-2 px-4 border-2 border-black rounded-full"
                    required>
                <p class="mt-5 mb-1 text-left text-lg">Password</p>
                <input type="password" id="password" class="w-full p-2 px-4 border-2 border-black rounded-full"
                    required>
                <p class="text-sm text-center my-5 font-semibold cursor-pointer">Lupa Password?</p>
                <button type="submit"
                    class="px-16 py-4 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">SIGN
                    IN</button>
            </form>
        </div>
        <!-- Right Side -->
        <div class="w-full md:w-1/2 bg-blue-600 text-white flex items-center justify-center flex-col p-6">
            <h1 class="text-2xl sm:text-3xl font-bold mb-4 text-center">Selamat Datang Kembali!</h1>
            <p class="mb-6 text-center">Akses fitur terbaik kami dengan login ke akun Anda.</p>
            <button
                class="px-12 sm:px-16 py-3 sm:py-4 border border-white rounded-full hover:bg-white hover:text-blue-600 transition duration-200"
                onclick="toggleRegister()">SIGN UP</button>
        </div>
    </div>

    <script>
        function toggleLogin() {
            document.getElementById("leftBlue").classList.add("hidden");
            document.getElementById("rightBlue").classList.remove("hidden");
        }

        function toggleRegister() {
            document.getElementById("rightBlue").classList.add("hidden");
            document.getElementById("leftBlue").classList.remove("hidden");
        }
    </script>
</body>

</html>
