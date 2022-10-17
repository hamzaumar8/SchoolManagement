<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::insert([
            // ['name' => 'MATHEMATICS', 'code' => ''],
            ['name' => 'ENGLISH', 'code' => ''],
            ['name' => 'SCIENCE', 'code' => ''],
            ['name' => 'SOCIAL STUDIES', 'code' => ''],
            ['name' => 'RELIGIOUS AND MORAL EDUCATION', 'code' => 'R.M.E'],
            ['name' => 'GHANAIAN LANGUAGE (FANTE)', 'code' => ''],
            ['name' => 'FRENCH', 'code' => ''],
            ['name' => 'BDT(HOME ECONOMICS, PRE-TECH, VISUAL ARTS)', 'code' => ''],
            ['name' => 'CREATIVE ARTS', 'code' => ''],
            ['name' => 'PHYSICAL EDUCATION', 'code' => ''],
            ['name' => 'COMPUTING', 'code' => ''],
            ['name' => 'CHINESE', 'code' => ''],
            ['name' => 'PROJECT WORK', 'code' => ''],
        ]);
    }
}