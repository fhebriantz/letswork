<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Trans_History extends Model
{
    protected $table = 'lw_hist_pembayaran';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}
