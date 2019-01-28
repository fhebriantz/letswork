<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Mast_Kunjungan;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Mast_KunjunganController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $kunjungan = Mast_Kunjungan::all();
        return view('pages/cms/mast_kunjungan/kunjungan', compact('kunjungan'));
    }

     public function input()
    {
        return  view('pages/cms/mast_kunjungan/kunjungan_input');
    }

    public function edit($id)
    {
        $kunjungan = Mast_Kunjungan::where('id','=',$id)->first();
        return  view('pages/cms/mast_kunjungan/kunjungan_edit', compact('kunjungan'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'nama_dokter' => 'required',
                'tgl_kunjungan' => 'required',
                'topik' => 'required',
                'komplain' => 'required',
                'order' => 'required',
                'aktifitas_kompetitor' => 'required',
                'photo_upload' => 'required',
            ]);

        $kunjungan = new Mast_Kunjungan;

            $kunjungan->nama_dokter = $request->nama_dokter; 
            $kunjungan->tgl_kunjungan = $request->tgl_kunjungan; 
            $kunjungan->topik = $request->topik; 
            $kunjungan->komplain = $request->komplain; 
            $kunjungan->order = $request->order; 
            $kunjungan->aktifitas_kompetitor = $request->aktifitas_kompetitor; 
            $kunjungan->photo_upload = $request->photo_upload; 
            $kunjungan->created_by = session()->get('session_id');  

        $kunjungan->save();

        return  redirect('/kunjungan');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'nama_dokter' => 'required',
                'tgl_kunjungan' => 'required',
                'topik' => 'required',
                'komplain' => 'required',
                'order' => 'required',
                'aktifitas_kompetitor' => 'required',
                'photo_upload' => 'required',

            ]);

        $kunjungan = Mast_Kunjungan::where('id','=',$id)->first();

            $kunjungan->nama_dokter = $request->nama_dokter; 
            $kunjungan->tgl_kunjungan = $request->tgl_kunjungan; 
            $kunjungan->topik = $request->topik; 
            $kunjungan->komplain = $request->komplain; 
            $kunjungan->order = $request->order; 
            $kunjungan->aktifitas_kompetitor = $request->aktifitas_kompetitor; 
            $kunjungan->photo_upload = $request->photo_upload; 
            $kunjungan->modified_by = session()->get('session_id');  

        $kunjungan->save();

        return  redirect('/kunjungan');
    }

    public function delete($id){
        $kunjungan = Mast_Kunjungan::where('id','=',$id)->first();
        $kunjungan->delete();

        return  redirect('/kunjungan');
    } 
}
