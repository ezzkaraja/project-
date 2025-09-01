<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index(){

        $courses=course::latest('id')->simplePaginate(10);
        return view('courses.index',compact('courses'));
    }
}
