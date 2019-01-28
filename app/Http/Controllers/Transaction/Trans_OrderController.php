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

class Trans_OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }

    // show order
    public function show(){ 
        $order = Trans_Order::all_order()->where('status','=',1);
        return view('pages/cms/tr_order/order', compact('order'));
    }


    public function show_so(){ 
        $order = Trans_Order::all_order()->where('status','=',1);
        return view('pages/cms/tr_so/so', compact('order'));
    }

    public function show_tagihan(){ 
        $order = Trans_Order::all_order()->where('status','=',2);
        return view('pages/cms/tr_tagihan/tagihan', compact('order'));
    }


    public function show_penerimaan(){ 
        $order = Trans_Order::all_order()->where('status','=',3);
        return view('pages/cms/tr_penerimaan/penerimaan', compact('order'));
    }


    // show edit trans order
    public function view($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        return  view('pages/cms/tr_order/order_view', compact('order','detail','dokter','medrep'));
    }

    // show input trans order
    public function input()
    {
        $id_trans_order = strtotime(date('D-m-y H:i:s'));
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();
        return  view('pages/cms/tr_order/order_input', compact('id_trans_order','dokter','medrep'));
    }

     // show edit trans order
    public function edit_so($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        return  view('pages/cms/tr_so/so_edit', compact('order','detail','dokter','medrep'));
    }

    // show edit trans order
    public function edit_tagihan($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        return  view('pages/cms/tr_tagihan/tagihan_edit', compact('order','detail','dokter','medrep'));
    }

    // show edit trans order
    public function edit_penerimaan($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        return  view('pages/cms/tr_penerimaan/penerimaan_edit', compact('order','detail','dokter','medrep'));
    }



    //strtotime(date('D-m-y H:i:s'));

    // detail barang edit
    public function detailedit($id)
    {
        $detail = Det_Order::all()->where('id','=',$id)->first();
        return  view('pages/cms/tr_order/detail_edit', compact('detail'));
    }

    // tambahkan barang pas input
    public function detailinput($id)
    {
        $id_trans_order = $id;
        $detail = Det_Order::all()->where('id_trans_order','=',$id_trans_order);
        return  view('pages/cms/tr_order/detail_input', compact('id_trans_order','detail'));
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

    // fungsi pas update trans order
    function update_so (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_so' => 'required',
                'no_so' => 'required',
                'tgl_so' => 'required',

            ]);

        $order = Trans_Order::where('id','=',$id)->first();

            $order->id_so = $request->id_so; 
            $order->no_so = $request->no_so; 
            $order->tgl_so = $request->tgl_so;
            $order->status = 2;

            $order->modified_by = session()->get('session_id');  

        $order->save();

        return  redirect('/so')->with('message','Transaksi pindah ke tagihan!');
    }

    

    // fungsi pas update trans order
    function update_tagihan (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'tgl_tagihan' => 'required',
                'id_faktur' => 'required',
                'tgl_faktur' => 'required',
                'is_lunas' => 'required',


            ]);


            $order = Trans_Order::where('id','=',$id)->first();

        if ($request->is_lunas == 1) {

                $order->status = 3;

                $order->modified_by = session()->get('session_id');  

            $order->save();
        }

       


        $tagihan = Trans_Tagihan::where('id_trans_order','=',$order->id_trans_order)->first();

            $tagihan->tgl_tagihan = $request->tgl_tagihan; 
            $tagihan->id_faktur = $request->id_faktur; 
            $tagihan->tgl_faktur = $request->tgl_faktur; 
            $tagihan->is_lunas = $request->is_lunas; 
            $tagihan->modified_by = session()->get('session_id');  

        $tagihan->save();

        if ($request->is_lunas == 1) {

               return  redirect('/tagihan')->with('message','Transaksi Lunas pindah ke penerimaan!');
        }else{
               return redirect('/tagihan')->with('message','Transaksi diperbaharui!');
        }

        
    }


    function update_penerimaan (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'nama_penerima' => 'required',
                'tgl_terima' => 'required',

            ]);

        $order = Trans_Order::where('id','=',$id)->first();

            $order->status = 3;

            $order->modified_by = session()->get('session_id');  

        $order->save();
        
        $penerimaan = Trans_Penerimaan::where('id_trans_order','=',$order->id_trans_order)->first();

            $penerimaan->nama_penerima = $request->nama_penerima; 
            $penerimaan->tgl_terima = $request->tgl_terima; 
            $penerimaan->modified_by = session()->get('session_id');  

        $penerimaan->save();


        return  redirect('/penerimaan')->with('message','Transaksi selesai!');
    }

    // fungsi aktifin selesai & simpan
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
}
