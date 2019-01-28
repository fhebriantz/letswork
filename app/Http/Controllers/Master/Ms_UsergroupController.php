<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Usergroup;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_UsergroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $usergroup = Master_Usergroup::all_usergroup();
        return view('pages/cms/ms_usergroup/usergroup', compact('usergroup'));
    }

     public function input()
    {
        $usergroup = Master_Usergroup::all_usergroup();
        return  view('pages/cms/ms_usergroup/usergroup_input', compact('usergroup'));
    }

    public function edit($id)
    {
        $usergroup = Master_Usergroup::where('id','=',$id)->first();
        return  view('pages/cms/ms_usergroup/usergroup_edit', compact('usergroup'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'title' => 'required',
                'description' => 'required',
            ]);

        $usergroup = new Master_Usergroup;

            $usergroup->title = $request->title; 
            $usergroup->description = $request->description; 
            $usergroup->is_active = 1;  
            $usergroup->created_by = session()->get('session_id');  

        $usergroup->save();

        return  redirect('/usergroup');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'title' => 'required',
                'description' => 'required',

            ]);

        $usergroup = Master_Usergroup::where('id','=',$id)->first();

            $usergroup->title = $request->title; 
            $usergroup->description = $request->description; 
            $usergroup->modified_by = session()->get('session_id');  

        $usergroup->save();

        return  redirect('/usergroup');
    }

    public function delete($id){
        $usergroup = Master_Usergroup::where('id','=',$id)->first();
        $usergroup->is_active = 0;
        $usergroup->save();

        return  redirect('/usergroup');
    } 
}
