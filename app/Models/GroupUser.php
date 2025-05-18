<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $table = 'group_users';
    protected $fillable = ['group_id', 'user_id', 'status', 'role'];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
