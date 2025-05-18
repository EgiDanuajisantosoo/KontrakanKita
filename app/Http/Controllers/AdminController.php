<?php

namespace App\Http\Controllers;

use App\Models\Kontrakan;
use App\Models\Booking;
use App\Models\TransaksiDp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pengajuan()
    {

        $kontrakan = Kontrakan::where('status', 'pending')->get();
        return view('Admin.pengajuan', compact('kontrakan'));
    }

    public function terimaKontrakan($id)
    {

        // dd($id);
        $kontrakan = Kontrakan::findOrFail($id);
        $kontrakan->status = 'tersedia';
        $kontrakan->save();

        return redirect()->back()->with('success', 'Kontrakan approved successfully.');
    }

    public function transaksiDp()
    {
        $booking = Booking::where('status', 'pending')->get();

        return view('admin.transaksi', compact('booking'));
    }

    public function detaltransaksiDp($id)
    {
        $booking = TransaksiDp::where('status', 'pending')->where('booking_id', $id)->get();
        // $booking = TransaksiDp::where('booking_id', $id)->get();
        // dd($booking);
        return view('admin.detailPembayaranForum', compact('booking'));
    }

    public function terimaDp($id)
    {
        $transaksi = TransaksiDp::findOrFail($id);
        $transaksi->status = 'terima';
        $transaksi->save();

        return redirect()->back()->with('success', 'Transaksi Dp approved successfully.');
    }
}
