<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Knjige extends Model
{
    protected $table = 'Knjige';
    protected $primaryKey = 'knjigaID';


    protected $fillable = [
        'imeKnjige',
        'autorID',
        'izdavacID',
        'zanrID',
        'kolicina',
        'ocena',
        'opis',
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);

    }

    public function Autor(){

        return $this->belongsTo(Autor::class, 'autorID');

    }

    public function Zanr(){

        return $this->belongsTo(Zanr::class, 'zanrID');

    }

    public function Izdavac(){

        return $this->belongsTo(Izdavac::class, 'izdavacID');

    }

    public function RentBook(){

        return $this->hasMany(rentBook::class);
    }
    
    public function Post(){

        return $this->hasMany(Post::class);
    }




}
