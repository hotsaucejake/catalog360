@extends('layouts.metronic.app')

@section('page-level-plugins')
@endsection


@section('page-level-styles')
<link href="assets/pages/css/about.css" rel="stylesheet" type="text/css" />
@endsection


@section('title')
   Dashboard
@endsection


@section('content')

<div class="row margin-bottom-40 about-header">

   <div class="row vertical-align">
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
      </div>
       <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
               <div class="visual">
                   <i class="fa fa-user"></i>
               </div>
               <div class="details">
                   <div class="number">
                       <span data-counter="counterup" data-value="1349.99">0</span>
                   </div>
                   <div class="desc"> Title Here </div>
               </div>
          </a>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 red" href="#">
               <div class="visual">
                   <i class="fa fa-user"></i>
               </div>
               <div class="details">
                   <div class="number">
                       <span data-counter="counterup" data-value="12,5">0</span>M </div>
                   <div class="desc"> Title here </div>
               </div>
          </a>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 green" href="#">
               <div class="visual">
                   <i class="fa fa-user"></i>
               </div>
               <div class="details">
                   <div class="number">
                       <span data-counter="counterup" data-value="549">0</span>
                   </div>
                   <div class="desc"> Title here </div>
               </div>
          </a>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
               <div class="visual">
                   <i class="fa fa-user"></i>
               </div>
               <div class="details">
                   <div class="number"> +
                       <span data-counter="counterup" data-value="89"></span>% </div>
                   <div class="desc"> Title Here </div>
               </div>
          </a>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
       </div>
   </div>

</div>

@endsection


@section('foot-page-level-plugins')
   <script src="/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
   <script src="/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
@endsection


@section('foot-page-level-scripts')

@endsection