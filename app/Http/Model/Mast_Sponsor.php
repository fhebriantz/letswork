<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mast_Sponsor extends Model
{
    protected $table = 'lw_data_sponsor';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}
