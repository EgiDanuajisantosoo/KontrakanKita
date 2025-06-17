<x-template>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:content>

         @if (session('success'))
        <div id="popup-success" class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 transition-all duration-300">
            <div class="bg-white rounded-lg shadow-lg px-6 py-3 border border-green-400 flex items-center space-x-3 max-w-sm w-full">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-green-700 font-semibold">Sukses:</span>
                <span class="text-gray-700">{{ session('success') }}</span>
                <button onclick="document.getElementById('popup-success').style.display='none'"
                    class="ml-auto bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs">
                    Tutup
                </button>
            </div>
        </div>
        <script>
            setTimeout(function() {
                var popup = document.getElementById('popup-success');
                if (popup) popup.style.display = 'none';
            }, 4000);
        </script>
    @endif
        <div class="content">
            <div class="headerContent bg-[#003A9D] min-h-auto text-center md:flex md:justify-between md:relative ">
                <h1 class="text-white p-8 text-3xl font-bold ">Ayo Kelola Kontrakanmu!</h1>
                {{-- <button onclick="showInsertPopup()"
                    class="text-sm md:text-base font-semibold mb-5 md:mb-0 md:absolute md:bottom-5 md:right-7
           bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:text-white hover:bg-blue-700
           transition duration-300 ease-in-out cursor-pointer">
                    Tambah Kontrakan
                </button> --}}
                <a href="/formPemilik"
                    class="text-sm md:text-base font-semibold mb-5 md:mb-0 md:absolute md:bottom-5 md:right-7
           bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:text-white hover:bg-blue-700
           transition duration-300 ease-in-out cursor-pointer">
                    Tambah Kontrakan
            </a>

            </div>
            <div class="container mx-auto p-5">
                <div class="cardColumn ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <!-- Rumah Mewah -->
                        @if ($kontrakan->count() == 0)
                            <div class="bg-white rounded-lg shadow relative pb-10 flex items-center justify-center h-40">
                                <h1 class="text-center text-gray-500 font-bold">Sedang Menunggu verifikasi dari admin KontrakanKita</h1>
                            </div>
                        @endif
                        @foreach ($kontrakan as $data)
                            <div class="bg-white rounded-lg shadow relative pb-10">
                                <a href="/detailKontrakan/{{ $data->id }}">
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
                                                <p class="text-sm font-light">Hubungi Pemilik</p>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 font-normal text-sm">
                                            {{ $data->kota }},{{ $data->provinsi }}</p>
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
                                </a>
                                <div class="flex justify-end gap-4 p-3 absolute bottom-0 right-0">
                                    <button onclick="showDeletePopup()"
                                        class="bg-red-600 text-white px-3 py-1 text-xs rounded-lg hover:bg-red-700">Hapus</button>
                                        <a href="/formPemilik/{{ $data->id }}" class="bg-green-600 text-white px-3 py-1 text-xs rounded-lg hover:bg-green-700">Edit</a>
                                    {{-- <button onclick="showEditModal()"
                                        class="bg-green-600 text-white px-3 py-1 text-xs rounded-lg hover:bg-green-700">Edit</button> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup Konfirmasi Hapus -->

        <div id="deletePopup" class="fixed inset-0 flex items-center justify-center hidden z-20 bg-black/50">
            <div class="bg-white p-5 rounded-lg shadow-lg text-center">
                <p class="text-lg">Apakah Anda yakin ingin menghapus?</p>
                <div class="mt-4 flex justify-center gap-3">
                    <button onclick="confirmDelete()"
                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Ya</button>
                    <button onclick="closeDeletePopup()"
                        class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-500">Batal</button>
                </div>
            </div>
        </div>

        <!-- Modal Edit Kontrakan -->
        <div id="editModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60">
            <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-2xl relative overflow-y-auto max-h-[90vh]">
                <!-- Header Modal -->
                <button onclick="closeEditModal()"
                    class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-2xl transition duration-200 cursor-pointer">&times;</button>
                <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Edit Kontrakan</h2>
                <hr class="mb-6 border-t border-gray-200">


                <!-- Body Modal -->
                <div class="p-6 space-y-6">
                    <form action="{{ route('kontrakan.store') }}" method="post" enctype="multipart/form-data" class="p-6 md:p-10 lg:p-12 space-y-6">
                        @csrf
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kontrakan</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama Pemilik Kontrakan"
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                        </div>
                        <div>
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Pemilik Kontrakan</label>
                            <input type="text" name="alamat" id="alamat" placeholder="Alamat Pemilik Kontrakan"
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="harga" class="block text-sm font-medium text-gray-700">Harga Kontrakan</label>
                                <input type="text" name="harga" id="harga" placeholder="Harga Kontrakan"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                            </div>
                            <div>
                                <label for="uang_dp" class="block text-sm font-medium text-gray-700">Uang Dp Kontrakan</label>
                                <input type="text" name="uang_dp" id="uang_dp" placeholder="Uang DP Kontrakan"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                            </div>
                        </div>
                        <div>
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="4"
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg px-4 text-xs py-2 mb-2 mt-2"></textarea>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="tipe_properti" class="block text-sm font-medium text-gray-700">Tipe Properti</label>
                                <input type="text" name="tipe_properti" id="tipe_properti" placeholder="Tipe Properti"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                            </div>
                            <div>
                                <label for="ukuran_properti" class="block text-sm font-medium text-gray-700">Ukuran Properti</label>
                                <input type="text" name="ukuran_properti" id="ukuran_properti" placeholder="Ukuran Properti"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="kamar_tidur" class="block text-sm font-medium text-gray-700">Kamar Tidur</label>
                                <input type="text" name="kamar_tidur" id="kamar_tidur" placeholder="Kamar Tidur"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                            </div>
                            <div>
                                <label for="kamar_mandi" class="block text-sm font-medium text-gray-700">Kamar Mandi</label>
                                <input type="text" name="kamar_mandi" id="kamar_mandi" placeholder="Kamar Mandi"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                            </div>
                        </div>
                        <div>
                            <label for="foto_kontrakan" class="block text-sm font-medium text-gray-700">Foto Kontrakan</label>
                            <input type="file" name="foto_kontrakan[]" id="foto_kontrakan" multiple
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                        </div>
                        <div>
                            <label for="foto_banner" class="block text-sm font-medium text-gray-700">Foto Banner</label>
                            <input type="file" name="foto_banner" id="foto_banner"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                                <select name="provinsi" id="Editprovinsi"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                            <div>
                                <label for="kota" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                                <select name="kota" id="Editkota"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                                <select name="kecamatan" id="Editkecamatan"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                            <div>
                                <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan/Desa</label>
                                <select name="kelurahan" id="Editkelurahan"
                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Lokasi pada Peta</label>
                            <div id="editMap" class="mt-2 h-64 w-full border border-gray-300 rounded-md"></div>
                            <div class="flex flex-col md:flex-row gap-2 mt-2">
                                <input type="text" name="latitude" id="editLatitude" placeholder="Latitude"
                                    class="w-full md:w-1/2 bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2">
                                <input type="text" name="longitude" id="editLongitude" placeholder="Longitude"
                                    class="w-full md:w-1/2 bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Fasilitas Umum</label>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                @foreach ($fasilitas as $item)
                                    <div class="flex items-center mt-2">
                                        <input type="checkbox" name="fasilitas[]" value="{{ $item->id }}"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        <label for="fasilitas" class="ml-2 text-sm text-gray-700">{{ $item->nama_fasilitas }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <label for="fasilitas_tambahan" class="block text-sm font-medium text-gray-700">Fasilitas Tambahan</label>
                            <textarea name="fasilitas_tambahan" id="fasilitas_tambahan" cols="30" rows="4"
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg px-4 text-xs py-2 mb-2 mt-2"></textarea>
                        </div>
                        <div class="flex justify-end pt-4">
                            <button type="submit" style="background: #003A9D"
                                class="py-3 px-8 md:px-16 font-bold border border-transparent shadow-sm text-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Ubah
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Leaflet Map Script -->
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    // Edit Modal Map
                    if (document.getElementById('editMap')) {
                        const editMap = L.map('editMap').setView([-6.200000, 106.816666], 13);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                        }).addTo(editMap);

                        const editMarker = L.marker([-6.200000, 106.816666], {
                            draggable: true
                        }).addTo(editMap);

                        editMarker.on('dragend', function() {
                            const latLng = editMarker.getLatLng();
                            document.getElementById('editLatitude').value = latLng.lat;
                            document.getElementById('editLongitude').value = latLng.lng;
                        });

                        editMap.on('click', function(e) {
                            const {
                                lat,
                                lng
                            } = e.latlng;
                            editMarker.setLatLng([lat, lng]);
                            document.getElementById('editLatitude').value = lat;
                            document.getElementById('editLongitude').value = lng;
                        });
                    }
                });
            </script>
        </div>

        {{-- Modal Insert Kontrakan --}}
        <div id="insertModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/60">
            <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-2xl relative overflow-y-auto max-h-[90vh]">
                <!-- Header Modal -->
                <button onclick="closeInsertModal()"
                    class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-2xl transition duration-200 cursor-pointer">&times;</button>
                <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Tambah Kontrakan</h2>
                <hr class="mb-6 border-t border-gray-200">


                <!-- Body Modal -->
                <div class="p-6 space-y-6">
                    <form action="{{ route('kontrakan.store') }}" method="post" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf

                        <!-- Informasi Pemilik -->
                        <div>
                            <h2 class="text-lg font-bold mb-4 text-gray-800">Informasi Pemilik</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Pemilik</label>
                                    <input type="text" name="nama" class="w-full border rounded-lg p-2"
                                        placeholder="Nama Pemilik">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 m">Alamat Pemilik</label>
                                    <input type="text" name="alamat" class="w-full border rounded-lg p-2"
                                        placeholder="Alamat Pemilik">
                                </div>
                            </div>
                        </div>

                        <!-- Informasi Kontrakan -->
                        <div>
                            <h2 class="text-lg font-bold mb-4 text-gray-800">Detail Kontrakan</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Harga</label>
                                    <input type="text" name="harga" class="w-full border rounded-lg p-2"
                                        placeholder="Harga Kontrakan">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Harga DP</label>
                                    <input type="text" name="uang_dp" class="w-full border rounded-lg p-2"
                                        placeholder="Harga DP Kontrakan">
                                </div>
                                <div class="">
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Ukuran
                                        Properti</label>
                                    <input type="text" name="ukuran_properti" class="w-full border rounded-lg p-2"
                                        placeholder="Contoh: 6x8 m²">
                                </div>
                                <div class="">
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Tipe Properti</label>
                                    <input type="text" name="tipe_properti" class="w-full border rounded-lg p-2"
                                        placeholder="Contoh: Kontrakan">
                                </div>
                            </div>

                            <div class="md:col-span-2 mt-4">
                                <label class="block text-sm font-medium text-gray-700  mb-2">Deskripsi</label>
                                <textarea name="deskripsi" rows="4" class="w-full border rounded-lg p-2"
                                    placeholder="Tuliskan deskripsi kontrakan..."></textarea>
                            </div>
                        </div>



                        <!-- Fasilitas -->
                        <div>
                            <h2 class="text-lg font-bold mb-4 text-gray-800">Fasilitas</h2>
                            <div class="space-y-2">
                                {{-- <div>
                                    <label class="block text-sm font-medium text-gray-700">Fasilitas Umum</label>
                                    <div class="grid grid-cols-2 gap-2">
                                        @foreach ($fasilitas as $item)
                                            <label class="flex items-center space-x-2">
                                                <input type="checkbox" name="fasilitas[]"
                                                    value="{{ $item->id }}">
                                                <span>{{ $item->nama_fasilitas }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div> --}}
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700  mb-2">Kamar
                                            Tidur</label>
                                        <input type="text" name="kamar_tidur" class="w-full border rounded-lg p-2"
                                            placeholder="Jumlah Kamar">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700  mb-2">Kamar
                                            Mandi</label>
                                        <input type="text" name="kamar_mandi" class="w-full border rounded-lg p-2"
                                            placeholder="Jumlah Kamar Mandi">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Fasilitas
                                        Tambahan</label>
                                    <textarea name="fasilitas_tambahan" rows="3" class="w-full border rounded-lg p-2"
                                        placeholder="Contoh: Listrik prabayar, taman, dapur..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Upload Gambar -->
                            <div>
                                <label for="foto_kontrakan" class="block text-sm font-medium text-gray-700  mb-2">Foto
                                    Banner</label>
                                <input type="file" name="foto_banner" id="foto_kontrakan"
                                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                            </div>
                            <div>
                                <label for="foto_kontrakan" class="block text-sm font-medium text-gray-700  mb-2">Foto
                                    Kontrakan</label>
                                <input type="file" name="foto_kontrakan[]" id="foto_kontrakan" multiple
                                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                            </div>
                        </div>

                        <!-- Lokasi & Alamat -->
                        <div>
                            <h2 class="text-lg font-bold mb-4 text-gray-800  mb-2">Lokasi</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Provinsi</label>
                                    <select name="provinsi" id="provinsi" required
                                        class="w-full border rounded-lg p-2">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Kabupaten/Kota</label>
                                    <select name="kota" id="kota" required
                                        class="w-full border rounded-lg p-2">
                                        <option value="">Pilih Kota</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan" required
                                        class="w-full border rounded-lg p-2">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Kelurahan</label>
                                    <select name="kelurahan" id="kelurahan" required
                                        class="w-full border rounded-lg p-2">
                                        <option value="">Pilih Kelurahan</option>
                                    </select>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700  mb-2">Lokasi pada
                                        Peta</label>
                                    <div id="map" class="w-full h-64 mt-2 rounded-lg border"></div>
                                    <input type="hidden" name="latitude" id="latitude">
                                    <input type="hidden" name="longitude" id="longitude">
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Kirim -->
                        <div class="text-right">

                            <button type="submit" id="insert"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">Tambah</button>

                        </div>
                    </form>
                </div>
            </div>

            <!-- Leaflet Map Script -->
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const map = L.map('map').setView([-6.200000, 106.816666], 12);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                    }).addTo(map);

                    const marker = L.marker([-6.200000, 106.816666], {
                        draggable: true
                    }).addTo(map);

                    marker.on('dragend', function() {
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
        </div>



        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <script>
    // let lo;
    // let editProv = document.getElementById('Editprovinsi');

    async function editData(provinsi, kota, kecamatan, kelurahan, lowonganId) {

        // Panggilan API untuk mendapatkan provinsi
        await axios.get('/api/provinces')
            .then(response => {
                let options = `<option value="">Pilih</option>`;
                document.getElementById('Editprovinsi').innerHTML = '<option value="">Pilih</option>';
                document.getElementById('Editkota').innerHTML = '<option value="">Pilih</option>';
                document.getElementById('Editkecamatan').innerHTML = '<option value="">Pilih</option>';
                document.getElementById('Editkelurahan').innerHTML = '<option value="">Pilih</option>';
                // let itemProv = "";

                response.data.forEach(item => {
                    if (item.name == provinsi) {
                        // console.log("Provinsi dari API:", item.name);
                        // console.log("Provinsi yang dipilih:", provinsi);
                        // itemProv = item.name;
                        options +=
                            `<option value="${item.name}" data-id="${item.id}" selected>${item.name}</option>`;
                        // var option = document.createElement("option");
                        // option.text = item.name;
                        // option.selected = true;
                        // document.getElementById('Editprovinsi').add(option);
                    } else {
                        options +=
                            `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                        // var option = document.createElement("option");
                        // option.text = item.name;
                        // document.getElementById('Editprovinsi').add(option);
                    }
                });
                // console.log(response.data)
                document.getElementById('Editprovinsi').innerHTML = options;
                // document.getElementById('Editprovinsi').click();
                // document.querySelector(`[value="${itemProv}"]`).selected = true;
                // console.log("Indeks Provinsi Terpilih: " + document.getElementById('Editprovinsi')
                //     .selectedIndex)
            });
        let editProv = await document.getElementById('Editprovinsi');
        // await console.log(editProv)
        const idProv = await editProv.options[editProv.selectedIndex].getAttribute('data-id');
        // await console.log(idProv)
        await axios.get(`/api/regencies/${idProv}`)
            .then(response => {
                let options = `<option value="">Pilih</option>`;
                // document.getElementById('Editkecamatan').innerHTML = '<option value="">Pilih</option>';
                // document.getElementById('Editkelurahan').innerHTML = '<option value="">Pilih</option>';

                response.data.forEach(item => {
                    if (item.name == kota) {
                        options +=
                            `<option value="${item.name}" data-id="${item.id}" selected>${item.name}</option>`;
                    } else {
                        options +=
                            `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                    }
                });
                document.getElementById('Editkota').innerHTML = options;
            });

        // Event listener untuk perubahan pada provinsi
        document.getElementById('Editprovinsi').addEventListener('change', function() {
            const id = this.options[this.selectedIndex].getAttribute('data-id');
            axios.get(`/api/regencies/${id}`)
                .then(responseA => {
                    let options = `<option value="">Pilih</option>`;
                    // document.getElementById('Editkecamatan').innerHTML = '<option value="">Pilih</option>';
                    // document.getElementById('Editkelurahan').innerHTML = '<option value="">Pilih</option>';

                    responseA.data.forEach(item => {
                        if (item.name == kota) {
                            options +=
                                `<option value="${item.name}" data-id="${item.id}" selected>${item.name}</option>`;
                        } else {
                            options +=
                                `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                        }
                    });
                    document.getElementById('Editkota').innerHTML = options;
                });
        });

        let editKota = await document.getElementById("Editkota")
        const idKota = await editKota.options[editKota.selectedIndex].getAttribute('data-id');
        await axios.get(`/api/districts/${idKota}`)
            .then(response => {
                let options = `<option value="">Pilih</option>`;
                document.getElementById('Editkelurahan').innerHTML = '<option value="">Pilih</option>';

                response.data.forEach(item => {
                    if (item.name == kecamatan) {
                        options +=
                            `<option value="${item.name}" data-id="${item.id}" selected>${item.name}</option>`;
                    } else {
                        options +=
                            `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                    }
                });
                document.getElementById('Editkecamatan').innerHTML = options;
            });

        // Event listener untuk perubahan pada kota
        document.getElementById('Editkota').addEventListener('change', function() {
            const id = this.options[this.selectedIndex].getAttribute('data-id');
            axios.get(`/api/districts/${id}`)
                .then(response => {
                    let options = `<option value="">Pilih</option>`;
                    document.getElementById('Editkelurahan').innerHTML =
                        '<option value="">Pilih</option>';

                    response.data.forEach(item => {
                        if (item.name == kecamatan) {
                            options +=
                                `<option value="${item.name}" data-id="${item.id}" selected>${item.name}</option>`;
                        } else {
                            options +=
                                `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                        }
                    });
                    document.getElementById('Editkecamatan').innerHTML = options;
                });
        });

        let editKecamatan = await document.getElementById("Editkecamatan")
        const idKecamatan = await editKecamatan.options[editKecamatan.selectedIndex].getAttribute('data-id');
        await axios.get(`/api/villages/${idKecamatan}`)
            .then(response => {
                let options = `<option value="">Pilih</option>`;
                response.data.forEach(item => {
                    if (item.name == kelurahan) {
                        options +=
                            `<option value="${item.name}" selected>${item.name}</option>`;
                    } else {
                        options += `<option value="${item.name}">${item.name}</option>`;
                    }
                });
                document.getElementById('Editkelurahan').innerHTML = options;
            });

        // Event listener untuk perubahan pada kecamatan
        document.getElementById('Editkecamatan').addEventListener('change', function() {
            const id = this.options[this.selectedIndex].getAttribute('data-id');
            axios.get(`/api/villages/${id}`)
                .then(response => {
                    let options = `<option value="">Pilih</option>`;
                    response.data.forEach(item => {
                        if (item.name == kelurahan) {
                            options +=
                                `<option value="${item.name}" selected>${item.name}</option>`;
                        } else {
                            options += `<option value="${item.name}">${item.name}</option>`;
                        }
                    });
                    document.getElementById('Editkelurahan').innerHTML = options;
                });
        });
    }

    // Event listener untuk tombol Edit Data
    // document.getElementById('editDataBtn').addEventListener('click', function() {
    //     let provinsi = document.getElementById('provinsi').value;
    //     let kota = document.getElementById('kota').value;
    //     let kecamatan = document.getElementById('kecamatan').value;
    //     let kelurahan = document.getElementById('kelurahan').value;
    //     // Memanggil fungsi editData dengan parameter yang dipilih
    //     editData(provinsi, kota, kecamatan, kelurahan);
    // });

    // console.log(lo);
    // alert(`Provinsi yang dipilih: ${lo}`);
</script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            function showDeletePopup() {
                document.getElementById("deletePopup").classList.remove("hidden");
            }

            function closeDeletePopup() {
                document.getElementById("deletePopup").classList.add("hidden");
            }

            function confirmDelete() {
                alert("Data telah dihapus");
                closeDeletePopup();
            }

            function showEditModal() {
                document.getElementById("editModal").classList.remove("hidden");
            }

            function closeEditModal() {
                document.getElementById("editModal").classList.add("hidden");
            }

            function saveEdit() {
                let editedText = document.getElementById("editInput").value;
                alert("Data telah diubah menjadi: " + editedText);
                closeEditModal();
            }

            function showInsertPopup() {
                document.getElementById("insertModal").classList.remove("hidden");

                // Reset dan load provinsi
                axios.get('/api/provinces')
                    .then(response => {
                        let options = '<option value="">Pilih Provinsi</option>';
                        response.data.forEach(item => {
                            options += `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                        });
                        document.getElementById('provinsi').innerHTML = options;
                        document.getElementById('kota').innerHTML = '<option value="">Pilih Kota</option>';
                        document.getElementById('kecamatan').innerHTML = '<option value="">Pilih Kecamatan</option>';
                        document.getElementById('kelurahan').innerHTML = '<option value="">Pilih Kelurahan</option>';
                    });

                // Provinsi → Kota
                document.getElementById('provinsi').addEventListener('change', function() {
                    const id = this.options[this.selectedIndex].getAttribute('data-id');
                    axios.get(`/api/regencies/${id}`)
                        .then(response => {
                            let options = '<option value="">Pilih Kota</option>';
                            response.data.forEach(item => {
                                options +=
                                    `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                            });
                            document.getElementById('kota').innerHTML = options;
                            document.getElementById('kecamatan').innerHTML =
                                '<option value="">Pilih Kecamatan</option>';
                            document.getElementById('kelurahan').innerHTML =
                                '<option value="">Pilih Kelurahan</option>';
                        });
                });

                // Kota → Kecamatan
                document.getElementById('kota').addEventListener('change', function() {
                    const id = this.options[this.selectedIndex].getAttribute('data-id');
                    axios.get(`/api/districts/${id}`)
                        .then(response => {
                            let options = '<option value="">Pilih Kecamatan</option>';
                            response.data.forEach(item => {
                                options +=
                                    `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                            });
                            document.getElementById('kecamatan').innerHTML = options;
                            document.getElementById('kelurahan').innerHTML =
                                '<option value="">Pilih Kelurahan</option>';
                        });
                });

                // Kecamatan → Kelurahan
                document.getElementById('kecamatan').addEventListener('change', function() {
                    const id = this.options[this.selectedIndex].getAttribute('data-id');
                    axios.get(`/api/villages/${id}`)
                        .then(response => {
                            let options = '<option value="">Pilih Kelurahan</option>';
                            response.data.forEach(item => {
                                options += `<option value="${item.name}">${item.name}</option>`;
                            });
                            document.getElementById('kelurahan').innerHTML = options;
                        });
                });
            }



            function closeInsertModal() {
                document.getElementById("insertModal").classList.add("hidden");
            }

            function insert() {
                let editedText = document.getElementById("insertModal").value;
                alert("Data telah ditambah: " + editedText);
                closeInsertModal();
            }
        </script>
    </x-slot:content>
</x-template>
