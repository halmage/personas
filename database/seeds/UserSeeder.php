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
            'identify' => "24130237",
            'name' => 'hugo',
            'last_name' => 'zorrilla',
            'answer_id' => 1,
            'email' => 'hugo_zorrilla@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'id' => 2,
            'identify' => "24130238",
            'name' => 'halmage',
            'last_name' => 'cesilia',
            'answer_id' => 2,
            'email' => 'halmage@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
