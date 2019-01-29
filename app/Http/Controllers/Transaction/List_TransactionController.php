<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Trans_Order;
use App\Http\Model\Trans_Tagihan;
use App\Http\Model\Trans_Penerimaan;
use App\Http\Model\Det_Order;
use App\Http\Model\Mast_Dokter;
use App\Http\Model\Mast_Medrep;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class List_TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }


// ============================================================================================================== ORDER START
    public function show(){ 
        $order = Trans_Order::all_order();
        return view('pages/cms/list_transaksi/transaksi', compact('order'));
    }

     // show input trans order
    public function input()
    {
        $id_trans_order = strtotime(date('D-m-y H:i:s'));
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();
        return  view('pages/cms/list_transaksi/transaksi_input', compact('id_trans_order','dokter','medrep'));
    }

     // show edit trans order
    public function view($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        return  view('pages/cms/list_transaksi/transaksi_view', compact('order','detail','dokter','medrep'));
    }

    // fungsi pas masukin trans order
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'id_trans_order' => 'required',
                'id_medrep' => 'required',
                'id_dokter' => 'required',
                'tgl_trans_order' => 'required',
            ]);

        $order = new Trans_Order;

            $order->id_trans_order = $request->id_trans_order; 
            $order->id_medrep = $request->id_medrep; 
            $order->id_dokter = $request->id_dokter; 
            // Status 1 = Baru Masuk
            $order->status = 1; 
            $order->tgl_trans_order = $request->tgl_trans_order;
            $order->created_by = session()->get('session_id');  

        $order->save();

        $tagihan = new Trans_Tagihan;

            $tagihan->id_trans_order = $request->id_trans_order; 
            $tagihan->created_by = session()->get('session_id');  

        $tagihan->save();

        $penerimaan = new Trans_Penerimaan;

            $penerimaan->id_trans_order = $request->id_trans_order; 
            $penerimaan->created_by = session()->get('session_id');  

        $penerimaan->save();

        return  redirect('detail/'.$request->id_trans_order.'/input/');
    }

     // fungsi pas update trans order
    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_medrep' => 'required',
                'id_dokter' => 'required',

            ]);

        $order = Trans_Order::where('id','=',$id)->first();

            $order->id_medrep = $request->id_medrep; 
            $order->id_dokter = $request->id_dokter; 
            $order->modified_by = session()->get('session_id');  

        $order->save();

        return  redirect('/order')->with('message','Transaksi diperbaharui!');
    }

// ============================================================================================================== Order end











// ============================================================================================================== DETAIL START
    // tambahkan barang pas input
    public function detailinput($id)
    {
        $id_trans_order = $id;
        $detail = Det_Order::all()->where('id_trans_order','=',$id_trans_order);
        return  view('pages/cms/list_transaksi/detail_input', compact('id_trans_order','detail'));
    }

    // detail barang edit
    public function detailedit($id)
    {
        $detail = Det_Order::all()->where('id','=',$id)->first();
        return  view('pages/cms/list_transaksi/detail_edit', compact('detail'));
    }

    // fungsi masukin data detail
    function detailinsert (Request $request, $id)  
    {

        $validatedData = $request->validate([

                'qty' => 'required',
                'kemasan' => 'required',
                'ukuran' => 'required',
                'harga' => 'required',
            ]);

        $order = new Det_Order;

            $order->id_trans_order = $id; 
            $order->qty = $request->qty; 
            $order->kemasan = $request->kemasan; 
            $order->ukuran = $request->ukuran; 
            $order->harga = $request->harga; 
            $order->created_by = session()->get('session_id');  

        $order->save();

        return Redirect::back()->with('message','Detail transaksi diperbaharui!');
    }

    // fungsi edit detail
    function detailupdate (Request $request, $id)  
    {

        $validatedData = $request->validate([

                'qty' => 'required',
                'kemasan' => 'required',
                'ukuran' => 'required',
                'harga' => 'required',
            ]);

        $order = Det_Order::where('id','=',$id)->first();

            $order->qty = $request->qty; 
            $order->kemasan = $request->kemasan; 
            $order->ukuran = $request->ukuran; 
            $order->harga = $request->harga; 
            $order->modified_by = session()->get('session_id');  

        $order->save();

        $transorder = Trans_Order::where('id_trans_order','=',$order->id_trans_order)->first();

        return redirect('order/'.$transorder->id.'/view/');
    }

// ============================================================================================================== Detail END










   
// ============================================================================================================== SUPPORT START
    function active (Request $request, $id)  
    {

        $order = Trans_Order::where('id_trans_order','=',$id)->first();

            $order->is_active = 1; 
            $order->modified_by = session()->get('session_id');  

        $order->save();

        return  redirect('/order');
    }

    // fungsi delete transaksi
    public function delete($id){
        $order = Trans_Order::where('id','=',$id)->first();
        $order->is_active = 0;
        $order->save();

        return  Redirect::back();
    } 

    // fungsi delete detail barang
    public function detaildelete($id){
        $order = Det_Order::where('id','=',$id)->first();
        $order->delete();

        return Redirect::back()->with('message','Detail transaksi diperbaharui!');
    }
// ============================================================================================================== SUPPORT END
    
}
