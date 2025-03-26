<x-template>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:content>
        <div class="content">
            <div class="headerContent bg-[#003A9D] min-h-[20vh] md:relative">
                <h1 class="text-white p-5 text-3xl font-bold mb-4">Temukan partner yang cocok dengan anda!</h1>
                <div class="search grid grid-cols-3 md:flex p-5 items-center gap-1 mb-4 w-auto md:w-xl">
                    <input type="text" placeholder="Cari berdasarkan lokasi, nama kontrakan..."
                        class="col-start-1 col-end-3 bg-white p-2 border rounded-lg">
                    <button class="p-2 text-white border-2 border-white rounded-lg">Filter</button>
                    <button class="p-2 text-white border-2 border-white rounded-lg w-[130px] md:absolute md:button-0 md:right-7">Tambah Forum</button>
                </div>
            </div>

            <div class="container mx-auto p-5">

                <div class="cardColumn1">
                    <div class=" mb-4 bg-[#003A9D] w-auto sm:w-sm rounded-lg">
                        <h2 class=" text-lg text-white font-semibold p-3">Rekomendasi berdasarkan lokasimu</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Card 1 -->
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardColumn2 pt-8">
                    <div class=" mb-4 bg-[#003A9D] w-auto sm:w-sm rounded-lg">
                        <h2 class=" text-lg text-white font-semibold p-3">Rekomendasi berdasarkan lokasimu</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Card 1 -->
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
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
                                    <p class="text-sm font-light ml-2">Bandung, Jawa Barat</p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold mb-2">Forum Diskusi</h1>
                            <p class="text-gray-600 text-sm mb-4">Ini adalah Deskripsi dari forum diskusi cari kontrakan
                            </p>
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
                                    <span class="text-gray-500">3/6</span>
                                </div>
                                <div class="flex">

                                </div>
                                <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%;"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                    </svg>
                                    <p class="text-sm font-light">Laki-laki</p>
                                </div>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-end gap-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a>
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </x-slot:content>
</x-template>
