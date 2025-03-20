<x-template>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:content>
        {{-- <div class="content bg-[#003A9D] min-h-[20vh] md:">
            <h1 class="text-white text-sm p-5 font-bold ">Temukan kontrakan yang anda inginkan</h1>
        </div> --}}

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Kontrakan</title>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <div class="content bg-gray-100">
            <div class="headerContent bg-[#003A9D] min-h-[20vh]">

                <h1 class="text-white p-5 text-3xl font-bold mb-4">Temukan kontrakan yang anda inginkan</h1>
                {{-- <div class="bg-white p-4 rounded-lg shadow mb-6"> --}}
                <div class="search flex p-5 items-center gap-5 mb-4 w-[80px] md:w-xl">
                    <input type="text" placeholder="Cari berdasarkan lokasi, nama kontrakan..."
                        class="flex-1 bg-white p-2 border rounded-lg">
                    <button class="p-2 text-white border-2 border-white rounded-lg">Filter</button>
                </div>
                {{-- </div> --}}
            </div>
            <div class="container mx-auto p-5">


                <div class="cardColumn ">
                    <div class=" mb-4 bg-[#003A9D] w-sm rounded-lg">
                        <h2 class=" text-lg text-white font-semibold p-3">Rekomendasi berdasarkan lokasimu</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                        <!-- Rumah Mewah -->

                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardColumn2 pt-8">
                    <div class=" mb-4 bg-[#003A9D] w-sm rounded-lg">
                        <h2 class=" text-lg text-white font-semibold p-3">Rekomendasi berdasarkan lokasimu</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                        <!-- Rumah Mewah -->

                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow max-w-sm">
                            <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                alt="">
                            <div class="text p-5">
                                <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                <p class="text-gray-600">Bandung, Jawa Barat</p>
                                <p class="text-gray-800 font-bold">Rp. 100.000.000 / tahun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




                {{-- <div class="bg-white p-4 rounded-lg shadow mt-6">
            <h3 class="text-lg font-bold mb-4">Filter Lanjutan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <h4 class="font-semibold">Ruang Tamu</h4>
                    <div class="flex space-x-2">
                        <span>1️⃣</span>
                        <span>2️⃣</span>
                        <span>3️⃣</span>
                        <span>4️⃣</span>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold">Kamar Mandi</h4>
                    <div class="flex space-x-2">
                        <span>1️⃣</span>
                        <span>2️⃣</span>
                        <span>3️⃣</span>
                        <span>4️⃣</span>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold">Dapur</h4>
                    <div class="flex space-x-2">
                        <span>1️⃣</span>
                        <span>2️⃣</span>
                        <span>3️⃣</span>
                        <span>4️⃣</span>
                    </div>
                </div>
            </div>
            <button class="mt-4 p-2 bg-blue-500 text-white rounded-lg w-full">Terapkan</button>
        </div> --}}
            </div>
        </div>

        </html>
    </x-slot:content>
</x-template>
