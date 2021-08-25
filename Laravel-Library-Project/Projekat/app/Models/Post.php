<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $primaryKey = 'postID';

    protected $fillable = [
        'knjigaID',
        'userID',
        'opis',
    ];

    public function User(){

        return $this->belongsTo(User::class, 'userID');

    }

    public function Knjige(){

        return $this->belongsTo(Knjige::class, 'knjigaID');

    }


}
