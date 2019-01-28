<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Customer;
use App\Http\Model\Master_Outlet;
use Illuminate\Support\Facades\Redirect;
use Date;
use DateTime;
use Session;
use App;

class Ms_CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function show(){ 
        $customer = Master_Customer::all_cus();
        return view('pages/cms/ms_customer/customer', compact('customer'));
    }

     public function input()
    {
        $outlet = Master_Outlet::all_outlet();
        $customer = Master_Customer::all_cus();
        return  view('pages/cms/ms_customer/customer_input', compact('customer','outlet'));
    }

    public function edit($id)
    {
        $outlet = Master_Outlet::all_outlet();
        $customer = Master_Customer::where('id','=',$id)->first();
        return  view('pages/cms/ms_customer/customer_edit', compact('customer','outlet'));
    }

    function insert (Request $request)  
    {

        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'fullname' => 'required',
                'gender' => 'required',
                'handphone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'provinsi' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'kab_kota' => 'required',
                'kodepos' => 'required',
                'username' => 'required|unique:ms_customer|min:4',
                'password' => 'required|confirmed|min:8',
            ]);

        $password = sha1($request->password);
        $date_str=strtotime(date('D-m-y H:i:s'));
        $id_mscustomer = 'CS'.$date_str;

        $customer = new Master_Customer;

            $customer->id_mscustomer = $id_mscustomer;
            $customer->id_outlet = $request->id_outlet; 
            $customer->fullname = $request->fullname; 
            $customer->gender = $request->gender; 
            $customer->handphone = $request->handphone; 
            $customer->email = $request->email; 
            $customer->address = $request->address; 
            $customer->provinsi = $request->provinsi;  
            $customer->kecamatan = $request->kecamatan; 
            $customer->kelurahan = $request->kelurahan; 
            $customer->kab_kota = $request->kab_kota; 
            $customer->kodepos = $request->kodepos; 
            $customer->username = $request->username; 
            $customer->password = $password;  
            $customer->is_active = 1;  
            $customer->created_by = session()->get('session_id');  

        $customer->save();

        return  redirect('/customer');
    }

    function update (Request $request, $id)  
    {
        $validatedData = $request->validate([

                'id_outlet' => 'required',
                'fullname' => 'required',
                'gender' => 'required',
                'handphone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'provinsi' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'kab_kota' => 'required',
                'kodepos' => 'required',
            ]);

        $customer = Master_Customer::where('id','=',$id)->first();
                $customer->id_outlet = $request->id_outlet; 
                $customer->fullname = $request->fullname; 
                $customer->gender = $request->gender; 
                $customer->handphone = $request->handphone; 
                $customer->email = $request->email; 
                $customer->address = $request->address; 
                $customer->provinsi = $request->provinsi;  
                $customer->kecamatan = $request->kecamatan; 
                $customer->kelurahan = $request->kelurahan; 
                $customer->kab_kota = $request->kab_kota; 
                $customer->kodepos = $request->kodepos; 
                $customer->modified_by = session()->get('session_id');  

                $old_pass = sha1($request->old_password);
                $new_pass = sha1($request->password);

                $db_pass = $customer->password;

                if ($request->password == null || $request->password == "") {
                    $customer->password = $customer->password;
                }else{
                    if ($db_pass == $old_pass) {
                        $customer->password = $new_pass;
                    }else{
                        Session::flash('message', "Password Lama Salah");
                        return Redirect::back();
                    }
                }
                

        $customer->save();

        return  redirect('/customer');
    }

    public function delete($id){
        $customer = Master_Customer::where('id','=',$id)->first();
        $customer->is_active = 0;
        $customer->save();

        return  redirect('/customer');
    } 
}
