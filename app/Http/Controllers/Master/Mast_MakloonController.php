<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Mast_Makloon;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Mast_MakloonController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $makloon = Mast_Makloon::all();
        return view('pages/cms/mast_makloon/makloon', compact('makloon'));
    }

     public function input()
    {
        return  view('pages/cms/mast_makloon/makloon_input');
    }

    public function edit($id)
    { 
        $makloon = Mast_Makloon::where('id','=',$id)->first();
        return  view('pages/cms/mast_makloon/makloon_edit', compact('makloon'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'nama_dokter' => 'required',
                'merk' => 'required',
                'tahun_makloon' => 'required',
                'nama_produk' => 'required',
                'stok' => 'required',
            ]);

        $makloon = new Mast_Makloon;

            $makloon->nama_dokter = $request->nama_dokter; 
            $makloon->merk = $request->merk; 
            $makloon->tahun_makloon = $request->tahun_makloon; 
            $makloon->nama_produk = $request->nama_produk; 
            $makloon->stok = $request->stok; 
            $makloon->created_by = session()->get('session_id');  

        $makloon->save();

        return  redirect('/makloon');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'nama_dokter' => 'required',
                'merk' => 'required',
                'tahun_makloon' => 'required',
                'nama_produk' => 'required',
                'stok' => 'required',

            ]);

        $makloon = Mast_Makloon::where('id','=',$id)->first();

            $makloon->nama_dokter = $request->nama_dokter; 
            $makloon->merk = $request->merk; 
            $makloon->tahun_makloon = $request->tahun_makloon; 
            $makloon->nama_produk = $request->nama_produk; 
            $makloon->stok = $request->stok; 
            $makloon->modified_by = session()->get('session_id');  

        $makloon->save();

        return  redirect('/makloon');
    }

    public function delete($id){
        $makloon = Mast_Makloon::where('id','=',$id)->first();
        $makloon->delete();

        return  redirect('/makloon');
    } 
}
