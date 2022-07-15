<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Alimentonutriente extends Pivot
{

    use HasFactory;

    protected $fillable = [
        'alimento_id',
        'nutriente_id', 
    ];

    public $incrementing = true;

    public function alimento()
    {
        return $this->belongsTo(Alimento::class);
    }
    public function nutriente()
    {
        return $this->belongsTo(Nutriente::class);
    }
    
}
