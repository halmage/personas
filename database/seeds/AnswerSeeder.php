<?php

use Illuminate\Database\Seeder;
/* Importando modelos */
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Answer::create([
         	'id' => 1,
            'user_id' => 1,
            'question1' => 1,            
            'question2' => 2,            
            'question3' => 3,            
            'answer1' => 'hola',              
            'answer2' => 'como',              
            'answer3' => 'estas'
    	]);
        Answer::create([
            'id' => 2,
            'user_id' => 2,
            'question1' => 1,            
            'question2' => 3,            
            'question3' => 2,            
            'answer1' => 'rosa',              
            'answer2' => 'ferrari',              
            'answer3' => 'dario'
        ]);
    }
}
