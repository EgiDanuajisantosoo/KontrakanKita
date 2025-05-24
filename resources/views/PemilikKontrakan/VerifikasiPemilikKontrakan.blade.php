<x-template>
    <x-slot:title>Verifikasi Pemilik Kontrakan</x-slot:title>
    <x-slot:content>
        <!-- Tabs -->
        <div class="max-w-6xl mx-auto px-4 py-8">
            <div class="flex justify-center gap-8 border-b">
                <button id="tabVerifikasi"
                    class="tab-btn pb-2 border-b-2 border-indigo-600 text-indigo-600 font-medium">Verifikasi Pencari
                    Kontrakan</button>
                <button id="tabForum" class="tab-btn pb-2 text-gray-500 hover:text-indigo-600">Forum yang Telah
                    Mengontrak</button>
            </div>

            <!-- Content: Verifikasi -->
            <div id="contentVerifikasi" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <!-- Card -->
                @foreach ($booking as $data)
                    <div class="card bg-white p-5 rounded-lg shadow-md">
                        <div class="flex justify-between mb-4">
                            <p>logo</p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5">
                                        <path
                                            d="M12.56 20.82a.96.96 0 0 1-1.12 0C6.611 17.378 1.486 10.298 6.667 5.182A7.6 7.6 0 0 1 12 3c2 0 3.919.785 5.333 2.181c5.181 5.116.056 12.196-4.773 15.64" />
                                        <path d="M12 12a2 2 0 1 0 0-4a2 2 0 0 0 0 4" />
                                    </g>
                                </svg>
                                <p class="text-sm font-light ml-2">{{  $data->group->kecamatan }}</p>
                            </div>
                        </div>
                        <h1 class="text-2xl font-bold mb-2">{{ $data->kontrakan->nama }}</h1>
                        <p class="text-gray-600 text-sm mb-4">{{ $data->kontrakan->deskripsi }}</p>
                        @if (isset($data->group))
                            <div class="flex flex-col md:flex-row justify-start items-center mb-4 gap-1">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g fill="none" fill-rule="evenodd">
                                            <path
                                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                            <path fill="currentColor"
                                                d="M13 13a4 4 0 0 1 4 4v2a1 1 0 1 1-2 0v-2a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2a1 1 0 1 1-2 0v-2a4 4 0 0 1 4-4zm6 0a3 3 0 0 1 3 3v2a1 1 0 1 1-2 0v-2a1 1 0 0 0-1-1h-1.416a5 5 0 0 0-1.583-2zM9.5 3a4.5 4.5 0 1 1 0 9a4.5 4.5 0 0 1 0-9M18 6a3 3 0 1 1 0 6a3 3 0 0 1 0-6M9.5 5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M18 8a1 1 0 1 0 0 2a1 1 0 0 0 0-2" />
                                        </g>
                                    </svg>
                                    <span class="text-gray-500">1/4</span>
                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%">
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>

                                    <p class="text-sm font-light">
                                        {{ $data->group->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="flex flex-col md:flex-row justify-start items-center mb-4 gap-1">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g fill="none" fill-rule="evenodd">
                                            <path
                                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                            <path fill="currentColor"
                                                d="M13 13a4 4 0 0 1 4 4v2a1 1 0 1 1-2 0v-2a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2a1 1 0 1 1-2 0v-2a4 4 0 0 1 4-4zm6 0a3 3 0 0 1 3 3v2a1 1 0 1 1-2 0v-2a1 1 0 0 0-1-1h-1.416a5 5 0 0 0-1.583-2zM9.5 3a4.5 4.5 0 1 1 0 9a4.5 4.5 0 0 1 0-9M18 6a3 3 0 1 1 0 6a3 3 0 0 1 0-6M9.5 5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M18 8a1 1 0 1 0 0 2a1 1 0 0 0 0-2" />
                                        </g>
                                    </svg>
                                    <span class="text-gray-500">Perorangan</span>
                                </div>
                            </div>
                        @endif
                        <!-- Tombol aksi -->
                        <div class="flex gap-2 mt-5">
                            <button class="flex-1 text-blue-500 hover:text-blue-700  py-2 rounded-lg text-sm">Lihat
                                Forum</button>
                            <button
                                class="flex-1 text-green-500 hover:text-green-700  py-2 rounded-lg text-sm">Terima</button>
                            <button
                                class="flex-1 text-red-500 hover:text-red-700  py-2 rounded-lg text-sm">Tolak</button>
                        </div>
                    </div>
                @endforeach
                <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
            </div>

            <!-- Content: Forum -->
            <div id="contentForum" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <!-- Card Forum -->
                <div class="card bg-white p-5 rounded-lg shadow-md">
                    <div class="flex justify-between mb-4">
                        <p>logo</p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <path
                                        d="M12.56 20.82a.96.96 0 0 1-1.12 0C6.611 17.378 1.486 10.298 6.667 5.182A7.6 7.6 0 0 1 12 3c2 0 3.919.785 5.333 2.181c5.181 5.116.056 12.196-4.773 15.64" />
                                    <path d="M12 12a2 2 0 1 0 0-4a2 2 0 0 0 0 4" />
                                </g>
                            </svg>
                            <p class="text-sm font-light ml-2">Bandung, Jawa Barat
                            </p>
                        </div>
                    </div>
                    <h1 class="text-2xl font-bold mb-2">Cari Kontrakan</h1>
                    <p class="text-gray-600 text-sm mb-4">Ayo kita cari kontrakan</p>
                    <div class="flex flex-col md:flex-row justify-start items-center mb-4 gap-1">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M13 13a4 4 0 0 1 4 4v2a1 1 0 1 1-2 0v-2a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2a1 1 0 1 1-2 0v-2a4 4 0 0 1 4-4zm6 0a3 3 0 0 1 3 3v2a1 1 0 1 1-2 0v-2a1 1 0 0 0-1-1h-1.416a5 5 0 0 0-1.583-2zM9.5 3a4.5 4.5 0 1 1 0 9a4.5 4.5 0 0 1 0-9M18 6a3 3 0 1 1 0 6a3 3 0 0 1 0-6M9.5 5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M18 8a1 1 0 1 0 0 2a1 1 0 0 0 0-2" />
                                </g>
                            </svg>
                            <span class="text-gray-500">1/4</span>
                        </div>
                        <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%">
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                            </svg>
                            <p class="text-sm font-light">
                                Laki-laki
                            </p>
                        </div>
                    </div>
                    <!-- Tombol aksi -->
                    <button type="submit" class="text-blue-500 hover:text-blue-700">Lihat Forum</button>
                </div>
            </div>
        </div>

        <script>
            const tabVerifikasi = document.getElementById("tabVerifikasi");
            const tabForum = document.getElementById("tabForum");
            const contentVerifikasi = document.getElementById("contentVerifikasi");
            const contentForum = document.getElementById("contentForum");

            tabVerifikasi.addEventListener("click", () => {
                tabVerifikasi.classList.add("border-b-2", "border-indigo-600", "text-indigo-600");
                tabForum.classList.remove("border-b-2", "border-indigo-600", "text-indigo-600");
                tabForum.classList.add("text-gray-500");
                contentVerifikasi.classList.remove("hidden");
                contentForum.classList.add("hidden");
            });

            tabForum.addEventListener("click", () => {
                tabForum.classList.add("border-b-2", "border-indigo-600", "text-indigo-600");
                tabVerifikasi.classList.remove("border-b-2", "border-indigo-600", "text-indigo-600");
                tabVerifikasi.classList.add("text-gray-500");
                contentForum.classList.remove("hidden");
                contentVerifikasi.classList.add("hidden");
            });
        </script>


    </x-slot:content>

</x-template>
