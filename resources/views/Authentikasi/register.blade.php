<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">
    <title>Registration Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Prevent scrolling */
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
<body class="flex justify-center items-center bg-gray-100 h-screen poppins-regular p-16 ">
    <div class="flex rounded-lg overflow-hidden shadow-lg bg-white w-full h-full max-w-8xl">

        <div class="w-1/2 bg-blue-600 text-white flex items-center justify-center flex-col p-6">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang!</h1>
            <p class="mb-6 text-center">Daftar untuk menikmati fitur terbaik kami</p>
            <button class="px-16 py-4 border border-white rounded-full hover:bg-white hover:text-blue-600 transition duration-200" onclick="toggleForms()">SIGN IN</button>
        </div>

        <div class="w-1/2 p-20 flex flex-col justify-center">
            <h2 class="text-2xl mb-4 text-center poppins-bold">Register</h2>
            <div class="flex items-center justify-center mb-4">
                <button class="w-12 h-12 border border-gray-300 text-gray-700 flex items-center justify-center transition duration-200 hover:bg-gray-200 font-bold text-xl rounded-full">
                    G
                </button>
            </div>
            <p class="text-center my-5">atau menggunakan emailmu untuk registrasi</p>
            <form id="registerForm" class="text-center" onsubmit="handleRegister(event)">
                <p class="text-left text-lg">Nama</p>
                <input type="text" id="name" class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="mt-5 text-left text-lg">Email</p>
                <input type="email" id="email" class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="mt-5 text-left text-lg">Password</p>
                <input type="password" id="password" class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <button type="submit" class="px-16 py-4 my-5 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">SIGN UP</button>
            </form>
        </div>
    </div>

    <script>
        function toggleForms() {
            const registerForm = document.getElementById('registerForm');
            const leftSide = document.querySelector('.bg-blue-600');
            if (registerForm) {
                leftSide.classList.toggle('hidden');
                registerForm.reset(); // Reset the form when toggling
            }
        }

        function handleRegister(event) {
            event.preventDefault(); 
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Password:', password);
            alert('Form pendaftaran telah diajukan!');
        }
    </script>
</body>
</html>