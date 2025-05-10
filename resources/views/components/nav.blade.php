<nav class="bg-white shadow-md fixed w-full z-50 pb-2">
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
                <a href="/forums"
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Partner</a>
                <a href=""
                    class="py-4 px-2 text-gray-500 font-semibold hover:text-[#003A9D] transition duration-300">Tentang
                    Kita</a>
            </div>

            {{-- <div class="relative mt-2">
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
            </div> --}}


            <!-- Profile Button (Desktop) -->
            <div class="relative">
                @if (Auth::check())
                    <button id="desktopDropdownButton"
                        class="hidden md:flex items-center space-x-2 bg-white px-4 py-2 rounded-lg shadow hover:bg-gray-100 focus:outline-none">
                        Profile
                    </button>
                    <div id="desktopDropDown"
                        class="hidden absolute right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg min-w-[150px]">
                        <a href="/Profile" class="block px-4 py-2 text-gray-500 hover:bg-gray-100">Profile</a>
                        @if (Auth::user()->role == 'pemilik')
                        <a href="/KelolaKontrakan" class="block px-4 py-2 text-gray-500 hover:bg-gray-100">Kelola
                            Kontrakan</a>
                        @endif

                        <a href="/Setting" class="block px-4 py-2 text-gray-500 hover:bg-gray-100">Settings</a>

                        @if (Auth::check())
                            <form action="{{ route('auth.logout') }}" method="post">
                                @csrf
                                <button type="submit"
                                    class="block px-4 py-2 w-full text-gray-500 hover:bg-gray-100">Logout</button>
                            </form>
                        @else
                        @endif
                    </div>
                @else
                    <a href="/auth" class="hidden md:block lg:block text-center px-4 py-2 text-gray-500 mt-2 hover:bg-gray-100">Login</a>
                @endif

            </div>

            <div class="md:hidden flex items-center">
                <button onclick="toggleNav()" class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-[#003A9D]" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>


        <!-- Mobile Menu Button -->

    </div>
    </div>
    <!-- Mobile Menu -->
    {{-- <div id="mobile-nav" class="hidden md:hidden">

        <a href="/" class="block py-2 px-4 text-sm hover:bg-gray-200">Beranda</a>
        <a href="/Kontrakan" class="block py-2 px-4 text-sm hover:bg-gray-200">Kontrakan</a>
        <a href="/Forum" class="block py-2 px-4 text-sm hover:bg-gray-200">Partner</a>
        <a href="" class="block py-2 px-4 text-sm hover:bg-gray-200">Tentang Kita</a>
        <div class="relative mt-2">
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
    </div> --}}

    <!-- Mobile Menu -->
    <div id="mobile-nav" class="hidden md:hidden bg-white shadow-md">
        <a href="/" class="block py-2 px-4 text-sm hover:bg-gray-200">Beranda</a>
        <a href="/Kontrakan" class="block py-2 px-4 text-sm hover:bg-gray-200">Kontrakan</a>
        <a href="/forums" class="block py-2 px-4 text-sm hover:bg-gray-200">Partner</a>
        <a href="" class="block py-2 px-4 text-sm hover:bg-gray-200">Tentang Kita</a>

        <!-- Profile Dropdown in Mobile -->
        <div class="relative">
            <button id="mobileDropdownButton"
                class="w-full text-left py-2 px-4 text-sm hover:bg-gray-200 focus:outline-none">
                Lainnya
            </button>
            <div id="mobileDropDown"
                class="hidden text-sm absolute w-full bg-white border border-gray-200 rounded-lg shadow-lg min-w-[150px]">
                <a href="/Profile" class="block px-4 py-2 text-gray-500 hover:bg-gray-100">Profile</a>
                @if (Auth::user()->role == 'pemilik')

                <a href="/KelolaKontrakan" class="block px-4 py-2 text-gray-500 hover:bg-gray-100">Kelola Kontrakan</a>
                @endif
                <a href="/Setting" class="block px-4 py-2 text-gray-500 hover:bg-gray-100">Setting</a>
                @if (Auth::check())
                    <form action="{{ route('auth.logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="block px-4 py-2 w-full text-gray-500 hover:bg-gray-100">Logout</button>
                    </form>
                @else
                    <a href="/auth" class="block text-center px-4 py-2 text-gray-500 hover:bg-gray-100">Login</a>
                @endif
            </div>
        </div>
    </div>


    {{-- <script>
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
    </script> --}}


    <script>
        function toggleNav() {
            const mobileNav = document.getElementById("mobile-nav");
            mobileNav.classList.toggle("hidden");
        }

        // Handle Dropdown for Desktop
        document.addEventListener("DOMContentLoaded", function() {
            const desktopDropdownButton = document.getElementById("desktopDropdownButton");
            const desktopDropDown = document.getElementById("desktopDropDown");

            desktopDropdownButton.addEventListener("click", function(event) {
                event.stopPropagation();
                desktopDropDown.classList.toggle("hidden");
            });

            document.addEventListener("click", function(event) {
                if (!desktopDropdownButton.contains(event.target) && !desktopDropDown.contains(event
                        .target)) {
                    desktopDropDown.classList.add("hidden");
                }
            });
        });

        // Handle Dropdown for Mobile
        document.addEventListener("DOMContentLoaded", function() {
            const mobileDropdownButton = document.getElementById("mobileDropdownButton");
            const mobileDropDown = document.getElementById("mobileDropDown");

            mobileDropdownButton.addEventListener("click", function(event) {
                event.stopPropagation();
                mobileDropDown.classList.toggle("hidden");
            });

            document.addEventListener("click", function(event) {
                if (!mobileDropdownButton.contains(event.target) && !mobileDropDown.contains(event
                        .target)) {
                    mobileDropDown.classList.add("hidden");
                }
            });
        });
    </script>
</nav>
