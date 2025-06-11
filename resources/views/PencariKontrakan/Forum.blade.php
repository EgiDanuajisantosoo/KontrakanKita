<x-template>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:content>
        <div class="content">
            {{-- <div class="headerContent bg-[#003A9D] min-h-[20vh] md:relative">
                <h1 class="text-white p-5 text-3xl font-bold mb-4">Temukan partner yang cocok dengan anda!</h1>
                <div class="search grid grid-cols-3 md:flex p-5 items-center gap-1 mb-4 w-auto md:w-xl">
                    <input type="text" placeholder="Cari berdasarkan lokasi, nama kontrakan..."
                        class="col-start-1 col-end-3 bg-white w-full p-2 border rounded-lg">
                    <button class="p-2 text-white border-2 border-white rounded-lg">Filter</button>

                </div>
            </div> --}}

            <div class="headerContent relative bg-cover bg-center min-h-[80vh] flex items-center justify-center"
                style="background-image: url('{{ asset('Assets/rumah/house1.jpg') }}');">
                <div class="absolute inset-0  bg-black/60"></div>

                <div class="relative z-10 w-full max-w-5xl px-6">
                    <h1 class="text-white text-4xl font-bold mb-2">Temukan Partner yang cocok dengan anda</h1>
                    <p class="text-white text-lg mb-6">Komunitas Pencari Kontrakan dari seluruh Indonesia</p>

                    <form id="filterForm" class="bg-white rounded-2xl shadow-lg p-6 md:p-8 grid gap-4">
                        <!-- Filter Fields -->
                        <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4">
                            <input type="text" id="keyword" name="keyword" placeholder="Lokasi, nama kontrakan..."
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm">
                            <select id="gender" name="gender"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm">
                                <option value="">Gender</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <!-- Button -->
                        <div class="mt-4">
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold w-full hover:bg-[#003A9D] transition">
                                Mulai Pencarian
                            </button>
                        </div>
                    </form>
                    <script>
                        document.getElementById('filterForm').addEventListener('submit', function(e) {
                            e.preventDefault();
                            const keyword = document.getElementById('keyword').value;
                            const gender = document.getElementById('gender').value;

                            fetch(`/filter-forum?keyword=${encodeURIComponent(keyword)}&gender=${encodeURIComponent(gender)}`)
                                .then(response => response.json())
                                .then(res => {
                                    const data = res.data || [];
                                    const container = document.querySelector('.cardColumn2 .grid');
                                    container.innerHTML = '';
                                    if (data.length === 0) {
                                        container.innerHTML =
                                            '<div class="col-span-3 text-center text-gray-500">Tidak ada Forum ditemukan.</div>';
                                    } else {
                                        data.forEach(kontrakan => {
                                            console.log(kontrakan);
                                            container.innerHTML += `
                                            <a href="/forums/${kontrakan.id}">
                                                <div class="card bg-white p-5 rounded-lg shadow-md">
                                                    <div class="flex justify-between mb-4">
                                                        <p>logo</p>
                                                        <div class="flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                viewBox="0 0 24 24">
                                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="1.5">
                                                                    <path
                                                                        d="M12.56 20.82a.96.96 0 0 1-1.12 0C6.611 17.378 1.486 10.298 6.667 5.182A7.6 7.6 0 0 1 12 3c2 0 3.919.785 5.333 2.181c5.181 5.116.056 12.196-4.773 15.64"/>
                                                                    <path d="M12 12a2 2 0 1 0 0-4a2 2 0 0 0 0 4"/>
                                                                </g>
                                                            </svg>
                                                            <p class="text-sm font-light ml-2">${kontrakan.provinsi ?? ''}, ${kontrakan.kota ?? ''}</p>
                                                        </div>
                                                    </div>
                                                    <h1 class="text-2xl font-bold mb-2">${kontrakan.nama_group ?? kontrakan.nama}</h1>
                                                    <p class="text-gray-600 text-sm mb-4">${kontrakan.deskripsi ?? ''}</p>
                                                    <div class="flex flex-col md:flex-row justify-start items-center mb-4 gap-1">
                                                        <div class="flex items-center gap-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path
                                                                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/>
                                                                    <path fill="currentColor"
                                                                        d="M13 13a4 4 0 0 1 4 4v2a1 1 0 1 1-2 0v-2a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2a1 1 0 1 1-2 0v-2a4 4 0 0 1 4-4zm6 0a3 3 0 0 1 3 3v2a1 1 0 1 1-2 0v-2a1 1 0 0 0-1-1h-1.416a5 5 0 0 0-1.583-2zM9.5 3a4.5 4.5 0 1 1 0 9a4.5 4.5 0 0 1 0-9M18 6a3 3 0 1 1 0 6a3 3 0 0 1 0-6M9.5 5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M18 8a1 1 0 1 0 0 2a1 1 0 0 0 0-2"/>
                                                                </g>
                                                            </svg>
                                                            <span class="text-gray-500">${kontrakan.jumlah_anggota_terisi ?? 0}/${kontrakan.jumlah_anggota ?? 0}</span>
                                                        </div>
                                                        <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                                            <div class="bg-blue-500 h-2.5 rounded-full"
                                                                style="width: ${(kontrakan.jumlah_anggota_terisi && kontrakan.jumlah_anggota ? (kontrakan.jumlah_anggota_terisi / kontrakan.jumlah_anggota) * 100 : 0)}%;">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center gap-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                                viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4"/>
                                                            </svg>
                                                            <p class="text-sm font-light">
                                                                ${kontrakan.jenis_kelamin === 'L' ? 'Laki-laki' : (kontrakan.jenis_kelamin === 'P' ? 'Perempuan' : '')}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="border-t pt-4">
                                                        <div class="flex justify-end gap-4">
                                                            <span class="text-blue-500 hover:text-blue-700">Lihat</span>
                                                            <span class="text-blue-500 hover:text-blue-700">Masuk</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            `;
                                        });
                                    }
                                });
                        });
                    </script>
                </div>
            </div>



            @if (Auth::check() && Auth::user()->role == 'pencari')
                @if ($checkGroup == null)
                    <div id="openTambahForum"
                        class="scroll-toggle-btn fixed bottom-7 rounded-xl bg-blue-600 p-3 right-7 md:hover:cursor-pointer md:hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 48 48">
                            <path fill="#ffffff"
                                d="M24 4c11.046 0 20 8.954 20 20s-8.954 20-20 20c-3.45 0-6.698-.874-9.533-2.414L6.23 43.928c-1.319.375-2.537-.844-2.162-2.162l2.342-8.238A19.9 19.9 0 0 1 4 24C4 12.954 12.954 4 24 4m1.25 11.25a1.25 1.25 0 1 0-2.5 0v7.5h-7.5a1.25 1.25 0 1 0 0 2.5h7.5v7.5a1.25 1.25 0 1 0 2.5 0v-7.5h7.5a1.25 1.25 0 1 0 0-2.5h-7.5z" />
                            <style>
                                #openTambahForum:hover path {
                                    {{-- fill:grey; --}}
                                }
                            </style>
                        </svg>
                    </div>
                @else
                    <div
                        class="scroll-toggle-btn fixed bottom-7 rounded-xl bg-blue-600 p-3 right-7 hover:cursor-pointer md:hover:bg-blue-700">
                        <a href="/forums/{{ $checkGroup->group_id }}">
                            <svg id="openGroupBtn" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                viewBox="0 0 1200 1200">
                                <path fill="#ffffff"
                                    d="M596.847 188.488c-103.344 0-187.12 97.81-187.12 218.465c0 83.678 40.296 156.352 99.468 193.047l-68.617 31.801l-182.599 84.688c-17.64 8.821-26.444 23.778-26.444 44.947v201.102c1.451 25.143 16.537 48.577 40.996 48.974h649.62c27.924-2.428 42.05-24.92 42.325-48.974V761.436c0-21.169-8.804-36.126-26.443-44.947l-175.988-84.688l-73.138-34.65c56.744-37.521 95.061-108.624 95.061-190.197c-.001-120.656-83.778-218.466-187.121-218.466m-301.824 76.824c-44.473 1.689-79.719 20.933-106.497 51.596c-29.62 36.918-44.06 80.75-44.339 124.354c1.819 64.478 30.669 125.518 82.029 157.446L21.163 693.997C7.05 699.289 0 711.636 0 731.041v161.398c1.102 21.405 12.216 39.395 33.055 39.703h136.284V761.436c2.255-45.639 23.687-82.529 62.196-100.531l136.247-64.817c10.584-6.175 20.731-14.568 30.433-25.152c-56.176-86.676-63.977-190.491-27.773-281.801c-23.547-14.411-50.01-23.672-75.419-23.823m608.586 0c-29.083.609-55.96 11.319-78.039 26.444c35.217 92.137 25.503 196.016-26.482 276.52c11.467 13.23 23.404 23.377 35.753 30.434l130.965 62.195c39.897 21.881 60.47 59.098 60.866 100.532v170.707h140.235c23.063-1.991 32.893-20.387 33.093-39.704V731.042c0-17.641-7.05-29.987-21.163-37.045l-202.431-96.618c52.498-38.708 78.859-96.72 79.369-156.117c-1.396-47.012-15.757-90.664-44.339-124.354c-29.866-32.399-66.91-51.253-107.827-51.596" />
                            </svg>
                            <style>
                                #openGroupBtn:hover path {
                                    /* fill:grey; */
                                }
                            </style>
                        </a>
                    </div>
                @endif
            @endif




            <div class="container mx-auto p-5 mt-10">

                <div class="cardColumn1">
                    <div class=" mb-4 bg-[#003A9D] text-white w-auto sm:w-sm rounded-lg flex">
                        <h2 class=" text-lg text-white font-semibold p-3">Rekomendasi berdasarkan lokasimu</h2>
                        <select name="" id="radius" class="bg-[#003A9D]" onchange="updateRadius()"
                            value="10">
                            <option value="2" selected>2 km</option>
                            <option value="5">5 km</option>
                            <option value="10">10 km</option>
                        </select>
                    </div>
                    <div id="loading" class="text-center text-gray-500 my-4 sm:text-left lg:text-left">Loading
                        rekomendasi...</div>
                    <div id="data" class="text-center text-gray-500 my-4 sm:text-left lg:text-left hidden"></div>
                    <div id="Rekomendasi" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    </div>
                    {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
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
                    </div> --}}
                </div>

                <div class="cardColumn2 pt-8">
                    <div class=" mb-4 bg-[#003A9D] w-auto sm:w-sm rounded-lg">
                        <h2 class=" text-lg text-white font-semibold p-3">Semua Forum</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Card 1 -->
                        @foreach ($groups as $group)
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
                                        <p class="text-sm font-light ml-2">{{ $group->provinsi }}, {{ $group->kota }}
                                        </p>
                                    </div>
                                </div>
                                <h1 class="text-2xl font-bold mb-2">{{ $group->nama_group }}</h1>
                                <p class="text-gray-600 text-sm mb-4">{{ $group->deskripsi }}</p>
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
                                        <span
                                            class="text-gray-500">{{ $group->usersDiterima->count() }}/{{ $group->jumlah_anggota }}</span>
                                    </div>
                                    <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-blue-500 h-2.5 rounded-full"
                                            style="width: {{ ($group->usersDiterima->count() / $group->jumlah_anggota) * 100 }}%;">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                        </svg>
                                        <p class="text-sm font-light">
                                            @if ($group->jenis_kelamin == 'L')
                                                Laki-laki
                                            @elseif ($group->jenis_kelamin == 'P')
                                                Perempuan
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="border-t pt-4">
                                    <div class="flex justify-end gap-4">
                                        @if (auth()->check() && $checkGroup && $group && isset($group->id) && $group->users->contains(auth()->user()->id) && $checkGroup->status == 'diterima')
                                            <a href="/forums/{{ $group->id }}"
                                                class="text-blue-500 hover:text-blue-700">Lihat</a>
                                            <a href="#" class="text-blue-500 hover:text-blue-700">Keluar</a>
                                        @elseif (auth()->check() && $checkGroup && $group && isset($group->id) && $group->users->contains(auth()->user()->id) && $checkGroup->status == 'pending')
                                            <a class="text-blue-500 hover:text-blue-700">Menunggu</a>
                                            <a href="#" class="text-blue-500 hover:text-blue-700">Keluar</a>
                                        @elseif ($group && isset($group->id))
                                            <form action="/forums/{{ $group->id }}/gabungGroup" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="text-blue-500 hover:text-blue-700">Masuk</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>

        {{-- Form Tambah Forum --}}
        <div id="forumModal"
            class="fixed top-0 right-0 h-full w-full md:w-[600px] bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
            <!-- Close button -->

            <!-- FORM CONTENT START -->
            <div class="p-6 sticky top-0 z-40 bg-[#003A9D] rounded-tl-2xl rounded-tr-2xl" style="background: #003A9D">
                <button id ="closeTambahForum"
                    class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl font-bold">&times;</button>
                <h2 class="font-semibold text-2xl text-white">Tambah Forum</h2>
            </div>
            <div class="overflow-y-auto p-6">
                <form method="POST" action="/forums" enctype="multipart/form-data"
                    class="flex-col bg-white rounded-lg">
                    @csrf
                    <div class="flex-1 py-2">
                        <label class="font-semibold text-gray-600 py-2" for="nama_group">Nama Group :</label>
                        <input type="text" name="nama_group" id="nama_group" required
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                    </div>
                    <div class="flex-1 py-2">
                        <label class="font-semibold text-gray-600 py-2" for="deskripsi">Deskripsi :</label>
                        <textarea name="deskripsi" id="deskripsi" required
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg px-4 text-xs py-2 mb-2 mt-2"></textarea>
                    </div>
                    <div class="flex-1 py-2">
                        <label class="font-semibold text-gray-600 py-2" for="jumlah_anggota">Jumlah Anggota :</label>
                        <input type="number" name="jumlah_anggota" id="jumlah_anggota" required
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                    </div>
                    <div class="flex-1 py-2">
                        <label class="font-semibold text-gray-600 py-2" for="jenis_kelamin">Jenis Kelamin
                            :</label><br>
                        <input class="text-xs" type="radio" name="jenis_kelamin" value="L" required>
                        Laki-laki
                        <input class="text-xs" type="radio" name="jenis_kelamin" value="P" required>
                        Perempuan
                    </div>
                    <div class="col-span-2">
                        <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                        <div class="md:flex md:row md:space-x-4 w-full text-xs">
                            <div class="w-full flex flex-col mb-3">
                                <label class="font-semibold text-gray-600 py-2">Provinsi:<abbr
                                        title="required">*</abbr></label>
                                <select name="provinsi" id="provinsi"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                    required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                            <div class="w-full flex flex-col mb-3">
                                <label class="font-semibold text-gray-600 py-2">Kabupaten/Kota:<abbr
                                        title="required">*</abbr></label>
                                <select name="kota" id="kota"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                    required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="md:flex md:row md:space-x-4 w-full text-xs">
                            <div class="w-full flex flex-col mb-3">
                                <label class="font-semibold text-gray-600 py-2">Kecamatan:<abbr
                                        title="required">*</abbr></label>
                                <select name="kecamatan" id="kecamatan"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                    required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 py-2">
                        <label class="font-semibold text-gray-600 py-2" for="foto_group">Foto Group :</label>
                        <input type="file" name="foto_group" id="foto_group"
                            accept="image/jpeg,image/png,image/jpg,image/gif"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                    </div>
                    <div class="w-full flex flex-col mb-3">
                        <label class="font-semibold text-gray-600 py-2">Lokasi pada Peta<abbr
                                title="required">*</abbr></label>
                        <div id="map" style="height: 300px; width: 100%;" class="mb-2 z-0"></div>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                    </div>
                    <button id="buttonSubmit" name="submit" class="hidden" type="submit">submit</button>
                </form>
            </div>

            <div class="p-6 sticky bottom-0 z-10 bg-[#003A9D] rounded-bl-2xl rounded-br-2xl">
                <div class="button-group flex justify-end mx-auto block gap-2" style="margin: auto">
                    <button type="submit" onclick="submitButton()"
                        class="px-5 py-3 font-bold rounded-md text-white bg-green-700 hover:bg-green-800">Buat
                        Group</button>
                </div>
            </div>
            <script>
                function submitButton() {
                    document.getElementById('buttonSubmit').click();
                }
            </script>
            <!-- FORM CONTENT END -->
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const radius = document.getElementById('radius').value;
                console.log("Initial radius selected:", radius);
                fetchRecommendations();
            });

            function updateRadius() {
                const radius = document.getElementById('radius').value;
                console.log("Radius selected:", radius);
                fetchRecommendations();
            }

            function fetchRecommendations() {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    const radius = document.getElementById('radius').value;

                    console.log("User location:", latitude, longitude);
                    console.log("Radius selected:", radius);
                    document.getElementById('loading').style.display = 'block';
                    fetch('/rekomendasi-forum?latitude=' + latitude + '&longitude=' + longitude + '&radius=' + radius)
                        .then(response => response.json())
                        .then(data => {
                            const container = document.getElementById('Rekomendasi');
                            container.innerHTML = '';

                            document.getElementById('loading').style.display = 'none';

                            data.forEach(forum => {
                                console.log(forum);
                                const html = `
                                    <div class="card bg-white p-5 rounded-lg shadow-md">
                                        <div class="flex justify-between mb-4">
                                            <p>logo</p>
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                        <path d="M12.56 20.82a.96.96 0 0 1-1.12 0C6.611 17.378 1.486 10.298 6.667 5.182A7.6 7.6 0 0 1 12 3c2 0 3.919.785 5.333 2.181c5.181 5.116.056 12.196-4.773 15.64" />
                                                        <path d="M12 12a2 2 0 1 0 0-4a2 2 0 0 0 0 4" />
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-light ml-2">${forum.provinsi}, ${forum.kota}</p>
                                            </div>
                                        </div>
                                        <h1 class="text-2xl font-bold mb-2">${forum.nama_group}</h1>
                                        <p class="text-gray-600 text-sm mb-4">${forum.deskripsi}</p>
                                        <div class="flex flex-col md:flex-row justify-start items-center mb-4 gap-1">
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                        <path fill="currentColor" d="M13 13a4 4 0 0 1 4 4v2a1 1 0 1 1-2 0v-2a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v2a1 1 0 1 1-2 0v-2a4 4 0 0 1 4-4zm6 0a3 3 0 0 1 3 3v2a1 1 0 1 1-2 0v-2a1 1 0 0 0-1-1h-1.416a5 5 0 0 0-1.583-2zM9.5 3a4.5 4.5 0 1 1 0 9a4.5 4.5 0 0 1 0-9M18 6a3 3 0 1 1 0 6a3 3 0 0 1 0-6M9.5 5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M18 8a1 1 0 1 0 0 2a1 1 0 0 0 0-2" />
                                                    </g>
                                                </svg>
                                                <span class="text-gray-500">1/${forum.jumlah_anggota}</span>
                                            </div>
                                            <div class="w-full md:w-1/3 bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-blue-500 h-2.5 rounded-full"
                                                    style="width: ${(1 / forum.jumlah_anggota) * 100}%;">
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M9 9c1.29 0 2.5.41 3.47 1.11L17.58 5H13V3h8v8h-2V6.41l-5.11 5.09c.7 1 1.11 2.2 1.11 3.5a6 6 0 0 1-6 6a6 6 0 0 1-6-6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4" />
                                        </svg>
                                        <p class="text-sm font-light">
                                            @if (isset($group->jenis_kelamin))
                                                @if ($group->jenis_kelamin == 'L')
                                                    Laki-laki
                                                @elseif ($group->jenis_kelamin == 'P')
                                                    Perempuan
                                                @endif
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="border-t pt-4">
                                    <div class="flex justify-end gap-4">
                                        @if (auth()->check() && $checkGroup && $group && isset($group->id) && isset($group->users) && $group->users->contains(auth()->user()->id) && $checkGroup->status == 'diterima')
                                            <a href="/forums/{{ $group->id }}"
                                                class="text-blue-500 hover:text-blue-700">Lihat</a>
                                            <a href="#" class="text-blue-500 hover:text-blue-700">Keluar</a>
                                        @elseif (auth()->check() && $checkGroup && $group && isset($group->id) && isset($group->users) && $group->users->contains(auth()->user()->id) && $checkGroup->status == 'pending')
                                            <a class="text-blue-500 hover:text-blue-700">Menunggu</a>
                                            <a href="#" class="text-blue-500 hover:text-blue-700">Keluar</a>
                                        @elseif (isset($group->id))
                                            <form action="/forums/{{ $group->id }}/gabungGroup" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="text-blue-500 hover:text-blue-700">Masuk</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            `;
                                container.innerHTML += html;
                            });
                            if (data.length === 0) {
                                const container = document.getElementById('data');
                                container.innerHTML = 'Tidak ada Kontrakan dalam Jangkuan ' + radius + 'km';
                                document.getElementById('data').style.display = 'block';
                            } else {
                                document.getElementById('data').style.display = 'none';
                            }

                        });

                }, function(error) {
                    document.getElementById('data').style.display = 'flex';
                    console.error("Gagal mendapatkan lokasi:", error.message);
                });
            }
        </script>

        <script>
            const openBtn = document.getElementById('openTambahForum');
            const closeBtn = document.getElementById('closeTambahForum');
            const panel = document.getElementById('forumModal');

            openBtn.addEventListener('click', () => {
                panel.classList.remove('translate-x-full');
            });

            closeBtn.addEventListener('click', () => {
                panel.classList.add('translate-x-full');
            });
        </script>





        <!-- Leaflet Maps -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const map = L.map('map').setView([-6.200000, 106.816666], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                }).addTo(map);

                const marker = L.marker([-6.200000, 106.816666], {
                    draggable: true
                }).addTo(map);

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition((position) => {
                        const {
                            latitude,
                            longitude
                        } = position.coords;
                        map.setView([latitude, longitude], 16);
                        marker.setLatLng([latitude, longitude]);
                        document.getElementById('latitude').value = latitude;
                        document.getElementById('longitude').value = longitude;
                    }, (error) => {
                        alert("Tidak dapat mengakses lokasi. Pastikan Anda memberikan izin.");
                    });
                } else {
                    alert("Browser Anda tidak mendukung geolokasi.");
                }

                marker.on('dragend', function(e) {
                    const latLng = marker.getLatLng();
                    document.getElementById('latitude').value = latLng.lat;
                    document.getElementById('longitude').value = latLng.lng;
                });

                map.on('click', function(e) {
                    const {
                        lat,
                        lng
                    } = e.latlng;
                    marker.setLatLng([lat, lng]);
                    document.getElementById('latitude').value = lat;
                    document.getElementById('longitude').value = lng;
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                axios.get('/api/provinces')
                    .then(response => {
                        let options = '<option value="">Pilih</option>';
                        document.getElementById('provinsi').innerHTML = '<option value="">Pilih</option>';
                        document.getElementById('kecamatan').innerHTML = '<option value="">Pilih</option>';
                        response.data.forEach(item => {
                            options +=
                                `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                        });
                        document.getElementById('provinsi').innerHTML = options;
                    });

                document.getElementById('provinsi').addEventListener('change', function() {
                    const id = this.options[this.selectedIndex].getAttribute('data-id');
                    axios.get(`/api/regencies/${id}`)
                        .then(response => {
                            let options = '<option value="">Pilih</option>';
                            document.getElementById('kecamatan').innerHTML =
                                '<option value="">Pilih</option>';
                            response.data.forEach(item => {
                                options +=
                                    `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                            });
                            document.getElementById('kota').innerHTML = options;
                        });
                });

                document.getElementById('kota').addEventListener('change', function() {
                    const id = this.options[this.selectedIndex].getAttribute('data-id');
                    axios.get(`/api/districts/${id}`)
                        .then(response => {
                            let options = '<option value="">Pilih</option>';
                            response.data.forEach(item => {
                                options +=
                                    `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                            });
                            document.getElementById('kecamatan').innerHTML = options;
                        });
                });
            });
        </script>


        <script>
            let lastScrollTop = 0;
            const scrollBtns = document.querySelectorAll(".scroll-toggle-btn");

            function isMobile() {
                return window.innerWidth < 768;
            }

            window.addEventListener("scroll", () => {
                if (!isMobile()) return;

                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Scroll ke bawah – sembunyikan
                    scrollBtns.forEach(btn => {
                        btn.classList.add("opacity-0", "pointer-events-none");
                        btn.classList.remove("opacity-100");
                    });
                } else {
                    // Scroll ke atas – tampilkan
                    scrollBtns.forEach(btn => {
                        btn.classList.remove("opacity-0", "pointer-events-none");
                        btn.classList.add("opacity-100");
                    });
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            });

            // Tambahkan transisi untuk animasi
            scrollBtns.forEach(btn => {
                btn.classList.add("transition-opacity", "duration-300", "opacity-100");
            });
        </script>

    </x-slot:content>
</x-template>
