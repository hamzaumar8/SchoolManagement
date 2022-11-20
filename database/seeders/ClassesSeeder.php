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
            ['name' => 'Creche', 'house_name' => 'Naana', 'class_type' => 'creche', 'campus' => 'north'],
            ['name' => 'Nursery One', 'house_name' => 'Nurs 1', 'class_type' => 'nursery', 'campus' => 'north'],
            ['name' => 'Nursery Two', 'house_name' => 'Nurs 2', 'class_type' => 'nursery', 'campus' => 'north'],
            ['name' => 'Kindergarten One', 'house_name' => 'KG One', 'class_type' => 'kg', 'campus' => 'north'],
            ['name' => 'Kindergarten Two', 'house_name' => 'KG Two', 'class_type' => 'kg', 'campus' => 'north'],
            ['name' => 'Primary One', 'house_name' => 'Naana', 'class_type' => 'basic school', 'campus' => 'north'],
            ['name' => 'Primary Two', 'house_name' => 'Naana', 'class_type' => 'basic school', 'campus' => 'north'],
            ['name' => 'Primary Three', 'house_name' => 'P 3', 'class_type' => 'basic school', 'campus' => 'north'],
            ['name' => 'Primary Four', 'house_name' => 'P 4', 'class_type' => 'basic school', 'campus' => 'south'],
            ['name' => 'Primary Five', 'house_name' => 'Naana', 'class_type' => 'basic school', 'campus' => 'south'],
            ['name' => 'Primary Six', 'house_name' => 'Naana', 'class_type' => 'basic school', 'campus' => 'south'],
            ['name' => 'Junior High School One', 'house_name' => 'JHS 1', 'class_type' => 'junior high', 'campus' => 'south'],
            ['name' => 'Junior High School Two', 'house_name' => 'JHS 2', 'class_type' => 'junior high', 'campus' => 'south'],
            ['name' => 'Junior High School Three', 'house_name' => 'JHS 3', 'class_type' => 'junior high', 'campus' => 'south'],
        ]);
    }
}