<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Detail_Task extends Model
{
    protected $table = 'dt_task_laundry';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_task(){
        
        $dt_task_laundry = DB::table('dt_task_laundry')
            ->select('dt_task_laundry.*')
            ->where('is_active','!=',0)
            ->get();

    return $dt_task_laundry;
    }
}

