<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); Create auth group for routes instead
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Show the user account.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user_account()
    {
        return view('user_account');
    }


    /**
     * Show the user account.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function discover()
    {
        return view('discover');
    }

    /**
     * Show the contribute page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contribute()
    {
        return view('contribute');
    }

    /**
     * Show the contribute page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contributeSpirit()
    {
        return view('contributeSpirit');
    }

    /**
     * Show the contribute page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contributeDistiller()
    {
        return view('contributeDistiller');
    }
}
