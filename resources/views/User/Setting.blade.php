<x-template>
    <x-slot:title>

    </x-slot:title>

    <x-slot:content>

        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6 mt-[10%]">
            <h2 class="text-xl font-semibold">Pengaturan Akun</h2>
            <p class="text-gray-500 text-sm">Atur informasi akun Anda di sini</p>

            <div class="mt-4 border-t  border-gray-300">
                <!-- Email -->
                <div class="flex justify-between items-center py-3 border-b  border-gray-300">
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-semibold">evankeane15@gmail.com</p>
                    </div>
                    <a href="#" class="text-blue-500 text-sm font-medium hover:underline">Edit</a>
                </div>

                <!-- Kata Sandi -->
                <div class="flex justify-between items-center py-3 border-b border-gray-300">
                    <div>
                        <p class="text-sm text-gray-500">Kata Sandi</p>
                        <p class="font-semibold">********</p>
                    </div>
                    <a href="#" class="text-blue-500 text-sm font-medium hover:underline">Edit</a>
                </div>

                <!-- Hapus Akun -->
                <div class="flex justify-between items-center py-4">
                    <div>
                        <p class="text-sm text-gray-500">Hapus Akun</p>

                    </div>
                    <a href="#" class="text-red-500 text-sm font-medium hover:underline">Hapus</a>
                </div>
            </div>
        </div>

    </x-slot:content>
</x-template>
