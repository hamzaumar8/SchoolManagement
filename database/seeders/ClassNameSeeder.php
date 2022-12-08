<?php

namespace Database\Seeders;

use App\Models\ClassName;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassName::insert([
            ['name' => 'Creche'],
            ['name' => 'Nursery One'],
            ['name' => 'Nursery Two'],
            ['name' => 'Kindergarten One'],
            ['name' => 'Kindergarten Two'],
            ['name' => 'Primary One'],
            ['name' => 'Primary Two'],
            ['name' => 'Primary Three'],
            ['name' => 'Primary Four'],
            ['name' => 'Primary Five',],
            ['name' => 'Primary Six',],
            ['name' => 'Junior High School One'],
            ['name' => 'Junior High School Two'],
            ['name' => 'Junior High School Three'],
        ]);
    }
}