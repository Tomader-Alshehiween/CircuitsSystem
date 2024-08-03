<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (is_null($model->report_date)) {
                $model->report_date = Carbon::today()->toDateString();
            }
        });
    }
}
