<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Laundryservice extends Model
{
    protected $table = 'ms_laundry_service';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_serv(){
        
        $ms_laundry_service = DB::table('ms_laundry_service')
            ->join('ms_outlet', 'ms_outlet.id', '=', 'ms_laundry_service.id_outlet')
            ->select('ms_laundry_service.*','ms_outlet.outlet_name')
            ->where('ms_laundry_service.is_active','!=',0)
            ->get();

    return $ms_laundry_service;
    }
}
