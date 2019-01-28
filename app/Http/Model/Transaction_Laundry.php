<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Transaction_Laundry extends Model
{
    protected $table = 'tr_laundry';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_trans(){
        
        $tr_laundry = DB::table('tr_laundry')
            ->join('ms_outlet', 'ms_outlet.id', '=', 'tr_laundry.id_outlet')
            ->select('tr_laundry.*','ms_outlet.outlet_name')
            ->where('tr_laundry.is_active','!=',0)
            ->get();

    return $tr_laundry;
    }
}
