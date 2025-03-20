<nav class="bg-white shadow-md fixed w-full z-10">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="flex items-center py-4 px-2">
                    <span class="font-semibold text-gray-500 text-lg">Logo</span>
                </a>
            </div>
            <!-- Primary Nav for Desktop -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="#"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Beranda</a>
                <a href="#"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Kontrakan</a>
                <a href="#"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Partner</a>
                <a href="#"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Tentang
                    Kita</a>
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
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Beranda</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Kontrakan</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Partner</a>
        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Tentang Kita</a>
    </div>
</nav>
