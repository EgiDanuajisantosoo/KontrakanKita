<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kontrakan;
use App\Models\GaleryKontrakan;
use App\Models\FasilitasUmum;
use App\Models\Booking;
use App\Models\User;
use App\Models\Fasilitas;
use App\Models\Group;
use App\Models\GroupUser;

class KontrakanController extends Controller
{
    public function index()
    {
        $kontrakan = Kontrakan::where('status', 'tersedia')->get();

        return view('PencariKontrakan.Kontrakan', compact('kontrakan'));
    }

    public function create()
    {
        return view('Kontrakan.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'uang_dp' => 'required|numeric',
            'deskripsi' => 'required|string',
            'tipe_properti' => 'required|string',
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'ukuran_properti' => 'required|string',
            'foto_kontrakan.*' => 'image|mimes:jpeg,jpg,png,gif,webp',
            'foto_banner' => 'image|mimes:jpeg,png,jpg,gif',
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

        // Jika validasi gagal, Laravel otomatis redirect back dengan error dan input lama

        if ($request->hasFile('foto_banner')) {
            $galleryPath = $request->file('foto_banner')->store('galleryKontrakan', 'public');
        } else {
            $galleryPath = null;
        }

        $kontrakan = new Kontrakan();
        $kontrakan->user_id = Auth::id();
        $kontrakan->nama = $request->nama;
        $kontrakan->alamat = $request->alamat;
        $kontrakan->harga = $request->harga;
        $kontrakan->dp_harga = $request->uang_dp;
        $kontrakan->deskripsi = $request->deskripsi;
        $kontrakan->tipe_properti = $request->tipe_properti;
        $kontrakan->ukuran_properti = $request->ukuran_properti;
        $kontrakan->kamar_tidur = $request->kamar_tidur;
        $kontrakan->kamar_mandi = $request->kamar_mandi;
        $kontrakan->provinsi = $request->provinsi;
        $kontrakan->kota = $request->kota;
        $kontrakan->kecamatan = $request->kecamatan;
        $kontrakan->kelurahan = $request->kelurahan;
        $kontrakan->banner = $galleryPath;
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


    public function showNonForum($id)
    {
        $type = 'nonForum';
        $detailKontrakan = Kontrakan::with('fasilitas', 'user')->findOrFail($id);
        // dd($detailKontrakan->user->username);
        $galleryKontrakan = GaleryKontrakan::where('kontrakan_id', $id)->get();
        $group = Auth::check() ? Auth::user()->groups->first() : null;
        $booking = Booking::where('user_id', Auth::id())->first();
        // dd($booking);
        // $fasilitasUmum = FasilitasUmum::where('kontrakan_id', $id)->with('kontrakans')->get();
        // return view('User.DetailKontrakan', compact('detailKontrakan', 'galleryKontrakan', 'type', 'group'));
        return view('User.DetailKontrakanSementara', compact('booking','detailKontrakan', 'galleryKontrakan', 'type', 'group'));
    }

    public function showForum($id)
    {
        $type = 'forum';
        $detailKontrakan = Kontrakan::with('fasilitas')->findOrFail($id);
        $galleryKontrakan = GaleryKontrakan::where('kontrakan_id', $id)->get();
        $group = Auth::check() ? Auth::user()->groups->first() : null;
        $booking = Booking::where('user_id', Auth::id())->first();
        $userAdmin = GroupUser::where('group_id', $group->id)->where('user_id',Auth::id())->first();
        // $fasilitasUmum = FasilitasUmum::where('kontrakan_id', $id)->with('kontrakans')->get();
        return view('User.DetailKontrakanSementara', compact('userAdmin','booking','detailKontrakan', 'galleryKontrakan', 'type', 'group'));
    }

    public function bookingForum(Request $request, $id)
    {

        $request->validate([
            'tanggal_checkin' => 'required|date',
            'lama_mengontrak' => 'required|integer',
        ]);
        // dd($request->all());
        // dd($request->all());
        $checkBooking = Booking::where('user_id', Auth::id())->first();
        $group = Auth::user()->groups->first()->id;
        // dd($group);
        if ($checkBooking) {
            return redirect()->route('detail.kontrakanForum', $id)->withErrors(['user' => 'User already booked.']);
        }

        Booking::create([
            'user_id' => Auth::id(),
            'kontrakan_id' => $id,
            'group_id' => $group,
            'tanggal_checkin' => $request->tanggal_checkin,
            'lama_mengontrak' => $request->lama_mengontrak,
            'status' => 'pending',
        ]);

        return redirect()->route('forums.show', $group)->with('success', 'Booking request sent successfully.');
    }

    public function bookingNonForum(Request $request, $id)
    {
        $checkBooking = Booking::where('user_id', Auth::id())->first();
        if ($checkBooking) {
            return redirect()->route('detail.kontrakanForum', $id)->withErrors(['user' => 'User already booked.']);
        }

        Booking::create([
            'user_id' => Auth::id(),
            'kontrakan_id' => $id,
            'tanggal_checkin' => $request->tanggal_checkin,
            'lama_mengontrak' => $request->lama_mengontrak,
            'status' => 'pending',
        ]);

        return redirect()->route('detail.kontrakanNonForum', $id)->with('success', 'Booking request sent successfully.');
    }

    public function edit($id)
    {
        $kontrakan = Kontrakan::findOrFail($id);
        $fasilitasUmum = FasilitasUmum::where('kontrakan_id', $id)->get();
        $fasilitas = Fasilitas::all();
        return view('Kontrakan.edit', compact('kontrakan', 'fasilitasUmum', 'fasilitas'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'uang_dp' => 'required|numeric',
            'deskripsi' => 'required|string',
            'tipe_properti' => 'required|string',
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'ukuran_properti' => 'required|string',
            'foto_kontrakan.*' => 'image|mimes:jpeg,jpg,png,gif,webp',
            'foto_banner' => 'image|mimes:jpeg,png,jpg,gif',
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

        if ($request->hasFile('foto_banner')) {
            $galleryPath = $request->file('foto_banner')->store('galleryKontrakan', 'public');
            $kontrakan->banner = $galleryPath;
        }

        $kontrakan->nama = $request->nama;
        $kontrakan->alamat = $request->alamat;
        $kontrakan->harga = $request->harga;
        $kontrakan->dp_harga = $request->uang_dp;
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

        if ($request->hasFile('foto_kontrakan')) {
            foreach ($request->file('foto_kontrakan') as $image) {
                $galleryPath = $image->store('galleryKontrakan', 'public');
                $galleryKontrakan = new GaleryKontrakan();
                $galleryKontrakan->kontrakan_id = $kontrakan->id;
                $galleryKontrakan->foto_kontrakan = $galleryPath;
                $galleryKontrakan->save();
            }
        }

        if ($request->has('fasilitas')) {
            $kontrakan->fasilitasUmum()->sync($request->fasilitas);
        }

        return redirect('/KelolaKontrakan')->with('success', 'Kontrakan updated successfully.');
    }

    public function destroy($id)
    {
        $kontrakan = Kontrakan::findOrFail($id);
        $kontrakan->delete();

        return redirect('/KelolaKontrakan')->with('success', 'Kontrakan deleted successfully.');
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

    public function filterKontrakan(Request $request)
    {
        $query = Kontrakan::query();

        if ($request->filled('keyword')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->keyword . '%')
                    ->orWhere('provinsi', 'like', '%' . $request->keyword . '%')
                    ->orWhere('kota', 'like', '%' . $request->keyword . '%')
                    ->orWhere('kecamatan', 'like', '%' . $request->keyword . '%')
                    ->orWhere('kelurahan', 'like', '%' . $request->keyword . '%')
                    ->orWhere('alamat', 'like', '%' . $request->keyword . '%');
            });
        }

        if ($request->filled('kamar_tidur')) {
            if ($request->kamar_tidur === '4+') {
                $query->where('kamar_tidur', '>=', 4);
            } else {
                $query->where('kamar_tidur', $request->kamar_tidur);
            }
        }

        if ($request->filled('kamar_mandi')) {
            if ($request->kamar_mandi === '3+') {
                $query->where('kamar_mandi', '>=', 3);
            } else {
                $query->where('kamar_mandi', $request->kamar_mandi);
            }
        }

        $result = $query->get();

        return response()->json($result);
    }

    public function batalBooking($id)
    {
        $booking = Booking::where('user_id', Auth::id())->where('kontrakan_id', $id)->first();
        if ($booking) {
            $booking->delete();
        }

        return redirect()->back()->with('success', 'Booking cancelled successfully.');
    }

    public function verifikasiBooking()
    {
        $kontrakanUser = Kontrakan::where('user_id', Auth::id())->value('id');
        $booking = Booking::where('status', 'pending')->where('kontrakan_id',$kontrakanUser)->with('kontrakan','group')->get();
        $bookingTerima = Booking::where('status', 'diterima')->where('kontrakan_id',$kontrakanUser)->with('kontrakan','group')->get();
        // dd($booking);
        return view('PemilikKontrakan.VerifikasiPemilikKontrakan', compact('booking','bookingTerima'));
    }

    public function terimaBooking($id){
        $booking = Booking::findOrFail($id);
        $booking->status = 'diterima';
        $booking->save();

        return redirect()->back();
    }

    public function tolakBooking($id) {
        $booking = Booking::findOrFail($id);
        $booking->status = 'ditolak';
        $booking->save();

        return redirect()->back();
    }

}
