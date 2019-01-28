<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Outlet;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_OutletController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $outlet = Master_Outlet::all_outlet();
        return view('pages/cms/ms_outlet/outlet', compact('outlet'));
    }

     public function input()
    {
        $outlet = Master_Outlet::all_outlet();
        return  view('pages/cms/ms_outlet/outlet_input', compact('outlet'));
    }

    public function edit($id)
    {
        $outlet = Master_Outlet::where('id','=',$id)->first();
        return  view('pages/cms/ms_outlet/outlet_edit', compact('outlet'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'outlet_name' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'email' => 'required',
            ]);

        $date_str=strtotime(date('D-m-y H:i:s'));
        $id_msoutlet = 'OT'.$date_str;

        $outlet = new Master_Outlet;

            $outlet->id_msoutlet = $id_msoutlet;
            $outlet->outlet_name = $request->outlet_name; 
            $outlet->address = $request->address; 
            $outlet->phone_number = $request->phone_number; 
            $outlet->email = $request->email; 
            $outlet->is_active = 1;  
            $outlet->created_by = session()->get('session_id');  

        $outlet->save();

        return  redirect('/outlet');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'outlet_name' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'email' => 'required',

            ]);

        $outlet = Master_Outlet::where('id','=',$id)->first();

            $outlet->outlet_name = $request->outlet_name; 
            $outlet->address = $request->address; 
            $outlet->phone_number = $request->phone_number; 
            $outlet->email = $request->email; 
            $outlet->modified_by = session()->get('session_id');  

        $outlet->save();

        return  redirect('/outlet');
    }

    public function delete($id){
        $outlet = Master_Outlet::where('id','=',$id)->first();
        $outlet->is_active = 0;
        $outlet->save();

        return  redirect('/outlet');
    } 
}
