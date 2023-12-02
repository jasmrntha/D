@extends('master')

@section('konten')
    <h3>Data Pegawai</h3>

    <a href="/dosen/index" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/dosen/add-dosen" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" class="form-control"> <br />
        Jabatan <input type="text" name="jabatan" class="form-control"> <br />
        Umur <input type="number" name="umur" class="form-control"> <br />
        Alamat
        <textarea name="alamat" class="form-control"></textarea> <br />
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
