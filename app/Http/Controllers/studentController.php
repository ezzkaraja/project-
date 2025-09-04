<?php

namespace App\Http\Controllers;
use App\Http\Requests\studentRequest;
use App\Models\studnt;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
     $students = DB::table('studnts')->paginate('2');
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
        File::delete(public_path('storage/'.$student->image));
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully!');
    }
 }
