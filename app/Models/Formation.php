<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $with = [
        'categorie'  
    ];

    protected $fillable = [
        'nom',
        'duree',
        'categorie_id',
        'image'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function module(){
        return $this->hasMany(Module::class);

    }

}
