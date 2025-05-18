<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Message;
use App\Models\User;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = [
        'nama_group', 'deskripsi', 'foto_group', 'jumlah_anggota', 'jenis_kelamin', 'provinsi', 'kota', 'kecamatan','latitude', 'longitude'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_users')->withTimestamps()->withPivot('status');
    }

    public function usersDiterima()
{
    return $this->belongsToMany(User::class, 'group_users')
                ->withPivot('status')
                ->wherePivot('status', 'diterima');
}


    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
