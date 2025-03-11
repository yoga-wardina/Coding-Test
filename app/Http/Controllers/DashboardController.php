<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Home (){
        return view('protected.dashboard');
    }
    public function newAcc (){
        return view('protected.newacc');
    
    }
    
}
