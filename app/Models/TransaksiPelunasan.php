<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiPelunasan extends Model
{
    protected $table = 'transaksipelunasan';
    protected $fillable = ['bukti_pembayaran', 'booking_id', 'user_id'];
}
