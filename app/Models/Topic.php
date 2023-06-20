<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @method static where(string $string, $courseID)
 * @method static create(array $array)
 */
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
        "course_id",
        "code_first_line",
        "code_second_line",
        "code_third_line",
        "code_fourth_line",
        "code_fifth_line",
        "code_six_line",
        "code_seven_line",
        "code_eight_line",
        "code_nine_line",
        "code_ten_line",
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
