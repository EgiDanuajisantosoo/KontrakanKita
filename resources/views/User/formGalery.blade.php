<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Form Galery</h1>
        <form action="{{ route('profile.galery') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" name="name" id="name" class="border rounded px-3 py-2 w-full">
            </div> --}}
            <div class="mb-4">
                <label for="files" class="block text-gray-700">Image (max 3):</label>
                <input type="file" name="gallery[]" id="files" class="border rounded px-3 py-2 w-full" multiple>
                <small class="text-gray-500">You can upload up to 3 files.</small>
            </div>
            {{-- <div class="mb-4">
                <label for="image" class="block text-gray-700">Image:</label>
                <input type="file" name="image" id="image" class="border rounded px-3 py-2 w-full">
            </div> --}}
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</body>
</html>
