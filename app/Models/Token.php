<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    public function chain(){
        return $this->belongsTo(Chain::class);
    }

    public function exchange(){
        return $this->belongsTo(Exchange::class);
    }

    public function vettedTokens(){
        return $this->hasMany(Token::class, 'vetted')->where('vetted', 'yes');
    }
}
