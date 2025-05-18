<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'user_id',
        'kontrakan_id',
        'group_id',
        'dp_kontrakan',
        'tanggal_checkin',
        'lama_mengontrak',
        'status',
    ];

    public function kontrakan(): BelongsTo
    {
        return $this->belongsTo(Kontrakan::class, 'kontrakan_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
