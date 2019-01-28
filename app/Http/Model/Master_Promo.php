<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Master_Promo extends Model
{
    protected $table = 'ms_promo';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_promo(){
        
          $ms_promo = DB::table('ms_promo')
            ->join('ms_outlet', 'ms_outlet.id', '=', 'ms_promo.id_outlet')
            ->select('ms_promo.*','ms_outlet.outlet_name')
            ->where('ms_promo.is_active','!=',0)
            ->get();
            
    return $ms_promo;
    }
}
