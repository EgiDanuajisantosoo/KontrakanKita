<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Prevent scrolling */
        }

        .poppins-thin {
        font-family: "Poppins", sans-serif;
        font-weight: 100;
        font-style: normal;
        }

        .poppins-extralight {
        font-family: "Poppins", sans-serif;
        font-weight: 200;
        font-style: normal;
        }

        .poppins-light {
        font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: normal;
        }

        .poppins-regular {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
        }

        .poppins-medium {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
        }

        .poppins-semibold {
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-style: normal;
        }

        .poppins-bold {
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        font-style: normal;
        }

        .poppins-extrabold {
        font-family: "Poppins", sans-serif;
        font-weight: 800;
        font-style: normal;
        }

        .poppins-black {
        font-family: "Poppins", sans-serif;
        font-weight: 900;
        font-style: normal;
        }

        .poppins-thin-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 100;
        font-style: italic;
        }

        .poppins-extralight-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 200;
        font-style: italic;
        }

        .poppins-light-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: italic;
        }

        .poppins-regular-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: italic;
        }

        .poppins-medium-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: italic;
        }

        .poppins-semibold-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-style: italic;
        }

        .poppins-bold-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        font-style: italic;
        }

        .poppins-extrabold-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 800;
        font-style: italic;
        }

        .poppins-black-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 900;
        font-style: italic;
        }

    </style>
</head>
<body class="flex justify-center items-center bg-gray-100 h-screen w-100 p-16 poppins-regular">
    <div class="flex rounded-lg overflow-hidden shadow-lg bg-white w-full h-full max-w-8xl">
        <div class="w-1/2 p-20 flex flex-col justify-center">
            <h2 class="text-2xl mb-4 text-center poppins-bold">Login</h2>
            <div class="flex items-center justify-center mb-4">
                <button class="w-12 h-12 border border-gray-300 text-gray-700 flex items-center justify-center transition duration-200 hover:bg-gray-200 font-bold text-xl rounded-full">
                    G
                </button>
            </div>
            <p class="text-center my-5">atau sudah memiliki akun?</p>
            <form id="loginForm" class="text-center">
                <p class="mb-1 text-left text-lg">Email</p>
                <input type="email" id="email" class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="mt-5 mb-1 text-left text-lg">Password</p>
                <input type="password" id="password" class="w-full p-2 px-4 border-2 border-black rounded-full" required>
                <p class="text-sm text-center my-5 font-semibold cursor-pointer">Lupa Password?</p>
                <button type="submit" class="px-16 py-4 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">SIGN IN</button>
            </form>
        </div>
        <!-- Right Side -->
        <div class="w-1/2 bg-blue-600 text-white flex items-center justify-center flex-col p-6">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang Kembali!</h1>
            <p class="mb-6 text-center">Akses fitur terbaik kami dengan login ke akun Anda.</p>
            <button class="px-16 py-4 border border-white rounded-full hover:bg-white hover:text-blue-600 transition duration-200">SIGN IN</button>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const email = this[0].value;
            const password = this[1].value;

            console.log('Email:', email);
            console.log('Password:', password);
            alert('Form telah diajukan!');
        });
    </script>
</body>
</html>
