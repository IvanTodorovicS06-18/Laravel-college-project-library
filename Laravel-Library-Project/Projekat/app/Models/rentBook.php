<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentBook extends Model
{
    use HasFactory;

    protected $table = 'izdavanjeknjiga';
    protected $primaryKey = 'id';

    protected $fillable = [
        'knjigaID',
        'userID',
        'datumIzdavanja',
    ];

    public function User(){

        return $this->belongsTo(User::class, 'userID');

    }

    public function Knjige(){

        return $this->belongsTo(Knjige::class, 'knjigaID');

    }

}
