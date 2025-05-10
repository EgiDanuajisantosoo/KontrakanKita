<x-template>
    <x-slot:title>Detail Kontrakan</x-slot:title>

    <x-slot:content>
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
                        @if ($type == 'forum')
                            <a href=""
                                class="bg-blue-600 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                                📅 Booking
                            </a>
                        @elseif ($type == 'nonForum')
                            <a href=""
                                class="bg-blue-600 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                                📅 Booking
                        </a>
                        @endif

                        <button
                            class="bg-green-500 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                            ✅ Whatsapp
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </x-slot:content>
</x-template>
