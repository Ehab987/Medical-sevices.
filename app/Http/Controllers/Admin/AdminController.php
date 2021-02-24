<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;

use Illuminate\Routing\Controller;
use App\Models\Order;
use App\Models\Service;
use App\Http\Requests\serviceRequest;
use App\Models\City;
use App\Http\Requests\cityRequest;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index() {  

        $orders = Order::get();
        $number_orders = $orders->count();

        $services = Service::get();
        $number_services = $services->count();

        $cities = City::select('id','name')->get();
        $num_cities = $cities ->count();

        $all = Order::select('created_at','id','name','email','mobile','notes','sevice_id','city_id')->get();
        $today = Carbon::today();
        $today = substr($today,0,10);
        $todayOrder = Order::where('created_at',$today)->get();
        $num_todayOrder = $todayOrder ->count();
        return view('admin.admin',compact('number_services','number_orders','num_cities','num_todayOrder'));
    }

    public function allOrders(){
        $orders = Order::select('id','name','email','mobile','notes','sevice_id','city_id')->get();
        return view('admin.allOrders',compact('orders'));
    }
    public function deleteOrder($id) {
        $order = Order::find($id);
        if(!$order){
            return redirect()->back();
        }
        $order ->delete();
        return redirect()->route('admin.All.Orders')->with(['delete'=> 'order has been deleted']);
    }
    public function allServices(){
        $services = Service::select('id','name')->get();
        return view('admin.allServices',compact('services'));
    }

    public function addService(){
        return view('admin.addService');
    }

    public function saveService(serviceRequest $request){
        Service::create([
            'name' => $request ->name
        ]);
        return redirect()->route('admin.All.Services')->with(['success'=>'Service added successfully']);
    }
    
    public function deleteService($id){

        $service = Service::find($id);
        if(!$service){
            return redirect()->back();
        }
        $service -> delete();
        return redirect()->route('admin.All.Services')->with(['delete'=> 'Service has been deleted']);
    }

    public function editService($id){

        $service = Service::find($id);
        if(!$service){
            return redirect()->back();
        }
        return view('admin.editService',compact('service'));
    }
    public function updateService(serviceRequest $request,$id){

        $service = Service::find($id);
        if(!$service){
            return redirect()->back();
        }
        $service -> update($request->all());
        return redirect()->route('admin.All.Services')->with(['success'=> 'Service has been updated']);
    }

    public function allCities(){
        $cities = City::select('id','name')->get();
        
        return view('admin.allCities',compact('cities'));
    }

    public function editCity($id){

        $city = City::find($id);
        if(!$city){
            return redirect()->back();
        }
        return view('admin.editCity',compact('city'));
    }

    public function updateCity(cityRequest $request,$id){

        $city = City::find($id);
        if(!$city){
            return redirect()->back();
        }
        $city -> update($request->all());
        return redirect()->route('admin.All.Cities')->with(['success'=> 'City has been updated']);
    }

    public function deleteCity($id){

        $city = City::find($id);
        if(!$city){
            return redirect()->back();
        }
        $city -> delete();
        return redirect()->route('admin.All.Cities')->with(['delete'=> 'City has been deleted']);
    }
    public function addCity(){
        return view('admin.addCity');
    }
    public function saveCity(cityRequest $request){
        City::create([
            'name' => $request ->name
        ]);
        return redirect()->route('admin.All.Cities')->with(['success'=>'City added successfully']);
    }
    public function ordersToday(){
       
        $all = Order::select('created_at','id','name','email','mobile','notes','sevice_id','city_id')->get();
        $today = Carbon::today();
        $today = substr($today,0,10);
        $ordersToday = Order::where('created_at',$today)->get();
        return view('admin.ordersToday',compact('ordersToday'));
    }


}
