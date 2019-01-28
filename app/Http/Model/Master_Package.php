<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Package extends Model
{
    protected $table = 'ms_package';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_package(){
        
        $ms_package = DB::table('ms_package')
            ->select('ms_package.*')
            ->where('is_active','!=',0)
            ->get();

    return $ms_package;
    }
}
