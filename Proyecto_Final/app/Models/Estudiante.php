<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Iluminnate\Database\Eloquent\casts\Attribute;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = "estudiantes";
    protected function name(): Attribute
    {
        return new Attribute(
            get: function ($value) {
                return ucwords($value);
            },
            set: function ($value) {
                return strtolower($value);
            }
        );
    }
}