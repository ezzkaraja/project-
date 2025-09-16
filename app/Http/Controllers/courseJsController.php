<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\course;
use Illuminate\Database\Eloquent\Builder;

class courseJsController extends Controller
{
    public function index(Request $request){
        $courses=course::orderBy('id',$request->order ?? 'DESC')->when($request->search,function(Builder $query){
            $query->where('title','like','%'.request()->search.'%');
         })->paginate($request->count ?? 2);
          return view('courses.courses-js',compact('courses'));
        }

    }

