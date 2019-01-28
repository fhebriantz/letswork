<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mast_dokter extends Model
{
    protected $table = 'lw_mast_dokter';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}
