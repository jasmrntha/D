@extends('master2')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>
    <br />
    <br />
@endsection

@section('konten')
    <div class="container">
        <div class="container-fluid" style="display: flex; align-items: center;">
            <div style="width: 50%; background-color: grey; display: flex; align-items: center; justify-content: center; text-align: center; padding: 70px; border-radius: 8px;">
                <h3 style="color: white;">This is an empty box</h3>
            </div>

            <div style="width: 50%; height: 100%; margin-left: 50px; padding: 20px">
                @foreach ($pegawai as $d)   
                    <div style="padding: 10px">
                        <span style="font-weight: 700; font-size: 156%">Nama: </span>
                        <span style="font-size: 156%">{{ $d->nama}}</span>
                    </div>
                    <div style="padding: 10px">
                        <span style="font-weight: 700; font-size: 156%">Jabatan: </span>
                        <span style="font-size: 156%">{{ $d->jabatan}}</span>
                    </div>
                    <div style="padding: 10px">
                        <span style="font-weight: 700; font-size: 156%">Umur: </span>
                        <span style="font-size: 156%">{{ $d->umur}}</span>
                    </div>
                    <div style="padding: 10px">
                        <span style="font-weight: 700; font-size: 156%">Alamat: </span>
                        <span style="font-size: 156%">{{ $d->alamat}}</span>
                    </div>
                @endforeach
                <br><br>
                <div style="position: absolute; left: 65%; right: 25%;">
                    <a href="/dosen/index" class="btn btn-primary">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection
