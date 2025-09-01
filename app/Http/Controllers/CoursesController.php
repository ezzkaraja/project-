<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        $courses=DB::table('courses')->simplePaginate(10);
       return view('courses.index',compact('courses'));

    }
}
