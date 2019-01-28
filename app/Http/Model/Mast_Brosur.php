<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mast_Brosur extends Model
{
    protected $table = 'lw_mast_brosur';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

}
