@extends('layouts.app')

@include('inc.navbar')
@section('content')

    <br>
    <div class="container">
        @include('inc.messages')
       
              @if (isset($orders)&& $orders->count() > 0)
                            <h2 class="title mb-4">All Orders</h2>
                            <table class="table" style="border: 2px solid #e7ebf1;">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">mobile</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Notes</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                        <th scope="row">{{$order->id}}</th>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->sevice_id}}</td>
                                        <td>{{$order->city_id}}</td>
                                        <td>{{$order->notes}}</td>
                                        <td>
                                
                                <a href="{{route('admin.delete.order',$order->id)}}" class="btn btn-danger">Delete</a>

                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              @else
                  <div class="alert alert-success">There is no Orders</div>
              @endif

    </div>
@stop

