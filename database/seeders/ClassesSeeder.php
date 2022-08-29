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
            ['name' => 'Creche', 'code' => 'Creche'],
            ['name' => 'Nursery One', 'code' => 'Nurs 1'],
            ['name' => 'Nursery Two', 'code' => 'Nurs 2'],
            ['name' => 'Kindergarten One', 'code' => 'KG One'],
            ['name' => 'Kindergarten Two', 'code' => 'KG Two'],
            ['name' => 'Primary One', 'code' => 'P 1'],
            ['name' => 'Primary Two', 'code' => 'P 2'],
            ['name' => 'Primary Three', 'code' => 'P 3'],
            ['name' => 'Primary Four', 'code' => 'P 4'],
            ['name' => 'Primary Five', 'code' => 'P 5'],
            ['name' => 'Primary Six', 'code' => 'P 6'],
            ['name' => 'Junior High School One', 'code' => 'JHS 1'],
            ['name' => 'Junior High School Two', 'code' => 'JHS 2'],
            ['name' => 'Junior High School Three', 'code' => 'JHS 3'],
        ]);
    }
}