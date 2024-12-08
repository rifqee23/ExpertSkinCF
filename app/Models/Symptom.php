<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cf_value'];

    // Definisikan relasi many-to-many dengan model Disease
    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_symptom', 'symptom_id', 'disease_id');
    }
}
