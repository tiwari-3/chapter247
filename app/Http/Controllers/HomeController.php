<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\User;

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
        return view('home');
    }

    /**
        * Handling DataTables ajax requests
        *
        * @return \Yajra\DataTables\DataTables
    */
    public function getData() {
        $users = User::select(["id", "name", "email"]);
        return datatables($users)->make(true);
    }
}
