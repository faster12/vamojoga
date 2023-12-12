<?php

namespace App\Http\Controllers;

use App\Models\Quiz\QuizQuestions;
use Inertia\Inertia;
use App\Models\Games;

class HomeController extends Controller
{   
    public function index()
    {
        $userId = auth()->user()->id;
        $questions = QuizQuestions::select('qq.*', 'q.*')
        ->from('quiz_questions as qq')
        ->leftJoin('quizzes as q', 'qq.quiz_id', '=', 'q.quiz_id')
        ->leftJoin('user_quizzes as uq', function ($join) use ($userId) {
            $join->on('q.quiz_id', '=', 'uq.quiz_id')
                ->where('uq.user_id', '=', $userId );
        })
        ->where(function ($query) {
            $query->whereNull('uq.completed')
                ->orWhere('uq.completed', 0);
        })
        ->get();

        return Inertia::render('Home',[
            'games'=>Games::all(),
            'quizzes' => $questions
        ]);
    }

}