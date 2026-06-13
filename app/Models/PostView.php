<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['post_id', 'ip_address', 'user_agent', 'user_id', 'viewed_at'])]

class PostView extends Model
{
    use HasFactory;
    protected $timestamps = false;

    protected function casts() : array
     {
        return [
            'viewed_at' => 'datetime'
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
