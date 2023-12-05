<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penggarisController extends Controller
{
    public function indexPenggaris() {
        $penggaris = DB::table('penggaris')->get();
        return view('pra-eas.indexPenggaris', ['penggaris'=>$penggaris]);
    }

    public function tambahPenggaris(Request $request){
        DB::table('penggaris')->insert([
            'merkpenggaris' => $request->merk,
            'stockpenggaris' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/penggaris/index');
    }

    public function tambahPenggarisView(){
        return view('pra-eas.addPenggaris');
    }

    public function editPenggaris(Request $request){
        DB::table('penggaris')->where('kodepenggaris', $request->id)->update([
            'merkpenggaris' => $request->merk,
            'stockpenggaris' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/penggaris/index');
    }

    public function editPenggarisView($kodepenggaris){
        $penggaris = DB::table('penggaris')->where('kodepenggaris', $kodepenggaris)->get();
        return view('pra-eas.editPenggaris', ['penggaris'=>$penggaris]);
    }

    public function deletePenggaris($kodepenggaris){
        DB::table('penggaris')->where('kodepenggaris', $kodepenggaris)->delete();
        return redirect('/penggaris/index');
    }

}
