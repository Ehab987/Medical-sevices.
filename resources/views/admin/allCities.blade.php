@extends('layouts.app')

@include('inc.navbar')
@section('content')

    <br>
    <div class="container">
        @include('inc.messages')
        
        @if (isset($cities)&& $cities->count() > 0)
          <h2 class="title mb-4">All Cities</h2>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($cities as $city)
                    <tr>
                    <th scope="row">{{$city->id}}</th>
                    <td>{{$city->name}}</td>
                    <td>
                    <a href="{{route('admin.edit.City',$city->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('admin.delete.City',$city->id)}}" class="btn btn-danger">Delete</a>

                    </td>
                    </tr>
              @endforeach
            </tbody>
        </table>
            
        @else
            <div class="alert alert-success">There is no Cities</div>   
        @endif
            



           
    </div>
@stop
