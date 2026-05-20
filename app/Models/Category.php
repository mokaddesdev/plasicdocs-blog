<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['name', 'icon', 'description', 'color', 'slug', 'is_active', 'sort_order'])]
class Category extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'number',
        ];
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
