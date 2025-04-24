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
                DB::raw("(
                    6371 * acos(
                        cos(radians($userLat)) *
                        cos(radians(latitude)) *
                        cos(radians(longitude) - radians($userLng)) +
                        sin(radians($userLat)) * sin(radians(latitude))
                    )
                ) AS distance")
            )
            ->having('distance', '<=', $radius)
            ->orderBy('distance', 'asc')
            ->get();
    }

    public function rekomendasiLokasi(Request $request)
{
    $userLat = $request->input('latitude');
    $userLng = $request->input('longitude');
    $radius = $request->input('radius', 5);

    // dd($userLat, $userLng, $radius);
    $rekomendasiKontrakan = $this->getNearbyKontrakan($userLat, $userLng, $radius);

    // return view('PencariKontrakan.Kontrakan', compact('rekomendasiKontrakan'));
    return response()->json($rekomendasiKontrakan);
}


}
