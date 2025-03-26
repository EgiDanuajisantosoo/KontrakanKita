<x-template>
    <x-slot:title>

    </x-slot:title>

    <x-slot:content>

        <div class="w-full h-screen bg-cover bg-center bg-no-repeat shadow-lg overflow-hidden"
            style="background-image: url('{{ asset('Assets/rumah/charming-yellow-house-with-wooden-windows-green-grassy-garden.jpg') }}'); background-size: cover;">

            <div class="text-justify pt-[13%] pl-[5%]">
                <h1 class="text-6xl font-bold text-white ">Punya Kontrakan Kosong? <br>Kami Punya Solusinya!</h1>
                <p class="text-xl font-semibold text-white pt-2 pb-2">Daftarkan kontrakan Anda dan temukan penyewa dengan cepat dan mudah. <br>
                    Jangkau lebih banyak calon penghuni sekarang!</p>

                    <div class=" bg-gray-300 rounded-2xl text-center w-[100px] h-[30px]  ">
                        <p class="font-medium text-xl">Mulai</p>
                    </div>
            </div>

            {{-- <div class="flex justify-between">
                <div class= "w-[13%] bg-red-950">
                    <div class="flex justify-between">
                        <img src="{{asset('Assets/rumah/house-1867187_1920.jpg')}}" class="w-[50%] h-[50%]" alt="">
                        <p class="font-semibold text-sm text-white opacity-100 z-10">Cari Kontrakan?<br>
                            Kami Punya Solusinya</p>
                    </div>

                </div>
            </div> --}}
        </div>
    </x-slot:content>
</x-template>
