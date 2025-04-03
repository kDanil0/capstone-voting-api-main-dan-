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

            
            /*
            ['id' => 2,'name' => 'Peter L. Cruz', 'student_id' => 127509021, 'department_id' => 1, 'role_id' => 2, 'email' => 'peter.cruz@example.com'],
            ['id' => 3,'name' => 'Alexander S. Pereira', 'student_id' => 127509022, 'department_id' => 2, 'role_id' => 2, 'email' => 'alex.pereira@example.com'],
            ['id' => 4,'name' => 'Jacob Marcus Elquiero', 'student_id' => 127509023, 'department_id' => 3, 'role_id' => 2, 'email' => 'elq@example.com'], // Empty name in your seeder
            ['id' => 5,'name' => 'Joseph A. Manalang', 'student_id' => 127509024, 'department_id' => 4, 'role_id' => 2, 'email' => 'joseph.manalang@example.com'],
            ['id' => 6,'name' => 'Joanna Paula D. Santiago', 'student_id' => 127509025, 'department_id' => 5, 'role_id' => 2, 'email' => 'joanna.santiago@example.com'],
            ['id' => 7,'name' => 'Kyle James A. Perez', 'student_id' => 127509026, 'department_id' => 1, 'role_id' => 2, 'email' => 'kyle.perez@example.com'],
            ['id' => 8,'name' => 'David Jeffrey B. Punzalan', 'student_id' => 127509027, 'department_id' => 6, 'role_id' => 2, 'email' => 'david.punzalan@example.com'],
            ['id' => 9,'name' => 'Michael D. Canlas', 'student_id' => 127509028, 'department_id' => 3, 'role_id' => 2, 'email' => 'michael.canlas@example.com'],
            ['id' => 10,'name' => 'Kyla R. Agustin', 'student_id' => 127509029, 'department_id' => 4, 'role_id' => 2, 'email' => 'kyla.agustin@example.com'],
            
            
            ['id' => 11,'name' => 'Marvin Dave Tinio', 'student_id' => 127509030, 'department_id' => 3, 'role_id' => 2, 'email' => 'marvin.tinio@example.com'],
            ['id' => 12,'name' => 'Maria Leonora P. Dela Cruz', 'student_id' => 127509031, 'department_id' => 5, 'role_id' => 2, 'email' => 'maria.delacruz@example.com'],
            ['id' => 13,'name' => 'Arnold S. Del Rosario', 'student_id' => 127509032, 'department_id' => 6, 'role_id' => 2, 'email' => 'arnold.delrosario@example.com'],
            ['id' => 14,'name' => 'Kimberly Cassandra L. Dizon', 'student_id' => 127509033, 'department_id' => 7, 'role_id' => 2, 'email' => 'kimberly.dizon@example.com'],
            ['id' => 15,'name' => 'Mark Lawrenz C. Tuazon', 'student_id' => 127509034, 'department_id' => 4, 'role_id' => 2, 'email' => 'mark.tuazon@example.com'],
            ['id' => 16,'name' => 'Katherine S. Villaruel', 'student_id' => 127509035, 'department_id' => 2, 'role_id' => 2, 'email' => 'katherine.villaruel@example.com'],
            */
            
            /*
            // CCIS Users
            ['name' => 'Joey Diaz', 'student_id' => 11, 'department_id' => 1, 'role_id' => 2, 'email' => 'diaz@example.com'],
            ['name' => 'Chris P. Bacon', 'student_id' => 12, 'department_id' => 1, 'role_id' => 2, 'email' => 'chris@example.com'],
            ['name' => 'Jane Doe', 'student_id' => 13, 'department_id' => 1, 'role_id' => 2, 'email' => 'jane@example.com'],
            ['name' => 'Emma Watson', 'student_id' => 14, 'department_id' => 1, 'role_id' => 2, 'email' => 'emma@example.com'],
            ['name' => 'Harry Potter', 'student_id' => 15, 'department_id' => 1, 'role_id' => 2, 'email' => 'harry@example.com'],
            ['name' => 'Albus Dumbledore', 'student_id' => 16, 'department_id' => 1, 'role_id' => 2, 'email' => 'dumbledore@example.com'],
            ['name' => 'Hermione Granger', 'student_id' => 17, 'department_id' => 1, 'role_id' => 2, 'email' => 'hermione@example.com'],
            ['name' => 'Ron Weasley', 'student_id' => 18, 'department_id' => 1, 'role_id' => 2, 'email' => 'ron@example.com'],
            ['name' => 'Gandalf', 'student_id' => 19, 'department_id' => 1, 'role_id' => 2, 'email' => 'gandalf@example.com'],
            ['name' => 'Frodo Baggins', 'student_id' => 20, 'department_id' => 1, 'role_id' => 2, 'email' => 'frodo@example.com'],

            // CON Users
            ['name' => 'John Wick', 'student_id' => 21, 'department_id' => 2, 'role_id' => 2, 'email' => 'johnwick@example.com'],
            ['name' => 'Arya Stark', 'student_id' => 22, 'department_id' => 2, 'role_id' => 2, 'email' => 'arya@example.com'],
            ['name' => 'Daenerys Targaryen', 'student_id' => 23, 'department_id' => 2, 'role_id' => 2, 'email' => 'daenerys@example.com'],
            ['name' => 'Sansa Stark', 'student_id' => 24, 'department_id' => 2, 'role_id' => 2, 'email' => 'sansa@example.com'],
            ['name' => 'Cersei Lannister', 'student_id' => 25, 'department_id' => 2, 'role_id' => 2, 'email' => 'cersei@example.com'],
            ['name' => 'Tyrion Lannister', 'student_id' => 26, 'department_id' => 2, 'role_id' => 2, 'email' => 'tyrion@example.com'],
            ['name' => 'Jon Snow', 'student_id' => 27, 'department_id' => 2, 'role_id' => 2, 'email' => 'jon@example.com'],
            ['name' => 'Jorah Mormont', 'student_id' => 28, 'department_id' => 2, 'role_id' => 2, 'email' => 'jorah@example.com'],
            ['name' => 'Theon Greyjoy', 'student_id' => 29, 'department_id' => 2, 'role_id' => 2, 'email' => 'theon@example.com'],
            ['name' => 'Brienne of Tarth', 'student_id' => 30, 'department_id' => 2, 'role_id' => 2, 'email' => 'tarth@example.com'],
            */

           
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'id' => $user['id'],
                'name' => $user['name'],
                'student_id' => $user['student_id'],
                'department_id' => $user['department_id'],
                'role_id' => $user['role_id'],
                'email' => $user['email'],
                'email_verified_at' => now(),
                // 'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}