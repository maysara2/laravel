<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvcontroller extends Controller
{
    public function index()
    {
        return view('cv.index');
    }

    public function experiens()
    {
        return view('cv.experiens');
    }

    public function education()
    {
        return view('cv.education');
    }

    public function skills()
    {
        return view('cv.skills');
    }

    public function interests()
    {
        return view('cv.interests');
    }

    public function awards()
    {
        $awards=[
        'certificate1',
        'certificate2',
        'certificate2',
        'certificate3',
        'certificate4',
        'certificate5',

        ];
        return view('cv.awards')->with('awards',$awards);
    }
}
