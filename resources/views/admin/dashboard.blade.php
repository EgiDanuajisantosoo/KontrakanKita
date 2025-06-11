<x-layouts.app>
    <x-slot:content>

        <!-- Content Area -->
        <main class="flex-1 overflow-y-auto p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Kontrakan Tersedia</h2>
                    <p class="text-2xl font-bold text-blue-600 mt-2">{{ $totalTersedia}}</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Pengajuan Kontrakan</h2>
                    <p class="text-2xl font-bold text-green-600 mt-2">{{ $totalPending }}</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Group</h2>
                    <p class="text-2xl font-bold text-red-600 mt-2">{{ $totalForum }}</p>
                </div>
            </div>

            <!-- Table -->
            <div class="mt-8 bg-white shadow rounded-2xl">
                <div class="p-4 font-semibold text-gray-700 border-b">Daftar Admin</div>
                <table class="w-full table-auto text-left">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userAdmin as $data)
                            <tr class="border-t">
                                <td class="px-6 py-4">{{ $data->username }}</td>
                                <td class="px-6 py-4">{{ $data->email }}</td>
                                <td class="px-6 py-4">{{ $data->role }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
        </div>
    </x-slot:content>
    </x-layouts>
