<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <style>
         .active {
        color: #003A9D !important;
        font-weight: bold;
        border-bottom: 3px solid #003A9D;
    }
    </style>

    {{-- <style>
        /* .navbar-transparent {
            opacity: 0;
            transition: opacity 0.3s ease;
        } */

        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0); /* Background transparan */
            transition: background-color 0.3s ease; /* Animasi transisi */
        }
        .navbar-solid {
            background-color: rgb(140, 58, 58); /* Background solid putih */
        }
    </style> --}}
</head>

<body>
    @include('components.nav')
    <div class="head pt-[8vh] ">
        {{ $content }}
    </div>

    <script>
        if (window.location.pathname === "/") {
            document.body.classList.add("overflow-hidden");
        }

        function toggleNav() {
            const nav = document.getElementById('mobile-nav');
            nav.classList.toggle('hidden');
        }
    </script>
    <script>
        // Fungsi untuk mengubah opacity navbar
        function updateNavbarOpacity() {
            const navbar = document.querySelector('nav');
            if (window.scrollY === 0) {
                // Jika di paling atas, tambahkan class untuk opacity rendah
                navbar.classList.add('navbar-transparent');
            } else {
                // Jika tidak, hapus class tersebut
                navbar.classList.remove('navbar-transparent');
            }
        }

        // Jalankan fungsi saat halaman dimuat dan saat di-scroll
        window.addEventListener('scroll', updateNavbarOpacity);
        window.addEventListener('load', updateNavbarOpacity);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll("nav a"); // Pilih semua link di navbar
            const currentPath = window.location.pathname; // Ambil path dari URL saat ini

            navLinks.forEach(link => {
                if (link.getAttribute("href") === currentPath) {
                    link.classList.add("active");
                }
            });
        });
    </script>

</body>

</html>
