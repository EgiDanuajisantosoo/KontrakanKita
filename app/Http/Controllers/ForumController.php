<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class ForumController extends Controller
{
    public function filter(Request $request)
    {
        $query = Group::with('messages.user', 'users', 'usersDiterima');

        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $query->where(function ($q) use ($keyword) {
                $q->where('provinsi', 'like', "%{$keyword}%")
                ->orWhere('kota', 'like', "%{$keyword}%")
                ->orWhere('kecamatan', 'like', "%{$keyword}%")
                    ->orWhere('nama_group', 'like', "%{$keyword}%");
            });
        }

        if ($request->filled('gender')) {
            $query->where('jenis_kelamin', $request->input('gender'));
        }

        // Contoh memanggil relasi dan menghitung jumlah anggota terisi dan total anggota
        $result = $query->get()->map(function ($group) {
            $group->jumlah_anggota_terisi = $group->usersDiterima->count();
            $group->jumlah_anggota = $group->jumlah_anggota ?? 0;
            return $group;
        });

        return response()->json(['data' => $result]);
    }
}
