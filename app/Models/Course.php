<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @method static create(array $array)
 * @method static get()
 * @method static withCount(string $string)
 * @method static where(string $string, int $int)
 */
class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug'
    ];

    public function question(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function language(): BelongsTo
    {
        return $this->BelongsTo(Language::class);
    }

    public function progressCount(): hasManyThrough
    {
        return $this->hasManyThrough(Progress::class, Question::class);
    }
}
