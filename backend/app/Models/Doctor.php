<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'spacification',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function clinic()
    {
        return $this->hasMany(Clinic::class);
    }
}