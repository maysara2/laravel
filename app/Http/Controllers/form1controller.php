<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form1controller extends Controller
{

    public function form1()
    {
        return view('forms.form1');
    }
    public function form1_data(Request $request)
    {
        // لعرض كل اشي  dd($request->all());

     //   dd($request ->except('_token'));
        //return 'done';
        $name=$request->name;
        $age=$request->age;
      return "welcome $name ,your age is $age";
    }


    public function form2()
    {
            return view('forms.form2');
    }
    public function form2_data (Request $request )

    {

      //  dd($request->all());
    $name=$request->name;
    $email=$request->email;
    $age=$request->age;

    return view('forms.form2_data',compact('name','email','age'));
    }

    public function form3()
    {
        return view('forms.form3');
    }
    public function form3_data(Request $request)
    {



        // dd($request->all());
        //  $request->validate([
        //     'name'=>['required','min:3'],
        //     'email'=>'required|email',
        //     'password'=>'required|min:8|confirmed',
        //  ]);
        $fname=$request->fname;
        $femail=$request->femail;
        $fpassword=$request->fpassword;

         return view('forms.form3_data',compact('fname','femail','fpassword'));

    }
}




