<x-layouts.app>
    <x-slot:content>

            <!-- Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <h2 class="text-lg font-semibold text-gray-700">Total Users</h2>
                        <p class="text-2xl font-bold text-blue-600 mt-2">1,234</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <h2 class="text-lg font-semibold text-gray-700">Total Orders</h2>
                        <p class="text-2xl font-bold text-green-600 mt-2">567</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white p-6 rounded-2xl shadow">
                        <h2 class="text-lg font-semibold text-gray-700">Revenue</h2>
                        <p class="text-2xl font-bold text-red-600 mt-2">$12,345</p>
                    </div>
                </div>

                <!-- Table -->
                <div class="mt-8 bg-white shadow rounded-2xl">
                    <div class="p-4 font-semibold text-gray-700 border-b">Recent Users</div>
                    <table class="w-full table-auto text-left">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-6 py-3">Name</th>
                                <th class="px-6 py-3">Email</th>
                                <th class="px-6 py-3">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t">
                                <td class="px-6 py-4">John Doe</td>
                                <td class="px-6 py-4">john@example.com</td>
                                <td class="px-6 py-4">Admin</td>
                            </tr>
                            <tr class="border-t">
                                <td class="px-6 py-4">Jane Smith</td>
                                <td class="px-6 py-4">jane@example.com</td>
                                <td class="px-6 py-4">Editor</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </x-slot:content>
</x-layouts>
