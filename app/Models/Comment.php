<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['post_id', 'parent_id', 'user_id', 'content', 'author_name', 'author_email', 'is_approved', 'ip_address', 'user_agent'])]

class Comment extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'is_approved' => 'boolean',
        ];
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

     public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
