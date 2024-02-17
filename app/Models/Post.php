<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class)
        ->whereNull('comment_id')
        ->latest();
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail?asset('storage/'.$this->thumbnail):asset('assets/event.jpg');
    }
}
