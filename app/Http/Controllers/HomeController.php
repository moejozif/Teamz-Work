<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->role;
        switch ($role) {
            case 'Admin':
                return view('admin.home');
                break;
            case 'Owner':
                return view('owner.home');
                break;
            case 'Engineer':
                return view('engineer.home');
                break;
            default:
                return view('home');
                break;
        }
        
    }
}
