<x-template>
    <x-slot:title>Pembayaran</x-slot:title>
    <x-slot:content>

        <div class="max-w-xl mx-auto p-6 bg-white rounded-2xl shadow-md space-y-6">
            <h2 class="text-2xl font-bold text-gray-800">Pembayaran Kontrakan</h2>

            <!-- Info Kontrakan -->
            <div class="border rounded-xl p-4 bg-gray-50">
                <p class="text-sm text-gray-600">Nama Kontrakan:</p>
                <p class="text-lg font-semibold text-gray-800">Kontrakan Pak Budi</p>
                <p class="text-sm text-gray-600 mt-2">Alamat: Jl. Mawar No. 12, Bandung</p>
            </div>

            <!-- Ringkasan Pembayaran -->
            <div class="border rounded-xl p-4 bg-gray-50 space-y-2">
                <div class="flex justify-between">
                    <span>Sewa per bulan</span>
                    <span>Rp1.000.000</span>
                </div>
                <div class="flex justify-between">
                    <span>Biaya admin</span>
                    <span>Rp25.000</span>
                </div>
                <hr />
                <div class="flex justify-between font-bold">
                    <span>Total</span>
                    <span>Rp1.025.000</span>
                </div>
            </div>

            <!-- Opsi Pembayaran (Full / DP) -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Pembayaran</label>
                <select
                    class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option>Bayar Penuh</option>
                    <option>DP</option>
                </select>
            </div>

            <!-- Metode Pembayaran -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Metode Pembayaran</label>
                <select
                    class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option>Transfer Bank</option>
                    <option>QRIS</option>
                    <option>e-Wallet (OVO, Dana, dll)</option>
                </select>
            </div>



            <!-- Upload Bukti Transfer -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Upload Bukti Transfer</label>
                <input type="file"
                    class="block w-full text-sm text-gray-600
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-indigo-50 file:text-indigo-700
      hover:file:bg-indigo-100
    " />
                <p class="text-xs text-gray-500 mt-1">Format yang diperbolehkan: JPG, PNG, PDF. Max 2MB.</p>
            </div>

            <!-- Tombol Bayar -->
            <button class="w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-4 rounded-xl transition">
                Kirim Pembayaran
            </button>

            <!-- Status -->
            <!-- <p class="text-center text-green-600 font-semibold">Bukti pembayaran telah dikirim!</p> -->
        </div>



    </x-slot:content>

</x-template>
