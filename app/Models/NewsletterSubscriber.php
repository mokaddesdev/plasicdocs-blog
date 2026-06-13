<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['email', 'name', 'is_active', 'subscribed_at'])]

class NewsletterSubscriber extends Model
{
    use HasFactory;

    protected function casts()
    {
        return [
            'is_active' => 'boolean',
            'subscribed_at' => 'datetime',
        ];
    }

    public function scopActive( $query )
    {
        return $query->where('is_active', true);
    }
}
