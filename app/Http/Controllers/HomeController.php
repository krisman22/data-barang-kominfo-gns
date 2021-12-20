<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $peralatan = DB::table('peralatan')->count();
        $lokasi = DB::table('lokasi')->count();
        // dd($peralatan);
        return view('home', compact('peralatan', 'lokasi'));
    }
}
