<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
    ];
    public function setNameAttributes()
    {
        $this->attributes['name'] = $this->name;
        $this->attributes['slug'] = Str::slug($this->name);
    }
}
