<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Quiz\QuizAlternatives;

class UserQuizAnswers extends Model
{
    use HasFactory;

    public function alternative(): BelongsTo {
        return $this->belongsTo(QuizAlternatives::class);
    }
}
