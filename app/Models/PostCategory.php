<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'post_id',
        'category_id',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
