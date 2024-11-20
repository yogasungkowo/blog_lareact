<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'post_id',
        'content',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
