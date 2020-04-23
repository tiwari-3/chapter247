<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Product;

class ProductController extends Controller
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
     * Show the application product list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('product');
    }

    /**
        * Handling DataTables ajax requests for product list
        *
        * @return \Yajra\DataTables\DataTables
    */
    public function getData() {
        $products = Product::select(["id", "name", "price", "in_stock"]);
        return datatables($products)
            ->editColumn('in_stock', function ($products) {
                return ($products->in_stock) ? 'In Stock' : 'Out of Stock';
            })
            ->make(true);
    }
}
