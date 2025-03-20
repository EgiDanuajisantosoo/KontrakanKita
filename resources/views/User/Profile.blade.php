<x-template>
    <x-slot:title>
        Profile
    </x-slot:title>

    <x-slot:content>
        <div class="flex justify-center justify-items-center pt-25 overflow-x-hidden min-w-screen">
            <div class=" w-full max-w-4xl">
                <div class="flex mt-5 gap-3 justify-items-start pl-5 sm:pl-[25%] md:pl-[20%] mb-2">
                    <h1 class="text-[12px] sm:text-xl md:text-2xl font-bold text-blue-900 ">Alexander Frederichsen</h1>
                    {{-- <p class="text-[12px] md:text-xl mt-2">|</p> --}}
                    <p class="text-[12px] sm:text-sm sm:mt-1 md:text-sm md:mt-2 border-l-2 pl-2 pr-2 border-r-2 border-black">Dogi University</p>
                    {{-- <p class="text-[12px] md:text-xl mt-2">|</p> --}}
                    <p class="text-[12px] sm:text-sm sm:mt-1 md:text-sm md:mt-2">Pemilik Kontrakan</p>
                </div>
                <!-- Kartu Profil -->
                <div
                    class="relative bg-blue-700 text-white rounded-t-lg p-6 flex flex-col sm:flex-row items-center sm:items-start">
                    <div
                        class="w-30 h-30 rounded-lg overflow-hidden border-4 border-white sm:absolute sm:-top-12 sm:left-6">
                        <img src="{{asset('Assets/foto profile dan gallery/ˀˀ ๑𝐍𝐒〻𝗸𝗮𝗸𝗮𝘀𝗵𝗶〻⌕ 𝗶𝗰𝗼𝗻𝘀 ๛ 🍒 ᵈᵒ ⁿᵒᵗ ʳᵉᵖᵒˢᵗ ʷⁱᵗʰᵒᵘᵗ ᵐʸ ᵖᵉʳᵐⁱˢˢⁱᵒⁿ ༉_.jpeg')}}" alt="Profile"
                            class="w-full h-full object-cover">
                    </div>

                        <div class="text-center sm:text-left sm:ml-28 mt-4 sm:mt-0 w-full">
                            <div class="mt-1 space-y-2 pl-[6%] text-gray-300">
                                <p class="flex items-center justify-center sm:justify-start"><span class="mr-2">📞</span>
                                    081237654789</p>
                                <p class="flex items-center justify-center sm:justify-start"><span class="mr-2">✉️</span>
                                    cutedogy1113@dogemail.com</p>
                                <p class="flex items-center justify-center sm:justify-start"><span class="mr-2">📍</span>
                                    Bandung, Jawa Barat, Indonesia, 40111</p>
                            </div>
                        </div>

                        <button class="mt-15 min-w-25 md:min-w-25 bg-white text-black text-center rounded-lg hover:bg-gray-100 cursor-pointer ">
                            Edit Profile
                        </button>



                </div>

                <!-- Deskripsi -->
                <div class="cardContent bg-white rounded-lg shadow-lg">

                    <div class=" p-6 text-center">
                        <p class="text-lg italic text-gray-700">""</p>
                        <p class="text-gray-600 mt-2">
                            Halo! Aku Alexander, mahasiswa Dogi University yang ahli dalam menggonggong manis dan mencuri
                            hati.
                            Hidupku penuh dengan lari-lari, camilan enak, dan tidur siang berkualitas. Siap menyebarkan
                            kebahagiaan ke sekeliling! 🐾
                        </p>
                        <p class="text-lg italic text-gray-700 mt-2">""</p>
                    </div>

                    <!-- Gallery -->
                    <div class="p-6">
                        <h2 class="text-center text-xl font-semibold text-gray-800">Gallery</h2>
                        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <img src="{{asset('Assets/foto profile dan gallery/e4d36313-13a0-46d8-9e59-a613c64d737c.jpeg')}}" alt="Gallery 1"
                                class="rounded-lg object-cover w-full h-40 sm:h-48">
                            <img src="{{asset('Assets/foto profile dan gallery/Kakashi Hatake.jpeg')}}" alt="Gallery 2"
                                class="rounded-lg object-cover w-full h-40 sm:h-48">
                            <img src="{{asset('Assets/foto profile dan gallery/Kakashi.jpeg')}}" alt="Gallery 3"
                                class="rounded-lg object-cover w-full h-40 sm:h-48">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </x-slot:content>
</x-template>
