<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionController extends Controller
{

    public function transaction()
    {
        $pengiriman_id  = request()->input('pengiriman_id');
        $users_mobile_id  = request()->input('users_mobile_id');
        $grand_total  = request()->input('grand_total');
        $biaya_tambahan = request()->input('biaya_tambahan');
        $alamat  = request()->input('alamat');
        $catatan  = request()->input('catatan');


        $subtotal = request()->input('subtotal');
        $qty = request()->input('qty');

        $data = Pesanan::create([

            'pengiriman_id' => $pengiriman_id,
            'users_mobile_id' => $users_mobile_id,
            'grand_total' => $grand_total,
            'biaya_tambahan' => $biaya_tambahan,
            'alamat' => $alamat,
            'catatan' => $catatan,
            'status_pesanan' => "Menunggu Konfirmasi",

        ]);

        $layanan_id = request()->input('layanan_id');
        $harga_layanan = request()->input('harga_layanan');
        $subtotal = request()->input('sub_total');
        $qty = request()->input('qty');

        $detail = DB::table('detail_pesanan')->insert([
            'pesanan_id' => $data->id,
            'layanan_id' => $layanan_id,
            'qty' => $qty,
            'sub_total' => $subtotal,
            'harga_layanan' => $harga_layanan
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $data,
            'detail' => $detail
        ], 200);
    }
}
