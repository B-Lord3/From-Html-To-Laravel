<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function showIndex()
    {
    	return view('index');
    }

    public function showGeneric()
    {
    	return view('generic');
    }

    public function showElements()
    {
    	return view('elements');
    }

}


