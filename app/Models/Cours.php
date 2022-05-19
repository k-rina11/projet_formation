<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $fillable= [
        'titre',
        'slug',
        'description'
    ];

    public function formation(){
        return $this->belongsTo(Formation::class,'formation_id');

    }

    public function module(){
        return $this->belongsTo(Module::class,'module_id');

    }
}
