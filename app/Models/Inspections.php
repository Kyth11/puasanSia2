<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspections extends Model
{
    use HasFactory;

    protected $table = "inspections";
    protected $fillable = ['DATE', 'TIME', 'inspector_id', 'violation_id', 'restaurant_id'];

    // Define the relationships
    public function inspector()
    {
        return $this->belongsTo(Inspector::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function violation()
    {
        return $this->belongsTo(Violation::class);
    }

    public function owner()
    {
        return $this->hasOneThrough(Owner::class, Restaurant::class, 'id', 'id', 'restaurant_id', 'owner_id');
    }
}
