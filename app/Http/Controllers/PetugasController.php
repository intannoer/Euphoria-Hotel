<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PetugasController extends Controller
{
    public function get_petugas(){
        //mengambil seluruh data di tabel petugas, disimpan ke variable $petugas
        $petugas = DB::table('petugas')->get();

        //mengembalikan view sekaligus mengirim variable petugas kesana
        return view('read_petugas',['petugas' => $petugas]);
    }

    public function input_petugas(){
        //mengarahkan ke view input_petugas
        return view('input_petugas');

    }

    public function insert_petugas(Request $request){
        //mengisi data ke tabel petugas
        DB::table('petugas')->insert([
            'nama_petugas' => $request->nama_petugas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan_petugas' => $request->jabatan_petugas,
            'notelp_petugas' => $request->telp_petugas,
            'alamat_petugas' => $request->alamat_petugas,
            'password_petugas' => $request->password_petugas
        ]);

        //mengembalikan view ke read_petugas
        return redirect('/petugas/read_petugas');
    }
    //

    public function edit_petugas($id)
    {
        $petugas = DB::table('petugas')->where('id_petugas',$id)->get();
        return view('edit_petugas',['petugas'=>$petugas]);
    }

    public function update_petugas(Request $request)
    {
        DB::table('petugas')->where('id_petugas',$request->id_petugas)->update([
            'nama_petugas' => $request->nama_petugas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan_petugas' => $request->jabatan_petugas,
            'notelp_petugas' => $request->telp_petugas,
            'alamat_petugas' => $request->alamat_petugas,
            'password_petugas' => $request->password_petugas
        ]);

        return redirect('/petugas/read_petugas');

    }

    public function hapus_petugas($id)
    {
        DB::table('petugas')->where('id_petugas',$id)->delete();
        return redirect('/petugas/read_petugas');
    }

    public function delete_petugas(Request $request)
    {
        DB::table('petugas')->where('id_petugas',$request->id_petugas)->delete([
            'nama_petugas' => $request->nama_petugas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan_petugas' => $request->jabatan_petugas,
            'notelp_petugas' => $request->telp_petugas,
            'alamat_petugas' => $request->alamat_petugas
        ]);

        return redirect('/petugas/read_petugas');

    }

    public function home_petugas(){
        return view('home_petugas');
    }

    public function login_petugas()
    {
        $pesan_login="";
        return view('login_petugas',['pesan_login'=>$pesan_login]);
    }

    public function confirm_petugas(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $pesan_login = "";

        $petugas = DB::table('petugas')->get();

        if(DB::table('petugas')->where('id_petugas',$username)->where('password_petugas',$password)->first()){
            return view('home_petugas',['petugas'=>$petugas]);
        }
        else{
            $pesan_login = "Username atau password anda salah.";
            return view('login_petugas',['pesan_login'=>$pesan_login]);
        }
    }

    public function regis_petugas(){
        return view('regis_petugas');

    }

    public function add_petugas(Request $request){

        DB::table('petugas')->insert([
            'nama_petugas' => $request->nama_petugas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan_petugas' => $request->jabatan_petugas,
            'notelp_petugas' => $request->telp_petugas,
            'alamat_petugas' => $request->alamat_petugas,
            'password_petugas' => $request->password_petugas
        ]);

        return redirect('/petugas/login_petugas')->with('alert-success','Kamu Berhasil Register');
    }

    public function logout_petugas(){
        Session::flush();
        return redirect("/home");
    }

    public function cetak_pdf(){
        $petugas = DB::table('petugas')->get();
        $pdf = \PDF::loadview('cetak_pdf',['petugas'=>$petugas]);
        $pdf->setPaper('A4','landscape');
        return $pdf->stream();
    }


}
