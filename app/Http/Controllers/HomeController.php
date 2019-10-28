<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
        $user = Auth::user();
        $data = DB::table('user_account')
            ->select(
                DB::raw('balance'))
            ->where('user_id', '=', $user->id)->get();
        $balance = $data[0]->balance;
        return view('home', ['balance' => $balance]);
    }

    public function transfer()
    {
        return view('user_account');
    }
}
