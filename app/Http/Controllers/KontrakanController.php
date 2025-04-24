<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kontrakan;
use App\Models\GaleryKontrakan;
use App\Models\User;

class KontrakanController extends Controller
{
    public function index()
    {
        $kontrakan = Kontrakan::all();
        return view('PencariKontrakan.Kontrakan', compact('kontrakan'));
    }

    public function create()
    {
        return view('Kontrakan.create');
    }

    public function store(Request $request)
{
    // dd($dataUser);
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'deskripsi' => 'required|string',
        'tipe_properti' => 'required|string',
        'kamar_tidur' => 'required|integer',
        'kamar_mandi' => 'required|integer',
        'ukuran_properti' => 'required|string',
        'foto_kontrakan.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'provinsi' => 'required|string',
        'kota' => 'required|string',
        'kecamatan' => 'required|string',
        'kelurahan' => 'required|string',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
        'fasilitas' => 'array',
        'fasilitas.*' => 'exists:fasilitas,id',
        'fasilitas_tambahan' => 'nullable|string',
    ]);


    $kontrakan = new Kontrakan();
    $kontrakan->user_id = auth()->user()->id;
    $kontrakan->nama = $request->nama;
    $kontrakan->alamat = $request->alamat;
    $kontrakan->harga = $request->harga;
    $kontrakan->deskripsi = $request->deskripsi;
    $kontrakan->tipe_properti = $request->tipe_properti;
    $kontrakan->ukuran_properti = $request->ukuran_properti;
    $kontrakan->kamar_tidur = $request->kamar_tidur;
    $kontrakan->kamar_mandi = $request->kamar_mandi;
    $kontrakan->provinsi = $request->provinsi;
    $kontrakan->kota = $request->kota;
    $kontrakan->kecamatan = $request->kecamatan;
    $kontrakan->kelurahan = $request->kelurahan;
    $kontrakan->latitude = $request->latitude;
    $kontrakan->longitude = $request->longitude;
    $kontrakan->fasilitas_tambahan = $request->fasilitas_tambahan;
    $kontrakan->status = 'pending';
    $kontrakan->save();

    if ($request->hasFile('foto_kontrakan')) {
        foreach ($request->file('foto_kontrakan') as $image) {
            $galleryPath = $image->store('galleryKontrakan', 'public');
            $galleryKontrakan = new GaleryKontrakan();
            $galleryKontrakan->kontrakan_id = $kontrakan->id;
            $galleryKontrakan->foto_kontrakan = $galleryPath;
            $galleryKontrakan->save();
            // dd($galleryKontrakan);
        }
    }

    if ($request->has('fasilitas')) {
        $kontrakan->fasilitasUmum()->sync($request->fasilitas);
    }

    $dataUser = User::findOrFail(Auth::id());
    if ($dataUser->role == 'pencari') {
        $dataUser->role = 'pemilik';
        $dataUser->save();
    }

    return redirect()->route('kontrakan.index')->with('success', 'Kontrakan created successfully.');
}


public function show($id)
{
    $detailKontrakan = Kontrakan::findOrFail($id);
    $fasilitasUmum = FasilitasUmum::where('kontrakan_id', $id)->get();
    return view('Kontrakan.show', compact('detailKontrakan', 'fasilitasUmum'));
}

    public function edit($id)
    {
        $kontrakan = Kontrakan::findOrFail($id);
        $fasilitasUmum = FasilitasUmum::where('kontrakan_id', $id)->get();
        $fasilitas = Fasilitas::all();
        return view('Kontrakan.edit', compact('kontrakan', 'fasilitasUmum', 'fasilitas'));
    }

    public function update(Request $request, $id){
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'deskripsi' => 'nullable|string',
        'tipe_properti' => 'required|string|in:kontrakan,apartemen',
        'ukuran_properti' => 'required|string',
        'kamar_tidur' => 'required|integer',
        'kamar_mandi' => 'required|integer',
        'foto_kontrakan.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'provinsi' => 'required|string',
        'kota' => 'required|string',
        'kecamatan' => 'required|string',
        'kelurahan' => 'required|string',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
        'fasilitas' => 'array',
        'fasilitas.*' => 'exists:fasilitas,id',
        'fasilitas_tambahan' => 'nullable|string',
    ]);

    $kontrakan = Kontrakan::findOrFail($id);
    $kontrakan->nama = $request->nama;
    $kontrakan->alamat = $request->alamat;
    $kontrakan->harga = $request->harga;
    $kontrakan->deskripsi = $request->deskripsi;
    $kontrakan->tipe_properti = $request->tipe_properti;
    $kontrakan->ukuran_properti = $request->ukuran_properti;
    $kontrakan->kamar_tidur = $request->kamar_tidur;
    $kontrakan->kamar_mandi = $request->kamar_mandi;
    $kontrakan->provinsi = $request->provinsi;
    $kontrakan->kota = $request->kota;
    $kontrakan->kecamatan = $request->kecamatan;
    $kontrakan->kelurahan = $request->kelurahan;
    $kontrakan->latitude = $request->latitude;
    $kontrakan->longitude = $request->longitude;
    $kontrakan->fasilitas_tambahan = $request->fasilitas_tambahan;

    $kontrakan->save();

    return redirect()->route('kontrakan.index')->with('success', 'Kontrakan updated successfully.');
    }

    public function destroy($id)
    {
        $kontrakan = Kontrakan::findOrFail($id);
        $kontrakan->delete();

        return redirect()->route('kontrakan.index')->with('success', 'Kontrakan deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $kontrakan = Kontrakan::where('nama', 'LIKE', "%$query%")
            ->orWhere('alamat', 'LIKE', "%$query%")
            ->orWhere('harga', 'LIKE', "%$query%")
            ->get();

        return view('Kontrakan.index', compact('kontrakan'));
    }

    public function filter(Request $request)
    {
        $query = $request->input('query');
        $tipe_properti = $request->input('tipe_properti');
        $harga_min = $request->input('harga_min');
        $harga_max = $request->input('harga_max');

        $kontrakan = Kontrakan::where('nama', 'LIKE', "%$query%")
            ->orWhere('alamat', 'LIKE', "%$query%")
            ->orWhere('harga', 'LIKE', "%$query%");

        if ($tipe_properti) {
            $kontrakan->where('tipe_properti', $tipe_properti);
        }

        if ($harga_min) {
            $kontrakan->where('harga', '>=', $harga_min);
        }

        if ($harga_max) {
            $kontrakan->where('harga', '<=', $harga_max);
        }

        return view('Kontrakan.index', compact('kontrakan'));
    }
}
