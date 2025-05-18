@if ($dataUser == null)
    <x-template>
        <x-slot:title>
            Profile
        </x-slot:title>
        <x-slot:content>
            <div class="px-4 py-8 sm:px-8 md:px-16 lg:px-32 xl:px-64">
                <div class="shadow-2xl">
                    <div class="p-6 sm:p-8 md:p-12 rounded-tl-2xl rounded-tr-2xl" style="background: #003A9D ">
                        <h2 class="font-semibold text-2xl text-white ">Tambah Profile</h2>
                    </div>
                    <form class="p-6 sm:p-8 md:p-12 flex flex-col" action="{{ route('profile.create') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600 py-2" for="nama">Nama : </label>
                            <input
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2"
                                type="text" name="nama" id="nama" required>
                        </div>
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600 py-2" for="no_telp">No_Telp : </label>
                            <input
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2"
                                type="text" name="no_telp" id="no_telp" required>
                        </div>
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600 py-2" for="deskripsi">Deskripsi : </label>
                            <input
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2"
                                type="text" name="deskripsi" id="deskripsi" required>
                        </div>
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600 py-2" for="jenis_kelamin">Jenis Kelamin : </label>
                            <div class="flex items-center gap-4 mt-2">
                                <label class="flex items-center text-xs">
                                    <input class="mr-1" type="radio" name="jenis_kelamin" value="L" required> Laki-laki
                                </label>
                                <label class="flex items-center text-xs">
                                    <input class="mr-1" type="radio" name="jenis_kelamin" value="P" required> Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600" for="instansi">Instansi : </label>
                            <input
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2 mb-2 mt-2"
                                type="text" name="instansi" id="instansi" required>
                        </div>
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600 py-2" for="fotoProfile">Foto Profile :</label>
                            <input
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs py-2"
                                type="file" name="fotoProfile" id="fotoProfile" required>
                        </div>
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600 py-2" for="tahun_lahir">Tahun Lahir : </label>
                            <input
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-xs"
                                type="date" name="tahun_lahir" id="tahun_lahir" required>
                        </div>

                        <div class="col-span-2">
                            <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                            <div class="flex flex-col md:flex-row md:space-x-4 w-full text-xs">
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
                                    <label class="font-semibold text-gray-600 py-2">Kabupaten/Kota:<abbr title="required">*</abbr></label>
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
                            <div class="flex flex-col md:flex-row md:space-x-4 w-full text-xs">
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
                                    <label class="font-semibold text-gray-600 py-2">Kelurahan/Desa<abbr title="required">*</abbr></label>
                                    <select
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        name="kelurahan" id="kelurahan" required>
                                        <option value="">Pilih</option>
                                    </select>
                                    @error('kelurahan')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Kode Pos<abbr title="required">*</abbr></label>
                                    <input type="text" name="kode_pos" id="kode_pos"
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4">
                                    @error('kode_pos')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="button-group flex flex-col sm:flex-row justify-end pt-6 gap-2">
                            <button class="px-8 py-3 font-bold rounded-md text-white" style="background: #003A9D"
                                type="submit">Simpan</button>
                            <button class="px-8 py-3 bg-red-700 font-bold rounded-md text-white"
                                type="reset">Reset</button>
                        </div>
                    </form>
                    <div class="p-6 sm:p-8 md:p-12 rounded-bl-2xl rounded-br-2xl" style="background: #003A9D"></div>
                </div>
            </div>

        </x-slot:content>
    </x-template>

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
@else
    <x-template>
        <x-slot:title>
            Profile
        </x-slot:title>

        <x-slot:content>

            {{-- <div class="bg-gray-100 min-h-screen py-10">
                <div class="max-w-5xl mx-auto bg-white rounded-xl shadow overflow-hidden">
                    <!-- Header -->
                    <div
                        class="bg-blue-600 p-6 flex flex-col md:flex-row items-center sm:items-start text-white rounded-t-xl">
                        <img src="{{ asset('storage/' . $dataUser->foto_profile) }}"
                            class="w-24 h-24 rounded-full border-4 border-white shadow-lg object-cover"
                            alt="Profile Picture">
                        <div class="sm:ml-6 mt-4 sm:mt-0 text-center sm:text-left">
                            <h1 class="text-2xl font-bold">{{ $dataUser->nama }}</h1>
                            <p class="text-sm">{{ $dataUser->instansi }}</p>
                        </div>
                        <button
                            class="mt-15 min-w-25 md:min-w-25 bg-white text-black text-center rounded-lg hover:bg-gray-100 cursor-pointer ">
                            Edit Profile
                        </button>
                    </div>

                    <!-- Informasi Pribadi -->
                    <div class="p-6 sm:p-10">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Informasi Pribadi</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                            <div>
                                <p class="mb-2">
                                    <span class="font-semibold block">Nomor Telepon</span>
                                    <span class="gap-2 text-sm"><i class="fa fa-phone"></i>
                                        {{ $dataUser->no_telepon }}</span>
                                </p>
                                <p class="mb-2">
                                    <span class="font-semibold block">Jenis Kelamin</span>
                                    <span class=" gap-2 text-sm"><i class="fa fa-user"></i>
                                        {{ $dataUser->jenis_kelamin }}</span>
                                </p>
                                <p class="mb-2">
                                    <span class="font-semibold block">Tahun Lahir</span>
                                    <span class=" gap-2 text-sm"><i class="fa fa-calendar"></i>
                                        {{ $dataUser->tanggal_lahir }}</span>
                                </p>
                            </div>
                            <div>
                                <p class="mb-2">
                                    <span class="font-semibold block">Alamat</span>
                                    <span class=" gap-2 text-sm"><i class="fa fa-map-marker"></i>
                                        {{ $dataUser->kecamatan }},{{ $dataUser->kota }},
                                        {{ $dataUser->provinsi }}</span>
                                </p>
                                <p class="mb-2">
                                    <span class="font-semibold block">Kode Pos</span>
                                    <span class=" gap-2 text-sm"><i class="fa fa-envelope"></i>
                                        {{ $dataUser->kode_pos }}</span>
                                </p>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mt-6">
                            <h3 class="font-semibold text-gray-800 mb-2">Deskripsi</h3>
                            <p class="text-gray-700 text-sm">{{ $dataUser->deskripsi }}</p>
                        </div>
                    </div>

                    <!-- Galeri Foto -->
                    <div class="px-6 sm:px-10 pb-10">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Galeri Foto</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                            @foreach ($galery as $datagalery)
                                <img src="{{ asset('storage/' . $datagalery->foto) }}" alt="Gallery"
                                    class="rounded-lg object-cover w-full h-48 shadow-md">
                            @endforeach

                            @if ($galery->count() < 3)
                                <a href="/formGalery"
                                    class="flex justify-center items-center border-2 border-dashed border-gray-400 rounded-lg h-48 hover:bg-gray-100 transition cursor-pointer">
                                    <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 9h-4V7h-2v4H7v2h4v4h2v-4h4z" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>



            <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-lg border">
                <h2 class="text-center text-3xl font-extrabold text-gray-800 mb-6">Upload Galeri</h2>

                <form action="{{ route('profile.galery') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf

                    <div>
                        <label for="files" class="block text-sm font-medium text-gray-700 mb-2">Gambar
                            (maksimal 3):</label>
                        <input type="file" name="gallery[]" id="files"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            multiple>
                        <p class="mt-2 text-xs text-gray-500">Anda dapat mengunggah hingga 3 gambar.</p>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-semibold rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Upload
                        </button>
                    </div>
                </form>
            </div> --}}



            <div class="bg-white min-h-screen py-10">
                <div class="max-w-5xl mx-auto  rounded-xl shadow overflow-hidden">

                    <!-- Header -->
                    <div
                        class="bg-blue-600 p-6 flex flex-col sm:flex-row items-center sm:items-start text-white rounded-t-xl relative">
                        <img src="{{ asset('storage/' . $dataUser->foto_profile) }}"
                            class="w-24 h-24 rounded-full border-4 border-white shadow-lg object-cover"
                            alt="Profile Picture">
                        <div class="sm:ml-6 mt-4 sm:mt-0 text-center sm:text-left">
                            <h1 class="text-2xl font-bold">{{ $dataUser->nama }}</h1>
                            <p class="text-sm">{{ $dataUser->instansi }}</p>
                        </div>
                        <button onclick="openModalEdit()"
                            class="text-sm md:text-base font-semibold mb-5 md:mb-0 md:absolute md:bottom-5 md:right-7
           bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:text-white hover:bg-blue-700
           transition duration-300 ease-in-out cursor-pointer">
                            Edit Profile
                        </button>
                    </div>



                    <!-- Informasi Pribadi -->
                    <div class="p-6 sm:p-10">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Informasi Pribadi</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                            <div>
                                <p class="mb-2">
                                    <span class="font-semibold block">Nomor Telepon</span>
                                    <span class="text-sm"><i class="fa fa-phone"></i>
                                        {{ $dataUser->no_telepon }}</span>
                                </p>
                                <p class="mb-2">
                                    <span class="font-semibold block">Jenis Kelamin</span>
                                    @if ($dataUser->jenis_kelamin == 'L')
                                        <span class="text-sm"><i class="fa fa-user"></i> Laki-Laki</span>
                                        @else
                                        <span class="text-sm"><i class="fa fa-user"></i> Perempuan</span>
                                    @endif
                                </p>
                                <p class="mb-2">
                                    <span class="font-semibold block">Tahun Lahir</span>
                                    <span class="text-sm"><i class="fa fa-calendar"></i>
                                        {{ $dataUser->tanggal_lahir }}</span>
                                </p>
                            </div>
                            <div>
                                <p class="mb-2">
                                    <span class="font-semibold block">Alamat</span>
                                    <span class="text-sm"><i class="fa fa-map-marker"></i>
                                        {{ $dataUser->kecamatan }}, {{ $dataUser->kota }},
                                        {{ $dataUser->provinsi }}</span>
                                </p>
                                <p class="mb-2">
                                    <span class="font-semibold block">Kode Pos</span>
                                    <span class="text-sm"><i class="fa fa-envelope"></i>
                                        {{ $dataUser->kode_pos }}</span>
                                </p>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mt-6">
                            <h3 class="font-semibold text-gray-800 mb-2">Deskripsi</h3>
                            <p class="text-gray-700 text-sm">{{ $dataUser->deskripsi }}</p>
                        </div>
                    </div>

                    {{-- <!-- Galeri Foto -->
                    <div class="px-6 sm:px-10 pb-10">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Galeri Foto</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                            @foreach ($galery as $datagalery)
                                <img src="{{ asset('storage/' . $datagalery->foto) }}" alt="Gallery"
                                    class="rounded-lg object-cover w-full h-48 shadow-md">
                            @endforeach

                            @if ($galery->count() < 3)
                                <div onclick="openUploadModal()"
                                    class="flex justify-center items-center border-2 border-dashed border-gray-400 rounded-lg h-48 hover:bg-gray-100 transition cursor-pointer">
                                    <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 9h-4V7h-2v4H7v2h4v4h2v-4h4z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div> --}}

                    <!-- Galeri Foto -->
                    <div class="px-6 sm:px-10 pb-10">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Galeri Foto</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                            @foreach ($galery as $datagalery)
                                <div class="relative group overflow-hidden rounded-lg h-48 shadow-md">
                                    <img src="{{ asset('storage/' . $datagalery->foto) }}" alt="Gallery"
                                        class="object-cover w-full h-full">

                                    <!-- Overlay hitam dengan ikon hapus di tengah -->
                                    <div
                                        class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <form action="{{ route('galeri.destroy', $datagalery->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-white p-3 rounded-full hover:bg-red-600 transition">
                                                <!-- Icon hapus -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M6 6L18 18M6 18L18 6" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                            @if ($galery->count() < 3)
                                <div onclick="openUploadModal()"
                                    class="flex justify-center items-center border-2 border-dashed border-gray-400 rounded-lg h-48 hover:bg-gray-100 transition cursor-pointer">
                                    <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 9h-4V7h-2v4H7v2h4v4h2v-4h4z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>


                </div>
            </div>

            <!-- Modal Upload Galeri -->
            <div id="uploadModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60">
                <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md relative">
                    <button onclick="closeUploadModal()"
                        class="absolute top-2 right-2 text-gray-600 hover:text-red-600 text-xl cursor-pointer">&times;</button>
                    <h2 class="text-center text-2xl font-extrabold text-gray-800 mb-6">Upload Galeri</h2>
                    <form action="{{ route('profile.galery') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf
                        <div>
                            <label for="files" class="block text-sm font-medium text-gray-700 mb-2">Gambar
                                (maksimal 3):</label>
                            <input type="file" name="gallery[]" id="files"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                multiple>
                            <p class="mt-2 text-xs text-gray-500">Anda dapat mengunggah hingga 3 gambar.</p>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-semibold rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 cursor-pointer">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal Edit Profile -->
            <div id="editProfileModal"
                class="fixed inset-0 z-50 hidden flex  items-center justify-center bg-black/60">
                <div
                    class="bg-white p-4 sm:p-6 md:p-8 rounded-2xl shadow-2xl w-[90%] max-w-2xl relative overflow-y-auto max-h-[90vh]">
                    <button onclick="closeModalEdit()"
                        class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-2xl transition duration-200 cursor-pointer">&times;</button>

                    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Edit Profile</h2>
                    <hr class="mb-6 border-t border-gray-200">

                    <form action="{{ route('profile.update', $dataUser->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                            <!-- Nama -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama</label>
                                <input type="text" name="nama" value="{{ $dataUser->nama }}"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 shadow-sm">
                            </div>

                            <!-- Instansi -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Instansi</label>
                                <input type="text" name="instansi" value="{{ $dataUser->instansi }}"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 shadow-sm">
                            </div>

                            <!-- No Telepon -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Telepon</label>
                                <input type="text" name="no_telepon" value="{{ $dataUser->no_telepon }}"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 shadow-sm">
                            </div>

                            <!-- Tanggal Lahir -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ $dataUser->tanggal_lahir }}"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 shadow-sm">
                            </div>

                            <!-- Jenis Kelamin -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Jenis Kelamin</label>
                                <select name="jenis_kelamin"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200 shadow-sm">
                                    <option value="L"
                                        {{ $dataUser->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="P"
                                        {{ $dataUser->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                            </div>

                            <div class="col-span-2">
                                <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                                <div class="md:flex md:row md:space-x-4 w-full text-xs">
                                    <div class="w-full flex flex-col mb-3">
                                        <label class="font-semibold text-gray-600 py-2">Provinsi:<abbr
                                                title="required">*</abbr></label>
                                        <select
                                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                            name="provinsi" id="Editprovinsi" required>
                                            <option value="{{ $dataUser->provinsi }}">Pilih</option>
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
                                            name="kota" id="Editkota" required>
                                            <option value="{{ $dataUser->kota }}">Pilih</option>
                                        </select>
                                        @error('kota')
                                            <p class="text-red text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="md:flex md:row md:space-x-4 w-full text-xs">
                                    <div class="w-full flex flex-col mb-3">
                                        <label class="font-semibold text-gray-600 py-2">Kecamatan:<abbr
                                                title="required">*</abbr></label>
                                        <select
                                            class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                            name="kecamatan" id="Editkecamatan" required>
                                            <option value="{{ $dataUser->kecamatan }}">Pilih</option>
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
                                            name="kelurahan" id="Editkelurahan" required>
                                            <option value={{ $dataUser->kelurahan }}>Pilih</option>
                                        </select>
                                        @error('kelurahan')
                                            <p class="text-red text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Kode Pos<abbr
                                            title="required">*</abbr></label>
                                    <input type="text" name="kode_pos" id="kode_pos"
                                        class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        value="{{ $dataUser->kode_pos }}">
                                    @error('kode_pos')
                                        <p class="text-red text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="flex-1 py-2">
                            <label class="font-semibold text-gray-600 py-2" for="deskripsi">Deskripsi : </label>
                            <input
                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2"
                                type="text" name="deskripsi" id="deskripsi" value="{{ $dataUser->deskripsi }}"
                                required>
                        </div>
                        <div>
                            <label for="foto_kontrakan" class="block text-sm font-medium text-gray-700">Foto</label>
                            <input type="file" name="foto_banner" id="foto_kontrakan"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                        </div>
                        <!-- Tombol Simpan di sebelah kanan -->
                        <div class="flex justify-end pt-2">
                            <button type="submit"
                                class="w-full sm:w-auto px-6 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow-md transition duration-300 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>



            <!-- Script Modal GaleryTambah -->
            <script>
                function openUploadModal() {
                    document.getElementById('uploadModal').classList.remove('hidden');
                    document.getElementById('uploadModal').classList.add('flex');
                    document.body.classList.add('overflow-hidden'); // mencegah scroll
                }

                function closeUploadModal() {
                    document.getElementById('uploadModal').classList.add('hidden');
                    document.getElementById('uploadModal').classList.remove('flex');
                    document.body.classList.remove('overflow-hidden'); // izinkan scroll lagi
                }
            </script>

            {{-- Script Modal Edit --}}
            <script>
                // function openModalEdit() {
                //     document.getElementById('editProfileModal').classList.remove('hidden');
                //     document.getElementById('editProfileModal').classList.add('flex');
                //     document.body.classList.add('overflow-hidden'); // mencegah scroll
                // }

                function closeModalEdit() {
                    document.getElementById('editProfileModal').classList.add('hidden');
                    document.getElementById('editProfileModal').classList.remove('flex');
                    document.body.classList.remove('overflow-hidden'); // izinkan scroll lagi

                }
            </script>

            {{-- edit data --}}
            <script>
                async function openModalEdit(
                    provinsi = "{{ $dataUser->provinsi }}",
                    kota = "{{ $dataUser->kota }}",
                    kecamatan = "{{ $dataUser->kecamatan }}",
                    kelurahan = "{{ $dataUser->kelurahan }}"
                ) {
                    document.getElementById('editProfileModal').classList.remove('hidden');
                    document.getElementById('editProfileModal').classList.add('flex');
                    document.body.classList.add('overflow-hidden');

                    // Helper to set select options and select the correct value
                    function setOptions(selectId, items, selectedValue, withDataId = true) {
                        let options = `<option value="">Pilih</option>`;
                        items.forEach(item => {
                            let value = item.name || item;
                            let selected = value == selectedValue ? 'selected' : '';
                            let dataId = withDataId && item.id ? `data-id="${item.id}"` : '';
                            options += `<option value="${value}" ${dataId} ${selected}>${value}</option>`;
                        });
                        document.getElementById(selectId).innerHTML = options;
                    }

                    // Fetch provinces
                    let provinces = (await axios.get('/api/provinces')).data;
                    setOptions('Editprovinsi', provinces, provinsi);

                    // Get selected province id
                    let provSelect = document.getElementById('Editprovinsi');
                    let provId = provSelect.options[provSelect.selectedIndex]?.getAttribute('data-id');

                    // Fetch regencies/kota
                    let regencies = provId ? (await axios.get(`/api/regencies/${provId}`)).data : [];
                    setOptions('Editkota', regencies, kota);

                    // Get selected kota id
                    let kotaSelect = document.getElementById('Editkota');
                    let kotaId = kotaSelect.options[kotaSelect.selectedIndex]?.getAttribute('data-id');

                    // Fetch districts/kecamatan
                    let districts = kotaId ? (await axios.get(`/api/districts/${kotaId}`)).data : [];
                    setOptions('Editkecamatan', districts, kecamatan);

                    // Get selected kecamatan id
                    let kecSelect = document.getElementById('Editkecamatan');
                    let kecId = kecSelect.options[kecSelect.selectedIndex]?.getAttribute('data-id');

                    // Fetch villages/kelurahan
                    let villages = kecId ? (await axios.get(`/api/villages/${kecId}`)).data : [];
                    setOptions('Editkelurahan', villages, kelurahan, false);

                    // Event listeners for cascading selects
                    provSelect.onchange = async function () {
                        let id = this.options[this.selectedIndex]?.getAttribute('data-id');
                        let regencies = id ? (await axios.get(`/api/regencies/${id}`)).data : [];
                        setOptions('Editkota', regencies, '');
                        setOptions('Editkecamatan', [], '');
                        setOptions('Editkelurahan', [], '', false);
                    };

                    kotaSelect.onchange = async function () {
                        let id = this.options[this.selectedIndex]?.getAttribute('data-id');
                        let districts = id ? (await axios.get(`/api/districts/${id}`)).data : [];
                        setOptions('Editkecamatan', districts, '');
                        setOptions('Editkelurahan', [], '', false);
                    };

                    kecSelect.onchange = async function () {
                        let id = this.options[this.selectedIndex]?.getAttribute('data-id');
                        let villages = id ? (await axios.get(`/api/villages/${id}`)).data : [];
                        setOptions('Editkelurahan', villages, '', false);
                    };
                }
            </script>




        </x-slot:content>
    </x-template>
@endif
