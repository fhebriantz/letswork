<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Usermgmt extends Model
{
    protected $table = 'ms_user_mgmt';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_user(){
        
        $ms_user_mgmt = DB::table('ms_user_mgmt')
            ->select('ms_user_mgmt.*')
            ->where('is_active','!=',0)
            ->get();

    return $ms_user_mgmt;
    }
}
