<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\GaleryProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $dataUser = Profile::where('user_id', auth()->user()->id)->first();

        $galery = $dataUser ? GaleryProfile::where('profile_id', $dataUser->id)->get() : collect();
        // dd($dataUser);

        return view('User.profile' , compact('dataUser','galery'));
    }

    public function update(Request $request)
    {
        // Validate and update user profile
        // ...

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|string|max:20',
            'deskripsi' => 'required|string|max:500',
            'jenis_kelamin' => 'required|in:L,P',
            'instansi' => 'required|string|max:255',
            'fotoProfile' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'provinsi' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            // 'gallery' => 'required',
            // 'gallery.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'tahun_lahir' => 'required|date',
        ]);


        // dd($request->all());

        // if ($request->hasFile('gallery')) {
            //     foreach ($request->file('gallery') as $image) {
                //         $galleryPath = $image->store('galleryUser', 'public');
                //     }
                // }
                if ($request->hasFile('fotoProfile')) {
                    $fotoProfilePath = $request->file('fotoProfile')->store('foto_profile', 'public');
                }

                // Save the profile data to the database
                $profile = new Profile();
                $profile->user_id = auth()->user()->id;
                $profile->nama = $request->input('nama');
                $profile->no_telepon = $request->input('no_telp');
                $profile->deskripsi = $request->input('deskripsi');
                $profile->jenis_kelamin = $request->input('jenis_kelamin');
                $profile->instansi = $request->input('instansi');
                $profile->foto_profile = $fotoProfilePath ?? null;
                $profile->tanggal_lahir = $request->input('tahun_lahir');
                $profile->provinsi = $request->input('provinsi');
                $profile->kota = $request->input('kota');
                $profile->kecamatan = $request->input('kecamatan');
                $profile->kelurahan = $request->input('kelurahan');
                $profile->kode_pos = $request->input('kode_pos');
                $profile->save();


        // if ($request->hasFile('gallery')) {
        //     foreach ($request->file('gallery') as $image) {
        //         $gallery = new GaleryProfile();
        //         $gallery->user_id = auth()->user()->id;
        //         $gallery->image = $image->store('galleryUser', 'public');
        //         $gallery->save();
        //     }
        // }

        // dd($request->all());
        return redirect()->route('profile.index')->with('success', 'Profile created successfully.');
    }


    public function galery(Request $request)
    {
        $request->validate([
            'gallery' => 'required|array|max:3',
            'gallery.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $idProfile = Profile::where('user_id', auth()->user()->id)->pluck('id')->first();
        // dd($idProfile);
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $galleryPath = $image->store('galleryUser', 'public');
                $galeryProfile = new GaleryProfile();
                $galeryProfile->profile_id = $idProfile;
                $galeryProfile->foto = $galleryPath;
                $galeryProfile->save();
            }
        }

        return redirect()->route('profile.index')->with('success', 'Gallery created successfully.');
    }

    public function editProfile()
    {
        $profile = Profile::where('user_id', auth()->user()->id)->first();
        return view('admin.settings.profile', compact('profile'));
    }

    public function editPassword(){
        return view('admin.settings.password');
    }
}
