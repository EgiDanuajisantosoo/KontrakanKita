<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FasilitasUmum extends Model
{
    protected $table = 'fasilitas_umum';
    protected $fillable = [
        'nama_fasilitas',
        'fasilitas_id',
        'kontrakan_id',
    ];

    public function kontrakans(): BelongsToMany
    {
        return $this->belongsToMany(Kontrakan::class, 'fasilitas_umum', 'fasilitas_id', 'kontrakan_id');
    }
}
