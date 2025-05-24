<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiDp extends Model
{
    protected $table = 'transaksidp';
    protected $fillable = ['bukti_pembayaran', 'booking_id', 'user_id','status'];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

}
