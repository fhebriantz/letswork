<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Detail_Payment extends Model
{
    protected $table = 'dt_payment_laundry';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_payment(){
        
        $dt_payment_laundry = DB::table('dt_payment_laundry')
            ->select('dt_payment_laundry.*')
            ->where('is_active','!=',0)
            ->get();

    return $dt_payment_laundry;
    }
}
