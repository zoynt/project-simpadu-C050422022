<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'lecturer_id',
        'semester',
        'academic_year',
        'sks',
        'code',
        'description',
    ];

    public function lecturer()
    {
        return $this->hasMany(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
   
}
