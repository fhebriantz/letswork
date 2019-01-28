<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Outletuser;
use App\Http\Model\Master_Usergroup;
use App\Http\Model\Master_Outlet;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_OutletuserController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $outletuser = Master_Outletuser::all_outletuser();
        return view('pages/cms/ms_outletuser/outletuser', compact('outletuser'));
    }

     public function input()
    {
        $outlet = Master_Outlet::all_outlet();
        $usergroup = Master_Usergroup::all_usergroup();
        return  view('pages/cms/ms_outletuser/outletuser_input', compact('outlet','usergroup'));
    }

    public function edit($id)
    {
        $outlet = Master_Outlet::all_outlet();
        $usergroup = Master_Usergroup::all_usergroup();
        $outletuser = Master_Outletuser::where('id','=',$id)->first();
        return  view('pages/cms/ms_outletuser/outletuser_edit', compact('usergroup','outletuser','outlet'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'id_user_group' => 'required',
                'fullname' => 'required',
                'gender' => 'required',
                'handphone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'username' => 'required|unique:ms_outletuser|min:4',
                'password' => 'required|confirmed|min:4',
            ]);

        $password = sha1($request->password);
        $date_str=strtotime(date('D-m-y H:i:s'));
        $id_msoutlet_user = 'CS'.$date_str;

        $outletuser = new Master_Outletuser;

            $outletuser->id_msoutlet_user = $id_msoutlet_user;
            $outletuser->id_outlet = $request->id_outlet; 
            $outletuser->id_user_group = $request->id_user_group; 
            $outletuser->fullname = $request->fullname; 
            $outletuser->gender = $request->gender; 
            $outletuser->handphone = $request->handphone; 
            $outletuser->email = $request->email; 
            $outletuser->address = $request->address; 
            $outletuser->username = $request->username; 
            $outletuser->password = $password;  
            $outletuser->is_active = 1;  
            $outletuser->created_by = session()->get('session_id');  

        $outletuser->save();

        return  redirect('/outletuser');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'id_user_group' => 'required',
                'fullname' => 'required',
                'gender' => 'required',
                'handphone' => 'required',
                'email' => 'required',
                'address' => 'required',
            ]);

        $outletuser = Master_Outletuser::where('id','=',$id)->first();
                $outletuser->id_outlet = $request->id_outlet; 
                $outletuser->id_user_group = $request->id_user_group; 
                $outletuser->fullname = $request->fullname; 
                $outletuser->gender = $request->gender; 
                $outletuser->handphone = $request->handphone; 
                $outletuser->email = $request->email; 
                $outletuser->address = $request->address; 
                $outletuser->modified_by = session()->get('session_id');  

                $old_pass = sha1($request->old_password);
                $new_pass = sha1($request->password);

                $db_pass = $outletuser->password;

                if ($request->password == null || $request->password == "") {
                    $outletuser->password = $outletuser->password;
                }else{
                    if ($db_pass == $old_pass) {
                        $outletuser->password = $new_pass;
                    }else{
                        Session::flash('message', "Password Lama Salah");
                        return Redirect::back();
                    }
                }
                

        $outletuser->save();

        return  redirect('/outletuser');
    }

    public function delete($id){
        $outletuser = Master_Outletuser::where('id','=',$id)->first();
        $outletuser->is_active = 0;
        $outletuser->save();

        return  redirect('/outletuser');
    } 
}
