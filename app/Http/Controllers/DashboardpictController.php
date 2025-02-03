<?php

namespace App\Http\Controllers;

use App\Models\Dashboardpict;

use Illuminate\Http\Request;

class DashboardpictController extends Controller
{
    public function index()
    {
        $Dashboardpict = Dashboardpict::all(); 

        return view('Dashboard', compact('Dashboardpict')); 
    }
    
}
