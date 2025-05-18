<x-template>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:content>
        <div class="content bg-gray-100">
            {{-- <div class="headerContent bg-[#003A9D] min-h-[20vh]">
                <h1 class="text-white p-5 text-3xl font-bold mb-4">Temukan kontrakan yang anda inginkan!</h1>
                <div class="search flex p-5 items-center gap-5 mb-4 w-[80px] md:w-xl">
                    <input type="text" placeholder="Cari berdasarkan lokasi, nama kontrakan..."
                        class="flex-1 bg-white p-2 border rounded-lg">
                    <button class="p-2 text-white border-2 border-white rounded-lg">Filter</button>
                </div>
            </div> --}}

            <div class="headerContent relative bg-cover bg-center min-h-[80vh] flex items-center justify-center"
                style="background-image: url('{{ asset('Assets/rumah/house1.jpg') }}');">
                <div class="absolute inset-0  bg-black/60"></div>

                <div class="relative z-10 w-full max-w-5xl px-6">
                    <h1 class="text-white text-4xl font-bold mb-2">Temukan Properti Impian Anda</h1>
                    <p class="text-white text-lg mb-6">Rumah, apartemen, dan properti komersial terbaik di seluruh
                        Indonesia</p>

                    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 grid gap-4">
                        <!-- Filter Fields -->
                        <form id="filterForm">
                            <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4">
                                <input type="text" name="keyword" id="keyword" placeholder="Lokasi, nama kontrakan..."
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm">
                                <select name="kamar_tidur" id="kamar_tidur" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm">
                                    <option value="">Kamar Tidur</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4+">4+</option>
                                </select>
                                <select name="kamar_mandi" id="kamar_mandi" class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm">
                                    <option value="">Kamar Mandi</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3+">3+</option>
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
                    </div>
                    <script>
                        document.getElementById('filterForm').addEventListener('submit', function(e) {
                            e.preventDefault();
                            const keyword = document.getElementById('keyword').value;
                            const kamar_tidur = document.getElementById('kamar_tidur').value;
                            const kamar_mandi = document.getElementById('kamar_mandi').value;

                            fetch(`/filter-kontrakan?keyword=${encodeURIComponent(keyword)}&kamar_tidur=${encodeURIComponent(kamar_tidur)}&kamar_mandi=${encodeURIComponent(kamar_mandi)}`)
                                .then(response => response.json())
                                .then(data => {
                                    const container = document.querySelector('.cardColumn2 .grid');
                                    container.innerHTML = '';
                                    if (data.length === 0) {
                                        container.innerHTML = '<div class="col-span-3 text-center text-gray-500">Tidak ada kontrakan ditemukan.</div>';
                                    } else {
                                        data.forEach(kontrakan => {
                                            container.innerHTML += `
                                            <a href="/detailKontrakan/${kontrakan.id}/nonForum">
                                                <div class="bg-white rounded-lg shadow">
                                                    <img src="/storage/${kontrakan.banner}" class="w-full min-h-[40vh] max-h-[40vh] rounded-t-lg">
                                                    <div class="text p-3 md:p-5">
                                                        <div class="flex justify-between">
                                                            <h3 class="text-lg font-bold">${kontrakan.nama}</h3>
                                                            <div class="flex mt-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                                                                </svg>
                                                                <p class="text-sm font-light">Hubungi Pemilik</p>
                                                            </div>
                                                        </div>
                                                        <p class="text-gray-600 font-normal text-sm">${kontrakan.kota ?? ''}</p>
                                                        <div class="flex gap-3 mt-3">
                                                            <div class="flex gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                                                                </svg>
                                                                <p class="text-[10px] md:text-xs">${kontrakan.kamar_tidur} kamar tidur</p>
                                                            </div>
                                                            <div class="flex gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                    viewBox="0 0 24 24">
                                                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="1.5">
                                                                        <path
                                                                            d="M21 13v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-2.4a.6.6 0 0 1 .6-.6zm-5 7l1 2m-9-2l-1 2m14-9V7a4 4 0 0 0-4-4h-5" />
                                                                        <path
                                                                            d="M15.4 8H8.6c-.331 0-.596-.268-.56-.598C8.186 6.075 8.863 3 12 3s3.814 3.075 3.96 4.402c.036.33-.229.598-.56.598" />
                                                                    </g>
                                                                </svg>
                                                                <p class="text-[10px] md:text-xs">${kontrakan.kamar_mandi} kamar mandi</p>
                                                            </div>
                                                            <div class="flex gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M12 3a2 2 0 1 0 0 4a2 2 0 0 0 0-4m-2 9a2 2 0 1 1 4 0a2 2 0 0 1-4 0m0 7a2 2 0 1 1 4 0a2 2 0 0 1-4 0" />
                                                                </svg>
                                                                <p class="text-[10px] md:text-xs">lainnya</p>
                                                            </div>
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



            <div class="container mx-auto p-5 min-h-screen mt-10">
                <div class="cardColumn ">
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
                </div>

                <div class="cardColumn2 pt-8">
                    <div class=" mb-4 bg-[#003A9D] w-auto sm:w-sm rounded-lg">
                        <h2 class=" text-lg text-white font-semibold p-3">Semua Kontrakan Yang Tersedia</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <!-- Rumah Mewah -->
                        @foreach ($kontrakan as $data)
                            <a href="{{ route('detail.kontrakanNonForum', $data->id) }}">
                                <div class="bg-white rounded-lg shadow">
                                    <img src="{{ asset('storage/' . $data->banner) }}"
                                        class="w-full min-h-[40vh] max-h-[40vh] rounded-t-lg" alt="">
                                    <div class="text p-3 md:p-5">
                                        <div class="flex justify-between">
                                            <h3 class="text-lg font-bold">{{ $data->nama }}</h3>
                                            <div class="flex mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                                                </svg>
                                                <p class="text-sm font-light">Hubungi Pemilik</p>
                                            </div>
                                        </div>

                                        <p class="text-gray-600 font-normal text-sm">Bandung, Jawa Barat</p>

                                        <div class="flex gap-3 mt-3">
                                            <div class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                                                </svg>
                                                <p class="text-[10px] md:text-xs">{{ $data->kamar_tidur }} kamar tidur
                                                </p>
                                            </div>

                                            <div class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5">
                                                        <path
                                                            d="M21 13v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-2.4a.6.6 0 0 1 .6-.6zm-5 7l1 2m-9-2l-1 2m14-9V7a4 4 0 0 0-4-4h-5" />
                                                        <path
                                                            d="M15.4 8H8.6c-.331 0-.596-.268-.56-.598C8.186 6.075 8.863 3 12 3s3.814 3.075 3.96 4.402c.036.33-.229.598-.56.598" />
                                                    </g>
                                                </svg>
                                                <p class="text-[10px] md:text-xs">{{ $data->kamar_mandi }} kamar mandi
                                                </p>
                                            </div>

                                            <div class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 3a2 2 0 1 0 0 4a2 2 0 0 0 0-4m-2 9a2 2 0 1 1 4 0a2 2 0 0 1-4 0m0 7a2 2 0 1 1 4 0a2 2 0 0 1-4 0" />
                                                </svg>
                                                <p class="text-[10px] md:text-xs">lainnya</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- <div id="test" class="a"> --}}

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
                    fetch('/rekomendasi-lokasi?latitude=' + latitude + '&longitude=' + longitude + '&radius=' + radius)
                        .then(response => response.json())
                        .then(data => {
                            const container = document.getElementById('Rekomendasi');
                            container.innerHTML = '';

                            document.getElementById('loading').style.display = 'none';

                            data.forEach(kontrakan => {
                                console.log(kontrakan);
                                const html = `
                    <a href="/detailKontrakan/${kontrakan.id}/nonForum">
                        <div class="bg-white rounded-lg shadow">
                        <img src="/storage/${kontrakan.banner}" class="w-full min-h-[40vh] max-h-[40vh] rounded-t-lg">
                        <div class="text p-3 md:p-5">
                            <div class="flex justify-between">
                            <h3 class="text-lg font-bold">${kontrakan.nama}</h3>
                            <div class="flex mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                                </svg>
                                <p class="text-sm font-light">Hubungi Pemilik</p>
                            </div>
                            </div>

                            <p class="text-gray-600 font-normal text-sm">${kontrakan.kota}</p>

                            <div class="flex gap-3 mt-3">
                            <div class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                                </svg>
                                <p class="text-[10px] md:text-xs">${kontrakan.kamar_tidur} kamar tidur</p>
                            </div>

                            <div class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5">
                                    <path
                                    d="M21 13v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-2.4a.6.6 0 0 1 .6-.6zm-5 7l1 2m-9-2l-1 2m14-9V7a4 4 0 0 0-4-4h-5" />
                                    <path
                                    d="M15.4 8H8.6c-.331 0-.596-.268-.56-.598C8.186 6.075 8.863 3 12 3s3.814 3.075 3.96 4.402c.036.33-.229.598-.56.598" />
                                </g>
                                </svg>
                                <p class="text-[10px] md:text-xs">${kontrakan.kamar_mandi} kamar mandi</p>
                            </div>

                            <div class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 3a2 2 0 1 0 0 4a2 2 0 0 0 0-4m-2 9a2 2 0 1 1 4 0a2 2 0 0 1-4 0m0 7a2 2 0 1 1 4 0a2 2 0 0 1-4 0" />
                                </svg>
                                <p class="text-[10px] md:text-xs">lainnya</p>
                            </div>
                            </div>

                        </div>
                        </div>
                    </a>`;
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



    </x-slot:content>
</x-template>
