<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Usergroup extends Model
{
    protected $table = 'ms_user_group';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_usergroup(){
        
        $ms_user_group = DB::table('ms_user_group')
            ->select('ms_user_group.*')
            ->where('is_active','!=',0)
            ->get();

    return $ms_user_group;
    }
}
