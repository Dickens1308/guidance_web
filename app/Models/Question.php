<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $array)
 * @method static get()
 * @method static where(string $string, mixed $question_id)
 */
class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'choice_one',
        'choice_two',
        'choice_three',
        'correct_answer',
        'code_image_url',
        'topic_id',
    ];

    public function progress(): HasMany
    {
        return $this->hasMany(Progress::class);
    }

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}