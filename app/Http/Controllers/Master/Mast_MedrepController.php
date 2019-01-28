<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Mast_Medrep;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Mast_MedrepController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $medrep = Mast_Medrep::all();
        return view('pages/cms/mast_medrep/medrep', compact('medrep'));
    }

     public function input()
    {
        return  view('pages/cms/mast_medrep/medrep_input');
    }

    public function edit($id)
    {
        $medrep = Mast_Medrep::where('id','=',$id)->first();
        return  view('pages/cms/mast_medrep/medrep_edit', compact('medrep'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'nama_medrep' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
            ]);

        $medrep = new Mast_Medrep;

            $medrep->nama_medrep = $request->nama_medrep; 
            $medrep->tempat_lahir = $request->tempat_lahir; 
            $medrep->tgl_lahir = $request->tgl_lahir; 
            $medrep->created_by = session()->get('session_id');  

        $medrep->save();

        return  redirect('/medrep');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'nama_medrep' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',

            ]);

        $medrep = Mast_Medrep::where('id','=',$id)->first();

            $medrep->nama_medrep = $request->nama_medrep; 
            $medrep->tempat_lahir = $request->tempat_lahir; 
            $medrep->tgl_lahir = $request->tgl_lahir; 
            $medrep->modified_by = session()->get('session_id');  

        $medrep->save();

        return  redirect('/medrep');
    }

    public function delete($id){
        $medrep = Mast_Medrep::where('id','=',$id)->first();
        $medrep->delete();

        return  redirect('/medrep');
    } 
}
