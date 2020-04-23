<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Customer;

class CustomerController extends Controller
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
     * Show the application customer list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('customer');
    }

    /**
        * Handling DataTables ajax requests for customer list
        *
        * @return \Yajra\DataTables\DataTables
    */
    public function getData() {
        $customers = Customer::select(["id", "name", "email"]);
        return datatables($customers)->make(true);
    }
}
