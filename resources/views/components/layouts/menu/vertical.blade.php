<aside class="w-64 bg-white shadow-md">
    <div class="p-6 text-xl font-bold text-blue-600">Admin Panel</div>
    <nav class="mt-6">
        <a href="{{ route('dashboard') }}"
           class="block px-6 py-2 text-gray-700 hover:bg-blue-100 {{ request()->routeIs('dashboard') ? 'bg-blue-100 font-semibold text-blue-700' : '' }}">
            Dashboard
        </a>
        <a href="{{ route('pengajuan-kontrakan') }}"
           class="block px-6 py-2 text-gray-700 hover:bg-blue-100 {{ request()->routeIs('pengajuan-kontrakan') ? 'bg-blue-100 font-semibold text-blue-700' : '' }}">
            Pengajuan Kontrakan
        </a>
        <a href="{{ route('pembayaran-dp') }}"
           class="block px-6 py-2 text-gray-700 hover:bg-blue-100 {{ request()->routeIs('pembayaran-dp') ? 'bg-blue-100 font-semibold text-blue-700' : '' }}">
            Pembayarab Dp
        </a>
        <a href="{{ route('pembayaran-pelunasan') }}"
           class="block px-6 py-2 text-gray-700 hover:bg-blue-100 {{ request()->routeIs('pembayaran-pelunasan') ? 'bg-blue-100 font-semibold text-blue-700' : '' }}">
            Pembayaran Pelunasan
        </a>
        {{-- <a href="{{ route('settings') }}"
           class="block px-6 py-2 text-gray-700 hover:bg-blue-100 {{ request()->routeIs('settings') ? 'bg-blue-100 font-semibold text-blue-700' : '' }}">
            Settings
        </a> --}}
    </nav>
</aside>
