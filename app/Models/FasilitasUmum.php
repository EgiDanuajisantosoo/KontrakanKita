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

    public function fasilitas(): BelongsTo
    {
        return $this->belongsTo(Fasilitas::class, 'fasilitas_id');
    }

    public function kontrakan(): BelongsTo
    {
        return $this->belongsTo(Kontrakan::class, 'kontrakan_id');
    }
}
