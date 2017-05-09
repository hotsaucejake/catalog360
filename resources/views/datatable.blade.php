@extends('layouts.metronic.app')

@section('page-level-plugins')
@endsection


@section('page-level-styles')
@endsection


@section('title')
   Services Catalog: Datatable
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
       <!-- BEGIN EXAMPLE TABLE PORTLET-->
       <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Services Catalog</span>
                </div>
                <div class="tools"> </div>
            </div>

            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="catalog">
                    <thead>
                        <tr>
                           <!-- all min-phone-l min-tablet none desktop -->
                           <th class="all">SKU</th>
                           <th class="all">AREA</th>
                           <th class="none">DESCRIPTION: </th>
                           <th class="all">VENDOR</th>
                           <th class="desktop">INTERNAL UNIT COST</th>
                           <th class="desktop">UNIT</th>
                           <th class="all">SUGGESTED COST</th>
                           <th class="desktop">MIN COMMITMENT</th>
                           <th class="desktop">SLA</th>
                           <th class="none">COMMENTS: </th>
                           <th class="none">IMG: </th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($services as $service)
                        <tr>
                           <td><i class="fa fa-plus"> </i> {{ $service->sku }}</td>
                           <td>{{ $service->area }}</td>
                           <td>{{ $service->description }}</td>
                           <td> {{ $service->vendor->name }} </td>
                           <td>{{ $service->internal_unit_cost }}</td>
                           <td>{{ $service->unit }}</td>
                           <td>{{ $service->suggested_cost }}</td>
                           <td>{{ $service->min_commitment }}</td>
                           <td>{{ $service->sla }}</td>
                           <td>{{ $service->comments }}</td>
                           <td>
                              @if($service->image)
                                <img src="/storage/{{ $service->image }}" class="img-responsive img-thumbnail" style="max-width:200px">
                              @endif
                           </td>

                        </tr>

                     @endforeach


                    </tbody>
                </table>
            </div>
       </div>
       <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@endsection


@section('foot-page-level-plugins')
<script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
@endsection


@section('foot-page-level-scripts')
<script src="/assets/pages/scripts/catalog-datatable-responsive.js" type="text/javascript"></script>
@endsection