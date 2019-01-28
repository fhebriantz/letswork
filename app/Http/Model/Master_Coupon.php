<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Coupon extends Model
{
    protected $table = 'ms_coupon';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_coupon(){
        
        $ms_coupon = DB::table('ms_coupon')
            ->select('ms_coupon.*')
            ->where('is_active','!=',0)
            ->get();

    return $ms_coupon;
    }
}
