<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'user_id'
    ];

    public function donoDoAlimento() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nutriente() {
        return $this->belongsToMany(nutriente::class, 'alimentonutrientes');
    }

}
