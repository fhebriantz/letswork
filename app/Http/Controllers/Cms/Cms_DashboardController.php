<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use vendor\autoload;
use App\Http\Model\Master_Outlet;
use Illuminate\Support\Facades\Redirect;
use App;

class Cms_DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function dashboard(){ 
    	return view('pages/cms/dashboard');
    }
    public function form(){ 
        $outlet = Master_Outlet::all();
    	return view('pages/cms/form', compact('outlet'));
    }
    public function datatable(){ 
    	return view('pages/cms/datatable');
    }
    public function validation(){ 
    	return view('pages/cms/validation');
    }
    public function currency(){ 
    	return view('pages/cms/currency');
    }
    public function datepicker(){ 
    	return view('pages/cms/datepicker');
    }
}
