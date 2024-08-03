<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityName extends Model
{
    use HasFactory;
    protected $table = 'entity_name';
    // Define the relationship with the Circuit model
    /*public function circuits()
    {
        return $this->hasMany(Circuit::class, 'entity_name_id', 'id');
    }

    // Define the indirect relationship with the Event model through Circuit
    public function events()
    {
        return $this->hasManyThrough(Event::class, Circuit::class, 'entity_name_id', 'circuit_id', 'id', 'id');
    }*/

    /*public function EntityType()
    {
        return $this->belongTO(EntityType::class, 'id', 'entity_type_id');
    }
    protected $fillable = ['entity_name'];*/
}
