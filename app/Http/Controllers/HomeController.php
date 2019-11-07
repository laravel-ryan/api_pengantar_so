<?php

namespace App\Http\Controllers;

use App\User;
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
    public function index()
    {
        $user = User::all();
        return view('home', compact('user'));
    }

    public function create(Request $request, $id) {

        $user = User::findOrFail($id);

        if ($user->active == 1) {
            $user->active = 0;
        }else{
            $user->active = 1;
        }

        $user->save();

        return redirect()->back();
    }
}
