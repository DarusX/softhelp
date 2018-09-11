<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Department::class, 50)->create();
    }
}
