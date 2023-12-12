<?php

namespace App\Models\Quiz;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuizQuestions extends Model
{
    use HasFactory;

    /**
     * @var int
     */
    protected $primaryKey = 'question_id';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'question_order' => 0,
        'question_optional' => false,
    ];

    public function quiz(): BelongsTo {
        return $this->belongsTo(Quiz::class);
    }

    public function alternatives(): HasMany {
        return $this->hasMany(QuizAlternatives::class);
    }

}
