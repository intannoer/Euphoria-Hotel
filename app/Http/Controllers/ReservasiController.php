<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReservasiController extends Controller
{
    public function get_reservasi(){
        $reservasi = DB::table('reservasi')->get();

        return view('read_reservasi',['reservasi' => $reservasi]);
    }

    public function input_reservasi(){
        return view('input_reservasi');
    }

    public function insert_reservasi(Request $request){
        DB::table('reservasi')->insert([
            'id_petugas' => $request->id_petugas,
            'nomor_identitas' => $request->nomor_identitas,
            'id_pembayaran' => $request->id_pembayaran,
            'id_kamar' => $request->id_kamar,
            'tgl_reservasi' => $request->tgl_reservasi,
            'jumlah_reservasi' => $request->jumlah_reservasi,
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout
        ]);

        

        return redirect('/reservasi/read_reservasi');
    }

    public function edit_reservasi($id)
    {
        $reservasi = DB::table('reservasi')->where('id_reservasi',$id)->get();
        return view('edit_reservasi',['reservasi'=>$reservasi]);
    }

    public function update_reservasi(Request $request)
    {
        DB::table('reservasi')->where('id_reservasi',$request->id_reservasi)->update([
            'id_petugas' => $request->id_petugas,
            'nomor_identitas' => $request->nomor_identitas,
            'id_pembayaran' => $request->id_pembayaran,
            'id_kamar' => $request->id_kamar,
            'tgl_reservasi' => $request->tgl_reservasi,
            'jumlah_reservasi' => $request->jumlah_reservasi,
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout
        ]);

        return redirect('/reservasi/read_reservasi');

    }

    public function hapus_reservasi($id)
    {
        DB::table('reservasi')->where('id_reservasi',$id)->delete();
        return redirect('/reservasi/read_reservasi');
    }

    public function delete_reservasi(Request $request)
    {
        DB::table('reservasi')->where('id_reservasi',$request->id_reservasi)->delete([
            'id_petugas' => $request->id_petugas,
            'nomor_identitas' => $request->nomor_identitas,
            'id_pembayaran' => $request->id_pembayaran,
            'id_kamar' => $request->id_kamar,
            'tgl_reservasi' => $request->tgl_reservasi,
            'jumlah_reservasi' => $request->jumlah_reservasi,
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout
        ]);

        return redirect('/reservasi/read_reservasi');

    }
}
