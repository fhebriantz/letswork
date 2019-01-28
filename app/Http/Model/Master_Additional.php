<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Additional extends Model
{
    protected $table = 'ms_additional_service';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_addit(){
        
        $ms_additional_service = DB::table('ms_additional_service')
            ->join('ms_outlet', 'ms_outlet.id', '=', 'ms_additional_service.id_outlet')
            ->select('ms_additional_service.*','ms_outlet.outlet_name')
            ->where('ms_additional_service.is_active','!=',0)
            ->get();

    return $ms_additional_service;
    }
}
