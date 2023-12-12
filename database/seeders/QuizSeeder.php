<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{

    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('question_alternatives')->delete();
        DB::table('quiz_questions')->delete();
        DB::table('quizzes')->delete();

        # table quiz
        DB::table('quizzes')->insert(
            [
                'quiz_name' => 'Sobre você',
                'quiz_optional'=> false,
            ],
        );

        # table questions
        DB::table('quiz_questions')->insert(
            [
                'quiz_id' => 1,
                'question_name'=> 'Idade',
                'question_text'=> 'Informe sua data de nascimento:',
                'question_note'=> 'Essa informação será usada para aprimorar o sistema de matchmaking no futuro',
                'question_optional'=> false,
                'question_order'=> 0,
            ]
        );
        
        DB::table('quiz_questions')->insert(
            [
                'quiz_id' => 1,
                'question_name'=> 'Frequência de jogatina',
                'question_text'=> 'Em quais períodos você costuma jogar?',
                'question_optional'=> false,
                'question_order'=> 1,
            ],
        );

        # table alternatives
        DB::table('question_alternatives')->insert(
            [
                'question_id'=>1,
                'alternative_type'=>'DATE',
                'alternative_placeholder'=>'01/08/1995',
            ]
        );

        DB::table('question_alternatives')->insert(
            [
                'question_id' => 2,
                'alternative_name' => 'Manhâ',
                'alternative_type'=> 'CHECK',
                'alternative_order'=> 0
            ],
        );
        DB::table('question_alternatives')->insert(
            [
                'question_id' => 2,
                'alternative_name' => 'Tarde',
                'alternative_type'=> 'CHECK',
                'alternative_order'=> 1
            ],
        );
        DB::table('question_alternatives')->insert(
            [
                'question_id' => 2,
                'alternative_name' => 'Noite',
                'alternative_type'=> 'CHECK',
                'alternative_order'=> 2
            ],
        );
        DB::table('question_alternatives')->insert(
            [
                'question_id' => 2,
                'alternative_name' => 'Madrugada',
                'alternative_type'=> 'CHECK',
                'alternative_order'=> 3
            ],
        );
        DB::table('question_alternatives')->insert(
            [
                'question_id' => 2,
                'alternative_name' => 'Não tenho horário definido',
                'alternative_type'=> 'RADIO',
                'alternative_order'=> 4
            ],
        );
    }
}
