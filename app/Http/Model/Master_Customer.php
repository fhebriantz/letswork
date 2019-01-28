<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Customer extends Model
{
    protected $table = 'ms_customer';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_cus(){
        
        $ms_customer = DB::table('ms_customer')
            ->join('ms_outlet', 'ms_outlet.id', '=', 'ms_customer.id_outlet')
            ->select('ms_customer.*','ms_outlet.outlet_name')
            ->where('ms_customer.is_active','!=',0)
            ->get();

    return $ms_customer;
    }
}
