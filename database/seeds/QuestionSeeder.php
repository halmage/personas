<?php

use Illuminate\Database\Seeder;

use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
        	'question' => '¿que color esta pintada tu casa?'
        ]);
        Question::create([
        	'question' => '¿como se llama tu papa?'
        ]);
        Question::create([
        	'question' => '¿cual es tu carro favorito?'
        ]);
        Question::create([
        	'question' => '¿en que ciudad usted nacio?'
        ]);
        Question::create([
        	'question' => '¿cual es su equipo favorito de football?'
        ]);
    }
}
