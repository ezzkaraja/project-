<?php

namespace App\Http\Controllers;
use App\Http\Requests\studentRequest;
use App\Models\studnt;
use File;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(Request $request){
     $students = studnt::orderBy('id',$request->order ?? 'DESC')->when($request->search,function(Builder $query){
        $query->where('name','like','%'.request()->search.'%');

     })->paginate($request->count ?? 2);
        return view('students.index',compact('students'));
    }

    public function create(){

        return view('students.create');
    }

    public function store(studentRequest $request){
      $path=$request->file('image')->store('uploads','public');
        studnt::create([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $path,
        ]);
        return redirect()->route('students.index')
                         ->with('success', 'Student created successfully!');
    }
    public function destroy($id){
        $student = studnt::findOrFail($id);
        // File::delete(paths: public_path('storage/'.$student->image));
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully!');
    }
    public function edit($id){
        $student = studnt::findOrFail($id);
        return view('students.edit',compact('student'));
    }
    public function update(studentRequest $request,$id){
        $student = studnt::findOrFail($id);
        if($request->hasFile('image')){
            File::delete(public_path('storage/'.$student->image));
            $path=$request->file('image')->store('uploads','public');
        }
        $student->update([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $path ?? $student->image,
        ]);
        return redirect()->route('students.index' , ['page' => $request->page ?? 1])
                            ->with('success', 'Student updated successfully!');

    }
    //soft delete
    public function trash(){
        $students = studnt::onlyTrashed()->paginate(10);
        return view('students.trash',compact('students'));
    }
    public function restore($id){
        $student= studnt::onlyTrashed()->findOrFail($id);
        $student->restore();
        return redirect()->route('students.trash')->with('success', 'Student restored successfully!');
    }
    public function forcedelete($id){
        $student= studnt::onlyTrashed()->findOrFail($id);
        File::delete(public_path('storage/'.$student->image));
        $student->forcedelete();
        return redirect()->route('students.trash')->with('success', 'Student deleted permanently successfully!');
    }
 }
