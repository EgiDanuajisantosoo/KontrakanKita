<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'google_id',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function kontrakans(): HasMany
    {
        return $this->hasMany(Kontrakan::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_users')->withTimestamps();
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
    public function groupUsers()
    {
        return $this->hasMany(GroupUser::class);
    }
    public function transaksiDp()
    {
        return $this->hasMany(TransaksiDp::class);
    }
    public function galeryProfile()
    {
        return $this->hasMany(GaleryProfile::class);
    }
    public function groupUser()
    {
        return $this->hasMany(GroupUser::class);
    }
    public function group()
    {
        return $this->hasMany(Group::class);
    }
    public function forum()
    {
        return $this->hasMany(Forum::class);
    }
    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class);
    }
    public function fasilitasUmum()
    {
        return $this->hasMany(FasilitasUmum::class);
    }
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    public function galery()
    {
        return $this->hasMany(GaleryProfile::class);
    }
    public function transaksi()
    {
        return $this->hasMany(TransaksiDp::class);
    }
    public function profile(){
       return $this->hasOne(Profile::class);
    }
}
