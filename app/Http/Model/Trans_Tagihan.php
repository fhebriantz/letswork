<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Trans_Tagihan extends Model
{
    protected $table = 'lw_trans_tagihan';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_tagihan(){
        
        $lw_trans_tagihan = DB::table('lw_trans_tagihan')
            ->select('lw_trans_tagihan.*')
            ->where('lw_trans_tagihan.is_active','!=',0)
            ->get();

    return $lw_trans_tagihan;
    }
}
