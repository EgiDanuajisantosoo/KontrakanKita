<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleryKontrakan extends Model
{
    protected $table = 'galery_kontrakan';
    protected $fillable = [
        'kontrakan_id',
        'foto_kontrakan',
    ];

    public function kontrakan()
    {
        return $this->belongsTo(Kontrakan::class);
    }

}
