<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'user_id',
        'post_image',
    ];

    public function setTitleAttributes()
    {
        $this->attributes['slug'] = Str::slug($this->title);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
