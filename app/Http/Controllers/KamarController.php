<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KamarController extends Controller
{
    public function get_kamar(){
        $kamar = DB::table('kamar')->get();
      

        return view('read_kamar',['kamar' => $kamar]);
    }
    public function input_kamar(){
        return view('input_kamar');
    }

    public function insert_kamar(Request $request){
        if($request->jenis_kamar == "Singularity"){
            $kapasitas = "1-3 Orang";
            $harga = 2000000;
            $fasilitas = "1 Queen Sized Bed, Working Desk, Sofa, Balcony, LED Television, Simple Bathroom";
        }
        elseif($request->jenis_kamar == "Serendipity"){
            $kapasitas = "4-5 Orang";
            $harga = 3000000;
            $fasilitas = "1 Queen Sized Bed, 2 Single Beds, Working Desk, Sofa, Balcony, LED Television, Bathroom with Bath up, Pool View";
        }
        else{
            $kapasitas = "5-6 Orang";
            $harga = 5000000;
            $fasilitas = "1 Extra King Sized Bed, 2 Single Beds, rooftop-view, Working Desk, Family Room, Dining Room, Mini Kitchen, LED Television, Exclusive Bathroom, Billiard Board,";
        }

        // menyimpan data file yang di upload ke variabel $file
        $gambar = $request->gambar;

        $nama_file = time()."_".$gambar->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file akan di upload
        $tujuan_upload = 'data_file';
        $gambar->move($tujuan_upload,$nama_file);

        DB::table('kamar')->insert([
            'no_kamar' => $request->no_kamar,
            'jenis_kamar' => $request->jenis_kamar,
            'harga_kamar' => $harga,
            'fasilitas_kamar' => $fasilitas,
            'kapasitas' => $kapasitas,
            'gambar' => $nama_file
        ]);
        
        

        return redirect('/kamar/read_kamar');
    }

    public function edit_kamar($id)
    {
        $kamar = DB::table('kamar')->where('id_kamar',$id)->get();
        return view('edit_kamar',['kamar'=>$kamar]);
    }

    public function update_kamar(Request $request)
        {
        if($request->jenis_kamar == "Singularity"){
            $kapasitas = "1-3 Orang";
            $harga = 500000;
            $fasilitas = "1 Queen Sized Bed, Working Desk, Sofa, Balcony, LED Television, Simple Bathroom";
        }
        elseif($request->jenis_kamar == "Serendipity"){
            $kapasitas = "4-5 Orang";
            $harga = 2000000;
            $fasilitas = "1 Queen Sized Bed, 2 Single Beds, Working Desk, Sofa, Balcony, LED Television, Bathroom with Bath up, Pool View";
        }
        else{
            $kapasitas = "5-6 Orang";
            $harga = 5000000;
            $fasilitas = "1 Extra King Sized Bed, 2 Single Beds, rooftop-view, Working Desk, Family Room, Dining Room, Mini Kitchen, LED Television, Exclusive Bathroom, Billiard Board,";
        }

        // menyimpan data file yang di upload ke variabel $file
        $gambar = $request->gambar;

        $nama_file = time()."_".$gambar->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file akan di upload
        $tujuan_upload = 'data_file';
        $gambar->move($tujuan_upload,$nama_file);

        DB::table('kamar')->where('id_kamar',$request->id_kamar)->update([
            'no_kamar' => $request->no_kamar,
            'jenis_kamar' => $request->jenis_kamar,
            'harga_kamar' => $harga,
            'fasilitas_kamar' => $fasilitas,
            'kapasitas' => $kapasitas,
            'gambar' => $nama_file
        ]);

        return redirect('/kamar/read_kamar');

    }

    public function hapus_kamar($id)
    {
        DB::table('kamar')->where('id_kamar',$id)->delete();
        return redirect('/kamar/read_kamar');
    }

    public function delete_kamar(Request $request)
    {
        DB::table('kamar')->where('id_kamar',$request->id_kamar)->delete([
            'no_kamar' => $request->no_kamar,
            'jenis_kamar' => $request->jenis_kamar,
            'harga_kamar' => $request->harga_kamar,
            'fasilitas_kamar' => $request->fasilitas_kamar,
            'kapasitas' => $request->kapasitas,
            'gambar' => $nama_file
        ]);

        return redirect('/kamar/read_kamar');

    }
}
