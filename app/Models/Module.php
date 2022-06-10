<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $with = [
        'formation',
    ];

    protected $fillable = [
        'nom',
        'formation_id'
    ];
    
    public function courses(){
        return $this->hasMany(Course::class);
    }
       
    public function formation(){
        return $this->belongsTo(Formation::class);

    }
}
