<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nutriente extends Model
{
    use HasFactory;

    protected $fillable = [
        'carboidtatos',
        'proteinas',
        'agua',
        'vitaminas',
        'fibras',
        'user_id'
    ];
    public function donoDoNutriente() {
        return $this->BelongsToMany(alimento::class, 'alimentonutriente');
    }
}
