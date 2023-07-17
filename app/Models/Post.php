<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }
    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>

            $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%')
        );

        $query->when(
            request(['category']) ?? false,
            fn($query, $category) =>
            $query->whereHas(
                'category',
                fn($query) => $query->where('slug', $category)
            )
        );


    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}