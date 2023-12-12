<?php

namespace App\Models\Quiz;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizAlternatives extends Model
{
    use HasFactory;

    /**
     * @var int
     */
    protected $primaryKey = 'alternative_id';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'alternative_order' => 0,
        'alternative_type' => 'TEXT'
    ];

    public function question(): BelongsTo {
        return $this->belongsTo(QuizQuestions::class);
    }
}
