<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Forum extends Model
{
    protected $table = 'forum';
    protected $fillable = [
        'judul',
        'isi',
        'user_id',
        'kontrakan_id',
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
