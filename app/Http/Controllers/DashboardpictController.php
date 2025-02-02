<?php

namespace App\Http\Controllers;

use App\Models\dashboardpict;
use Illuminate\Http\Request;

class DashboardpictController extends Controller
{
    public function index()
    {
        $Dashboardpict = Dashboardpict::all(); 

        return view('Dashboard', compact('Dashboardpict')); 
    }
    
}
