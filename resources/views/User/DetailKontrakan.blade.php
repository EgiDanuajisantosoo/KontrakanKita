<x-template>
    <x-slot:title>Detail Kontrakan</x-slot:title>

    <x-slot:content>
        <div id="FormBookingForum"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50 hidden">
            <div class="bg-white rounded-xl shadow-2xl p-6 w-full max-w-md mx-4 sm:mx-0 relative flex flex-col justify-center items-center">
                <button type="button" onclick="document.getElementById('FormBookingForum').style.display='none'"
                    class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-2xl font-bold focus:outline-none">&times;</button>
                <form action="{{ route('booking.kontrakanForum', ['id' => $detailKontrakan->id]) }}" method="post"
                    class="space-y-5 w-full">
                    @csrf
                    <h3 class="text-xl font-semibold mb-2 text-center text-gray-800">Booking Kontrakan</h3>
                    <div>
                        <label class="block text-gray-700 mb-1 font-medium" for="tanggal_booking">Tanggal
                            Check-In</label>
                        <input type="date" name="tanggal_checkin" id="tanggal_booking"
                            class="border border-gray-300 rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1 font-medium" for="lama_mengontrak">Lama
                            Mengontrak</label>
                        <select name="lama_mengontrak" id="lama_mengontrak"
                            class="border border-gray-300 rounded-lg p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                            required>
                            <option value="6">6 Bulan</option>
                            <option value="12">1 Tahun</option>
                        </select>
                    </div>
                    <div class="flex justify-end gap-3 pt-2">
                        <button type="button"
                            onclick="document.getElementById('FormBookingForum').style.display='none'"
                            class="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition">Batal</button>
                        <button type="submit"
                            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">Booking</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-gray-100 flex justify-center p-6">
            <div class="bg-white rounded-lg shadow-lg max-w-4xl w-full p-6">
                <!-- Gambar Utama & Galeri -->
                <div class="flex flex-col md:flex-row justify-between gap-6">
                    <!-- Gambar Utama & Galeri -->
                    <div class="w-full md:w-[70%]">
                        @foreach ($galleryKontrakan as $no => $gallery)
                            @if ($no == 0)
                                <div>
                                    <img src="{{ asset('storage/' . $gallery->foto_kontrakan) }}" alt="Kontrakan"
                                        class="rounded-lg w-full h-64 object-cover">
                                </div>

                                <!-- Galeri Kecil -->
                                <div class="mt-4 flex gap-2 overflow-auto justify-center">
                                @else
                                    <img src="{{ asset('storage/' . $gallery->foto_kontrakan) }}" alt="Gallery"
                                        class="rounded-lg w-[25%] h-25 object-cover">
                            @endif
                            <!-- Gambar Utama -->
                        @endforeach
                    </div>
                </div>

                <!-- Detail Fasilitas & Harga -->
                <div class="w-full md:w-[25%]">
                    <div class="border p-4 rounded-lg">
                        <h3 class="font-semibold text-gray-800">Fasilitas</h3>
                        <ul class="text-gray-600 text-sm mt-2 space-y-1">
                            @foreach ($detailKontrakan->fasilitas as $fasilitas)
                                <li>• {{ $fasilitas->nama_fasilitas }}</li>
                            @endforeach

                            {{-- <li>• 8 Kamar</li>
                                <li>• 2 Kamar Mandi</li>
                                <li>• Sauna</li>
                                <li>• Halaman Belakang</li>
                                <li>• WIFI</li>
                                <li>• Dapur Lengkap</li>
                                <li>• Kolam Renang</li> --}}

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Informasi Properti & Tombol Booking -->
            <div class="flex flex-col md:flex-row justify-between gap-6 mt-6">
                <!-- Informasi Properti -->
                <div class="w-full md:w-[70%]">
                    <h2 class="text-xl font-bold">{{ $detailKontrakan->nama }}</h2>
                    <p class="text-gray-600 mt-2 text-sm">
                        {{ $detailKontrakan->deskripsi }}
                    </p>
                </div>

                <!-- Tombol Booking -->
                <div class="w-full md:w-[25%]">
                    <div class="grid grid-cols-1 gap-4">
                        @if (!Auth::check())
                            <button type="submit"
                                class="bg-blue-600 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                                📅 Booking
                            </button>
                            <button
                                class="bg-green-500 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                                ✅ Whatsapp
                            </button>
                        @else
                            @if ($type == 'forum')
                                <!-- Popup Booking Form -->

                                <button
                                    class="bg-blue-600 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2"
                                    onclick="BookingForum()">
                                    📅 Booking
                                </button>
                                <script>
                                    function BookingForum() {
                                        document.getElementById('FormBookingForum').style.display = 'block';

                                    }
                                </script>
                                <button
                                    class="bg-green-500 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                                    ✅ Whatsapp
                                </button>
                            @elseif ($type == 'nonForum')
                                <form action="{{ route('booking.kontrakanNonForum', ['id' => $detailKontrakan->id]) }}"
                                    class="bg-blue-600 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2"
                                    method="post">
                                    @csrf
                                    <button type="submit">
                                        📅 Booking
                                    </button>
                                </form>
                                <button
                                    class="bg-green-500 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                                    ✅ Whatsapp
                                </button>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </x-slot:content>
</x-template>
