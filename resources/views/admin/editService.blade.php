@extends('layouts.app')

@include('inc.navbar')
@section('content')

    <br>
    <div class="container">
        <h2 class="title">Update Service</h2>

          <form method="POST" action="{{route('admin.update.Service',$service->id)}}" >
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Name Of Services</label>
                <input type="text" class="form-control" name="name" value="{{$service->name}}">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@stop
