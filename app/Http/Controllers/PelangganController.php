<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PelangganController extends Controller
{
    public function get_pelanggan(){
        $pelanggan = DB::table('pelanggan')->get();

        return view('read_pelanggan',['pelanggan' => $pelanggan]);
    }

    public function input_pelanggan(){
        return view('input_pelanggan');
    }

    public function insert_pelanggan(Request $request){
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jk_pelanggan' => $request->jk_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'notelp_pelanggan' => $request->telp_pelanggan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'password_pelanggan' => $request->password_pelanggan
        ]);

        return redirect('/pelanggan/read_pelanggan');
    }

    public function edit_pelanggan($id)
    {
        $pelanggan = DB::table('pelanggan')->where('nomor_identitas',$id)->get();
        return view('edit_pelanggan',['pelanggan'=>$pelanggan]);
    }

    public function update_pelanggan(Request $request)
    {
        DB::table('pelanggan')->where('nomor_identitas',$request->nomor_identitas)->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jk_pelanggan' => $request->jk_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'notelp_pelanggan' => $request->telp_pelanggan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'password_pelanggan' => $request->password_pelanggan
        ]);

        return redirect('/pelanggan/read_pelanggan');

    }

    public function hapus_pelanggan($id)
    {
        DB::table('pelanggan')->where('nomor_identitas',$id)->delete();
        return redirect('/pelanggan/read_pelanggan');
    }

    public function delete_pelanggan(Request $request)
    {
        DB::table('pelanggan')->where('nomor_identitas',$request->nomor_identitas)->delete([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jk_pelanggan' => $request->jk_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'notelp_pelanggan' => $request->telp_pelanggan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'password_pelanggan' => $request->password_pelanggan
        ]);

        return redirect('/pelanggan/read_pelanggan');

    }

    public function login_pelanggan()
    {
        $pesan_login="";
        return view('login_pelanggan',['pesan_login'=>$pesan_login]);
    }

    public function confirm_pelanggan(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $pesan_login = "";

        $pelanggan = DB::table('pelanggan')->get();

        if(DB::table('pelanggan')->where('notelp_pelanggan',$username)->where('password_pelanggan',$password)->first()){
            return view('MenuPelanggan.input_booking',['pelanggan'=>$pelanggan]);
        }
        else{
            $pesan_login = "Username atau password anda salah.";
            return view('login_pelanggan',['pesan_login'=>$pesan_login]);
        }
    }


    public function regis_pelanggan(){
        return view('regis_pelanggan');

    }

    public function add_pelanggan(Request $request){

        DB::table('pelanggan')->insert([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jk_pelanggan' => $request->jk_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'notelp_pelanggan' => $request->telp_pelanggan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'password_pelanggan' => $request->password_pelanggan
        ]);

        return redirect('/pelanggan/login_pelanggan');
    }

    public function logout_pelanggan(){
        Session::flush();
        return redirect("/home");
    }

}
