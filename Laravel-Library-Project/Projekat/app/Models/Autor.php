<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'Autor';
    protected $primaryKey = 'autorID';

    protected $fillable = [
        'firstName',
        'lastName',
        
    ];

    public function Knjige(){

        return $this->hasMany(Knjige::class);

    }


}
