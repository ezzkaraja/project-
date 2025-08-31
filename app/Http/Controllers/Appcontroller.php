<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appcontroller extends Controller
{
 public function index()
 {
     return view('home');
 }
    public function about()
    {
        return view('about');
    }
   public function contact()
    {
        return view('contact');
    }

 public function calc($x, $y)
    {
        $sum = $x + $y;
        $sub = $x - $y;
        $mul = $x * $y;
        $div = $x / $y;
        return view('calc', compact('x','y','sum', 'sub', 'mul', 'div'));
    }
    public function posts()
        {
            $posts=[
                ['id'=>'id 1','title' => 'Post 1', 'content' => 'Content of post 1'],
                ['id'=>'id 2','title' => 'Post 2', 'content' => 'Content of post 2'],
                ['id'=>'id 3','title' => 'Post 3', 'content' => 'Content of post 3'],
            ];
            return view('posts', compact('posts'));
        }

}
