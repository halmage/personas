<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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
        Role::truncate();

        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $admin = new User();
        $admin->identify = '24130237'; 
        $admin->name = 'Hugo'; 
        $admin->last_name = 'Zorrilla'; 
        $admin->email = 'hugo_zorrrilla@hotmail.com'; 
        $admin->password = bcrypt('12345678'); 
        $admin->save();
        $admin->assignRole($adminRole);

        factory(User::class,10)->create();
    }
}
