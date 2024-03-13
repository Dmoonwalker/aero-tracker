<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function addproduct()
    {
        $title = 'Add Part';
        return view('addproduct',compact('title'));
    }
    public function editproduct()
    {
        $title = 'Edit Part';
        return view('editproduct',compact('title'));
    }
    public function productdetails()
    {
        $title = 'Details';
        return view('productdetails',compact('title'));
    }
    public function productlist()
    {
        $title = 'All Parts';
        return view('productlist',compact('title'));
    }
    public function addpurchase()
    {
        $title = 'Checkout Part';
        return view('addpurchase'.compact('title'));
    }
    public function inventoryreport()
    {
        $title = 'Inventory Report';
        return view('inventoryreport',compact('title'));
    }
    public function purchaselist()
    {
        $title = 'Checkout History';
        return view('purchaselist',compact('title'));
    }

 
}
