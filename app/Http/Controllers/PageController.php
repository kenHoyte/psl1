<?php

namespace App\Http\Controllers;

use App\Models\Tbill;
use App\Models\Application;
use App\Models\Fixeddeposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function singleApplication(){

            return view('backend.products.single-application');

    }

    public function renderDynamicPage($page){
        return view($page);
    }
    public function pendingApplications(){
        $user_id = Auth::user()->id;
        $applications = Application::where('user_id', $user_id)->get();
        return view('frontend.customers.pending-applications', ['applications' => $applications]);
    }
    public function investments(){
        $user_id = Auth::user()->id;
        $fixeddeposits = Fixeddeposit::where('user_id', $user_id)->get();
        $tbills = Tbill::where('user_id', $user_id)->get();
        return view('frontend.customers.investments', ['fixeddeposits' => $fixeddeposits], ['tbills' => $tbills]);
    }

    public function fixedDeposits(){
        if(Auth::user()->role == 'admin'){
            $fixeddeposits = Fixeddeposit::all();
        return view('backend.products.fixeddeposit', compact('fixeddeposits'));
        }
        return redirect()->back();
    }
    public function tBills(){
        $tbills = Tbill::all();
        return view('backend.products.tbills', compact('tbills'));
    }
}
