@extends('layouts.app')

@include('inc.navbar')
@section('content')

    <br>
    <div class="container">
        <h2 class="title">add New City</h2>

          <form method="POST" action="{{route('admin.save.City')}}" >
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1 " class="labelStyle">Name Of City</label>
                <input type="text" class="form-control" name="name" placeholder="new City">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary buttonStyle">Save</button>
        </form>

    </div>
@stop
