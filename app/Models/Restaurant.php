<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table ="restaurant";
    protected $fillable = [
        'name',
        'owner_id',
        'address',
        'phone',
        'email',
    ];
    use HasFactory;
}
