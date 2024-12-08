<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = ['name','cf_value'];

    // Definisikan relasi many-to-many dengan model Symptom
    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'disease_symptom', 'disease_id', 'symptom_id');
    }

    public function solutions()
{
    return $this->hasMany(Solution::class);
}
}
