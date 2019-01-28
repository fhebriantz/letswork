<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Det_Order extends Model
{
    protected $table = 'lw_detail_trans_order';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}

