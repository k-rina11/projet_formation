<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabonne extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(User::class, 'user_id');
    }

    public function formation(){
        return $this->hasMany(Formation::class,'formation_id');
    }
}
