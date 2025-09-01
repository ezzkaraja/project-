<?php

namespace App\Http\Controllers;

use App\Http\Requests\courseRequest;
use App\Models\course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index(){

        $courses=course::latest('id')->paginate(10);
        return view('courses.index',compact('courses'));
    }
    public function create(){
        return view('courses.create');
    }
    public function store(courseRequest $request){
        // dd($request->all());
        $path=$request->file('image')->store('uploads','public');
        // $course=new course();
        // $course->title=$request->title;
        // $course->slug=Str::slug($request->title);
        // $course->image=$path;
        // $course->price=$request->price;
        // $course->category=$request->category;
        // $course->description=$request->description;
        // $course->save();

        // //using static method
        //  course::create([
        //     'title'=>$request->title,
        //     'slug'=>Str::slug($request->title),
        //     'image'=>$path,
        //     'price'=>$request->price,
        //     'category'=>$request->category,
        //     'description'=>$request->description,
        //  ]);
           Course::create([
            'title'       => $request->title,
            'slug'        => Str::slug($request->title),
            'image'       => $path,
            'price'       => $request->price,
            'category'    => $request->category,
            'description' => $request->description,
        ]);
 
        return redirect()->route('courses.index')
                         ->with('success', 'Course created successfully!');


    }
}
