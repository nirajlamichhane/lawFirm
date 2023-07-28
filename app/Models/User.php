<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    public function isAdmin()
    {
        return $this->type === 'admin';
    }

    public function isCustomer()
    {
        return $this->type === 'user';
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeCustomer($query)
    {
        return $query->where('type', 'user');
    }

    public function cases()
    {
        return $this->hasMany(Problem::class);
    }
    public function testimonial()
    {
        return $this->hasOne(Testimonial::class);
    }
    public function scopeAdmin($query)
    {
        return $query->where('type', 'admin');
    }
    public function updatecases()
    {
        return $this->hasMany(Updatecase::class);
    }
}
