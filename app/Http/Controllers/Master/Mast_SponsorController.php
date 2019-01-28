<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Mast_Sponsor;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Mast_SponsorController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $sponsor = Mast_Sponsor::all();
        return view('pages/cms/mast_sponsor/sponsor', compact('sponsor'));
    }

     public function input()
    {
        return  view('pages/cms/mast_sponsor/sponsor_input');
    }

    public function edit($id)
    {
        $sponsor = Mast_Sponsor::where('id','=',$id)->first();
        return  view('pages/cms/mast_sponsor/sponsor_edit', compact('sponsor'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'tgl_pengajuan' => 'required',
                'nama_dokter' => 'required',
                'periode_pengajuan' => 'required',
                'pengajuan_omset' => 'required'
            ]);

        $sponsor = new Mast_Sponsor;

            $sponsor->tgl_pengajuan = $request->tgl_pengajuan; 
            $sponsor->nama_dokter = $request->nama_dokter; 
            $sponsor->periode_pengajuan = $request->periode_pengajuan; 
            $sponsor->pengajuan_omset = $request->pengajuan_omset; 
            $sponsor->diskon = $request->diskon; 
            $sponsor->created_by = session()->get('session_id');  

        $sponsor->save();

        return  redirect('/sponsor');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'tgl_pengajuan' => 'required',
                'nama_dokter' => 'required',
                'periode_pengajuan' => 'required',
                'pengajuan_omset' => 'required'

            ]);

        $sponsor = Mast_Sponsor::where('id','=',$id)->first();

            $sponsor->tgl_pengajuan = $request->tgl_pengajuan; 
            $sponsor->nama_dokter = $request->nama_dokter; 
            $sponsor->periode_pengajuan = $request->periode_pengajuan; 
            $sponsor->pengajuan_omset = $request->pengajuan_omset; 
            $sponsor->diskon = $request->diskon; 
            $sponsor->modified_by = session()->get('session_id');  

        $sponsor->save();

        return  redirect('/sponsor');
    }

    public function delete($id){
        $sponsor = Mast_Sponsor::where('id','=',$id)->first();
        $sponsor->delete();

        return  redirect('/sponsor');
    } 
}
