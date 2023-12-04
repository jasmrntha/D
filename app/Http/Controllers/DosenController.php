<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "Hasil Perkalian= " . (string)$c . "</h1>";
    }
    public function showBlog(){
        $nama = "Budi";
        $alamat = "Surabaya";
        $umur = 19;
        return view('blog', ['nama' => $nama,'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showNama($nama){
        return "anda telah mengisikan: " . $nama;
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }

    public function getUts(){
        return view('ujiantengahsemester');
    }

    public function getDosen(){
        $dosen = DB::table('dosen')->paginate(10);
        return view('dosen-view.indexDosen', ['dosen' => $dosen]);
    }

    public function viewAddDosen(){
        return view('dosen-view.addDosen');
    }

    public function addDosen(Request $request){
        DB::table('dosen')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat
        ]);
        return redirect('/dosen/index');
    }

    public function viewUpdateDosen($id){
        $dosen = DB::table('dosen')->where('id', $id)->get();
        return view('dosen-view.editDosen', ['dosen' => $dosen]);
    }

    public function updateDosen(Request $request){
        DB::table('dosen')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat
        ]);
        return redirect('/dosen/index');
    }

    public function deleteDosen($id){
        DB::table('dosen')->where('id', $id)->delete();
        return redirect('/dosen/index');
    }

    public function cariDosen(Request $request){
        $cari = $request->cari;
        $dosen = DB::table('dosen')->where('nama', 'like', '%'.$cari.'%')->paginate(10);
        return view('dosen-view.indexDosen',['dosen' => $dosen]);
    }

    public function viewDosen($id){
        $dosen = DB::table('dosen')->where('id', $id)->get();
        return view('dosen-view.viewDosen', ['pegawai' => $dosen]);
    }
}
