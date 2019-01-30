<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Trans_Order;
use App\Http\Model\Trans_Tagihan;
use App\Http\Model\Trans_Penerimaan;
use App\Http\Model\Trans_Pembayaran;
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


// ============================================================================================================== ORDER START
    public function show(){ 
        $order = Trans_Order::all_order()->where('status','=',1);
        return view('pages/cms/tr_order/order', compact('order'));
    }

     // show input trans order s
    public function input()
    {
        $id_trans_order = strtotime(date('D-m-y H:i:s'));
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();
        return  view('pages/cms/tr_order/order_input', compact('id_trans_order','dokter','medrep'));
    }

     // show edit trans order
    public function view($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        $sum = $detail->sum('total_harga');
        return  view('pages/cms/tr_order/order_view', compact('order','detail','dokter','medrep','sum'));
    }

    // fungsi pas masukin trans order
    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'id_trans_order' => 'required',
                'id_medrep' => 'required',
                'id_dokter' => 'required',
            ]);


        $now = new Datetime();
        $waktu = $now->format('Y-m-d');

        $order = new Trans_Order;

            $order->id_trans_order = $request->id_trans_order; 
            $order->id_medrep = $request->id_medrep; 
            $order->id_dokter = $request->id_dokter; 
            // Status 1 = Baru Masuk
            $order->status = 1; 
            $order->tgl_trans_order = $now;
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
        
        $sum = $detail->sum('total_harga');
        
        return  view('pages/cms/tr_order/detail_input', compact('id_trans_order','detail','sum'));
    }

    // detail barang edit
    public function detailedit($id)
    {
        $detail = Det_Order::all()->where('id','=',$id)->first();
        return  view('pages/cms/tr_order/detail_edit', compact('detail'));
    }

    // fungsi masukin data detail
    function detailinsert (Request $request, $id)  
    {

        $validatedData = $request->validate([

                'qty' => 'required',
                'kemasan' => 'required',
                'nama_barang' => 'required',
                'ukuran' => 'required',
                'harga' => 'required',
            ]);

        $order = new Det_Order;

            $order->id_trans_order = $id; 
            $order->qty = $request->qty; 
            $order->nama_barang = $request->nama_barang; 
            $order->kemasan = $request->kemasan; 
            $order->ukuran = $request->ukuran; 
            $order->harga = $request->harga; 
            $order->total_harga = ($request->qty) * ($request->harga); 
            $order->created_by = session()->get('session_id');  

        $order->save();

        $tagihan = Trans_Tagihan::where('id_trans_order','=',$id)->first();

            $tagihan->total_bayar = $request->total_bayar; 
            $tagihan->modified_by = session()->get('session_id');  

        $tagihan->save();

        return Redirect::back()->with('message','Detail transaksi diperbaharui!');
    }

    // fungsi edit detail
    function detailupdate (Request $request, $id)  
    {

        $validatedData = $request->validate([

                'qty' => 'required',
                'kemasan' => 'required',
                'nama_barang' => 'required',
                'ukuran' => 'required',
                'harga' => 'required',
            ]);

        $order = Det_Order::where('id','=',$id)->first();

            $order->qty = $request->qty; 
            $order->kemasan = $request->kemasan;
            $order->nama_barang = $request->nama_barang;  
            $order->ukuran = $request->ukuran; 
            $order->harga = $request->harga; 
            $order->modified_by = session()->get('session_id');  

        $order->save();

        $transorder = Trans_Order::where('id_trans_order','=',$order->id_trans_order)->first();

        return redirect('order/'.$transorder->id.'/view/');
    }

// ============================================================================================================== Detail END


















// ============================================================================================================== SO START
    public function show_so(){ 
        $order = Trans_Order::all_order()->where('status','=',1);
        return view('pages/cms/tr_so/so', compact('order'));
    }

    // show edit trans order
    public function edit_so($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        $sum = $detail->sum('total_harga');
        return  view('pages/cms/tr_so/so_edit', compact('order','detail','dokter','medrep','sum'));
    }

    // fungsi pas update trans order
    function update_so (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'no_so' => 'required',
                'tgl_so' => 'required',

            ]);

        $order = Trans_Order::where('id','=',$id)->first();

            $order->no_so = $request->no_so; 
            $order->tgl_so = $request->tgl_so;
            $order->status = 2;

            $order->modified_by = session()->get('session_id');  

        $order->save();

        return  redirect('/order')->with('message','Transaksi pindah ke tagihan!');
    }
// ============================================================================================================== SO END


















