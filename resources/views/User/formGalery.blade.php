{{-- <x-templateForm>
    <x-slot:title>
        Form Galery
    </x-slot:title>
    <x-slot:content>

        <body>
            <div class="container mx-auto mt-10">
                <h1 class="text-2xl font-bold mb-4">Form Galery</h1>
                <form action="{{ route('profile.galery') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="files" class="block text-gray-700">Image (max 3):</label>
                        <input type="file" name="gallery[]" id="files" class="border rounded px-3 py-2 w-full"
                            multiple>
                        <small class="text-gray-500">You can upload up to 3 files.</small>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
                </form>
            </div>
        </body>
    </x-slot:content>
</x-templateForm> --}}


<x-templateForm>
    <x-slot:title>
        Form Galery
    </x-slot:title>

    <x-slot:content>
        {{-- <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-lg border">
                <h2 class="text-center text-3xl font-extrabold text-gray-800 mb-6">Upload Galeri</h2>

                <form action="{{ route('profile.galery') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <label for="files" class="block text-sm font-medium text-gray-700 mb-2">Gambar (maksimal 3):</label>
                        <input
                            type="file"
                            name="gallery[]"
                            id="files"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            multiple
                        >
                        <p class="mt-2 text-xs text-gray-500">Anda dapat mengunggah hingga 3 gambar.</p>
                    </div>

                    <div>
                        <button
                            type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-semibold rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                        >
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div> --}}
    </x-slot:content>
</x-templateForm>

