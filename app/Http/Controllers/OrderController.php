<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Order;

class OrderController extends Controller
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
     * Show the application order list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('order');
    }

    /**
        * Handling DataTables ajax requests for order list
        *
        * @return \Yajra\DataTables\DataTables
    */
    public function getData() {
        $orders = Order::select(["id", "invoice_number", "total_amount", "status"]);
        return datatables($orders)->make(true);
    }
}
