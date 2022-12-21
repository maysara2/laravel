<?php

namespace App\Http\Controllers;

use App\Models\Categoties;
use Illuminate\Http\Request;

class catcontroller extends Controller
{
    public function index()
    {
        $pp=Categoties::all();

        return view('categoties.index', compact('pp'));
    }
}
