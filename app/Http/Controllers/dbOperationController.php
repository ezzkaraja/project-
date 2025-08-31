<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbOperationController extends Controller
{
    public function index(){
        //crud operations on course table using query builder
        // $corses = DB::table('courses')->get();
        // dd($corses);
        //insert new record
        //  $course= DB::table('courses')->insert([

        //  'title'=>'web development',
        //  'slug'=>'web-development',
        //  'description'=>'lorem lorem',
        //  'image'=>'http://via.placeholder.com/350x150',
        //  'price'=>'free',
        //  'category'=>'programming',

        //  ]);
        //  dd($course);
        // $corses = DB::table('courses')->where('id','>','1')->get();
        //  dd($corses);

        //update record
        // $course= DB::table('courses')->where('id',2)->update([
        //     'title'=>'web development updated',]);

// $corses = DB::table('courses')->where('id','>','1')->get();
//           dd($corses);
            //delete record
    //     DB::table('courses')->where('id',1)->delete();
    //    dd(DB::table('courses')->get());

    }
}
