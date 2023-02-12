<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $createdDate = clone($date);
        Employee::create([
            'first_name' => 'Ahmed',
            'last_name' => 'Refaat',
            'email' => 'employee@test.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'phone_number' => '01120305686',
            'salary' => 10000,
            'image' => 'imgs/avater.png',
            'department_id' => 1,
            'created_at' => $createdDate,
            'updated_at' => $createdDate
        ]);
    }
}
