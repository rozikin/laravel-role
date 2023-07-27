<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'employee_id'    => Str::random(10),
            'employee_name'    => Str::random(10),
            'department'    => Str::random(10)
        ]);
    }
}