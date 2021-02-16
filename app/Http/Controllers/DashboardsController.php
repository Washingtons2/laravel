<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login(Request $request)
    {
        if ($request->session()->exists('checkin')) {
            return view('dashboard.login');
        }else{
            return redirect()->route('dashboard.index');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function startlogin(Request $request)
    {
        if($request->_token){
            $request->session()->flash('checkin', $request->_token);
            return redirect()->route('dashboard.login');
        }else{
            return redirect()->route('dashboard.index');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('dashboard.register');
    }
}
