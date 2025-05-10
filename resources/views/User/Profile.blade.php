@if ($dataUser == null)
<x-template>
    <x-slot:title>
        Profile
    </x-slot:title>
    <x-slot:content>
<div class="px-64 py-24">
    <div class="shadow-2xl">
        <div class="p-12 rounded-tl-2xl rounded-tr-2xl" style="background: #003A9D ">
            <h2 class="font-semibold text-2xl text-white ">Tambah Profile</h2>
        </div>
        <form class="p-12 flex-col" action="{{ route('profile.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex-1 py-2">
                <label class="font-semibold text-gray-600 py-2" class="font-semibold text-gray-600 py-2" for="nama">Nama : </label>
                <input class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2" type="text" name="nama" id="nama" required>
            </div>
            <div class="flex-1 py-2">
                <label class="font-semibold text-gray-600 py-2" for="no_telp">No_Telp : </label>
                <input class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2" type="text" name="no_telp" id="no_telp" required>
            </div>
            <div class="flex-1 py-2">
                <label class="font-semibold text-gray-600 py-2" for="deskripsi">Deskripsi : </label>
                <input class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2" type="text" name="deskripsi" id="deskripsi" required>
            </div>
            <div class="flex-1 py-2">
                <label class="font-semibold text-gray-600 py-2" for="jenis_kelamin">Jenis Kelamin : </label>
                <br>
                <input class="text-xs" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" required> Laki-laki
                <input class="text-xs" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" required> Perempuan
            </div>
            <div class="flex-1 py-2">
                <label class="font-semibold text-gray-600" for="instansi">Instansi : </label>
                <input class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2 mb-2 mt-2" type="text" name="instansi" id="instansi" required>
            </div>
            <div class="flex-1 py-2">
                <label class="font-semibold text-gray-600 py-2" for="fotoProfile">Foto Profile :</label>
                <input class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs py-2" type="file" name="fotoProfile" id="fotoProfile" required>
            </div>
            <div class="flex-1 py-2">
                <label class="font-semibold text-gray-600 py-2" for="tahun_lahir">Tahun Lahir : </label>
                <input class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 text-red text-xs" type="date" name="tahun_lahir" id="tahun_lahir" required>
            </div>

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

            <div class="button-group flex justify-end pt-6 mx-auto block gap-2" style="margin: auto">
                <button class="px-10 py-3 font-bold rounded-md text-white" style="background: #003A9D" type="submit">Simpan</button>
                <button class="px-10 py-3 bg-red-700 font-bold rounded-md text-white" type="reset">Reset</button>
            </div>

        </form>
        <div class="p-12 rounded-bl-2xl rounded-br-2xl" style="background: #003A9D"></div>
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

            <div class="flex justify-center justify-items-center pt-25 overflow-x-hidden min-w-screen">
                <div class=" w-full max-w-4xl">
                    <div class="flex mt-5 gap-3 justify-items-start pl-5 sm:pl-[25%] md:pl-[20%] mb-2">
                        <h1 class="text-[12px] sm:text-xl md:text-2xl font-bold text-blue-900 ">{{ $dataUser->nama }}
                        </h1>
                        {{-- <p class="text-[12px] md:text-xl mt-2">|</p> --}}
                        <p
                            class="text-[12px] sm:text-sm sm:mt-1 md:text-sm md:mt-2 border-l-2 pl-2 pr-2 border-r-2 border-black">
                            {{ $dataUser->instansi }}</p>
                        {{-- <p class="text-[12px] md:text-xl mt-2">|</p> --}}
                        <p class="text-[12px] sm:text-sm sm:mt-1 md:text-sm md:mt-2">{{ $dataUser->user->role }}</p>
                    </div>
                    <!-- Kartu Profil -->
                    <div
                        class="relative bg-blue-700 text-white rounded-t-lg p-6 flex flex-col sm:flex-row items-center sm:items-start">
                        <div
                            class="w-30 h-30 rounded-lg overflow-hidden border-4 border-white sm:absolute sm:-top-12 sm:left-6">
                            <img src="{{ asset('storage/' . $dataUser->foto_profile) }}" alt="Profile"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="text-center sm:text-left sm:ml-28 mt-4 sm:mt-0 w-full">
                            <div class="mt-1 space-y-2 pl-[6%] text-gray-300">
                                <p class="flex items-center justify-center sm:justify-start"><span
                                        class="mr-2">📞</span>
                                    {{ $dataUser->no_telepon }}</p>
                                <p class="flex items-center justify-center sm:justify-start"><span
                                        class="mr-2">✉️</span>
                                    {{ $dataUser->user->email }}</p>
                                <p class="flex items-center justify-center sm:justify-start"><span
                                        class="mr-2">📍</span>
                                    {{ $dataUser->kota }},{{ $dataUser->provinsi }}</p>
                            </div>
                        </div>

                        <button
                            class="mt-15 min-w-25 md:min-w-25 bg-white text-black text-center rounded-lg hover:bg-gray-100 cursor-pointer ">
                            Edit Profile
                        </button>



                    </div>

                    <!-- Deskripsi -->
                    <div class="cardContent bg-white rounded-lg shadow-lg">

                        <div class=" p-6 text-center">
                            <p class="text-lg italic text-gray-700">""</p>
                            <p class="text-gray-600 mt-2">
                                {{ $dataUser->deskripsi }}
                            </p>
                            <p class="text-lg italic text-gray-700 mt-2">""</p>
                        </div>

                        <!-- Gallery -->
                        <div class="p-6">
                            <h2 class="text-center text-xl font-semibold text-gray-800">Gallery</h2>
                            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                                @foreach ($galery as $datagalery)
                                    <img src="{{ asset('storage/' . $datagalery->foto) }}" alt="Gallery 2"
                                        class="rounded-lg object-cover w-full h-40 sm:h-48">
                                @endforeach
                                {{-- <img src="{{ asset('Assets/foto profile dan gallery/e4d36313-13a0-46d8-9e59-a613c64d737c.jpeg') }}"
                                    alt="Gallery 1" class="rounded-lg object-cover w-full h-40 sm:h-48">
                                <img src="{{ asset('Assets/foto profile dan gallery/Kakashi Hatake.jpeg') }}"
                                    alt="Gallery 2" class="rounded-lg object-cover w-full h-40 sm:h-48">
                                <img src="{{ asset('Assets/foto profile dan gallery/Kakashi.jpeg') }}" alt="Gallery 3"
                                    class="rounded-lg object-cover w-full h-40 sm:h-48"> --}}
                                @if ($galery->count() < 3)
                                    <a href="/formGalery"
                                        class="rounded-lg object-cover border-2 border-solid w-full h-40 sm:h-48 flex justify-center items-center">
                                        <svg class="h-20 w-20" xmlns="http://www.w3.org/2000/svg" width="2em"
                                            height="2em" viewBox="0 0 24 24">
                                            <path fill="#000"
                                                d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m5 9h-4V7h-2v4H7v2h4v4h2v-4h4z" />
                                        </svg>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </x-slot:content>
    </x-template>
@endif
