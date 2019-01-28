<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Package;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $package = Master_Package::all_package();
        return view('pages/cms/ms_package/package', compact('package'));
    }

     public function input()
    {
        $package = Master_Package::all_package();
        return  view('pages/cms/ms_package/package_input', compact('package'));
    }

    public function edit($id)
    {
        $package = Master_Package::where('id','=',$id)->first();
        return  view('pages/cms/ms_package/package_edit', compact('package'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'title' => 'required',
                'description' => 'required',
                'type' => 'required',
                'price' => 'required',
            ]);

        $package = new Master_Package;

            $package->title = $request->title; 
            $package->description = $request->description; 
            $package->type = $request->type; 
            $package->price = $request->price; 
            $package->is_active = 1;  
            $package->created_by = session()->get('session_id');  

        $package->save();

        return  redirect('/package');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'title' => 'required',
                'description' => 'required',
                'type' => 'required',
                'price' => 'required',

            ]);

        $package = Master_Package::where('id','=',$id)->first();

            $package->title = $request->title; 
            $package->description = $request->description; 
            $package->type = $request->type; 
            $package->price = $request->price; 
            $package->modified_by = session()->get('session_id');  

        $package->save();

        return  redirect('/package');
    }

    public function delete($id){
        $package = Master_Package::where('id','=',$id)->first();
        $package->is_active = 0;
        $package->save();

        return  redirect('/package');
    } 
}
