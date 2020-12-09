<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
                	'code' => '00001',
                	'name' => 'zapata'
                ]);

        Product::create([
                	'code' => '00002',
                	'name' => 'blusa'
                ]);        

        Product::create([
                	'code' => '00003',
                	'name' => 'balon'
                ]);        
    }
}
