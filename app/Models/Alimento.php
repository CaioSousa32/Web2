<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
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

    public function nutrientes() {
        return $this->belongsToMany(Nutriente::class, 'Alimentonutriente')->withTimestamps();
    }

}
