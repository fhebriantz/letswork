<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Detail_Item extends Model
{
    protected $table = 'dt_item_laundry';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_item(){
        
        $dt_item_laundry = DB::table('dt_item_laundry')
            ->select('dt_item_laundry.*')
            ->where('is_active','!=',0)
            ->get();

    return $dt_item_laundry;
    }
}
