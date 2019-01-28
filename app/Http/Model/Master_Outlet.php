<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Outlet extends Model
{
    protected $table = 'ms_outlet';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_outlet(){
        
        $ms_outlet = DB::table('ms_outlet')
            ->select('ms_outlet.*')
            ->where('is_active','!=',0)
            ->get();

    return $ms_outlet;
    }
}
