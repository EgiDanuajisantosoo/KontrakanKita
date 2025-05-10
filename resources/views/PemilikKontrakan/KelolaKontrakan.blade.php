<x-template>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:content>
        <div class="content">
            <div class="headerContent bg-[#003A9D] min-h-auto text-center md:flex md:justify-between md:relative ">
                <h1 class="text-white p-8 text-3xl font-bold ">Ayo Kelola Kontrakanmu!</h1>
                <button onclick="showInsertPopup()"
                    class="text-xs md:text-base mb-5 md:mb-0 md:absolute md:bottom-5 md:right-7 bg-white p-1 rounded-sm hover:bg-gray-200">
                    Tambah Kontrakan
                </button>
            </div>
            <div class="container mx-auto p-5">
                <div class="cardColumn ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <!-- Rumah Mewah -->
                        @if ($kontrakan->count() == 0)
                        <div class="bg-white rounded-lg shadow relative pb-10 flex items-center justify-center h-40">
                            <h1 class="text-center text-gray-500 font-bold">Tidak ada data kontrakan</h1>
                        </div>
                        @endif
                        @foreach ($kontrakan as $data)
                        <div class="bg-white rounded-lg shadow relative pb-10">
                            <a href="DetailKontrakan">
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
                                    <p class="text-gray-600 font-normal text-sm">{{ $data->kota }},{{ $data->provinsi }}</p>
                                    <div class="flex gap-3 mt-3">
                                        <div class="flex gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                                            </svg>
                                            <p class="text-[10px] md:text-xs">{{ $data->kamar_tidur }} kamar tidur</p>
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
                                            <p class="text-[10px] md:text-xs">{{ $data->kamar_mandi }} kamar mandi</p>
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
                                <button onclick="showEditModal()"
                                    class="bg-green-600 text-white px-3 py-1 text-xs rounded-lg hover:bg-green-700">Edit</button>
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
        <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black/50 z-20 hidden p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg flex flex-col max-h-[90vh] overflow-auto">
                <!-- Header Modal -->
                <div
                    class="bg-[#003A9D] text-white p-4 rounded-t-lg text-lg font-bold text-center sticky bottom-0 z-10">
                    <h1>Edit Kontrakan</h1>
                </div>

                <!-- Body Modal -->
                <div class="p-7 flex-1 overflow-auto">
                    <label class="block text-sm font-semibold">Nama</label>
                    <input type="text" class="w-full p-2 border rounded-lg mb-3" placeholder="Nama kontrakan">

                    <label class="block text-sm font-semibold">Harga</label>
                    <input type="text" class="w-full p-2 border rounded-lg mb-3" placeholder="Harga">

                    <label class="block text-sm font-semibold">Fasilitas</label>
                    <input type="text" class="w-full p-2 border rounded-lg mb-3" placeholder="Fasilitas">

                    <label class="block text-sm font-semibold">Alamat</label>
                    <input type="text" class="w-full p-2 border rounded-lg mb-3" placeholder="Alamat">

                    <label class="block text-sm font-semibold">Deskripsi</label>
                    <textarea class="w-full p-2 border rounded-lg mb-3 min-h-[120px] h-40" placeholder="Deskripsi"></textarea>

                    <label class="block text-sm font-semibold">Gambar</label>
                    <input type="file" class="w-auto p-2 border rounded-lg mb-3">
                </div>

                <!-- Footer Modal -->
                <div class="bg-[#003A9D] p-4 flex justify-end gap-3 rounded-b-lg">
                    <button onclick="closeEditModal()"
                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Batal</button>
                    <button onclick="saveEdit()"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Edit</button>
                </div>
            </div>
        </div>

        {{-- Modal Insert Kontrakan --}}
        <div id="insertModal" class="fixed inset-0 flex items-center justify-center bg-black/50 z-20 hidden p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg flex flex-col max-h-[90vh] overflow-auto">
                <!-- Header Modal -->
                <div
                    class="bg-[#003A9D] text-white p-4 rounded-t-lg text-lg font-bold text-center sticky bottom-0 z-10">
                    <h1>Edit Kontrakan</h1>
                </div>

                <!-- Body Modal -->
                <div class="p-7 flex-1 overflow-auto">
                    <form action="{{ route('kontrakan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="nama" placeholder="Nama Pemilik Kontrakan" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                        <input type="text" name="alamat" placeholder="Alamat Pemilik Kontrakan" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                        <input type="text" name="harga" placeholder="Harga Kontrakan" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                        <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
                        <input type="text" name="tipe_properti" placeholder="Tipe Properti" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                        <input type="text" name="kamar_tidur" placeholder="Kamar" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                        <input type="text" name="kamar_mandi" placeholder="Kamar Mandi" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                        <input type="text" name="ukuran_properti" placeholder="Ukuran Properti" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                        {{-- <input type="text" name="faslitas_tambahan" placeholder="Fasilitas Tambahan" class="border border-gray-300 rounded-md p-2 mb-4 w-full"> --}}
                        <input type="file" name="foto_kontrakan[]" placeholder="Foto Kontrakan" class="border border-gray-300 rounded-md p-2 mb-4 w-full" multiple>
                        <div class="col-span-2">
                            <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                            <div class="md:flex md:row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Provinsi:<abbr title="required">*</abbr></label>
                                    <select
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        name="provinsi" id="provinsi" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    @error('provinsi')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Kabupaten/Kota:<abbr
                                            title="required">*</abbr></label>
                                    <select
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        name="kota" id="kota" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    @error('kota')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="md:flex md:row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Kecamatan:<abbr title="required">*</abbr></label>
                                    <select
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        name="kecamatan" id="kecamatan" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    @error('kecamatan')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Kelurahan/Desa<abbr
                                            title="required">*</abbr></label>
                                    <select
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        name="kelurahan" id="kelurahan" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    @error('kelurahan')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Kode Pos<abbr title="required">*</abbr></label>
                                    <input type="text" name="kode_pos" id="kode_pos"
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4">
                                    @error('kode_pos')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div> --}}
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Lokasi pada Peta<abbr title="required">*</abbr></label>
                                    <div id="map" style="height: 300px; width: 100%;"></div>
                                    <input type="input" name="latitude" id="latitude">
                                    <input type="input" name="longitude" id="longitude">
                                </div>
                                <label for="Fasilitas Umum">Fasilitas Umum :</label><br>
                                @foreach ($fasilitas as $item)
                                    <input type="checkbox" name="fasilitas[]" value="{{ $item->id }}" class="border border-gray-300 rounded-md p-2 mb-4 w-full"> {{ $item->nama_fasilitas }}<br>
                                @endforeach

                                <label for="Fasilitas Tambahan">Fasilitas Tambahan :</label><br>
                                <textarea name="fasilitas_tambahan" id="" cols="40" rows="5"></textarea>

                                <button type="submit" name="submit">Kirim</button>



                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        const map = L.map('map').setView([-6.200000, 106.816666], 13); // Default to Jakarta

                                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            maxZoom: 19,
                                        }).addTo(map);

                                        const marker = L.marker([-6.200000, 106.816666], { draggable: true }).addTo(map);

                                        marker.on('dragend', function(e) {
                                            const latLng = marker.getLatLng();
                                            document.getElementById('latitude').value = latLng.lat;
                                            document.getElementById('longitude').value = latLng.lng;
                                        });

                                        map.on('click', function(e) {
                                            const { lat, lng } = e.latlng;
                                            marker.setLatLng([lat, lng]);
                                            document.getElementById('latitude').value = lat;
                                            document.getElementById('longitude').value = lng;
                                        });
                                    });
                                </script>
                                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
                                <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Footer Modal -->
                <div class="bg-[#003A9D] p-4 flex justify-end gap-3 rounded-b-lg">
                    <button onclick="closeInsertModal()"
                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Batal</button>
                    <button onclick="insert()"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Tambah</button>
                </div>
            </div>
        </div>




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
