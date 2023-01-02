<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Unit;
use App\Models\User;
use App\Models\Course;
use App\Models\Application;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Course::factory()->createMany([
            ['course_name' => 'Informatics Computer Science','course_code' => 'ICS'],
            ['course_name' => 'Computer Networks and Security','course_code' => 'CNS'],
            ['course_name' => 'Business and Communications','course_code' => 'BCOM'],
        ]);

        Unit::factory()->createMany([
            ['unit_name' => 'Digital Logics','unit_code' => 'ICS1100','course_code' => 'ICS','academic_year'=>'1'],
            ['unit_name' => 'Introduction to Programming','unit_code' => 'ICS1101','course_code' => 'ICS','academic_year'=>'1'],
            ['unit_name' => 'OOP 1','unit_code' => 'ICS1102','course_code' => 'ICS','academic_year'=>'2'],
            ['unit_name' => 'Software Engineering','unit_code' => 'ICS1103','course_code' => 'ICS','academic_year'=>'2'],

            ['unit_name' => 'Computer Networks','unit_code' => 'CNS1100','course_code' => 'CNS','academic_year'=>'1'],
            ['unit_name' => 'Internet Programming','unit_code' => 'CNS1101','course_code' => 'CNS','academic_year'=>'1'],
            ['unit_name' => 'Internet Security','unit_code' => 'CNS1102','course_code' => 'CNS','academic_year'=>'2'],
            ['unit_name' => 'Advanced Networking','unit_code' => 'CNS1103','course_code' => 'CNS','academic_year'=>'1'],

            ['unit_name' => 'Management Skills','unit_code' => 'BCOM1100','course_code' => 'BCOM','academic_year'=>'1'],
            ['unit_name' => 'Principles of Ethics','unit_code' => 'BCOM1101','course_code' => 'BCOM','academic_year'=>'1'],
            
        ]);

        User::factory()->createMany([
            [
                'name' => 'admin',
                'email' => 'admin@ams.com',
                'role'=>'1',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'lecturer',
                'email' => 'lecturer@ams.com',
                'role'=>'2',
                'password' => bcrypt('lecturer123'),
            ],
            [
                'name' => 'student',
                'email' => 'student@ams.com',
                'password' => bcrypt('student123'),
            ],
        ]);
        
        

        Application::factory(10)->create();
    }
}
