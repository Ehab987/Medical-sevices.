@extends('layouts.app')

@include('inc.navbar')
@section('content')

    <br>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6  groupStyle">
                <h3 class="groupStyleHeader">All Orders</h3>
                <p>With supporting text below as a nutural lead-in to additional content.</p>
                <a href="{{route('admin.All.Orders')}}" class="btn btn-primary">{{$number_orders}}</a>
            </div>
            <div class="col-lg-6 groupStyle">
                <h3 class="groupStyleHeader">All Services</h3>
                <p>With supporting text below as a nutural lead-in to additional content.</p>
                <a href="{{route('admin.All.Services')}}" class="btn btn-primary">{{$number_services}}</a>
            </div>
            <div class="col-lg-6 groupStyle">
                <h3 class="groupStyleHeader">All Cities</h3>
                <p>With supporting text below as a nutural lead-in to additional content.</p>
                <a href="{{route('admin.All.Cities')}}" class="btn btn-primary">{{$num_cities}}</a>
            </div>

            <div class="col-lg-6 groupStyle">
                <h3 class="groupStyleHeader">All Orders in this Day</h3>
                <p>With supporting text below as a nutural lead-in to additional content.</p>
                <a href="{{route('OrdersToday')}}" class="btn btn-primary">{{$num_todayOrder}}</a>
            </div>
        </div>
    </div>
    @stop