<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<20; $i++){
        DB::table('courses')->insert([

         'title'=>'course name '.$i,
         'slug'=>'course-name-'.$i,
         'description'=>'lorem lorem',
         'image'=>'http://via.placeholder.com/350x150',
         'price'=>'free',
         'category'=>'programming',

         ]);
        }

    }
}
