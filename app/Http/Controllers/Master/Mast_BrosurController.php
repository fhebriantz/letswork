<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Mast_Brosur;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Mast_BrosurController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $brosur = Mast_Brosur::all();
        return view('pages/cms/mast_brosur/brosur', compact('brosur'));
    }

     public function input()
    {
        return  view('pages/cms/mast_brosur/brosur_input');
    }

    public function edit($id)
    {
        $brosur = Mast_Brosur::where('id','=',$id)->first();
        return  view('pages/cms/mast_brosur/brosur_edit', compact('brosur'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'tgl_brosur_upload' => 'required',
                'deskripsi' => 'required',
                'lampiran' => 'required'
            ]);

        $brosur = new Mast_Brosur;

            $brosur->tgl_brosur_upload = $request->tgl_brosur_upload; 
            $brosur->deskripsi = $request->deskripsi; 
            if($request->file('lampiran') == "" || $request->file('lampiran') == null)
            {
                $brosur->lampiran = $brosur->lampiran;
            } 
             else
            {
                $this->validate($request, [
                    'lampiran' => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:10000',
                ]);

                $files      = $request->file('lampiran');
                $fileNames   = 'brosur'.time().'.'.$files->getClientOriginalExtension();
                $destinationPath = public_path('/brosur');
                $files->move($destinationPath, $fileNames);
                $brosur->lampiran = $fileNames;
            }
            $brosur->created_by = session()->get('session_id');  

        $brosur->save();

        return  redirect('/brosur');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'tgl_brosur_upload' => 'required',
                'deskripsi' => 'required',
                'lampiran' => 'required'

            ]);

        $brosur = Mast_Brosur::where('id','=',$id)->first();

            $brosur->tgl_brosur_upload = $request->tgl_brosur_upload; 
            $brosur->deskripsi = $request->deskripsi; 
            if($request->file('lampiran') == "" || $request->file('lampiran') == null)
            {
                $brosur->lampiran = $brosur->lampiran;
            } 
             else
            {
                $this->validate($request, [
                    'lampiran' => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:10000',
                ]);

                $files      = $request->file('lampiran');
                $fileNames   = 'brosur'.time().'.'.$files->getClientOriginalExtension();
                $destinationPath = public_path('/brosur');
                $files->move($destinationPath, $fileNames);
                $brosur->lampiran = $fileNames;
            }
            $brosur->modified_by = session()->get('session_id');  

        $brosur->save();

        return  redirect('/brosur');
    }

    public function delete($id){
        $brosur = Mast_Brosur::where('id','=',$id)->first();
        $brosur->delete();

        return  redirect('/brosur');
    } 
}
