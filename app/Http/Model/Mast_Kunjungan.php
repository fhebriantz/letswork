<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mast_Kunjungan extends Model
{
    protected $table = 'lw_mast_kunjungan';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}
