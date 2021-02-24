<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use  App\Models\City;
use App\Models\Service;
use App\Models\Order;
use App\Http\Requests\orderRequest;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(){
        $cities = City::get();
        $services = Service::get();
        return view('front.createOrder',compact('cities','services'));
    }
    public function store(orderRequest $request){

        Order::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'mobile' => $request -> mobile,
            'notes' => $request -> notes,
            'sevice_id' => $request -> service,
            'city_id' => $request -> city,
        ]);
        return redirect('/')->with(['success'=>'The Order added Successfully']);
    }
   
}
