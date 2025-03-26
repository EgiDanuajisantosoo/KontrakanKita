<nav class="bg-white shadow-md fixed w-full z-10">
    <div class="max-w-screen mx-auto px-7">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="flex items-center py-4 px-2">
                    <span class="font-semibold text-gray-500 text-lg">Logo</span>
                </a>
            </div>
            <!-- Primary Nav for Desktop -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Beranda</a>
                <a href="/Kontrakan"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Kontrakan</a>
                <a href="/Forum"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Partner</a>
                <a href=""
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Tentang
                    Kita</a>
            </div>

            <div class="relative">
                <!-- Profile Button -->
                <button id="dropdownButton"
                    class="flex items-center space-x-2 bg-white px-4 py-2 rounded-lg shadow hover:bg-gray-100 focus:outline-none">
                    Profile
                </button>

                <!-- Dropdown Menu -->
                <div id="dropDown"
                    class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg">
                    <a href="/Profile" class="block px-4 py-2 text-gray-500 hover:bg-gray-100 hover:rounded-lg">Profile</a>
                    <a href="/KelolaKontrakan" class="block px-4 py-2 text-gray-500 hover:bg-gray-100 hover:rounded-lg">Kelola Kontrakan</a>
                    <a href="/Setting" class="block px-4 py-2 text-gray-500 hover:bg-gray-100 hover:rounded-lg">Settings</a>
                </div>
            </div>


            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button onclick="toggleNav()" class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-[#003A9D]" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-nav" class="hidden md:hidden">
        <a href="/" class="block py-2 px-4 text-sm hover:bg-gray-200">Beranda</a>
        <a href="/Kontrakan" class="block py-2 px-4 text-sm hover:bg-gray-200">Kontrakan</a>
        <a href="/Forum" class="block py-2 px-4 text-sm hover:bg-gray-200">Partner</a>
        <a href="" class="block py-2 px-4 text-sm hover:bg-gray-200">Tentang Kita</a>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropDown = document.getElementById("dropDown");

            dropdownButton.addEventListener("click", function() {
                dropDown.classList.toggle("hidden");
            });

            document.addEventListener("click", function(event) {
                if (!dropdownButton.contains(event.target) && !dropDown.contains(event.target)) {
                    dropDown.classList.add("hidden");
                }
            });
        });
    </script>
</nav>
