<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'video_url',
        "learning_title",
        "learning_desc",
        "code_example",
        "code_explanation",
        "code_practise",
        "course_id"
    ];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function course(): BelongsTo
    {
        return $this->BelongsTo(Course::class);
    }

    public function progress(): HasManyThrough
    {
        return $this->hasManyThrough(Progress::class, Question::class);
    }
}