<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Trans_Order extends Model
{
    protected $table = 'lw_trans_order';
    const UPDATED_AT = 'modified_date';
    const CREATED_AT = 'created_date';

    public static function all_order(){
        
        $lw_trans_order = DB::table('lw_trans_order')
            ->join('lw_mast_dokter', 'lw_mast_dokter.id', '=', 'lw_trans_order.id_dokter')
            ->join('lw_mast_medrep', 'lw_mast_medrep.id', '=', 'lw_trans_order.id_medrep')
            ->join('lw_trans_tagihan', 'lw_trans_tagihan.id_trans_order', '=', 'lw_trans_order.id_trans_order')
            ->join('lw_trans_penerimaan', 'lw_trans_penerimaan.id_trans_order', '=', 'lw_trans_order.id_trans_order')
            ->select('lw_trans_order.*','lw_mast_dokter.nama_dokter','lw_mast_dokter.alamat as alamat_dokter','lw_mast_dokter.telp as tlp_dokter','lw_mast_medrep.nama_medrep','lw_trans_tagihan.tgl_tagihan','lw_trans_tagihan.id_faktur','lw_trans_tagihan.tgl_faktur','lw_trans_tagihan.is_lunas','lw_trans_penerimaan.nama_penerima','lw_trans_penerimaan.tgl_terima')
            ->where('lw_trans_order.is_active','!=',0)
            ->get();

    return $lw_trans_order;
    }
}
