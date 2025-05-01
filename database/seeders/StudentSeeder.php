<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Imam',
                'student_id_number' => 'F51123066',
                'email' => 'imam@gmail.com',
                'phone_number' => '6285297962117',
                'birth_date' => '2002-10-17',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Biccu',
                'student_id_number' => 'F51123066',
                'email' => 'biccu@gmail.com',
                'phone_number' => '6285233412110',
                'birth_date' => '2003-08-05',
                'gender' => 'Female',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}
