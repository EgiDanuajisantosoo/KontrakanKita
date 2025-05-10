<x-template>
    <x-slot:title>
        Form Pemilik Kontrakan
    </x-slot:title>
    <x-slot:content>

        <div class="px-64 py-24">
        <div class="shadow-2xl">
            <div class="p-12 rounded-tl-2xl rounded-tr-2xl" style="background: #003A9D ">
                <h2 class="font-semibold text-2xl text-white ">Ajukan Permintaan Kontrakan</h2>
            </div>

            <form action="{{ route('kontrakan.store') }}" class="p-12" method="post" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Pemilik Kontrakan</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Pemilik Kontrakan"
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Pemilik Kontrakan</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Pemilik Kontrakan"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                </div>
                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga Kontrakan</label>
                    <input type="text" name="harga" id="harga" placeholder="Harga Kontrakan"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                </div>
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="4"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-50 px-4 text-red text-xs py-2 mb-2 mt-2"></textarea>
                </div>
                <div>
                    <label for="tipe_properti" class="block text-sm font-medium text-gray-700">Tipe Properti</label>
                    <input type="text" name="tipe_properti" id="tipe_properti" placeholder="Tipe Properti"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                </div>
                <div>
                    <label for="kamar_tidur" class="block text-sm font-medium text-gray-700">Kamar Tidur</label>
                    <input type="text" name="kamar_tidur" id="kamar_tidur" placeholder="Kamar Tidur"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                </div>
                <div>
                    <label for="kamar_mandi" class="block text-sm font-medium text-gray-700">Kamar Mandi</label>
                    <input type="text" name="kamar_mandi" id="kamar_mandi" placeholder="Kamar Mandi"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                </div>
                <div>
                    <label for="ukuran_properti" class="block text-sm font-medium text-gray-700">Ukuran Properti</label>
                    <input type="text" name="ukuran_properti" id="ukuran_properti" placeholder="Ukuran Properti"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                </div>
                <div>
                    <label for="foto_kontrakan" class="block text-sm font-medium text-gray-700">Foto Kontrakan</label>
                    <input type="file" name="foto_kontrakan[]" id="foto_kontrakan" multiple
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                </div>
                <div>
                    <label for="foto_kontrakan" class="block text-sm font-medium text-gray-700">Foto Banner</label>
                    <input type="file" name="foto_banner" id="foto_kontrakan"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                </div>
                <div>
                    <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                    <select name="provinsi" id="provinsi"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div>
                    <label for="kota" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                    <select name="kota" id="kota"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div>
                    <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div>
                    <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan/Desa</label>
                    <select name="kelurahan" id="kelurahan"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Lokasi pada Peta</label>
                    <div id="map" class="mt-2 h-64 w-full border border-gray-300 rounded-md"></div>
                    <input type="" name="latitude" id="latitude">
                    <input type="" name="longitude" id="longitude">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Fasilitas Umum</label>
                    @foreach ($fasilitas as $item)
                        <div class="flex items-center mt-2">
                            <input type="checkbox" name="fasilitas[]" value="{{ $item->id }}"
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            <label for="fasilitas" class="ml-2 text-sm text-gray-700">{{ $item->nama_fasilitas }}</label>
                        </div>
                    @endforeach
                </div>
                <div>
                    <label for="fasilitas_tambahan" class="block text-sm font-medium text-gray-700">Fasilitas Tambahan</label>
                    <textarea name="fasilitas_tambahan" id="fasilitas_tambahan" cols="30" rows="4"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-50 px-4 text-red text-xs py-2 mb-2 mt-2"></textarea>
                </div>
                <div class="flex justify-end pt-4">
                    <button type="submit"  style="background: #003A9D"
                        class="py-3 px-16 font-bold border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Kirim
                    </button>
                </div>
            </form>
            <div class="p-12 rounded-bl-2xl rounded-br-2xl" style="background: #003A9D"></div>
        </div>

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
                            const {
                                latitude,
                                longitude
                            } = position.coords;
                            console.log("User location:", latitude, longitude);
                            map.setView([latitude, longitude], 16); // Zoom lebih dekat
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
