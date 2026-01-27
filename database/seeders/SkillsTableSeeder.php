<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'HTML', 'level' => 'God'],
            ['name' => 'CSS', 'level' => 'God'],
            ['name' => 'JavaScript', 'level' => 'God'],
            ['name' => 'PHP', 'level' => 'God'],
            ['name' => 'Laravel', 'level' => 'God'],
        ]);
    }
}
