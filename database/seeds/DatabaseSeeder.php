<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Department;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Department::create([
            'department' => 'Software'
        ]);

        Department::create([
            'department' => 'Redes'
        ]);

        Department::create([
            'department' => 'Seguridad'
        ]);

        Department::create([
            'department' => 'Marketing'
        ]);

        Department::create([
            'department' => 'Mantenimiento'
        ]);

        Role::create([
            'role' => 'Administrador'
        ]);

        Role::create([
            'role' =>'Usuario'
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@softab.com.mx',
            'password' => bcrypt('123456'),
            'role_id' => 1
        ]);
    }
}
