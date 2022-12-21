<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page1controller extends Controller
{
 public function index()
{
    $name='maysara';
    return view('page1assets.index')->with('name',$name);
}

public function about()
{
    $data=[
        [
            'name'=>'amal',
            'email'=>'amal@gmail.com',
        ],
        [
            'name'=>'mohmmed',
            'email'=>'mohmmed@gmail.com',
        ],
        [
            'name'=>'maysara',
            'email'=>'maysara@gmail.com',
        ],
        [
            'name'=>'maysara',
            'email'=>'maysara@gmail.com',
        ], [
            'name'=>'maysara',
            'email'=>'maysara@gmail.com',
        ], [
            'name'=>'maysara',
            'email'=>'maysara@gmail.com',
        ],
    ];
    return view('page1assets.about')->with('data',$data);
}

public function contact()
{
    return view('page1assets.contact');
}

public function post()
{
    return view('page1assets.post');
}

}
