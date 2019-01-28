<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Trans_Penerimaan extends Model
{
    protected $table = 'lw_trans_penerimaan';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}
