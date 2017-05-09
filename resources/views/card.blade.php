@extends('layouts.metronic.app')

@section('page-level-plugins')
@endsection


@section('page-level-styles')
<link href="/assets/pages/css/pricing.css" rel="stylesheet" type="text/css" />
@endsection


@section('title')
   Services Catalog: Card
@endsection


@section('content')

<div class="pricing-content-1">
    <div class="row">

      @foreach($services as $service)

         <div class="col-md-3 col-sm-4">
             <div class="price-column-container border-active">
                 <div class="price-table-head bg-red">
                     <h2 class="no-margin">{{ $service->sku }}</h2>
                 </div>
                 <div class="arrow-down border-top-red"></div>
                 <div class="price-table-pricing">
                     <h4><strong>{{ $service-> area }}</strong></h4>
                     <p>{{ $service->description }}</p>
                 </div>
                 @if($service->image)
                     <div><img src="/storage/{{ $service->image }}" class="img-responsive"></div>
                 @endif
                 <div class="price-table-content">
                     <div class="row mobile-padding">
                            <p><strong>${{ $service->suggested_cost }}/{{ $service->unit }}</strong></p>
                            <p><strong>Vendor:</strong> {{ $service->vendor->name }}</p>
                            <p><strong>Internal Cost:</strong> ${{ $service->internal_unit_cost }}</p>
                     </div>
                 </div>
                 <div class="arrow-down arrow-grey"></div>
                 <div class="price-table-footer">
                    @if($service->min_commitment)
                      <p><strong>Min. Commitment:</strong> {{ $service->min_commitment }}</p>
                    @endif
                    @if($service->sla)
                      <p><strong>SLA:</strong> {{ $service->sla }}</p>
                    @endif
                    @if($service->comments)
                      <p>{{ $service->comments }}</p>
                    @endif
                 </div>
             </div>
         </div>

      @endforeach

    </div>
</div>

@endsection


@section('foot-page-level-plugins')
@endsection


@section('foot-page-level-scripts')
@endsection