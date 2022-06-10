<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    // protected $with = [
    //     'formations'
    // ];

    protected $fillable = [
        'titre'
    ];
    
    public function formations(){
        return $this->hasMany(Formation::class);
    }
}