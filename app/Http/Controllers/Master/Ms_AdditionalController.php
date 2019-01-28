<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Outlet;
use App\Http\Model\Master_Additional;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_AdditionalController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $additional = Master_Additional::all_addit();
        return view('pages/cms/ms_additional/additional', compact('additional'));
    }

     public function input()
    {
        $outlet = Master_Outlet::all_outlet();
        $additional = Master_Additional::all_addit();
        return  view('pages/cms/ms_additional/additional_input', compact('additional','outlet'));
    }

    public function edit($id)
    {
        $outlet = Master_Outlet::all_outlet();
        $additional = Master_Additional::where('id','=',$id)->first();
        return  view('pages/cms/ms_additional/additional_edit', compact('additional','outlet'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'item' => 'required',
                'price' => 'required',
                'description' => 'required',
            ]);

        $additional = new Master_Additional;

            $additional->id_outlet = $request->id_outlet; 
            $additional->item = $request->item; 
            $additional->price = $request->price; 
            $additional->description = $request->description; 
            $additional->is_active = 1;  
            $additional->created_by = session()->get('session_id');

        $additional->save();

        return  redirect('/additional');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'item' => 'required',
                'price' => 'required',
                'description' => 'required',

            ]);

        $additional = Master_Additional::where('id','=',$id)->first();

            $additional->id_outlet = $request->id_outlet; 
            $additional->item = $request->item; 
            $additional->price = $request->price; 
            $additional->description = $request->description; 
            $additional->modified_by = session()->get('session_id');  

        $additional->save();

        return  redirect('/additional');
    }

    public function delete($id){
        $additional = Master_Additional::where('id','=',$id)->first();
        $additional->is_active = 0;
        $additional->save();

        return  redirect('/additional');
    } 
}
