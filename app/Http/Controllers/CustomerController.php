<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    public function euphoria(){
        return view('euphoria');
    }

    public function home(){
        return view('MenuPelanggan.home');
    }
    public function about(){
        return view('MenuPelanggan.about_us');
    }
    public function fasilitas(){
        return view('MenuPelanggan.fasilitas');
    }
    public function kamar(){
        return view('MenuPelanggan.kamar');
    }
    public function singularity(){
        return view('MenuPelanggan.singularity');
    }
    public function serendipity(){
        return view('MenuPelanggan.serendipity');
    }
    public function epiphany(){
        return view("MenuPelanggan.epiphany");
    }
    public function booking(){
        return view("MenuPelanggan.booking");
    }

    public function get_booking(){
        $booking = DB::table('booking')->get();

        return view('MenuPelanggan.read_booking',['booking' => $booking]);
    }

    public function input_booking(){
        return view('MenuPelanggan.input_booking');
    }

    public function insert_booking(Request $request){
        DB::table('booking')->insert([
            'no_identitas' => $request->no_identitas,
            'nama_lengkap' => $request->nama_lengkap,
            'tgl_booking' => $request->tgl_booking,
            'tipe_kamar' => $request->tipe_kamar,
            'jml_booking' => $request->jml_booking,
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout,
            'tipe_bayar' => $request->tipe_bayar
        ]);

        return redirect('/booking/read_booking');
    }

    public function confirm_booking($id)
    {
        $booking = DB::table('booking')->where('kode_booking',$id)->get();
        return view('MenuPelanggan.confirm_booking',['booking'=>$booking]);
    }

    public function update_booking()
    {

        return redirect('/home');

    }

    public function hapus_booking($id)
    {
        DB::table('booking')->where('kode_booking',$id)->delete();
        return redirect('/booking/read_booking');
    }

    public function delete_booking(Request $request)
    {
        DB::table('booking')->where('kode_booking',$request->kode_booking)->delete([
            'no_identitas' => $request->no_identitas,
            'nama_lengkap' => $request->nama_lengkap,
            'tgl_booking' => $request->tgl_booking,
            'tipe_kamar' => $request->tipe_kamar,
            'jml_booking' => $request->jml_booking,
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout,
            'tipe_bayar' => $request->tipe_bayar
        ]);

        return redirect('/booking/read_booking');

    }






}

