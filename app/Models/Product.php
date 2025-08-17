<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;


public function tag(string $name)
{
    $tag = Tag::firstOrCreate(['name' => $name]);

    $this->tags()->attach($tag);
}


public function tags(): BelongsToMany
{
    return $this->belongsToMany(Tag::class);
}


    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
