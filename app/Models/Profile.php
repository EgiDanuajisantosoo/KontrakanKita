<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = [
        'user_id',
        'nama',
        'deskripsi',
        'jenis_kelamin',
        'instansi',
        'tanggal_lahir',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'foto_profile',
        'no_telepon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kontrakan()
    {
        return $this->belongsTo(Kontrakan::class);
    }
}
