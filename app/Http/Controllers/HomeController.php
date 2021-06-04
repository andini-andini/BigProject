<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\kamar;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

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
        return view('v_home_admin');
    }

    public function profil()
    {
        return view('profil');
    }

    public function table()
    {
        $users = User::all();
        $posts = User::orderBy('name', 'desc')->paginate(10);
        return view('basic-table', compact('users'));
    }

    public function fasilitas()
    {
        $fasilitas = fasilitas::all();
        $posts = fasilitas::orderBy('nama', 'desc')->paginate(10);
        return view('table-fasilitas', compact('fasilitas'));
    }
    public function kamar()
    {
        $kamar = kamar::all();
        $posts = kamar::orderBy('nama', 'desc')->paginate(10);
        return view('table-kamar', compact('kamar'));
    }
}
