<x-template>
    <x-slot:title>Detail Kontrakan</x-slot:title>

    <x-slot:content>
        <div class="py-6 px-4 md:px-6">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Kolom Kiri: Gambar dan Info Properti -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Gambar Utama -->
                    <div class="relative w-full">
                        <img src="{{ asset('storage/' . $detailKontrakan->banner) }}" alt="Rumah Mewah"
                            class="rounded-xl w-full h-64 sm:h-80 md:h-[450px] object-cover">
                    </div>

                    <!-- Galeri Gambar -->
                    <div class="flex space-x-3 overflow-x-auto pb-2 scrollbar-thin scrollbar-thumb-gray-400">
                        @foreach ($galleryKontrakan as $i => $data)
                            <img src="{{ asset('storage/' . $data->foto_kontrakan) }}"
                                class="h-24 w-32 object-cover rounded-lg border-2 {{ $i == 0 ? 'border-blue-500' : 'border-transparent' }}" />
                        @endforeach
                        {{-- @for ($i = 0; $i < 5; $i++)
                            <img src="https://asset.morefurniture.id/NEWS/Inspirasi-Gambar-Rumah-Mewah-Kaya-Melintir-Fasilitas-Maksimal.webp"
                                class="h-24 w-32 object-cover rounded-lg border-2 {{ $i === 0 ? 'border-blue-500' : 'border-transparent' }}" />
                        @endfor --}}
                    </div>

                    <!-- Info Properti -->
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">{{ $detailKontrakan->nama }}</h1>
                        <p class="text-gray-600 mt-2 flex items-start gap-2 text-sm md:text-base">
                            <svg class="w-5 h-5 mt-0.5 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zM7 9c0-2.8 2.2-5 5-5s5 2.2 5 5c0 2.7-2.7 7.2-5 10.2C9.7 16.2 7 11.7 7 9z" />
                                <circle cx="12" cy="9" r="2.5" />
                            </svg>
                            {{ ucfirst(strtolower($detailKontrakan->provinsi)) }},
                            {{ ucfirst(strtolower($detailKontrakan->kota)) }},
                            {{ ucfirst(strtolower($detailKontrakan->kecamatan)) }},
                            {{ ucfirst(strtolower($detailKontrakan->kelurahan)) }}
                        </p>
                        <p class="text-blue-600 text-xl md:text-2xl font-semibold mt-3">
                            Rp {{ number_format($detailKontrakan->harga, 0, ',', '.') }}
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: Info Agen dan Form Booking -->
                <div class="bg-white rounded-xl shadow-md space-y-4 p-6 h-fit sticky top-6 lg:top-20">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('Assets/foto profile dan gallery/Kakashi Hatake.jpeg') }}"
                            class="w-12 h-12 rounded-full object-cover" />
                        <div>
                            <h2 class="font-semibold text-base">{{ $detailKontrakan->user->username }}</h2>
                            <p class="text-sm text-gray-600">{{$detailKontrakan->user->role}}</p>
                        </div>
                    </div>
                    <div class="space-y-3 pt-2">
                        @if ($type == 'forum')
                            @if ($booking == null && $userAdmin->role == 'admin')
                            @if (Auth::check() && Auth::user()->role == 'pencari')
                                    <button onclick="openBookingModal()"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full mt-4">
                                        Booking Sekarang
                                    </button>
                                @else
                                    <button
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full mt-4">
                                        <a href="{{ route('login') }}" class="w-full text-center hover:cursor-pointer">
                                            Booking Sekarang
                                        </a>
                                    </button>
                                @endif
                            @elseif ($booking != null && $userAdmin->role == 'admin')
                                <form action="{{ route('booking.Batal', [$detailKontrakan->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded w-full mt-4">
                                        Batalkan Booking
                                    </button>
                                </form>
                            @endif
                        @elseif ($type == 'nonForum')
                            @if ($booking == null)
                                @if (Auth::check() && Auth::user()->role == 'pencari')
                                    <button onclick="openBookingModal()"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full mt-4">
                                        Booking Sekarang
                                    </button>
                                @else
                                    <button
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full mt-4">
                                        <a href="{{ route('login') }}" class="w-full text-center hover:cursor-pointer">
                                            Booking Sekarang
                                        </a>
                                    </button>
                                @endif
                            @else
                                <form action="{{ route('booking.Batal', [$detailKontrakan->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded w-full mt-4">
                                        Batalkan Booking
                                    </button>
                                </form>
                            @endif
                        @endif
                        @if (isset($detailKontrakan->user) &&
                                isset($detailKontrakan->user->profile) &&
                                !empty($detailKontrakan->user->profile->no_telepon))
                            <a
                                href="https://api.whatsapp.com/send?phone={{ $detailKontrakan->user->profile->no_telepon }}">
                                <button
                                    class="w-full bg-green-500 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-600 transition">
                                    WhatsApp</button>
                            </a>
                        @else
                            <button
                                class="w-full bg-gray-400 text-white py-2 px-4 rounded-lg font-semibold cursor-not-allowed"
                                disabled>
                                WhatsApp Tidak Tersedia
                            </button>
                        @endif
                        {{-- <button
                            class="w-full bg-green-500 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-600 transition">
                            WhatsApp</button> --}}
                    </div>
                </div>
            </div>

            <!-- Fasilitas, Deskripsi, Spesifikasi, Lokasi -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-12 max-w-7xl mx-auto">
                <div class="lg:col-span-2 space-y-8">

                    <!-- Fasilitas -->
                    <div class="bg-white p-6 rounded-xl shadow-md space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Fasilitas Utama</h3>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-gray-700 text-sm">
                                <div class="flex items-center gap-2"><i class="fas fa-bed text-blue-500"></i>
                                    {{ $detailKontrakan->kamar_mandi }} Kamar
                                    Tidur</div>
                                <div class="flex items-center gap-2"><i class="fas fa-bath text-blue-500"></i>
                                    {{ $detailKontrakan->kamar_tidur }} Kamar
                                    Mandi</div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Fasilitas Tambahan</h3>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-gray-700 text-sm">
                                @foreach ($detailKontrakan->fasilitas as $fasilitas)
                                    <div class="flex items-center gap-2"><i
                                            class="fas fa-car"></i>{{ $fasilitas->nama_fasilitas }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Deskripsi Properti</h3>
                        <div class="space-y-4 text-sm text-gray-600 leading-relaxed">
                            <p>{{ $detailKontrakan->deskripsi }}</p>
                            {{-- <p>Rumah mewah bergaya minimalis modern yang terletak di kawasan premium Kemang, Jakarta
                                Selatan. Properti ini dirancang dengan konsep terbuka yang memungkinkan cahaya alami
                                masuk ke seluruh ruangan.</p>
                            <p>Dibangun di atas lahan 500 m² dengan luas bangunan 350 m², rumah ini menawarkan 4 kamar
                                tidur luas, 3 kamar mandi mewah, ruang keluarga, dapur modern, dan kolam renang pribadi.
                            </p>
                            <p>Dilengkapi sistem smart home, keamanan 24 jam, dan garasi 2 mobil. Dekat dengan pusat
                                perbelanjaan, restoran, sekolah internasional, dan akses tol.</p>
                            <p>Cocok untuk keluarga modern yang menginginkan kenyamanan dan gaya hidup eksklusif.</p> --}}
                        </div>
                    </div>

                    <!-- Spesifikasi -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Spesifikasi Properti</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-700">
                            <div class="space-y-2">
                                <div class="grid grid-cols-2"><span class="text-gray-600">Tipe Properti</span><span
                                        class="font-semibold">{{ $detailKontrakan->tipe_properti }}</span></div>
                                <div class="grid grid-cols-2"><span class="text-gray-600">Tahun Dibangun</span><span
                                        class="font-semibold">2022</span></div>
                                <div class="grid grid-cols-2"><span class="text-gray-600">Luas Tanah</span><span
                                        class="font-semibold">500 m²</span></div>
                            </div>
                            <div class="space-y-2">
                                <div class="grid grid-cols-2"><span class="text-gray-600">Luas Bangunan</span><span
                                        class="font-semibold">350 m²</span></div>
                                <div class="grid grid-cols-2"><span class="text-gray-600">Jumlah Lantai</span><span
                                        class="font-semibold">2</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Lokasi</h3>

                        <div>
                            {{-- <h3>Peta dengan Titik Lokasi</h3> --}}
                            <div id="map" class="h-[500px] w-full"></div>
                            <input type="hidden" id="latitude" value="{{ $detailKontrakan->latitude }}">
                            <input type="hidden" id="longitude" value="{{ $detailKontrakan->longitude }}">
                        </div>
                        {{-- <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                if (typeof google !== 'undefined') {
                                    initMap();
                                }
                            });
                        </script> --}}

                        {{-- <style>
                            #map {
                                height: 500px;
                                width: 100%;
                            }
                        </style> --}}
                        </head>


                    </div>
                </div>

                <!-- Rekomendasi Rumah -->
                <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Rekomendasi Rumah Lainnya</h3>
                    <div class="space-y-4">
                        @foreach ([1, 2, 3] as $item)
                            <div class="flex gap-3">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=60"
                                    alt="Rumah Rekomendasi" class="w-20 h-20 rounded-lg object-cover">
                                <div>
                                    <h4 class="font-semibold text-sm text-gray-800">Rumah Elegan BSD</h4>
                                    <p class="text-xs text-gray-600">BSD City, Tangerang</p>
                                    <p class="text-sm font-medium text-blue-600">Rp 3.200.000.000</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Booking -->
        <div id="bookingModal" class="fixed inset-0 z-50 hidden bg-black/60">
            <div
                class="relative w-full max-w-md mx-auto bg-white rounded-lg shadow-lg p-6 mt-10 md:mt-20 overflow-y-auto max-h-screen">
                <button onclick="closeBookingModal()"
                    class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
                <h2 class="text-xl font-semibold mb-4 text-center">Form Booking Kontrakan</h2>
                <form id="bookingForm"
                    action="{{ $type == 'forum' ? route('booking.kontrakanForum', [$detailKontrakan->id]) : route('booking.kontrakanNonForum', [$detailKontrakan->id]) }}"
                    method="POST">
                    @csrf
                    <label class="block mb-2 text-sm font-medium">Tanggal Check-in</label>
                    <input type="date" name="tanggal_checkin"
                        class="w-full border border-gray-300 rounded px-3 py-2 mb-4 text-sm" required />
                    <label class="block mb-2 text-sm font-medium">Lama Mengontrak</label>
                    <select name="lama_mengontrak"
                        class="w-full border border-gray-300 rounded px-3 py-2 mb-4 text-sm" required>
                        <option value="">-- Pilih Durasi --</option>
                        <option value="6">6 Bulan</option>
                        <option value="12">1 Tahun</option>
                    </select>
                    <button type="submit" onclick="submitBookingForm()"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded w-full">Kirim
                        Booking</button>

                    <script>
                        function submitBookingForm() {
                            const form = document.getElementById('bookingForm');
                            form.submit();
                        }
                    </script>
                </form>
            </div>
        </div>


        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABlEawfROF5fVYmJd0LbO2ckv-TRO80Zw"></script>
        <script>
            function initMap() {
                var lokasi = {
                    lat: parseFloat(document.getElementById('latitude').value),
                    lng: parseFloat(document.getElementById('longitude').value)
                };

                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 12,
                    center: lokasi,
                });

                var marker = new google.maps.Marker({
                    position: lokasi,
                    map: map,
                    title: "Titik Lokasi"
                });
            }
        </script> --}}
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script>
            // Ambil nilai dari input tersembunyi
            var lat = parseFloat(document.getElementById('latitude').value);
            var lng = parseFloat(document.getElementById('longitude').value);

            // Pastikan koordinat valid, jika tidak, fallback ke Jakarta
            if (isNaN(lat) || isNaN(lng)) {
                lat = -6.200000;
                lng = 106.816666;
            }

            // Inisialisasi peta dengan zoom lebih dekat (misal: 18)
            var map = L.map('map').setView([lat, lng], 18);

            // Tambahkan layer dari OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Tambahkan marker ke lokasi
            L.marker([lat, lng]).addTo(map)
                .bindPopup('Titik lokasi kontrakan')
                .openPopup();
        </script>
        <script>
            function openBookingModal() {
                document.getElementById('bookingModal').classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeBookingModal() {
                document.getElementById('bookingModal').classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            window.addEventListener('click', function(e) {
                const modal = document.getElementById('bookingModal');
                if (e.target === modal) {
                    closeBookingModal();
                }
            });

            // document.getElementById('bookingForm').addEventListener('submit', function(e) {
            //     e.preventDefault();
            //     const checkin = this.checkin.value;
            //     const duration = this.duration.value;
            //     alert(`Booking diterima:\nTanggal Check-in: ${checkin}\nDurasi: ${duration} bulan`);
            //     closeBookingModal();
            // });
        </script>
    </x-slot:content>
</x-template>
