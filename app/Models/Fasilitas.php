<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = [
        'nama_fasilitas',
    ];

    public function fasilitasUmum()
    {
        return $this->hasMany(FasilitasUmum::class);
    }
}