// ============================================================================================================== Penerimaan START
    public function show_tagihan(){ 
        $order = Trans_Order::all_order()->where('status','>=',2);
        return view('pages/cms/tr_tagihan/tagihan', compact('order'));
    }

    // show edit trans order
    public function edit_tagihan($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        $sum = $detail->sum('total_harga');
        return  view('pages/cms/tr_tagihan/tagihan_edit', compact('order','detail','dokter','medrep','sum'));
    }

     // fungsi pas update trans order
    function update_tagihan (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_faktur' => 'required',
                'tgl_faktur' => 'required',


            ]);

            $now = new Datetime();

            $order = Trans_Order::where('id','=',$id)->first();

            $order->status = 3; 
            $order->save();

        $tagihan = Trans_Tagihan::where('id_trans_order','=',$order->id_trans_order)->first();

            $tagihan->tgl_tagihan = $now; 
            $tagihan->id_faktur = $request->id_faktur; 
            $tagihan->tgl_faktur = $request->tgl_faktur; 
            $tagihan->modified_by = session()->get('session_id');  

        $tagihan->save();

        if ($request->is_lunas == 1) {

               return  redirect('/tagihan')->with('message','Transaksi Lunas pindah ke penerimaan!');
        }else{
               return redirect('/tagihan')->with('message','Transaksi diperbaharui!');
        }

        
    }
// ============================================================================================================== Penerimaan END














// ============================================================================================================== pembayaran START
    public function show_pembayaran(){ 
        $order = Trans_Order::all_order()->where('status','=',3);
        return view('pages/cms/tr_pembayaran/pembayaran', compact('order'));
    }

    // show edit trans order
    public function edit_pembayaran($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);

        $tagihan = Trans_Tagihan::where('id_trans_order','=',$order->id_trans_order)->first();
        $sisa_bayar = $tagihan->sisa_bayar;

        $history = Trans_Pembayaran::all()->where('id_trans_order','=',$order->id_trans_order);
        $sum = $detail->sum('total_harga');
        return  view('pages/cms/tr_pembayaran/pembayaran_edit', compact('order','detail','dokter','medrep','sum','history','sisa_bayar'));
    }

     // fungsi pas update trans order
    function insert_pembayaran (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'jumlah' => 'required',
                'penerima' => 'required',
                'pemberi' => 'required',
                'tgl_pembayaran' => 'required',


            ]);

            $now = new Datetime();

            $order = Trans_Order::where('id_trans_order','=',$id)->first();

        $pembayaran = new Trans_Pembayaran;

            $pembayaran->id_trans_order =  $id; 
            $pembayaran->jumlah =  $request->jumlah; 
            $pembayaran->penerima = $request->penerima; 
            $pembayaran->pemberi = $request->pemberi; 
            $pembayaran->tgl_pembayaran = $now; 
            $pembayaran->created_by = session()->get('session_id');  

        $pembayaran->save();

        $tagihan = Trans_Tagihan::where('id_trans_order','=',$id)->first();
        $tagihan->sisa_bayar = $tagihan->sisa_bayar - $request->jumlah;

        if ($tagihan->sisa_bayar <= 0) {
            $tagihan->is_lunas = 1;
            $order->save();
        }

        $tagihan->save();

        return Redirect::back()->with('message','Transaksi pembayaran diperbaharui!');

        
    }
// ============================================================================================================== pembayaran END
















// ============================================================================================================== Penerimaan START
    public function show_penerimaan(){ 
        $order = Trans_Order::all_order();
        return view('pages/cms/tr_penerimaan/penerimaan', compact('order'));
    }

    // show edit trans order
    public function edit_penerimaan($id)
    {
        $order = Trans_Order::all_order()->where('id','=',$id)->first();
        $dokter = Mast_Dokter::all();
        $medrep = Mast_Medrep::all();

        $detail = Det_Order::all()->where('id_trans_order','=',$order->id_trans_order);
        $sum = $detail->sum('total_harga');
        return  view('pages/cms/tr_penerimaan/penerimaan_edit', compact('order','detail','dokter','medrep','sum'));
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
// ============================================================================================================== Penerimaan END

   













   
// ============================================================================================================== SUPPORT START
    function active (Request $request, $id)  
    {

        $order = Trans_Order::where('id_trans_order','=',$id)->first();

            $order->is_active = 1; 
            $order->modified_by = session()->get('session_id');  

        $order->save();

        $tagihan = Trans_Tagihan::where('id_trans_order','=',$id)->first();

            $tagihan->sisa_bayar = $request->total_bayar; 
            $tagihan->total_bayar = $request->total_bayar; 
            $tagihan->modified_by = session()->get('session_id');  

        $tagihan->save();

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
