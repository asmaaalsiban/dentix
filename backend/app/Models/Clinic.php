<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = [
        'name',
        'address',
        'description',
    ];
    public function doctors()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function medicalRecords()
    {
        return $this->hasMany(Medical_Record::class);
    }
}