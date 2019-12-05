<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\minatM;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('halaman.home');
    }

    public function project()
    {
        $data = DB::table('minat')->get();
        return view('halaman.project',compact('data'));
    }

    public function simpan(Request $r)
    {
        
    }
}
