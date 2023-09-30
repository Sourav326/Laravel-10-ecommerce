<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function brandcategories(): BelongsToMany
    {
        return $this->belongsToMany(BrandCategory::class);
    }

}
