<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        return view('HalamanDepan.beranda');
    } 
    public function halamansatu()
    {
        return view('HalamanAdmin.biodata');
    }
    public function halamandua()
    {
        return view('HalamanUser.penimbangan');
    }  
    public function dashboard()
    {
        return view('HalamanDepan.dashboard');
    }
}
