<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Quiz\Quizzes;

class UserQuizzes extends Model
{
    use HasFactory;

    public function quiz(): BelongsTo {
        return $this->belongsTo(Quizzes::class);
    }
}
