<?php

namespace App\Http\Controllers;

use App\Mail\LoanMail;
use Illuminate\Http\Request;
use App\Mail\CustomerReplyLoan;
use Illuminate\Support\Facades\Mail;

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

    public function requestLoan(){
        return view('pages.request_loan');
    }

    public function processLoan(Request $request){
        $data = $request->validate([
            'first_name' => 'required',
            'last_name'=> 'required',
            'phone' => 'required',
            'email' => 'required',
            'purpose' => 'required',
            'duration' => 'required',
            'amount' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',            
        ]);

        $matricEmail = ['victorikhianosen@assetmatrix.com', ];
        Mail::to($data['email'])->send(mailable: new CustomerReplyLoan($data));
        Mail::to($data['email'])->send(mailable: new LoanMail($data));
    
        return back()->with('success', 'Loan submitted successfully');
    }

}
