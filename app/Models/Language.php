<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $array)
 * @method static get()
 * @method static select(string $string, string $string)
 */
class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug'
    ];

    public function question(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
