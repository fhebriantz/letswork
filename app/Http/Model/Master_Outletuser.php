<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Outletuser extends Model
{
    protected $table = 'ms_outlet_user';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_outletuser(){
        
        $ms_outlet_user = DB::table('ms_outlet_user')
            ->join('ms_outlet', 'ms_outlet.id', '=', 'ms_outlet_user.id_outlet')
            ->join('ms_user_group', 'ms_user_group.id', '=', 'ms_outlet_user.id_user_group')
            ->select('ms_outlet_user.*','ms_outlet.outlet_name','ms_user_group.title')
            ->where('ms_outlet_user.is_active','!=',0)
            ->get();

    return $ms_outlet_user;
    }
}
