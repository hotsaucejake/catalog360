@include('layouts.metronic.partials.head')

@include('layouts.metronic.partials.header')

<!-- BEGIN CONTAINER -->
<div class="page-container">

   @include('layouts.metronic.partials.sidebar')

      <!-- BEGIN CONTENT -->
      <div class="page-content-wrapper">

         <!-- BEGIN CONTENT BODY -->
         <div class="page-content">

            <!-- BEGIN PAGE HEADER-->
            {{-- @include('layouts.metronic.partials.themepanel') --}}
            {{-- @include('layouts.metronic.partials.pagebar') --}}

            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> @yield('title') </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->

            @yield('content')

         </div>
         <!-- END CONTENT BODY -->

      </div>
      <!-- END CONTENT -->

      {{-- Must enable in header.blade.php as well --}}
      {{-- @include('layouts.metronic.partials.quicksidebar') --}}

</div>
<!-- END CONTAINER -->

@include('layouts.metronic.partials.footer')

{{-- @include('layouts.metronic.partials.quicknav') --}}

@include('layouts.metronic.partials.foot')