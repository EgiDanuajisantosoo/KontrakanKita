<x-template>
    <x-slot:title>

    </x-slot:title>

    <x-slot:content>

        <div class="relative min-h-screen bg-gray-50">
            <!-- Background dengan overlay -->
            <div class="absolute inset-0 bg-white/50 z-0">
                <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent"></div>
            </div>

            <!-- Main Content -->
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-24 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
                    <!-- Left Content -->
                    <div class="w-full lg:w-1/2 space-y-8">
                        <div class="space-y-6">
                            <h1 class="text-5xl md:text-6xl font-bold">
                                <span class="text-gray-900">Temukan Rumah</span><br>
                                <span class="text-blue-500">Impian</span>
                                <span class="text-emerald-500">Anda</span>
                            </h1>

                            <p class="text-gray-700 text-lg max-w-xl">
                                Platform properti modern dengan teknologi terdepan untuk membantu
                                Anda menemukan properti ideal dengan mudah dan cepat.
                            </p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="/Kontrakan">
                                <button
                                    class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg flex items-center gap-2 transition-all cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Cari Kontrakan
                                </button>
                            </a>
                            {{-- <button
                                class="bg-white hover:bg-gray-100 text-gray-800 border border-gray-300 py-3 px-6 rounded-lg flex items-center gap-2 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Lihat Video
                            </button> --}}
                        </div>

                        <!-- Stats -->
                        {{-- <div class="grid grid-cols-3 gap-4 pt-8 border-t border-gray-200">
                            <div class="text-center sm:text-left">
                                <p class="text-3xl font-bold text-gray-900">15K+</p>
                                <p class="text-gray-600">Properti</p>
                            </div>

                            <div class="text-center sm:text-left">
                                <p class="text-3xl font-bold text-gray-900">10K+</p>
                                <p class="text-gray-600">Pengguna</p>
                            </div>

                            <div class="text-center sm:text-left">
                                <p class="text-3xl font-bold text-gray-900">99%</p>
                                <p class="text-gray-600">Kepuasan</p>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Right Content - Property Image -->
                    <div class="w-full lg:w-1/2 relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" alt="Rumah Modern"
                                class="w-full h-auto object-cover" />

                            <!-- Badge -->
                            {{-- <div class="absolute bottom-6 right-6 bg-white rounded-xl shadow-lg p-4">
                                <div class="flex items-center gap-3">
                                    <div class="bg-blue-100 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">Terpercaya</p>
                                        <p class="text-sm text-gray-600">Verifikasi Lengkap</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-10 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Cari Kontrakan Card -->
                    <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-center mb-6">
                            <div class="bg-blue-100 p-5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-xl font-semibold text-center text-gray-800 mb-4">Cari Kontrakan</h3>

                        <p class="text-gray-600 text-center mb-8">
                            Temukan kontrakan yang sesuai dengan kebutuhan dan budget Anda. Fitur pencarian lengkap
                            dengan filter lokasi, harga, dan fasilitas.
                        </p>

                        <div class="flex justify-center">
                            <a href="/Kontrakan"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-lg transition-colors">
                                Cari Sekarang
                            </a>
                        </div>
                    </div>

                    <!-- Jadi Pemilik Card -->
                    <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-center mb-6">
                            <div class="bg-green-100 p-5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-xl font-semibold text-center text-gray-800 mb-4">Jadi Pemilik</h3>

                        <p class="text-gray-600 text-center mb-8">
                            Sewakan kontrakan Anda dengan mudah. Dapatkan akses ke ribuan pencari kontrakan potensial
                            dan kelola properti dengan efisien.
                        </p>

                        <div class="flex justify-center">
                            <a href="#"
                                class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-6 rounded-lg transition-colors">
                                Mulai Sekarang
                            </a>
                        </div>
                    </div>

                    <!-- Forum Komunitas Card -->
                    <div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-center mb-6">
                            <div class="bg-purple-100 p-5 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-xl font-semibold text-center text-gray-800 mb-4">Forum Komunitas</h3>

                        <p class="text-gray-600 text-center mb-8">
                            Bergabung dengan komunitas pencari dan pemilik kontrakan. Berbagi informasi, tips, dan
                            pengalaman dengan sesama anggota.
                        </p>

                        <div class="flex justify-center">
                            <a href="/forums"
                                class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-6 rounded-lg transition-colors">
                                Gabung Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <span
                        class="bg-blue-100 text-blue-500 rounded-full px-4 py-1 text-sm font-medium mb-4 inline-block">
                        Keunggulan Kami
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        <span class="text-blue-500">Mengapa</span>
                        <span class="text-emerald-500">KontrakanKita?</span>
                    </h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">
                        Platform terpercaya yang menghubungkan pencari dan pemilik kontrakan dengan cara
                        yang mudah, aman, dan transparan
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Feature 1: Terpercaya -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:shadow-md transition-shadow">
                        <div class="flex justify-center mb-6">
                            <div class="bg-blue-100 p-4 rounded-full inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-center mb-3">Terpercaya</h3>

                        <p class="text-gray-600 text-center">
                            Verifikasi identitas dan properti untuk keamanan transaksi. Kami memastikan setiap properti
                            telah diverifikasi.
                        </p>
                    </div>

                    <!-- Feature 2: Harga Transparan -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:shadow-md transition-shadow">
                        <div class="flex justify-center mb-6">
                            <div class="bg-green-100 p-4 rounded-full inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-center mb-3">Harga Transparan</h3>

                        <p class="text-gray-600 text-center">
                            Informasi harga yang jelas tanpa biaya tersembunyi. Bandingkan harga dengan mudah.
                        </p>
                    </div>

                    <!-- Feature 3: Lokasi Strategis -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:shadow-md transition-shadow">
                        <div class="flex justify-center mb-6">
                            <div class="bg-blue-100 p-4 rounded-full inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-center mb-3">Lokasi Strategis</h3>

                        <p class="text-gray-600 text-center">
                            Ribuan kontrakan tersedia di berbagai lokasi. Temukan properti di area yang Anda inginkan.
                        </p>
                    </div>

                    <!-- Feature 4: Layanan 24/7 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:shadow-md transition-shadow">
                        <div class="flex justify-center mb-6">
                            <div class="bg-green-100 p-4 rounded-full inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-center mb-3">Layanan 24/7</h3>

                        <p class="text-gray-600 text-center">
                            Dukungan pelanggan siap membantu kapan saja. Tim kami selalu siap melayani kebutuhan Anda.
                        </p>
                    </div>
                </div>


            </div>
        </section>

    </x-slot:content>
</x-template>
