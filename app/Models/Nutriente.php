<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutriente extends Model
{
    use HasFactory;

    protected $fillable = [
        'carboidratos',
        'proteinas',
        'agua',
        'vitaminas',
        'fibras'
    ];
    public function alimentos() {
        return $this->BelongsToMany(Alimento::class, 'Alimentonutriente')->withTimestamps();
    }
}
