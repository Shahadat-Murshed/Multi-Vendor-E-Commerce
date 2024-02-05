@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Delivery</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{route('admin.order.index')}}"> All Orders</a></div>
            <div class="breadcrumb-item">Assign Delivery</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Assign Delivery Man</h4>
                    </div>
                    <div class="card-body">
                        
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Order No</label>
                                    <input class="form-control" value="{{$order->invoice_id}}" readonly disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Prefered Delivery Time</label>
                                    <input class="form-control" value="{{$order->delivery_time}}" readonly disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input class="form-control" value="{{$address->city}}" readonly disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Area</label>
                                    <input class="form-control" value="{{$address->state}}" readonly disabled>
                                </div>
                            </div>
                            <h2 class="mt-5 mb-5">Delivery Mans List</h2>
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Area</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deliveries_area as $delivery)
                                        <tr>
                                            <td>{{$delivery->name}}</td>
                                            <td>{{$delivery->phone}}</td>
                                            <td>{{$delivery->city}}</td>
                                            <td>{{$delivery->area}}</td>
                                            <td>
                                                @if ($delivery->status == 'active')
                                                <span class='badge bg-success' style="color: black; width: 80px">Active</span>
                                                @else
                                                <span class='badge bg-warning' style="color: black; width: 80px">Inactive</span>
                                                @endif
                                            <td>
                                                <form action="{{route(('admin.delivery.assign'))}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{$delivery->id}}" name="delivery_man">
                                                    <input type="hidden" value="{{$order->id}}" name="order_id">
                                                    <button {{$delivery->status == 'inactive'? 'disabled' : ''}} type="submit" class="btn btn-info">Assign</button>
                                                </form>
                                            </td>
                                        </tr>  
                                    @endforeach
                                    @foreach ($deliveries_city as $delivery)
                                        <tr>
                                            <td>{{$delivery->name}}</td>
                                            <td>{{$delivery->phone}}</td>
                                            <td>{{$delivery->city}}</td>
                                            <td>{{$delivery->area}}</td>
                                            <td>@if ($delivery->status == 'active')
                                                <span class='badge bg-success' style="color: black; width: 80px">Active</span>
                                                @else
                                                <span class='badge bg-warning' style="color: black; width: 80px">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{route(('admin.delivery.assign'))}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{$delivery->id}}" name="delivery_man">
                                                    <input type="hidden" value="{{$order->id}}" name="order_id">
                                                    <button {{$delivery->status == 'inactive'? 'disabled' : ''}} type="submit" class="btn btn-info">Assign</button>
                                                </form>
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <button type="button" class="btn btn-danger"><a style="text-decoration: none; color:white" href="{{route('admin.order.index')}}">Cancel</a></button>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            ordering:  false,
        });
    } );
    </script>
@endpush