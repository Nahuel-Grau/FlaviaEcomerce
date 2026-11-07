<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description',
        'image_path',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Una categoría puede tener muchos productos.
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // Categoría padre.
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Subcategorías.
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}