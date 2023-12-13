<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id' => 1,
            'name' => "Malware",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => "Phishing",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'name' => "Ransomware",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 4,
            'name' => "Insider Threat",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 5,
            'name' => "Social Engineering",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 6,
            'name' => "Man-in-the-Middle Attack",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 7,
            'name' => "Zero-Day Exploit",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 8,
            'name' => "Data Breach",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 9,
            'name' => "Denial of Service (DoS)",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 10,
            'name' => "Distributed Denial of Service (DDos)",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 11,
            'name' => "SQL Injection",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 12,
            'name' => "Cross-Site Scripting (XSS)",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 13,
            'name' => "Brute Force",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 14,
            'name' => "Credential Stuffing",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 15,
            'name' => "IoT Vulnerability",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 16,
            'name' => "Eavesdropping",
            'description' => '#989898',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
