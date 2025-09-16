<?php

namespace App\Http\Controllers;

use App\Http\Requests\courseRequest;
use App\Models\course;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index(Request $request ){

        $courses=course::orderBy('id', $request->order ??'DESC' )->when($request->search,function (Builder $query){

            $query->where('title','like','%'.request()->search.'%');
                  }  )->paginate($request->count ?? 2);
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
                         ->with('sweet_success', 'Course created successfully!');



    }
    public function destroy($id){
        $course=course::findOrFail($id);
        // File::delete(public_path('storage/'.$course->image));
        $course->delete();
        return redirect()->route('courses.index')
                         ->with('sweet_success', 'Course deleted successfully!');




    }
    public function edit($id){
        $course=course::findOrFail($id);
        return view('courses.edit',compact('course'));
    }

    public function update(courseRequest $request,$id){
        $course=course::findOrFail($id);
        if($request->hasFile('image')){
            //delete old image
            File::delete(public_path('storage/'.$course->image));
            //upload new image
            $path=$request->file('image')->store('uploads','public');
        }

        $course->update([
            'title'       => $request->title,
            'slug'        => Str::slug($request->title),
            'image'       => $path ?? $course->image,
            'price'       => $request->price,
            'category'    => $request->category,
            'description' => $request->description,
        ]);
        return redirect()->route('courses.index', ['page' => $request->page ?? 1])
                         ->with('sweet_success', 'Course updated successfully!');
}
    public function trash(){
        $courses=course::onlyTrashed()->paginate(10);
        return view('courses.trash',compact('courses'));
    }
    public function restore($id){
        $course=course::onlyTrashed()->findOrFail($id);
        $course->restore();
        return redirect()->route('courses.trash')
                         ->with('sweet_success', 'Course restored successfully!');

    }
    public function forcedelete($id){
        $course=course::onlyTrashed()->findOrFail($id);
        File::delete(public_path('storage/'.$course->image));
        $course->forceDelete();
        return redirect()->route('courses.trash')
                         ->with('sweet_success', 'Course deleted permanently successfully!');

    }
}
