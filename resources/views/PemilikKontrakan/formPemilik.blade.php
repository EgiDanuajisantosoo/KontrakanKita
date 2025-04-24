<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
</body>
</html>
