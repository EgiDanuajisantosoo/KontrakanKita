<x-template>
    <x-slot:title>
        Form Pemilik Kontrakan
    </x-slot:title>
    <x-slot:content>

        <div class="px-4 py-8 md:px-16 lg:px-32 xl:px-64 md:py-16 lg:py-24">
            <div class="shadow-2xl">
                <div class="p-6 md:p-10 lg:p-12 rounded-tl-2xl rounded-tr-2xl" style="background: #003A9D ">
                    <h2 class="font-semibold text-xl md:text-2xl text-white">Edit Data Kontrakan</h2>
                </div>

                <form action="{{ route('kontrakan.update', $kontrakan->id) }}" method="post" enctype="multipart/form-data" class="p-6 md:p-10 lg:p-12 space-y-6">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kontrakan</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Pemilik Kontrakan" value="{{ $kontrakan->nama}}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                    </div>
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Pemilik Kontrakan</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat Pemilik Kontrakan" value="{{ $kontrakan->alamat }}"
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga Kontrakan</label>
                            <input type="text" name="harga" id="harga" placeholder="Harga Kontrakan" value="{{ $kontrakan->harga }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                        </div>
                        <div>
                            <label for="uang_dp" class="block text-sm font-medium text-gray-700">Uang Dp Kontrakan</label>
                            <input type="text" name="uang_dp" id="uang_dp" placeholder="Uang DP Kontrakan" value="{{ $kontrakan->dp_harga}}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                        </div>
                    </div>
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="4"
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg px-4 text-xs py-2 mb-2 mt-2">{{ $kontrakan->nama}}</textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="tipe_properti" class="block text-sm font-medium text-gray-700">Tipe Properti</label>
                            <input type="text" name="tipe_properti" id="tipe_properti" placeholder="Tipe Properti" value="{{ $kontrakan->tipe_properti }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                        </div>
                        <div>
                            <label for="ukuran_properti" class="block text-sm font-medium text-gray-700">Ukuran Properti</label>
                            <input type="text" name="ukuran_properti" id="ukuran_properti" placeholder="Ukuran Properti" value="{{ $kontrakan->ukuran_properti }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="kamar_tidur" class="block text-sm font-medium text-gray-700">Kamar Tidur</label>
                            <input type="text" name="kamar_tidur" id="kamar_tidur" placeholder="Kamar Tidur" value="{{ $kontrakan->kamar_tidur }}"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                        </div>
                        <div>
                            <label for="kamar_mandi" class="block text-sm font-medium text-gray-700">Kamar Mandi</label>
                            <input type="text" name="kamar_mandi" id="kamar_mandi" placeholder="Kamar Mandi" value="{{ $kontrakan->kamar_mandi }}"
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
                            <select name="provinsi" id="provinsi"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                        <div>
                            <label for="kota" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                            <select name="kota" id="kota"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                        <div>
                            <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan/Desa</label>
                            <select name="kelurahan" id="kelurahan"
                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Lokasi pada Peta</label>
                        <div id="map" class="mt-2 h-64 w-full border border-gray-300 rounded-md z-0"></div>
                        <div class="flex flex-col md:flex-row gap-2 mt-2">
                            <input type="text" name="latitude" id="latitude" placeholder="Latitude" value="{{ $kontrakan->latitude }}"
                                class="w-full md:w-1/2 bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2">
                            <input type="text" name="longitude" id="longitude" placeholder="Longitude" value="{{ $kontrakan->longitude }}"
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
                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg px-4 text-xs py-2 mb-2 mt-2">{{ $kontrakan->fasilitas_tambahan }}</textarea>
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

            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    // Ambil nilai latitude dan longitude dari input user
                    const latInput = document.getElementById('latitude');
                    const lngInput = document.getElementById('longitude');
                    let lat = parseFloat(latInput.value) || -6.200000;
                    let lng = parseFloat(lngInput.value) || 106.816666;

                    const map = L.map('map').setView([lat, lng], 13);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                    }).addTo(map);

                    const marker = L.marker([lat, lng], {
                        draggable: true
                    }).addTo(map);

                    marker.on('dragend', function(e) {
                        const latLng = marker.getLatLng();
                        latInput.value = latLng.lat;
                        lngInput.value = latLng.lng;
                        map.setView([latLng.lat, latLng.lng], map.getZoom());
                    });

                    map.on('click', function(e) {
                        const { lat, lng } = e.latlng;
                        marker.setLatLng([lat, lng]);
                        latInput.value = lat;
                        lngInput.value = lng;
                        map.setView([lat, lng], map.getZoom());
                    });

                    // Update marker jika input latitude/longitude diubah manual
                    latInput.addEventListener('change', function() {
                        const newLat = parseFloat(latInput.value) || -6.200000;
                        const newLng = parseFloat(lngInput.value) || 106.816666;
                        marker.setLatLng([newLat, newLng]);
                        map.setView([newLat, newLng], map.getZoom());
                    });
                    lngInput.addEventListener('change', function() {
                        const newLat = parseFloat(latInput.value) || -6.200000;
                        const newLng = parseFloat(lngInput.value) || 106.816666;
                        marker.setLatLng([newLat, newLng]);
                        map.setView([newLat, newLng], map.getZoom());
                    });
                });
            </script>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    let selectedProvince = "{{ $kontrakan->provinsi }}";
                    let selectedCity = "{{ $kontrakan->kota }}";
                    let selectedDistrict = "{{ $kontrakan->kecamatan }}";
                    let selectedVillage = "{{ $kontrakan->kelurahan }}";

                    // Load provinces
                    axios.get('/api/provinces')
                        .then(response => {
                            let options = '<option value="">Pilih</option>';
                            response.data.forEach(item => {
                                options += `<option value="${item.name}" data-id="${item.id}"
                                    ${item.name === selectedProvince ? 'selected' : ''}>${item.name}</option>`;
                            });
                            document.getElementById('provinsi').innerHTML = options;

                            // Trigger change event to load cities
                            if (selectedProvince) {
                                const provinsiSelect = document.getElementById('provinsi');
                                const selectedOption = provinsiSelect.querySelector(`option[value="${selectedProvince}"]`);
                                if (selectedOption) {
                                    const provinceId = selectedOption.getAttribute('data-id');
                                    loadCities(provinceId);
                                }
                            }
                        });

                    function loadCities(provinceId) {
                        axios.get(`/api/regencies/${provinceId}`)
                            .then(response => {
                                let options = '<option value="">Pilih</option>';
                                response.data.forEach(item => {
                                    options += `<option value="${item.name}" data-id="${item.id}"
                                        ${item.name === selectedCity ? 'selected' : ''}>${item.name}</option>`;
                                });
                                document.getElementById('kota').innerHTML = options;

                                // Trigger change event to load districts
                                if (selectedCity) {
                                    const kotaSelect = document.getElementById('kota');
                                    const selectedOption = kotaSelect.querySelector(`option[value="${selectedCity}"]`);
                                    if (selectedOption) {
                                        const cityId = selectedOption.getAttribute('data-id');
                                        loadDistricts(cityId);
                                    }
                                }
                            });
                    }

                    function loadDistricts(cityId) {
                        axios.get(`/api/districts/${cityId}`)
                            .then(response => {
                                let options = '<option value="">Pilih</option>';
                                response.data.forEach(item => {
                                    options += `<option value="${item.name}" data-id="${item.id}"
                                        ${item.name === selectedDistrict ? 'selected' : ''}>${item.name}</option>`;
                                });
                                document.getElementById('kecamatan').innerHTML = options;

                                // Trigger change event to load villages
                                if (selectedDistrict) {
                                    const kecamatanSelect = document.getElementById('kecamatan');
                                    const selectedOption = kecamatanSelect.querySelector(`option[value="${selectedDistrict}"]`);
                                    if (selectedOption) {
                                        const districtId = selectedOption.getAttribute('data-id');
                                        loadVillages(districtId);
                                    }
                                }
                            });
                    }

                    function loadVillages(districtId) {
                        axios.get(`/api/villages/${districtId}`)
                            .then(response => {
                                let options = '<option value="">Pilih</option>';
                                response.data.forEach(item => {
                                    options += `<option value="${item.name}"
                                        ${item.name === selectedVillage ? 'selected' : ''}>${item.name}</option>`;
                                });
                                document.getElementById('kelurahan').innerHTML = options;
                            });
                    }

                    // Event listeners for changes
                    document.getElementById('provinsi').addEventListener('change', function() {
                        const id = this.options[this.selectedIndex].getAttribute('data-id');
                        loadCities(id);
                    });

                    document.getElementById('kota').addEventListener('change', function() {
                        const id = this.options[this.selectedIndex].getAttribute('data-id');
                        loadDistricts(id);
                    });

                    document.getElementById('kecamatan').addEventListener('change', function() {
                        const id = this.options[this.selectedIndex].getAttribute('data-id');
                        loadVillages(id);
                    });
                });
            </script>
        </div>
    </x-slot:content>
</x-templateForm>
