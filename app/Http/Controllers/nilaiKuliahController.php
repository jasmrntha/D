<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaiKuliahController extends Controller
{
    public function indexNilai (Request $request){
        $nilai = DB::table('nilaikuliah')->get();
        return view('nilai-kuliah.nilaiKuliah', ['nilai'=>$nilai]);
    }

    public function tambahNilai (Request $request){
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai,
            'SKS' => $request->sks
        ]);
        return redirect('/nilai/index');
    }

    public function tambahNilaiView (){
        return view('nilai-kuliah.addNilai');
    }
}
