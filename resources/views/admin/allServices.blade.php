@extends('layouts.app')

@include('inc.navbar')
@section('content')

    <br>
    <div class="container">
         @include('inc.messages')
        
        @if (isset($services)&& $services->count() > 0)
        <h2 class="title mb-4">All Services</h2>
            <table class="table" style="border: 2px solid #e7ebf1;">
              <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Actions</th>
                </tr>
              </thead>
            <tbody>
            @foreach ($services as $service)
              <tr>
              <th scope="row">{{$service->id}}</th>
              <td>{{$service->name}}</td>
              <td>
              <a href="{{route('admin.edit.Service',$service->id)}}" class="btn btn-success">Edit</a>
              <a href="{{route('admin.delete.Service',$service->id)}}" class="btn btn-danger">Delete</a>

              </td>
              </tr>
            @endforeach
            </tbody>
            </table>
        @else
            <div class="alert alert-success">There is no Services</div>
        @endif



      
        </div>
@stop
