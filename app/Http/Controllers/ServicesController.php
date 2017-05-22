<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
   /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct() {}

   /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $services = \App\Service::all();

      $services->map(function ($service) {
         $service['vendor'] = $service->vendor;
      });


      return response()->json($services);
   }
}
