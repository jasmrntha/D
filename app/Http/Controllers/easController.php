<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class easController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('eas.index', ['karyawan' => $karyawan]);
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'kodepegawai' => 'required|max:5|unique:karyawan',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string|max:20',
            'departemen' => 'required|string|max:20'
        ]);
        DB::table('karyawan')->insert([
            'kodepegawai'=>$request->kodepegawai,
            'namalengkap'=>$request->namalengkap,
            'divisi'=>$request->divisi,
            'departemen'=>$request->departemen
        ]);
        return redirect('/eas/index');
    }

    public function viewInsert()
    {
        return view('eas.insert');
    }

    public function delete($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/eas/index');
    }
}
