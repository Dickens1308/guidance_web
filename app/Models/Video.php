<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'course_id',
    ];

    public function course(): BelongsTo
    {
        return $this->BelongsTo(Course::class);
    }
}
