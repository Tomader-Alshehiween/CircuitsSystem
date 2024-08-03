<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;
    protected $table = 'circuits';
    protected $fillable = [
        'circuit_number',
        'speed',
        'service_provider',
        'circuit_type',
        'entity_name',
        'circuit_status',
    ];
}
