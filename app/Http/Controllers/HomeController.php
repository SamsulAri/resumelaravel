<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Datadiri;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $userx = Auth::user();
        $users = User::orderBy('id','ASC')->paginate(5);
        $datadiri = Datadiri::get();

        return view('home',compact('users','userx','datadiri'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
