<x-template>
    <x-slot:title>
        Detail Forum
    </x-slot:title>
    <x-slot:content>
        {{-- <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
            <div class="flex gap-4 mb-6">
                <h2 class="text-2xl font-bold mb-4">Group: {{ $group->nama_group }}</h2>
                <p class="text-gray-700 mb-4">Deskripsi: {{ $group->deskripsi }}</p>
                <p class="text-gray-700 mb-4">Jumlah Anggota: {{ $group->users->count() }} / {{ $group->jumlah_anggota }}
                </p>
            </div> --}}


        {{-- <a href="/groups/{{ $group->id }}/add-user" class="inline-block mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Tambah Anggota
            </a> --}}

        {{-- <ul id="messages" class="space-y-2 mb-6">
                @foreach ($messages as $message)
                    <li class="p-3 bg-gray-100 rounded shadow">
                        <strong class="text-blue-600">{{ $message->user->username }}:</strong> {{ $message->message }}
                    </li>
                @endforeach
            </ul> --}}

        {{-- <form method="POST" action="/forums/{{ $group->id }}/messages" class="flex items-center space-x-2">
                @csrf
                <input type="text" name="message" placeholder="Ketik pesan..." required
                    class="flex-1 px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                    Kirim
                </button>
            </form>
        </div> --}}





        <div id="groupChatPanel"
            class="fixed top-0 right-0 h-full w-full md:w-[400px] bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
            <div class="p-6 bg-[#003A9D] text-white flex justify-between items-center">
                <h2 class="text-lg font-bold">Grup Diskusi</h2>
                <button id="closeGroupBtn" class="text-white text-2xl hover:cursor-pointer">&times;</button>
            </div>

            <div class="p-6">
                {{-- Header Grup --}}
                <div class="mb-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div
                            class="bg-blue-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M9 20H4v-2a3 3 0 015.356-1.857M15 11a4 4 0 11-8 0 4 4 0 018 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-extrabold text-blue-700">Group: {{ $group->nama_group }}</h2>
                            <p class="text-gray-700 italic">"{{ $group->deskripsi }}"</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M9 20H4v-2a3 3 0 015.356-1.857M15 11a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span><strong>Jumlah Anggota:</strong> {{ $groupUser->where('status', 'diterima')->count() }} /
                            {{ $group->jumlah_anggota }}</span>
                    </div>
                </div>

                {{-- Daftar Pesan --}}
                <div id="messages"
                    class="space-y-3 mb-6 max-h-90 overflow-y-auto px-2 py-3 bg-gray-50 rounded border border-gray-200">
                    @forelse ($messages as $message)
                        <div class="flex items-start gap-2">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-8 h-8 bg-blue-500 text-white flex items-center justify-center rounded-full text-sm font-bold">
                                    {{ strtoupper(substr($message->user->username, 0, 1)) }}
                                </div>
                            </div>
                            <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm w-full">
                                <div class="text-sm font-semibold text-blue-600">{{ $message->user->username }}</div>
                                <p class="text-gray-800 text-sm mt-1">{{ $message->message }}</p>
                            </div>
                        </div>

                    @empty
                        <p class="text-gray-500 text-sm text-center">Belum ada pesan.</p>
                        <div class="permintaan space-y-3 mt-4">
                            {{-- @foreach ($groupUser as $data)
                                @if ($data->status == 'pending')
                                    <div
                                        class="flex items-center justify-between bg-yellow-50 border border-yellow-200 rounded-lg p-4 shadow">
                                        <div>
                                            <span
                                                class="font-semibold text-yellow-800">{{ $data->user->username }}</span>
                                            <span class="text-gray-700">menunggu acc dari admin group</span>
                                        </div>
                                        <div class="flex gap-2">
                                            @if ($groupCheck->role == 'admin')
                                                <form method="POST" action="{{ route('terimaUser', $data->user_id) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition">Terima</button>
                                                </form>
                                                <form method="POST" action="">
                                                    @csrf
                                                    <button type="submit"
                                                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">Tolak</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach --}}
                        </div>
                    @endforelse
                    @foreach ($groupUser as $data)
                        @if ($data->status == 'pending')
                            <div
                                class="flex items-center justify-between bg-yellow-50 border border-yellow-200 rounded-lg p-4 shadow">
                                <div>
                                    <span class="font-semibold text-yellow-800">{{ $data->user->username }}</span>
                                    <span class="text-gray-700">menunggu acc dari admin group</span>
                                </div>
                                <div class="flex gap-2">
                                    @if ($groupCheck->role == 'admin')
                                        <form method="POST" action="{{ route('terimaUser', $data->user_id) }}">
                                            @csrf
                                            <button type="submit"
                                                class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition">Terima</button>
                                        </form>
                                        <form method="POST" action="">
                                            @csrf
                                            <button type="submit"
                                                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">Tolak</button>
                                        </form>
                                    @endif

                                </div>
                            </div>
                        @endif
                    @endforeach
                    {{-- @foreach ($group as $data)
                            @if ($data->status == 'pending')
                                <h1>Menunggu acc admin</h1>
                            @endif
                        @endforeach --}}
                </div>

                {{-- Form Kirim Pesan --}}
                <form method="POST" action="/forums/{{ $group->id }}/messages" class="flex items-center gap-2">
                    @csrf
                    <input type="text" name="message" placeholder="Ketik pesan..." required
                        class="flex-1 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent shadow-sm">
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 shadow hover:cursor-pointer">
                        Kirim
                    </button>
                </form>
            </div>
        </div>



        <div class="headerContent  bg-[#003A9D] min-h-[20vh] flex items-center justify-between px-4 md:px-10">
            <!-- Judul -->
            @if (optional($booking)->count() == 0)
                <h1 class="text-white text-2xl md:text-3xl font-bold">
                    Temukan kontrakan yang cocok dengan forum anda!
                </h1>
            @else
                <h1 class="text-white text-2xl md:text-3xl font-bold">
                    Forum Anda Telah Memilih Kontrakan!
                </h1>
            @endif
        </div>

        <div class="scroll-toggle-btn fixed bottom-7 right-7 hover:cursor-pointer">
            <svg id="openGroupBtn" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                <path fill="#0fdb00" fill-rule="evenodd"
                    d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16s-7.163 16-16 16m.28-8.675c1.028.711 2.332 1.134 3.744 1.134q.527 0 1.039-.077c.117.048.23.107.369.187q.45.264 1.2.81c.409.299.988.01.988-.493v-1.461q.315-.204.595-.442C25.345 22.025 26 20.715 26 19.31c0-.925-.28-1.79-.772-2.537a8 8 0 0 1-.627 1.53q.157.485.159 1.007c0 1.034-.488 2.01-1.352 2.742a4.7 4.7 0 0 1-.717.499a.61.61 0 0 0-.311.531v.624c-.593-.38-1-.559-1.31-.559a1 1 0 0 0-.104.009a5.7 5.7 0 0 1-2.602-.17a11.5 11.5 0 0 1-2.083.34zm-7.466-2.922a9 9 0 0 0 1.044.765v2.492c0 .63.725.99 1.236.616c1.41-1.03 2.39-1.612 2.635-1.67q.85.135 1.728.135c5.2 0 9.458-3.607 9.458-8.12c0-4.514-4.259-8.121-9.458-8.121S6 10.107 6 14.62c0 2.21 1.03 4.271 2.814 5.783m4.949.666c-.503 0-1.238.355-2.354 1.104v-1.437a.77.77 0 0 0-.39-.664a8 8 0 0 1-1.196-.833C8.37 18.01 7.55 16.366 7.55 14.62c0-3.61 3.516-6.588 7.907-6.588c4.392 0 7.907 2.978 7.907 6.588s-3.515 6.589-7.907 6.589q-.796 0-1.564-.13a1 1 0 0 0-.13-.01m-2.337-4.916c.685 0 1.24-.55 1.24-1.226c0-.677-.555-1.226-1.24-1.226s-1.24.549-1.24 1.226s.555 1.226 1.24 1.226m4.031 0c.685 0 1.24-.55 1.24-1.226c0-.677-.555-1.226-1.24-1.226s-1.24.549-1.24 1.226s.555 1.226 1.24 1.226m4.031 0c.685 0 1.24-.55 1.24-1.226c0-.677-.555-1.226-1.24-1.226s-1.24.549-1.24 1.226s.555 1.226 1.24 1.226" />
                <style>
                    #openGroupBtn:hover path {
                        fill: #23af19;
                    }
                </style>
            </svg>
        </div>

        @if (optional($booking)->count() == 0)
            <div class="container mx-auto p-5">
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
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <div class="Rekomendasi" id="Rekomendasi"></div>
                    </div>
                </div>

                <div class="cardColumn2 pt-8">
                    <div class=" mb-4 bg-[#003A9D] w-auto sm:w-sm rounded-lg">
                        <h2 class=" text-lg text-white font-semibold p-3">Semua Kontrakan Yang Tersedia</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <!-- Rumah Mewah -->
                        @foreach ($kontrakan as $data)
                            <a href="{{ route('detail.kontrakanForum', $data->id) }}">
                                <div class="bg-white rounded-lg shadow">
                                    <img src="{{ asset('storage/' . $data->banner) }}" class="w-full rounded-t-lg"
                                        alt="">
                                    <div class="text p-3 md:p-5">
                                        <div class="flex justify-between">
                                            <h3 class="text-lg font-bold">{{ $data->nama }}</h3>
                                            <div class="flex mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                                                </svg>
                                                <p class="text-sm font-light">{{ $data->harga }}</p>
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
            <div class="container mx-auto p-5">
                <div class="cardColumn2 pt-8">
                    <div class=" mb-4 bg-[#003A9D] w-auto sm:w-sm rounded-lg">
                        {{-- <h2 class=" text-lg text-white font-semibold p-3">Rekomendasi Kontrakan berdasarkan lokasi</h2> --}}
                    </div>

                </div>
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
                                    // console.log(kontrakan);
                                    const html = `
                    <a href="/detailKontrakan/${kontrakan.id}/forum" class="flex flex-col">
                        <div class="bg-white rounded-lg shadow">
                        <img src="/storage/${kontrakan.banner}" class="w-full rounded-t-lg"
                            alt="">
                        <div class="text p-3 md:p-5">
                            <div class="flex justify-between">
                            <h3 class="text-lg font-bold">${kontrakan.nama}</h3>
                            <div class="flex mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                                </svg>
                                <p class="text-sm font-light">${kontrakan.harga}</p>
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
        @else
            <div class="container mx-auto p-5">
                <div class="cardColumn ">
                    <div class=" mb-4 bg-[#003A9D] text-white w-auto sm:w-sm rounded-lg flex">
                        <h2 class=" text-lg text-white font-semibold p-3">Kontrakan yang dipilih Forum anda</h2>
                    </div>
                    {{-- <div id="data" class="text-center text-gray-500 my-4 sm:text-left lg:text-left hidden"></div> --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <a href="{{ route('detail.kontrakanForum', $booking->kontrakan->id) }}">
                            <div class="bg-white rounded-lg shadow">
                                <img src="{{ asset('storage/' . $booking->kontrakan->banner) }}"
                                    class="w-full rounded-t-lg" alt="">
                                <div class="text p-3 md:p-5">
                                    <div class="flex justify-between">
                                        <h3 class="text-lg font-bold">{{ $booking->kontrakan->nama }}</h3>
                                        <div class="flex mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                                            </svg>
                                            <p class="text-sm font-light">
                                                Rp{{ number_format($booking->kontrakan->harga, 0, ',', '.') }}</p>
                                        </div>
                                    </div>

                                    <p class="text-gray-600 font-normal text-sm">
                                        {{ ucfirst(strtolower($booking->kontrakan->kota)) }},
                                        {{ ucfirst(strtolower($booking->kontrakan->provinsi)) }}
                                    </p>

                                    <div class="flex gap-3 mt-3">
                                        <div class="flex gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                                            </svg>
                                            <p class="text-[10px] md:text-xs">{{ $booking->kontrakan->kamar_tidur }}
                                                kamar tidur
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
                                            <p class="text-[10px] md:text-xs">{{ $booking->kontrakan->kamar_mandi }}
                                                kamar mandi
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
                        @if (isset($booking) && $booking->status == 'pending')
                            <div class="bg-yellow-100 rounded-lg p-4 mt-4 text-center">
                                <p class="text-yellow-800 font-semibold">Anda telah memilih kontrakan {{ $booking->kontrakan->nama }}, tunggu
                                    konfirmasi dari pemilik kontrakan untuk melanjukan pembayaran.</p>
                            </div>
                        @else
                            @if (isset($transaksiDp))
                                @php
                                    $status = $transaksiDp->status;
                                    $statusPelunasan = $tranasksiPelunasan->status;
                                @endphp

                                {{-- Form Pembayaran --}}
                                @if ($transaksiDp->status == 'pending' || $transaksiPelunasan->status == 'pending')
                                    <div
                                        class="max-w-xl mx-auto w-full p-6 bg-white rounded-2xl shadow-md inset-shadow-xs space-y-6">
                                        <h2 class="text-2xl font-bold text-gray-800">
                                            {{ $status === 'pending' ? 'Pembayaran Dp Kontrakan' : 'Pelunasan Pembayaran Kontrakan' }}
                                        </h2>
                                        <!-- Info Kontrakan -->
                                        <div class="border rounded-xl p-4 bg-gray-50">
                                            <p class="text-sm text-gray-600">Nama Kontrakan:</p>
                                            <p class="text-lg font-semibold text-gray-800">
                                                {{ $booking->kontrakan->nama }}
                                            </p>
                                            <p class="text-sm text-gray-600 mt-2">Alamat:
                                                {{ ucfirst(strtolower($booking->kontrakan->kota)) }},
                                                {{ ucfirst(strtolower($booking->kontrakan->provinsi)) }}</p>
                                        </div>
                                        <!-- Ringkasan Pembayaran -->
                                        <div class="border rounded-xl p-4 bg-gray-50 space-y-2">
                                            @if ($booking->lama_mengontrak == 6)
                                                <div class="flex justify-between">
                                                    <span>Sewa per 6 Bulan</span>
                                                    <span>Rp{{ number_format($booking->kontrakan->dp_harga / 2, 0, ',', '.') }}</span>
                                                </div>
                                            @else
                                                <div class="flex justify-between">
                                                    <span>Sewa per 1 Tahun</span>
                                                    <span>Rp{{ number_format($booking->kontrakan->dp_harga / $groupUser->count(), 0, ',', '.') }}</span>
                                                </div>
                                            @endif
                                            <hr />
                                            @if ($booking->lama_mengontrak == 6 && $groupCheck->status === 'pending')
                                                <div class="flex justify-between font-bold">
                                                    <span>Total</span>
                                                    <span>Rp{{ number_format($booking->kontrakan->dp_harga / 2 / $groupUser->count(), 0, ',', '.') }}</span>
                                                </div>
                                            @endif
                                        </div>
                                        <!-- Opsi Pembayaran (Full / DP) -->
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis
                                                Pembayaran</label>
                                            <select
                                                class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                <option>{{ $status === 'pending' ? 'DP' : 'Bayar Penuh' }}</option>
                                            </select>
                                        </div>
                                        <!-- Metode Pembayaran -->
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Metode
                                                Pembayaran</label>
                                            <select id="metodePembayaranSelect"
                                                class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                                <option value="tf">Transfer Bank</option>
                                                <option value="qris">QRIS</option>
                                            </select>
                                        </div>
                                        <div class="metodePembayaran mt-2">
                                            <div class="qris hidden" id="gambarQris"></div>
                                            <div class="noRek hidden" id="noRek"></div>
                                        </div>
                                        <!-- Form Upload Bukti Transfer -->
                                        <form method="POST" action="{{ route('transkasi.pelunasan') }}"
                                            enctype="multipart/form-data" class="space-y-4 mt-4">
                                            @csrf
                                            <input type="text" name="booking_id" value="{{ $booking->id }}"
                                                hidden>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Upload Bukti
                                                Transfer</label>
                                            <input type="file" name="bukti_transfer" accept=".jpg,.jpeg,.png,.pdf"
                                                class="block w-full text-sm text-gray-600
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-indigo-50 file:text-indigo-700
                                        hover:file:bg-indigo-100
                                    "
                                                required />
                                            <p class="text-xs text-gray-500 mt-1">Format yang diperbolehkan: JPG, PNG,
                                                PDF.
                                                Max 2MB.</p>
                                            @error('bukti_transfer')
                                                <span class="text-xs text-red-500">{{ $message }}</span>
                                            @enderror
                                            <button type="submit"
                                                class="w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-4 rounded-xl transition">
                                                Kirim Pembayaran
                                            </button>
                                        </form>
                                    </div>
                                @endif


                                {{-- Detail Pembayaran --}}
                                <div class="p-6 w-full bg-white rounded-2xl shadow-md space-y-6">
                                    <h2 class="text-2xl font-bold text-gray-800">Detail Pembayaran</h2>
                                    @php
                                        $detailStatus = [
                                            'pending' => 'bg-red-100',
                                            'menunggu' => 'bg-yellow-100',
                                            'lunas' => 'bg-green-100',
                                        ];
                                    @endphp
                                    <div
                                        class="border rounded-xl p-4 bg-gray-50 space-y-2 {{ $detailStatus[$status] ?? 'bg-gray-100' }}">
                                        <p class="flex justify-center text-xl font-bold">
                                            Pembayaran Dp
                                        </p>
                                        <div class="flex justify-between">
                                            <span>Sewa per bulan</span>
                                            <span>Rp1.000.000</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span>Biaya admin</span>
                                            <span>Rp25.000</span>
                                        </div>
                                        <hr />
                                        <div class="flex justify-between font-bold">
                                            <span>Total</span>
                                            <span>Rp1.025.000</span>
                                        </div>
                                    </div>
                                    @if ($status !== 'pending')
                                        <div
                                            class="border rounded-xl p-4 bg-gray-50 space-y-2 {{ $detailStatus[$statusPelunasan] ?? 'bg-gray-100' }}">
                                            <p class="flex justify-center text-xl font-bold">
                                                Pembayaran Dp
                                            </p>
                                            <div class="flex justify-between">
                                                <span>Sewa per bulan</span>
                                                <span>Rp1.000.000</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Biaya admin</span>
                                                <span>Rp25.000</span>
                                            </div>
                                            <hr />
                                            <div class="flex justify-between font-bold">
                                                <span>Total</span>
                                                <span>Rp1.025.000</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div
                                    class="max-w-xl mx-auto w-full p-6 bg-white rounded-2xl shadow-md inset-shadow-xs space-y-6">
                                    <h2 class="text-2xl font-bold text-gray-800">
                                        Pembayaran Dp Kontrakan
                                    </h2>
                                    <!-- Info Kontrakan -->
                                    <div class="border rounded-xl p-4 bg-gray-50">
                                        <p class="text-sm text-gray-600">Nama Kontrakan:</p>
                                        <p class="text-lg font-semibold text-gray-800">{{ $booking->kontrakan->nama }}
                                        </p>
                                        <p class="text-sm text-gray-600 mt-2">Alamat:
                                            {{ ucfirst(strtolower($booking->kontrakan->kota)) }},
                                            {{ ucfirst(strtolower($booking->kontrakan->provinsi)) }}</p>
                                    </div>
                                    <!-- Ringkasan Pembayaran -->
                                    <div class="border rounded-xl p-4 bg-gray-50 space-y-2">
                                        @if ($booking->lama_mengontrak == 6)
                                            <div class="flex justify-between">
                                                <span>Sewa per 6 Bulan</span>
                                                <span>Rp{{ number_format($booking->kontrakan->dp_harga / 2, 0, ',', '.') }}</span>
                                            </div>
                                        @else
                                            <div class="flex justify-between">
                                                <span>Sewa per 1 Tahun</span>
                                                <span>Rp{{ number_format($booking->kontrakan->dp_harga / $groupUser->count(), 0, ',', '.') }}</span>
                                            </div>
                                        @endif
                                        <hr />
                                        @if ($booking->lama_mengontrak == 6 && $groupCheck->status === 'pending')
                                            <div class="flex justify-between font-bold">
                                                <span>Total</span>
                                                <span>Rp{{ number_format($booking->kontrakan->dp_harga / 2 / $groupUser->count(), 0, ',', '.') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- Opsi Pembayaran (Full / DP) -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Jenis
                                            Pembayaran</label>
                                        <select
                                            class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            <option>DP</option>
                                        </select>
                                    </div>
                                    <!-- Metode Pembayaran -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Metode
                                            Pembayaran</label>
                                        <select id="metodePembayaranSelect"
                                            class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            <option value="tf">Transfer Bank</option>
                                            <option value="qris">QRIS</option>
                                        </select>
                                    </div>
                                    <div class="metodePembayaran mt-2">
                                        <div class="qris hidden" id="gambarQris"></div>
                                        <div class="noRek hidden" id="noRek"></div>
                                    </div>
                                    <!-- Form Upload Bukti Transfer -->
                                    <form method="POST" action="{{ route('transkasi.dp') }}"
                                        enctype="multipart/form-data" class="space-y-4 mt-4">
                                        @csrf
                                        <input type="text" name="booking_id" value="{{ $booking->id }}" hidden>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Upload Bukti
                                            Transfer</label>
                                        <input type="file" name="bukti_transfer" accept=".jpg,.jpeg,.png,.pdf"
                                            class="block w-full text-sm text-gray-600
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-indigo-50 file:text-indigo-700
                                        hover:file:bg-indigo-100
                                    "
                                            required />
                                        <p class="text-xs text-gray-500 mt-1">Format yang diperbolehkan: JPG, PNG, PDF.
                                            Max
                                            2MB.</p>
                                        @error('bukti_transfer')
                                            <span class="text-xs text-red-500">{{ $message }}</span>
                                        @enderror
                                        <button type="submit"
                                            class="w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-4 rounded-xl transition">
                                            Kirim Pembayaran
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endif

                    </div>
                </div>
            </div>
            </div>
        @endif


        {{-- <script>
    Pusher.logToConsole = true;

    const echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ config('broadcasting.connections.pusher.key') }}',
        cluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}',
        forceTLS: true
    });


    echo.channel('group.{{ $group->id }}')
    .listen('MessageSent', (event) => {
        if (event.user.id === {{ auth()->id() }}) return;

        const messagesList = document.getElementById('messages');
        const newMessage = document.createElement('li');
        newMessage.innerHTML = `<strong>${event.user.name}:</strong> ${event.message}`;
        messagesList.appendChild(newMessage);
    });

</script> --}}
        <script>
            const chatBox = document.getElementById('messages');
            chatBox.scrollTop = chatBox.scrollHeight;
        </script>

        <script>
            const openBtn = document.getElementById('openGroupBtn');
            const closeBtn = document.getElementById('closeGroupBtn');
            const panel = document.getElementById('groupChatPanel');

            openBtn.addEventListener('click', () => {
                panel.classList.remove('translate-x-full');
            });

            closeBtn.addEventListener('click', () => {
                panel.classList.add('translate-x-full');
            });
        </script>



        {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.iife.js"></script> --}}
        <script src="{{ asset('build/assets/app-C3ibBmR9.js') }}"></script>
        <script>
            window.Echo.channel('group.{{ $group->id }}')
                .listen('MessageSent', (event) => {
                    if (event.user.id === {{ auth()->id() }}) return;

                    const messagesList = document.getElementById('messages');
                    const newMessage = document.createElement('li');
                    newMessage.innerHTML = `<strong>${event.user.username}:</strong> ${event.message}`;
                    newMessage.classList.add('p-3', 'bg-gray-100', 'rounded', 'shadow');
                    messagesList.appendChild(newMessage);
                });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const metodeSelect = document.getElementById('metodePembayaranSelect');
                const gambarQris = document.getElementById('gambarQris');
                const noRek = document.getElementById('noRek');

                function updateMetode() {
                    if (metodeSelect.value === 'qris') {
                        gambarQris.classList.remove('hidden');
                        gambarQris.innerHTML =
                            `<img src="{{ asset('images/qris.jpg') }}" alt="QRIS" class="max-w-xs mx-auto">`;
                        noRek.classList.add('hidden');
                        noRek.innerHTML = '';
                    } else {
                        gambarQris.classList.add('hidden');
                        gambarQris.innerHTML = '';
                        noRek.classList.remove('hidden');
                        noRek.innerHTML = `
                                                <div class="flex items-center gap-2">
                                                    <p class="text-sm text-gray-700">No. Rekening: <span class="font-semibold" id="noRekText">1234567890 (Bank ABC)</span></p>
                                                    <button type="button" onclick="copyRekening()" class="px-2 py-1 bg-blue-500 text-white rounded text-xs hover:bg-blue-600">Salin</button>
                                                </div>

                                            `;
                    }
                }

                metodeSelect.addEventListener('change', updateMetode);
                updateMetode();
            });
        </script>
        <script>
            function copyRekening() {
                const text = document.getElementById('noRekText').innerText.split(' ')[0];
                navigator.clipboard.writeText(text).then(function() {
                    alert('Nomor rekening berhasil disalin!');
                });
            }
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
