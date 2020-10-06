<?php

use Illuminate\Database\Seeder;

/* Importando modelos */
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'id' => 1,
            'identify' => 24130237,
            'name' => 'hugo',
            'answer_id' => 1,
            'email' => 'hugo_zorrilla@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
