<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Styles -->
    <style></style>
</head>
<body class="bodyStyle">
    <div class="container">
      @include('inc.messages')
      <form method="POST" action="{{route('store.Order')}}" class="formStyle form-group">
        @csrf
        <h2 class="mt-4">Add Your Order</h2>
                    {{--    choose Service    --}}
        <div class="row ">
            <div class="col-lg-6 form-group">
              <label class="la ">Choose Service</label>
              <select class="form-control-style   font-1 form-control" name="service">
                @if (isset($services) && $services ->count())

                    @foreach ($services as $service)
                    <option value="{{$service->id}}"> {{$service->name}} </option>
                    @endforeach
                    
                @endif
              </select>
            </div>

            <div class="col-lg-6">
              <label class="la">Choose City</label>
              <select class="form-control font-1 " name="city">
                @if (isset($cities) && $cities ->count())
  
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}"> {{$city->name}} </option>
                    @endforeach
                    
                @endif
              </select>
              </div>
        </div>

                    {{--         Name     --}}
        <div class="row">
              <div class="col-lg-4">

                  <label class="la">Type Your Name</label>
                  <input type="text" id ="name" class="form-control" name="name" />

                  @error('name')                   {{--  error message   --}}
                      <small class="form-text text-danger">{{$message}}</small>
                    @enderror
              
              </div>
         
              <div class="col-lg-4">

                  <label class="la">Type Your Email</label>
                  <input type="text" id ="email" class="form-control" name="email" />

                  @error('email')                   {{--  error message   --}}
                      <small class="form-text text-danger">{{$message}}</small>
                    @enderror
            
               </div>
               <div class="col-lg-4">

                    <label class="la">Type Your Mobile</label>
                    <input type="text" id ="mobile" class="form-control" name="mobile" />

                    @error('mobile')                   {{--  error message   --}}
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
              
                </div>

        </div>
        <div class="row">
          <div class="col-lg-12">

            <label class="la">Type Your Notes</label>
            <textarea name="notes" id="textNotes" class="form-control font-1 bg-base"  rows="5"></textarea>

            @error('mobile')                 
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
          </div>
      </div>
       

            
        <button id="save" type="submit" class="btn btn-primary buttonStyle">Save</button>
    </form>
    </div>
    
</body>
</html>