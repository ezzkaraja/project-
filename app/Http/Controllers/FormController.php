<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form3request;
use App\Jobs\newordermailsjop;
use App\Mail\adminInvoice;
use App\Mail\contactmail;
use App\Mail\testmail;
use App\Mail\userInvoice;
use App\Mail\vindorInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Laravel\Facades\Image;

class FormController extends Controller
{
    public function form1(){
        return view('forms.form1');
    }
    public function form1_data(Request $request){
        $name=$request->input('name');
      return"welcome $name";
    }
    public function form2(){
        return view('forms.form2');
    }
    public function form2_data(Request $request){
        $name = $request->name;
        return "welcome $name";

    }
    public function form3(){
        return view('forms.form3');
    }
     public function form3_data(Form3request $request){
    //      $request->validate([
    //     'name' => 'required|string|min:3|max:255',
    //     'email' =>'required|email',
    //     'phone' => 'required|max:10 ',
    //     'password' => 'required|min:6|max:20|confirmed'


    // ]);
    return "تم إرسال البيانات بنجاح!";
}


    public function form4(){
        return view('forms.form4');
    }

    public function form4_data(Form3request $request){
       if ($request->hasFile('file')) {
          $path= $request->file('file')->store('uploads','public');
        $image=Image::read($request->file('file'));
        $image->resize(300, 200);
        $image->save(storage_path('app/public/' . $path),90,'webp');
         return view('forms.form4show',compact('path'));
       }else{
              return "No file uploaded";

       }

    }

    public function form5(Request $request){
        return view('forms.form5');
    }

        public function form5_data(Request $request){

            $request->validate([

                 "name"=> "required|string|min:3|max:255",
                 "email"=> "required|string|min:3|max:255",
                 "phone"=> "required|string|min:3|max:255",
                 "subject"=> "required|string|min:3|max:255",
                 "cv"=> "required| file|mimes:pdf,doc,docx|max:2048",
                 "message"=> "required|string|min:3|max:255",
            ]);


            $data=$request->except('_token','cv');
            if ($request->hasFile('cv')) {
                $path = $request->file('cv')->store('uploads/cv', 'public');
                $data['cv'] = $path;

            }
          Mail::to('cdnggeeks@gmail.com')->send(new contactmail($data));
        }

    public function order(){

       newordermailsjop::dispatch('cuastamer@@gmail.com', 'admin@@gmail.com', 'vindor@@gmail.com');
         // You can replace the email addresses with actual variables or values as needed.
         return "Order emails have been dispatched successfully!";

    }

}
