<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Mast_Dokter;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Mast_DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $dokter = Mast_Dokter::all();
        return view('pages/cms/mast_dokter/dokter', compact('dokter'));
    }

     public function input()
    {
        return  view('pages/cms/mast_dokter/dokter_input');
    }

    public function edit($id)
    {
        $dokter = Mast_Dokter::where('id','=',$id)->first();
        return  view('pages/cms/mast_dokter/dokter_edit', compact('dokter'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'nama_dokter' => 'required',
                'alamat' => 'required',
                'telp' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'bidang' => 'required',
                'alamat_praktek' => 'required',
                'jam_praktek' => 'required',
                'riwayat_pengambilan' => 'required',
            ]);

        $dokter = new Mast_Dokter;

            $dokter->nama_dokter = $request->nama_dokter; 
            $dokter->alamat = $request->alamat; 
            $dokter->telp = $request->telp; 
            $dokter->tempat_lahir = $request->tempat_lahir; 
            $dokter->tgl_lahir = $request->tgl_lahir; 
            $dokter->bidang = $request->bidang; 
            $dokter->alamat_praktek = $request->alamat_praktek; 
            $dokter->jam_praktek = $request->jam_praktek;  
            $dokter->riwayat_pengambilan = $request->riwayat_pengambilan; 
            $dokter->created_by = session()->get('session_id');  

        $dokter->save();

        return  redirect('/dokter');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'nama_dokter' => 'required',
                'alamat' => 'required',
                'telp' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'bidang' => 'required',
                'alamat_praktek' => 'required',
                'jam_praktek' => 'required',
                'riwayat_pengambilan' => 'required',

            ]);

        $dokter = Mast_Dokter::where('id','=',$id)->first();

            $dokter->nama_dokter = $request->nama_dokter; 
            $dokter->alamat = $request->alamat; 
            $dokter->telp = $request->telp; 
            $dokter->tempat_lahir = $request->tempat_lahir; 
            $dokter->tgl_lahir = $request->tgl_lahir; 
            $dokter->bidang = $request->bidang; 
            $dokter->alamat_praktek = $request->alamat_praktek; 
            $dokter->jam_praktek = $request->jam_praktek;  
            $dokter->riwayat_pengambilan = $request->riwayat_pengambilan; 
            $dokter->modified_by = session()->get('session_id');  

        $dokter->save();

        return  redirect('/dokter');
    }

    public function delete($id){
        $dokter = Mast_Dokter::where('id','=',$id)->first();
        $dokter->delete();

        return  redirect('/dokter');
    } 
}
