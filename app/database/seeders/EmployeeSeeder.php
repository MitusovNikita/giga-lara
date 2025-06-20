<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run() : void
    {
        Employee::factory(5)->create();
    }
}
