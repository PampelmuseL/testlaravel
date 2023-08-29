<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    public function user(): BelongsTo|Builder
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo|Builder
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    
}
