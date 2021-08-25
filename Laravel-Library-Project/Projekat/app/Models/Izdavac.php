<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izdavac extends Model
{
    use HasFactory;
    protected $table = 'Izdavac';
    protected $primaryKey = 'izdavacID';

    protected $fillable = [
        'imeIzdavaca',
        'adress',
        'email',
        'brojTelefona',
        
    ];

    public function Knjige(){

        return $this->hasMany(Knjige::class);

    }

}
