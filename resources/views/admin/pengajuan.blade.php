@section('title', __('Pengajuan'))
<x-layouts.app :title="__('pengajuan')">
    <div class="w-full bg-white min-h-screen p-4">
        <div class="w-full overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">No</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Nama User</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Nama Kontrakan</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Harga</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Dp Kontrakan</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Tipe Properti</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Alamat</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($kontrakan as $no=> $data)
                    <tr>
                        <td class="px-4 py-2">{{ $no+1 }}</td>
                        <td class="px-4 py-2">{{ $data->user->username }}</td>
                        <td class="px-4 py-2">{{ $data->nama }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($data->dp_harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $data->tipe_properti }}</td>
                        <td class="px-4 py-2">{{ $data->provinsi }},{{ $data->kota }},{{ $data->kecamatan }}</td>
                        <td class="px-4 py-2">
                            <form action="{{ route('terimaKontrakan', [$data->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs mr-2">Terima</button>
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
