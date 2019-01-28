<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Outlet;
use App\Http\Model\Master_Laundryservice;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_LaundryserviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $laundryservice = Master_Laundryservice::all_serv();
        return view('pages/cms/ms_laundryservice/laundryservice', compact('laundryservice'));
    }

     public function input()
    {
        $outlet = Master_Outlet::all_outlet();
        $laundryservice = Master_Laundryservice::all_serv();
        return  view('pages/cms/ms_laundryservice/laundryservice_input', compact('laundryservice','outlet'));
    }

    public function edit($id)
    {
        $outlet = Master_Outlet::all_outlet();
        $laundryservice = Master_Laundryservice::where('id','=',$id)->first();
        return  view('pages/cms/ms_laundryservice/laundryservice_edit', compact('laundryservice','outlet'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'item' => 'required',
                'type' => 'required',
                'description' => 'required',
                'price' => 'required',
                'price_dryclean' => 'required',
            ]);

        $laundryservice = new Master_Laundryservice;

            $laundryservice->id_outlet = $request->id_outlet; 
            $laundryservice->item = $request->item; 
            $laundryservice->type = $request->type; 
            $laundryservice->description = $request->description; 
            $laundryservice->price = $request->price; 
            $laundryservice->price_dryclean = $request->price_dryclean; 
            $laundryservice->is_active = 1;  
            $laundryservice->created_by = session()->get('session_id');

        $laundryservice->save();

        return  redirect('/laundryservice');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'item' => 'required',
                'type' => 'required',
                'description' => 'required',
                'price' => 'required',
                'price_dryclean' => 'required',

            ]);

        $laundryservice = Master_Laundryservice::where('id','=',$id)->first();

            $laundryservice->id_outlet = $request->id_outlet; 
            $laundryservice->item = $request->item; 
            $laundryservice->type = $request->type; 
            $laundryservice->description = $request->description; 
            $laundryservice->price = $request->price; 
            $laundryservice->price_dryclean = $request->price_dryclean; 
            $laundryservice->modified_by = session()->get('session_id');

        $laundryservice->save();

        return  redirect('/laundryservice');
    }

    public function delete($id){
        $laundryservice = Master_Laundryservice::where('id','=',$id)->first();
        $laundryservice->is_active = 0;
        $laundryservice->save();

        return  redirect('/laundryservice');
    } 
}
