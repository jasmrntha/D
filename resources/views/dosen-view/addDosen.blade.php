@extends('master')

@section('konten')
    <h3>Data Pegawai</h3>

    <a href="/dosen/index" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/dosen/add-dosen" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <span class="input-group-text">Nama</span>
            <input type="text" name="nama" class="form-control"> <br />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Jabatan</span>
            <input type="text" name="jabatan" class="form-control"> <br />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Umur</span>
            <input type="number" name="umur" class="form-control"> <br />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Alamat</span>
            <textarea name="alamat" class="form-control"></textarea> <br />
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
