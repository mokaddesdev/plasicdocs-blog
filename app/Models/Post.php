<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


#[Fillable(['title', 'excerpt', 'content', 'featured_image', 'slug', 'is_featured', 'is_editors_choice', 'user_id', 'category_id', 'status', 'published_at'])]

class Post extends Model
{
    use HasFactory;

    protected function casts(): array
     {
        return [
            'published_at' => 'datetime',
            'is_featured' => 'boolean',
            'is_editors_choice' => 'boolean',
        ];
    }

    public function user() {
        return $this->belonsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
