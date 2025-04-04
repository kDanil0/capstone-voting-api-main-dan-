<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokenOTPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('token_o_t_p_s')->insert([
            'id' => 1,
            'user_id' => 1,
            'tokenOTP' => 'testadmin123',
            'expires_at' => null, // No expiration
            'used' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
} 