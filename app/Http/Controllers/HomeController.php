<?php

namespace App\Http\Controllers;

use App\Models\Admin\Travelpackages;
use App\Models\Admin\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function handleAdmin()
    {
        return view('handleAdmin',[
            'travel_package' => Travelpackages::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::WHERE('transaction_status','PENDING')->count(),
            'transaction_success' => Transaction::WHERE('transaction_status','SUCCESS')->count()
        ]);
    }
}
