<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medical_Record extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'clinic_id',
        'notes',
        'allergies',
        'chronic_diseases',
        'current_medications',
        'status',
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}