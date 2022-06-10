<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $with = [
        'module'
    ];

    protected $fillable= [
        'titre',
        'slug',
        'description',
        'resume_cours',
        'numero',
        'video',
        'lien',
        'slug',
        'module_id'
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
