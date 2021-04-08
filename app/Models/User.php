<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // use HasFactory, Notifiable;

    protected $table = 'users';

    public function allOwnedProducts(){
        return $this->hasMany('\App\Models\Product', 'owner_email', 'email');
    }

    public function allLendProducts(){
        return $this->hasMany('\App\Models\Product', 'lender_email', 'email');
    }

    public function allReviews(){
        return $this->hasMany('\App\Models\Review', 'lender_email', 'email');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
