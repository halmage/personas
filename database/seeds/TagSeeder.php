<?php

use Illuminate\Database\Seeder;

/* Importando modelos */
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
        	'name' => 'juguete'
        ]);

        Tag::create([
        	'name' => 'ropa'
        ]);

        Tag::create([
        	'name' => 'deporte'
        ]);

        Tag::create([
        	'name' => 'moda'
        ]);
    }
}
