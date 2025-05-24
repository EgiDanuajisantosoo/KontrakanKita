<x-layouts.app>
    <x-slot:content>
    <div class="w-full bg-white min-h-screen p-4">
        <div class="w-full overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">No</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Nama Kontrakan</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Nama Group</th>
                        {{-- <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">dp_kontrakan</th> --}}
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Dp Kontrakan</th>
                        {{-- <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Tipe Properti</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Alamat</th> --}}
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($booking as $no=> $data)
                    <tr>
                        <td class="px-4 py-2">{{ $no+1 }}</td>
                        {{-- <td class="px-4 py-2">{{ $data->user->username }}</td> --}}
                        <td class="px-4 py-2">{{ $data->kontrakan->nama }}</td>
                        <td class="px-4 py-2">{{ $data->group->nama_group }}</td>
                        {{-- <td class="px-4 py-2">Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($data->dp_harga, 0, ',', '.') }}</td> --}}
                        <td class="px-4 py-2">{{ $data->dp_kontrakan }}</td>
                        <td class="px-4 py-2">{{ $data->dp_kontrakan }}</td>
                        <td class="px-4 py-2">
                            <form action="{{ route('terimaKontrakan', [$data->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs mr-2">Terima</button>
                            </form>
                            <a href="{{ route('admin.detailtransaksiDp', [$data->id]) }}">
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Detail Forum</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </x-slot:content>
</x-layouts.app>
