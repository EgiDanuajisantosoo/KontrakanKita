<x-template>
    <x-slot:title>
        Form Pemilik Kontrakan
    </x-slot:title>
    <x-slot:content>

        <div class="px-4 py-8 md:px-16 lg:px-32 xl:px-64 md:py-16 lg:py-24">
            <div class="shadow-2xl">
                <div class="p-6 md:p-10 lg:p-12 rounded-tl-2xl rounded-tr-2xl" style="background: #003A9D ">
                    <h2 class="font-semibold text-xl md:text-2xl text-white">Ajukan Permintaan Kontrakan</h2>
                </div>

                <form action="{{ route('kontrakan.store') }}" method="post" enctype="multipart/form-data" class="p-6 md:p-10 lg:p-12 space-y-6">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kontrakan</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Pemilik Kontrakan"
                            value="{{ old('nama') }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('nama') border-red-500 @enderror">
                        @error('nama')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Pemilik Kontrakan</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat Pemilik Kontrakan"
                        value="{{ old('alamat') }}"
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('alamat') border-red-500 @enderror">
                        @error('alamat')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga Kontrakan</label>
                            <input type="text" name="harga" id="harga" placeholder="Harga Kontrakan"
                            value="{{ old('harga') }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('harga') border-red-500 @enderror">
                            @error('harga')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="uang_dp" class="block text-sm font-medium text-gray-700">Uang Dp Kontrakan</label>
                            <input type="text" name="uang_dp" id="uang_dp" placeholder="Uang DP Kontrakan"
                            value="{{ old('uang_dp') }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('uang_dp') border-red-500 @enderror">
                            @error('uang_dp')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="4"
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg px-4 text-xs py-2 mb-2 mt-2 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="tipe_properti" class="block text-sm font-medium text-gray-700">Tipe Properti</label>
                            <input type="text" name="tipe_properti" id="tipe_properti" placeholder="Tipe Properti"
                            value="{{ old('tipe_properti') }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('tipe_properti') border-red-500 @enderror">
                            @error('tipe_properti')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="ukuran_properti" class="block text-sm font-medium text-gray-700">Ukuran Properti</label>
                            <input type="text" name="ukuran_properti" id="ukuran_properti" placeholder="Ukuran Properti"
                            value="{{ old('ukuran_properti') }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('ukuran_properti') border-red-500 @enderror">
                            @error('ukuran_properti')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="kamar_tidur" class="block text-sm font-medium text-gray-700">Kamar Tidur</label>
                            <input type="text" name="kamar_tidur" id="kamar_tidur" placeholder="Kamar Tidur"
                            value="{{ old('kamar_tidur') }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('kamar_tidur') border-red-500 @enderror">
                            @error('kamar_tidur')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="kamar_mandi" class="block text-sm font-medium text-gray-700">Kamar Mandi</label>
                            <input type="text" name="kamar_mandi" id="kamar_mandi" placeholder="Kamar Mandi"
                            value="{{ old('kamar_mandi') }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('kamar_mandi') border-red-500 @enderror">
                            @error('kamar_mandi')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="foto_kontrakan" class="block text-sm font-medium text-gray-700">Foto Kontrakan</label>
                        <input type="file" name="foto_kontrakan[]" id="foto_kontrakan" multiple
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100 @error('foto_kontrakan.*') border-red-500 @enderror">
                        @error('foto_kontrakan.*')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="foto_banner" class="block text-sm font-medium text-gray-700">Foto Banner</label>
                        <input type="file" name="foto_banner" id="foto_banner"
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100 @error('foto_banner') border-red-500 @enderror">
                        @error('foto_banner')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                            <select name="provinsi" id="provinsi"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('provinsi') border-red-500 @enderror">
                                <option value="">Pilih</option>
                            </select>
                            @error('provinsi')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="kota" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                            <select name="kota" id="kota"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('kota') border-red-500 @enderror">
                                <option value="">Pilih</option>
                            </select>
                            @error('kota')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('kecamatan') border-red-500 @enderror">
                                <option value="">Pilih</option>
                            </select>
                            @error('kecamatan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan/Desa</label>
                            <select name="kelurahan" id="kelurahan"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2 @error('kelurahan') border-red-500 @enderror">
                                <option value="">Pilih</option>
                            </select>
                            @error('kelurahan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Lokasi pada Peta</label>
                        <div id="map" class="mt-2 h-64 w-full border border-gray-300 rounded-md"></div>
                        <div class="flex flex-col md:flex-row gap-2 mt-2">
                            <input type="text" name="latitude" id="latitude" placeholder="Latitude"
                                value="{{ old('latitude') }}"
                                class="w-full md:w-1/2 bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 @error('latitude') border-red-500 @enderror">
                            <input type="text" name="longitude" id="longitude" placeholder="Longitude"
                                value="{{ old('longitude') }}"
                                class="w-full md:w-1/2 bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 @error('longitude') border-red-500 @enderror">
                        </div>
                        @error('latitude')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        @error('longitude')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Fasilitas Umum</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            @foreach ($fasilitas as $item)
                                <div class="flex items-center mt-2">
                                    <input type="checkbox" name="fasilitas[]" value="{{ $item->id }}"
                                        {{ (is_array(old('fasilitas')) && in_array($item->id, old('fasilitas'))) ? 'checked' : '' }}
                                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    <label for="fasilitas" class="ml-2 text-sm text-gray-700">{{ $item->nama_fasilitas }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('fasilitas')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        @error('fasilitas.*')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="fasilitas_tambahan" class="block text-sm font-medium text-gray-700">Fasilitas Tambahan</label>
                        <textarea name="fasilitas_tambahan" id="fasilitas_tambahan" cols="30" rows="4"
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg px-4 text-xs py-2 mb-2 mt-2 @error('fasilitas_tambahan') border-red-500 @enderror">{{ old('fasilitas_tambahan') }}</textarea>
                        @error('fasilitas_tambahan')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end pt-4">
                        <button type="submit"  style="background: #003A9D"
                            class="py-3 px-8 md:px-16 font-bold border border-transparent shadow-sm text-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Kirim
                        </button>
                    </div>
                </form>
                <div class="p-6 md:p-10 lg:p-12 rounded-bl-2xl rounded-br-2xl" style="background: #003A9D"></div>
            </div>
        </div>
        {{-- @if ($errors->any())
            <div class="mb-6">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Terjadi kesalahan!</strong>
                    <ul class="mt-2 list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif --}}



            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const map = L.map('map').setView([-6.200000, 106.816666], 13); // Default to Jakarta

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                    }).addTo(map);

                    const marker = L.marker([-6.200000, 106.816666], {
                        draggable: true
                    }).addTo(map);

                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition((position) => {
                            const { latitude, longitude } = position.coords;
                            map.setView([latitude, longitude], 16); // Set view ke lokasi user
                            marker.setLatLng([latitude, longitude]);
                            document.getElementById('latitude').value = latitude;
                            document.getElementById('longitude').value = longitude;
                        }, (error) => {
                            console.warn("Geolocation error:", error.message);
                            alert("Tidak dapat mengakses lokasi. Pastikan Anda memberikan izin.");
                        });
                    } else {
                        console.warn("Geolocation is not supported by this browser.");
                        alert("Browser Anda tidak mendukung geolokasi.");
                    }

                    marker.on('dragend', function(e) {
                        const latLng = marker.getLatLng();
                        document.getElementById('latitude').value = latLng.lat;
                        document.getElementById('longitude').value = latLng.lng;
                        map.setView([latLng.lat, latLng.lng], map.getZoom()); // Update view ke marker baru
                    });

                    map.on('click', function(e) {
                        const { lat, lng } = e.latlng;
                        marker.setLatLng([lat, lng]);
                        document.getElementById('latitude').value = lat;
                        document.getElementById('longitude').value = lng;
                        map.setView([lat, lng], map.getZoom()); // Update view ke lokasi klik
                    });
                });
            </script>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    axios.get('/api/provinces')
                        .then(response => {
                            let options = '<option value="">Pilih</option>';
                            document.getElementById('provinsi').innerHTML = '<option value="">Pilih</option>';
                            document.getElementById('kecamatan').innerHTML = '<option value="">Pilih</option>';
                            document.getElementById('kelurahan').innerHTML = '<option value="">Pilih</option>';
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
                                document.getElementById('kelurahan').innerHTML =
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
                                document.getElementById('kelurahan').innerHTML =
                                    '<option value="">Pilih</option>';
                                response.data.forEach(item => {
                                    options +=
                                        `<option value="${item.name}" data-id="${item.id}">${item.name}</option>`;
                                });
                                document.getElementById('kecamatan').innerHTML = options;
                            });
                    });

                    document.getElementById('kecamatan').addEventListener('change', function() {
                        const id = this.options[this.selectedIndex].getAttribute('data-id');
                        axios.get(`/api/villages/${id}`)
                            .then(response => {
                                let options = '<option value="">Pilih</option>';
                                response.data.forEach(item => {
                                    console.log(item);

                                    options += `<option value="${item.name}">${item.name}</option>`;
                                });
                                document.getElementById('kelurahan').innerHTML = options;
                            });
                    });
                });
            </script>
        </div>
    </x-slot:content>
</x-templateForm>
