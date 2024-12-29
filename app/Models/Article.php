<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $guarded = [];

    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }

    public function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }
}
