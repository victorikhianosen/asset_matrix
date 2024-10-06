<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }


    public function team()
    {
        return view('pages.team');
    }

    public function loan()
    {
        return view('pages.loan');
    }


    public function savings()
    {
        return view('pages.savings');
    }


     public function deposit()
    {
        return view('pages.deposit');
    }
    
}
