<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{

public function index()
{
    $myname='maysara';
    $desc='sdkfsdfd1321   slkfjsdlkfjsel';
//هاي الطريقة بس اذا كان ف متغ ير او2 محتاجين تعديل
   //    return view('index')->with('myname',$myname)->with('desc',$desc);
//هاي اكتر وحدة سهلة
   return view('index',compact('myname','desc'));
}

public function about()
{
    return 'about page';
}

public function contact()
{
    return 'contact page';
}

public function team()
{
    return 'team page ';
}

public function news($id = null)
{
    return 'news'. $id;
}
}
