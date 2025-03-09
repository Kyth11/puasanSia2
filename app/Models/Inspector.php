<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspector extends Model
{
    protected $table = 'inspector';
    protected $fillable = ['name'];
    use HasFactory;
}
