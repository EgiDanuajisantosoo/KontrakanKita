<x-template>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:content>


        <div class="content bg-gray-100">
            <div class="headerContent bg-[#003A9D] min-h-auto">

                <h1 class="text-white p-5 text-3xl font-bold mb-4">Ayo Kelola Kontrakanmu!</h1>

            </div>
            <div class="container mx-auto p-5">
                <div class="cardColumn ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <!-- Rumah Mewah -->


                        <a href="DetailKontrakan">
                            <div class="bg-white rounded-lg shadow">
                                <img src="{{ asset('Assets/rumah/house1.jpg') }}" class="w-full rounded-t-lg"
                                    alt="">
                                <div class="text p-3 md:p-5">
                                    <div class="flex justify-between">
                                        <h3 class="text-lg font-bold">Rumah Mewah</h3>
                                        <div class="flex mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                                            </svg>
                                            <p class="text-sm font-light">Hubungi Pemilik</p>
                                        </div>
                                    </div>

                                    <p class="text-gray-600 font-normal text-sm">Bandung, Jawa Barat</p>

                                    <div class="flex gap-3 mt-3">
                                        <div class="flex gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                                            </svg>
                                            <p class="text-[10px] md:text-xs">8 kamar tidur</p>
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
                                            <p class="text-[10px] md:text-xs">2 kamar mandi</p>
                                        </div>

                                        <div class="flex gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 3a2 2 0 1 0 0 4a2 2 0 0 0 0-4m-2 9a2 2 0 1 1 4 0a2 2 0 0 1-4 0m0 7a2 2 0 1 1 4 0a2 2 0 0 1-4 0" />
                                            </svg>
                                            <p class="text-[10px] md:text-xs">lainnya</p>
                                        </div>


                                        <!-- Tombol Aksi -->

                                    </div>
                                </div>
                                <div class=" flex justify-end gap-4 p-3">
                                    <button
                                        class="bg-red-600 text-white px-3 py-1 text-xs rounded-lg hover:bg-red-700">Hapus</button>
                                    <button
                                        class="bg-green-600 text-white px-3 py-1 text-xs rounded-lg hover:bg-green-700">Edit</button>
                                    <button
                                        class="bg-blue-600 text-white px-3 py-1 text-xs rounded-lg hover:bg-blue-700">Lihat</button>
                                </div>
                            </div>

                        </a>





                    </div>
                </div>


            </div>





        </div>



    </x-slot:content>
</x-template>
