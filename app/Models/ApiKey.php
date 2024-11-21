<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    protected $fillable = 
    [
        'name',
        'key'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->key)) {
                $model->key = Str::random(32);
            }
        });
    }
}
