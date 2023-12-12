<?php

namespace App\Models\Quiz;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quizzes extends Model
{
    use HasFactory;

    /**
     * @var int
     */
    protected $primaryKey = 'quiz_id';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'quiz_type' => 'BASE_CONFIG',
        'quiz_model' => 'UNIQUE',
        'quiz_optional' => false
    ];

    public function questions(): HasMany {
        return $this->hasMany(QuizQuestions::class);
    }
}
