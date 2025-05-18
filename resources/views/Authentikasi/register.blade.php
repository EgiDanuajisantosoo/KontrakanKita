<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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

<body class="flex justify-center items-center bg-gray-100 h-screen poppins-regular md:p-10 ">
    <div id="leftBlue"
        class="hidden flex flex-col md:flex-row md:rounded-lg md:overflow-hidden shadow-lg bg-white w-full h-full max-w-8xl">


        <div class="w-full md:w-1/2 p-6 sm:p-10 md:p-20 flex flex-col justify-center">
            <h2 class="text-xl sm:text-2xl mb-4 mt-6 text-center poppins-bold text-blue-600">Register</h2>
            <div class="flex items-center justify-center mb-4">
                <a href="{{ route('auth.google') }}"
                    class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-600 text-white flex items-center justify-center transition duration-200 hover:bg-blue-700 font-bold text-xl rounded-full">
                    G
                </a>
            </div>
            <p class="text-center my-3 text-sm text-gray-700">atau menggunakan emailmu untuk registrasi</p>

            {{-- <form id="registerForm" class="text-center" action="{{ route('auth.register') }}" method="POST">
                @csrf
                <p class="text-left text-lg">Username</p>
                <input type="text" name="username" id="name"
                    class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="mt-5 text-left text-lg">Email</p>
                <input type="email" name="email" id="email"
                    class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="mt-5 text-left text-lg">Password</p>
                <input type="password" name="password" id="password"
                    class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="mt-5 text-left text-lg">Konfirmasi Password</p>
                <input type="password" name="confirm_password" id="confirm_password"
                    class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <button type="submit" na
                    class="px-16 py-4 my-5 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">SIGN
                    UP</button>
            </form> --}}

            <form id="registerForm" action="{{ route('auth.register') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Username -->
                <div>
                    <label for="name"
                        class="block text-left text-sm font-medium text-gray-700">Username</label>
                    <div class="relative">
                        <input type="text" name="username" id="name" required
                            class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        <div class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.292 0 4.42.51 6.353 1.42M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-left text-sm font-medium text-gray-700">Email</label>
                    <div class="relative">
                        <input type="email" name="email" id="email" required
                            class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        <div class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0V6a2 2 0 00-2-2H10a2 2 0 00-2 2v6" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password"
                        class="block text-left text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                            class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        <div class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0-.343.07-.677.198-.978l1.168-2.316a2 2 0 00-3.732 0l1.168 2.316A2.004 2.004 0 0012 11zm0 0v2m0 4h.01">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="confirm_password"
                        class="block text-left text-sm font-medium text-gray-700 ">Konfirmasi Password</label>
                    <div class="relative">
                        <input type="password" name="confirm_password" id="confirm_password" required
                            class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        <div class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0-.343.07-.677.198-.978l1.168-2.316a2 2 0 00-3.732 0l1.168 2.316A2.004 2.004 0 0012 11zm0 0v2m0 4h.01">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-full transition duration-300 shadow-md">
                    SIGN UP
                </button>
            </form>
        </div>
   <div class="w-full md:w-1/2 bg-blue-600 text-white flex items-center justify-center flex-col p-6">
            <h1 class="text-2xl sm:text-3xl font-bold mb-4">Selamat Datang!</h1>
            <p class="mb-6 text-center">Daftar untuk menikmati fitur terbaik kami</p>
            <button
                class="px-12 sm:px-16 py-3 sm:py-4 border border-white rounded-full hover:bg-white hover:text-blue-600 transition duration-200"
                onclick="toggleLogin()">SIGN IN</button>
        </div>
    </div>

    <div id="rightBlue"
        class=" flex flex-col md:flex-row md:rounded-lg md:overflow-hidden shadow-lg bg-white w-full h-full max-w-8xl">
        <div class="w-full md:w-1/2 p-6 sm:p-10 md:p-20 flex flex-col justify-center">
            <h2 class="text-xl sm:text-2xl mb-4 mt-6 text-center poppins-bold text-blue-600">Login</h2>
            <div class="flex items-center justify-center mb-4">
                <a href="{{ route('auth.google') }}"
                    class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-600 text-white flex items-center justify-center transition duration-200 hover:bg-blue-700 font-bold text-xl rounded-full">
                    G
                </a>
            </div>
            <p class="text-center my-5 text-sm text-gray-700">atau sudah memiliki akun?</p>
            {{-- <form id="loginForm" class="text-center" action="{{ route('auth.login') }}" method="POST">
                @csrf
                <p class="mb-1 text-left text-lg">Email Or Username</p>
                <input type="email" name="user" id="email"
                    class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="mt-5 mb-1 text-left text-lg">Password</p>
                <input type="password" name="password" id="password"
                    class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="text-sm text-center my-5 font-semibold cursor-pointer">Lupa Password?</p>
                <button type="submit"
                    class="px-16 py-4 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">SIGN
                    IN</button>
            </form> --}}

            <form id="loginForm" action="{{ route('auth.login') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-left text-sm font-medium text-gray-700 mb-1">Email or
                        Username</label>
                    <div class="relative">
                        <input type="text" name="user" id="email" required
                            class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        <div class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0V6a2 2 0 00-2-2H10a2 2 0 00-2 2v6m12 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="password"
                        class="block text-left text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                            class="w-full px-4 py-3 pl-11 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        <div class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0-.343.07-.677.198-.978l1.168-2.316a2 2 0 00-3.732 0l1.168 2.316A2.004 2.004 0 0012 11zm0 0v2m0 4h.01">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="text-right text-sm">
                    <a href="#" class="text-blue-600 hover:underline font-medium">Lupa Password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-full transition duration-300 shadow-md">
                    SIGN IN
                </button>
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
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Password dan Konfirmasi Password harus sama!');
            }
        });
    </script>
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
