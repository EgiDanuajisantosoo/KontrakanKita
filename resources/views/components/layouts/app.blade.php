<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
<div class="flex-1 flex flex-col">
    @include('admin.partials.head')
    <!-- Container -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <x-layouts.menu.vertical></x-layouts.menu.vertical>

        <!-- Main Content -->

        {{ $content }}

    </div>
</div>
</body>

</html>
