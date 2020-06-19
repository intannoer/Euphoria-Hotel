<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PembayaranController extends Controller
{
    public function get_pembayaran(){
        $pembayaran = DB::table('pembayaran')->get();

        return view('read_pembayaran',['pembayaran' => $pembayaran]);
    }

    public function input_pembayaran(){
        return view('input_pembayaran');
    }

    public function insert_pembayaran(Request $request){
        DB::table('pembayaran')->insert([
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'total_pembayaran' => $request->total_pembayaran,
            'tipe_pembayaran' => $request->tipe_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
            'id_reservasi' => $request->id_reservasi
        ]);

        return redirect('/pembayaran/read_pembayaran');
    }


    public function edit_pembayaran($id)
    {
        $pembayaran = DB::table('pembayaran')->where('id_pembayaran',$id)->get();
        return view('edit_pembayaran',['pembayaran'=>$pembayaran]);
    }

    public function update_pembayaran(Request $request)
    {
        DB::table('pembayaran')->where('id_pembayaran',$request->id_pembayaran)->update([
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'total_pembayaran' => $request->total_pembayaran,
            'tipe_pembayaran' => $request->tipe_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
            'id_reservasi' => $request->id_reservasi
        ]);

        return redirect('/pembayaran/read_pembayaran');

    }

    public function hapus_pembayaran($id)
    {
        DB::table('pembayaran')->where('id_pembayaran',$id)->delete();
        return redirect('/pembayaran/read_pembayaran');
    }

    public function delete_pembayaran(Request $request)
    {
        DB::table('pembayaran')->where('id_pembayaran',$request->id_pembayaran)->delete([
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'total_pembayaran' => $request->total_pembayaran,
            'tipe_pembayaran' => $request->tipe_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
            'id_reservasi' => $request->id_reservasi
        ]);

        return redirect('/pembayaran/read_pembayaran');

    }
}
