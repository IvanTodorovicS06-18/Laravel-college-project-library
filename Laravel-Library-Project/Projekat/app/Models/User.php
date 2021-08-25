<?php

namespace App\Models;

use App\Models\Knjige;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable; //za generisanje unosa u tabelu, imaju php artisan thinker.

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'userID';
    
    protected $fillable = [
        'firstName',
        'lastName',
        'password',
        'adress',
        'email',
        'privilegeLevel',
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

    public function RentBook(){

        return $this->hasMany(rentBook::class);
    }

    public function Post(){

        return $this->hasMany(Post::class);
    }
    

}
