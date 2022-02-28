<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarredToken extends Model
{
    use HasFactory;

    public function token(){
        return $this->belongsTo(Token::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
