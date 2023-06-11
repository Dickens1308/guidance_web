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
        'slug',
        "desc",
        "sub_desc",
        "language_id"
    ];

    public function language(): BelongsTo
    {
        return $this->BelongsTo(Language::class);
    }

    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    public function progress(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    // public function topics()
    // {
    //     return $this->hasManyThrough(Question::class, Topic::class);
    // }

    // public function progress()
    // {
    //     return $this->hasManyThrough(Progress::class, Question::class);
    // }

    // public function progress(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Progress::class, Topic::class, 'course_id', 'question_id');
    // }

}