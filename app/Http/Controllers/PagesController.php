<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
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


    public function dataPolicy()
    {
        return view('pages.policy_data');
    }

    public function mobilePolicy()
    {
        return view('pages.policy_mobile
        ');
    }

    public function amt()
    {
        return view('pages.policy_amt
        ');
    }


    public function enduser()
    {
        return view('pages.enduser
        ');
    }

    public function internet(){
        return view('pages.internet');
    }

}
