<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    use HasFactory;
    protected $table = 'Zanr';
    protected $primaryKey = 'zanrID';

    protected $fillable = [
        'imeZanra',
        
    ];


    public function Knjige(){

        return $this->hasMany(Knjige::class);

    }

}
