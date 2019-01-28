<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mast_Medrep extends Model
{
    protected $table = 'lw_mast_medrep';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}
