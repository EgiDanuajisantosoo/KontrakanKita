<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GaleryProfile extends Model
{
    protected $table = 'galery_profile';
    protected $fillable = [
        'foto',
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
