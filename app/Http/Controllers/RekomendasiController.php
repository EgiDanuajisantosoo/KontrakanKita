<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekomendasiController extends Controller
{
    public function getNearbyKontrakan($userLat, $userLng, $radius)
{
    return DB::table('kontrakan')
        ->where('status', 'tersedia')
        ->select(
            '*',
            DB::raw("
                (6371 * acos(
                    cos(radians(?)) *
                    cos(radians(latitude)) *
                    cos(radians(longitude) - radians(?)) +
                    sin(radians(?)) * sin(radians(latitude))
                )) AS distance
            ")
        )
        ->addBinding([$userLat, $userLng, $userLat], 'select')
        ->having('distance', '<=', $radius)
        ->orderBy('distance', 'asc')
        ->get();
}

public function getNearbyForum($userLat, $userLng, $radius)
{
    return DB::table('groups')
        ->select(
            '*',
            DB::raw("
                (6371 * acos(
                    cos(radians(?)) *
                    cos(radians(latitude)) *
                    cos(radians(longitude) - radians(?)) +
                    sin(radians(?)) * sin(radians(latitude))
                )) AS distance
            ")
        )
        ->addBinding([$userLat, $userLng, $userLat], 'select')
        ->having('distance', '<=', $radius)
        ->orderBy('distance', 'asc')
        ->get();
}


    public function rekomendasiKontrakan(Request $request)
{
    $userLat = $request->input('latitude');
    $userLng = $request->input('longitude');
    $radius = $request->input('radius', 5);

    // dd($userLat, $userLng, $radius);
    $rekomendasiKontrakan = $this->getNearbyKontrakan($userLat, $userLng, $radius);

    // return view('PencariKontrakan.Kontrakan', compact('rekomendasiKontrakan'));
    return response()->json($rekomendasiKontrakan);
}

public function rekomendasiForum(Request $request)
{
    $userLat = $request->input('latitude');
    $userLng = $request->input('longitude');
    $radius = $request->input('radius', 5);

    // dd($userLat, $userLng, $radius);
    $rekomendasiKontrakan = $this->getNearbyForum($userLat, $userLng, $radius);

    // return view('PencariKontrakan.Kontrakan', compact('rekomendasiKontrakan'));
    return response()->json($rekomendasiKontrakan);
}

}
