<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\TransaksiDp;
use App\Models\TransaksiPelunasan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function kirimDp(Request $request)
    {
        $request->validate([
            'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'booking_id' => 'required|exists:booking,id',
        ]);

        if ($request->hasFile('bukti_transfer')) {
            $galleryPath = $request->file('bukti_transfer')->store('bukti_dp', 'public');
        }

        TransaksiDp::create([
            'user_id' => Auth::user()->id,
            'booking_id' => $request->booking_id,
            'bukti_pembayaran' => $galleryPath,
            'status' => 'menunggu',
        ]);


        return redirect()->back()->with('success', 'Bukti transfer berhasil dikirim');
    }

    public function kirimPelunasan(Request $request)
    {
        $request->validate([
            'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'booking_id' => 'required|exists:booking,id',
        ]);

        if ($request->hasFile('bukti_transfer')) {
            $galleryPath = $request->file('bukti_transfer')->store('bukti_dp', 'public');
        }

        TransaksiPelunasan::create([
            'user_id' => Auth::user()->id,
            'booking_id' => $request->booking_id,
            'bukti_pembayaran' => $galleryPath,
            'status' => 'menunggu',
        ]);


        return redirect()->back()->with('success', 'Bukti transfer berhasil dikirim');
    }
}
