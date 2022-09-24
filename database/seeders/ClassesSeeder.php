<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::insert([
            ['name' => 'Creche', 'code' => 'Creche', 'category' => 'nusery'],
            ['name' => 'Nursery One', 'code' => 'Nurs 1', 'category' => 'nusery'],
            ['name' => 'Nursery Two', 'code' => 'Nurs 2', 'category' => 'nusery'],
            ['name' => 'Kindergarten One', 'code' => 'KG One', 'category' => 'basic_school'],
            ['name' => 'Kindergarten Two', 'code' => 'KG Two', 'category' => 'basic_school'],
            ['name' => 'Primary One', 'code' => 'P 1', 'category' => 'upper primary'],
            ['name' => 'Primary Two', 'code' => 'P 2', 'category' => 'upper primary'],
            ['name' => 'Primary Three', 'code' => 'P 3', 'category' => 'upper primary'],
            ['name' => 'Primary Four', 'code' => 'P 4', 'category' => 'upper primary'],
            ['name' => 'Primary Five', 'code' => 'P 5', 'category' => 'upper primary'],
            ['name' => 'Primary Six', 'code' => 'P 6', 'category' => 'upper primary'],
            ['name' => 'Junior High School One', 'code' => 'JHS 1', 'category' => 'junior high'],
            ['name' => 'Junior High School Two', 'code' => 'JHS 2', 'category' => 'junior high'],
            ['name' => 'Junior High School Three', 'code' => 'JHS 3', 'category' => 'junior high'],
        ]);
    }
}