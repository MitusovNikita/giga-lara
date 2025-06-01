<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{

    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function getNameAttribute($value)
    {
        return strtolower($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = 'Sir '.$value;
    }

    # get
//    public function name() : Attribute
//    {
//        return Attribute::make(
//            get: fn($value) => 'Mr '.$value,
//            set: fn($value) => strtolower($value),
//        );
//    }
}
