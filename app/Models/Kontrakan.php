<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kontrakan extends Model
{
    protected $table = 'kontrakan';
    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'harga',
        'deskripsi',
        'tipe_properti',
        'ukuran_properti',
        'kamar_tidur',
        'kamar_mandi',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'latitude',
        'longitude',
        'fasilitas_tambahan',
        'banner',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galeryProfile()
    {
        return $this->hasMany(GaleryProfile::class, 'kontrakan_id');
    }

    public function fasilitas(): BelongsToMany
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_umum', 'kontrakan_id', 'fasilitas_id');
    }

    public function forum()
    {
        return $this->hasMany(Forum::class);
    }

    public function fasilitasUmum(): BelongsToMany
    {
        return $this->belongsToMany(FasilitasUmum::class, 'fasilitas_umum', 'kontrakan_id', 'fasilitas_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'kontrakan_id');
    }
}
