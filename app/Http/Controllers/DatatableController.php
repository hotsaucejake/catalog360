<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatableController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = \App\Service::get();
      
      
        return view('datatable', compact('services'));
    }
}
