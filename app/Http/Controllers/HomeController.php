<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Nasabah, Blog, Tabungan, Pembiayaan, Pengaduan};

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
        // return view('be.dashboard');

        $data['jmlNasabah'] = Nasabah::count();
        $data['jmlNasabahTabungan'] = Tabungan::count();
        $data['jmlNasabahPembiayaan'] = Pembiayaan::count();
        $data['jmlPengaduan'] = Pengaduan::count();
        $data['jmlPost'] = Blog::count();
        return view('be.dashboard', $data);
    }
}
