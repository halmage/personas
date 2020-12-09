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

        $userRole = Role::create(['name' => 'user']);
        $adminRole = Role::create(['name' => 'admin']);

        $admin = new User();
        $admin->identify = '24130237'; 
        $admin->name = 'Hugo'; 
        $admin->last_name = 'Zorrilla'; 
        $admin->email = 'hugo_zorrrilla@hotmail.com'; 
        $admin->password = bcrypt('12345678'); 
        $admin->save();
        $admin->assignRole($adminRole);

        $user = new User();
        $user->identify = '24130238'; 
        $user->name = 'Halmage'; 
        $user->last_name = 'Cesilia'; 
        $user->email = 'halmagedecesilia@gmail.com'; 
        $user->password = bcrypt('12345678'); 
        $user->save();
        $user->assignRole($userRole);

       factory(User::class,10)->create();
    }
}
