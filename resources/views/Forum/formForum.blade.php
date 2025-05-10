<x-templateForm>
    <x-slot:title>Form Forum</x-slot:title>
    <x-slot:content>

        <body>
            {{-- <form method="POST" action="/forums" enctype="multipart/form-data"
                class="space-y-4 bg-white p-6 rounded-lg shadow-md">
                @csrf
                <input type="text" name="nama_group" placeholder="Nama Group" required
                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <textarea name="deskripsi" placeholder="Deskripsi" required
                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                <input type="number" name="jumlah_anggota" placeholder="Jumlah Anggota" required
                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <select name="jenis_kelamin" required
                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <div>
                    <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                    <select name="provinsi" id="provinsi"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div>
                    <label for="kota" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                    <select name="kota" id="kota"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div>
                    <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div>
                    <label for="foto_group" class="block text-sm font-medium text-gray-700">Foto Group</label>
                    <input type="file" name="foto_group" id="foto_group" accept="image/jpeg,image/png,image/jpg,image/gif"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                </div>
                <div class="w-full flex flex-col mb-3">
                    <label class="font-semibold text-gray-600 py-2">Lokasi pada Peta<abbr
                            title="required">*</abbr></label>
                    <div id="map" style="height: 300px; width: 100%;"></div>
                    <input type="input" name="latitude" id="latitude">
                    <input type="input" name="longitude" id="longitude">
                </div>
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
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Buat
                    Group</button>
            </form> --}}

            {{-- <div class="p-12 rounded-tl-2xl rounded-tr-2xl" style="background: #003A9D ">
                <h2 class="font-semibold text-2xl text-white ">Tambah Forum</h2>
            </div>
            <form method="POST" action="/forums" enctype="multipart/form-data"
            class="p-12 flex-col bg-white rounded-lg shadow-md">
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
                <label class="font-semibold text-gray-600 py-2" for="jenis_kelamin">Jenis Kelamin :</label><br>
                <input class="text-xs" type="radio" name="jenis_kelamin" value="L" required> Laki-laki
                <input class="text-xs" type="radio" name="jenis_kelamin" value="P" required> Perempuan
            </div>

            <div class="col-span-2">
                <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                <div class="md:flex md:row md:space-x-4 w-full text-xs">
                    <div class="w-full flex flex-col mb-3">
                        <label class="font-semibold text-gray-600 py-2">Provinsi:<abbr title="required">*</abbr></label>
                        <select name="provinsi" id="provinsi"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                            required>
                            <option value="">Pilih</option>
                        </select>
                    </div>
                    <div class="w-full flex flex-col mb-3">
                        <label class="font-semibold text-gray-600 py-2">Kabupaten/Kota:<abbr title="required">*</abbr></label>
                        <select name="kota" id="kota"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                            required>
                            <option value="">Pilih</option>
                        </select>
                    </div>
                </div>
                <div class="md:flex md:row md:space-x-4 w-full text-xs">
                    <div class="w-full flex flex-col mb-3">
                        <label class="font-semibold text-gray-600 py-2">Kecamatan:<abbr title="required">*</abbr></label>
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
                <input type="file" name="foto_group" id="foto_group" accept="image/jpeg,image/png,image/jpg,image/gif"
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
            </div>

            <div class="w-full flex flex-col mb-3">
                <label class="font-semibold text-gray-600 py-2">Lokasi pada Peta<abbr title="required">*</abbr></label>
                <div id="map" style="height: 300px; width: 100%;" class="mb-2"></div>
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
            </div>

            <div class="button-group flex justify-end pt-6 mx-auto block gap-2" style="margin: auto">
                <button type="submit"
                    class="px-10 py-3 font-bold rounded-md text-white" style="background: #003A9D">Buat Group</button>
                <button type="reset" class="px-10 py-3 bg-red-700 font-bold rounded-md text-white">Reset</button>
            </div>

        </form>
        <div class="p-12 rounded-bl-2xl rounded-br-2xl" style="background: #003A9D"></div> --}}

        {{-- <!-- Leaflet Maps -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const map = L.map('map').setView([-6.200000, 106.816666], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                }).addTo(map);

                const marker = L.marker([-6.200000, 106.816666], { draggable: true }).addTo(map);

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition((position) => {
                        const { latitude, longitude } = position.coords;
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
                    const { lat, lng } = e.latlng;
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
            </script> --}}
        </body>
    </x-slot:content>
</x-templateForm>
