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
        
        $services->map(function ($service) {
            $service->image = 'https://catalog.corus360.com/storage/' . $service->image;
        });


        return response()->json($services);
    }


    public function atg()
    {
        $services = \App\Service::where('category_id', 1)->get();

        $services->map(function ($service) {
            $service['vendor'] = $service->vendor;
        });
        
        $services->map(function ($service) {
            $service->image = 'https://catalog.corus360.com/storage/' . $service->image;
        });

        return response()->json($services);
    }


    public function transform360()
    {
        $services = \App\Service::where('category_id', 2)->get();

        $services->map(function ($service) {
            $service['vendor'] = $service->vendor;
        });
        
        $services->map(function ($service) {
            $service->image = 'https://catalog.corus360.com/storage/' . $service->image;
        });

        return response()->json($services);
    }
}
