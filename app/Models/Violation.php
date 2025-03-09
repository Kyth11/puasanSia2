<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
        protected $table = "violation";
         protected $fillable = [ "descr", 'health_grade', 'penalty_points' ];
    use HasFactory;
}
