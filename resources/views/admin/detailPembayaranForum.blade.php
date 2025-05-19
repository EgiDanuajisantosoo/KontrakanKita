@section('title', __('Transaksi'))
<x-layouts.app :title="__('transaksidp')">
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="w-full bg-white min-h-screen p-4">
        <div class="w-full overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">No</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Nama User</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Bukti Pembayaran</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($booking as $no => $data)
                        <tr>
                            <td class="px-4 py-2">{{ $no + 1 }}</td>
                            <td class="px-4 py-2">{{ $data->booking->user->username }}</td>
                            <td class="px-4 py-2">
                                <img src="{{ asset('storage/' . $data->bukti_pembayaran) }}" class="w-20 h-20 rounded-t-lg" alt="">
                            </td>
                            <td class="px-4 py-2">
                                <form action="{{ route('terimaDp', [$data->id]) }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs mr-2">Terima</button>
                                </form>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Tolak</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
