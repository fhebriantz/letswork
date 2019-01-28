<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Outlet;
use App\Http\Model\Master_Promo;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_PromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $promo = Master_Promo::all_promo();
        return view('pages/cms/ms_promo/promo', compact('promo'));
    }

     public function input()
    {
        $outlet = Master_Outlet::all_outlet();
        $promo = Master_Promo::all_promo();
        return  view('pages/cms/ms_promo/promo_input', compact('promo','outlet'));
    }

    public function edit($id)
    {
        $outlet = Master_Outlet::all_outlet();
        $promo = Master_Promo::where('id','=',$id)->first();
        return  view('pages/cms/ms_promo/promo_edit', compact('promo','outlet'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([
                'id_outlet' => 'required',
                'promo_code' => 'required',
                'promo_name' => 'required',
                'nominal' => 'required',
                'description' => 'required',
                'daterange' => 'required',
            ]);
        $daterange = $request->daterange;
        $tanggal = explode(" s/d ", $daterange);
        $tanggal[0]; // dari
        $tanggal[1]; // sampai 

        $promo = new Master_Promo;

            $promo->id_outlet = $request->id_outlet; 
            $promo->promo_code = $request->promo_code; 
            $promo->promo_name = $request->promo_name; 
            $promo->type = $request->type; 
            $promo->nominal = $request->nominal; 
            $promo->description = $request->description; 
            $promo->start_date = $tanggal[0]; 
            $promo->end_date = $tanggal[1]; 
            $promo->is_active = 1;  
            $promo->created_by = session()->get('session_id');

        $promo->save();

        return  redirect('/promo');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'promo_code' => 'required',
                'promo_name' => 'required',
                'nominal' => 'required',
                'description' => 'required',
                'daterange' => 'required',


            ]);
        $daterange = $request->daterange;
        $tanggal = explode(" s/d ", $daterange);
        $tanggal[0]; // dari
        $tanggal[1]; // sampai 

        $promo = Master_Promo::where('id','=',$id)->first();

            $promo->id_outlet = $request->id_outlet; 
            $promo->promo_code = $request->promo_code; 
            $promo->promo_name = $request->promo_name; 
            $promo->type = $request->type; 
            $promo->nominal = $request->nominal; 
            $promo->description = $request->description; 
            $promo->start_date = $tanggal[0]; 
            $promo->end_date = $tanggal[1]; 
            $promo->modified_by = session()->get('session_id');  

        $promo->save();

        return  redirect('/promo');
    }

    public function delete($id){
        $promo = Master_Promo::where('id','=',$id)->first();
        $promo->is_active = 0;
        $promo->save();

        return  redirect('/promo');
    } 
}
