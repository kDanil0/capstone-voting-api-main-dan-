<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            //admin
            ['id' => 1, 'name' => 'Admin', 'student_id' => '9999','department_id' => 1, 'role_id' => 3, 'email' => 'admin@example.com'],
            // SSC Users (General)
            ['id' => 2,'name' => 'Rohit Dubb', 'student_id' => 122302639, 'department_id' => 6, 'role_id' => 2, 'email' => 'samplemail@example.com'],
            ['id' => 3,'name' => 'Ayron D. Cagara', 'student_id' => 122303562, 'department_id' => 6, 'role_id' => 2, 'email' => 'contactmail@example.com'],

            ['id' => 4,'name' => 'Jaswin Glent H. Pineda', 'student_id' => 124302188, 'department_id' => 5, 'role_id' => 2, 'email' => 'name.email@example.com'],
            ['id' => 5,'name' => 'Zharren Manalastas', 'student_id' => 121300291, 'department_id' => 5, 'role_id' => 2, 'email' => 'testMail123@example.com'],

            ['id' => 6,'name' => 'Raiza C. Pineda', 'student_id' => 121300370, 'department_id' => 7, 'role_id' => 2, 'email' => 'johndoe@example.com'],
            ['id' => 7,'name' => 'Dexter N. Rivera', 'student_id' => 122303547, 'department_id' => 7, 'role_id' => 2, 'email' => 'johndoe2@example.com'],

            ['id' => 8,'name' => 'Lineth T. Pamintuan', 'student_id' => 121300387, 'department_id' => 7, 'role_id' => 2, 'email' => 'johndoe3@example.com'],
            ['id' => 9,'name' => 'Mina P. Mallari', 'student_id' => 122301256, 'department_id' => 3, 'role_id' => 2, 'email' => 'johndoe4@example.com'],

            ['id' => 10,'name' => 'Gemarshane Tirona', 'student_id' => 122300700, 'department_id' => 4, 'role_id' => 2, 'email' => 'johndoe5@example.com'],
            ['id' => 11,'name' => 'James Labso', 'student_id' => 123301058, 'department_id' => 4, 'role_id' => 2, 'email' => 'johndoe6@example.com'],

            ['id' => 12,'name' => 'Moriah Cassandra Mariano', 'student_id' => 124300222, 'department_id' => 2, 'role_id' => 2, 'email' => 'elections@example.com'],
            ['id' => 13,'name' => 'Russel Gegante', 'student_id' => 124302025, 'department_id' => 2, 'role_id' => 2, 'email' => 'johndoe7@example.com'],


           
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'id' => $user['id'],
                'name' => $user['name'],
                'student_id' => $user['student_id'],
                'department_id' => $user['department_id'],
                'role_id' => $user['role_id'],
                'email' => $user['email'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}