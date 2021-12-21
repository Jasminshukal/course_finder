<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'fees',
        'fee',
        'overview',
        'requirement',
        'subject',
        'laval',
        'level',
        'destination',
        'university_id',
        'description',
        'currency_sym',
    ];

    public function University()
    {
        return $this->belongsTo(University::class);
    }
}
