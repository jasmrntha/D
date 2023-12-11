@extends('master2')

@section('konten')
    <h3>Data Pegawai</h3>

    <a href="/dosen/index" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/dosen/add-dosen" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "input-group mb-3">
            <span for = "nama" class="input-group-text col-sm-1">Nama</span>
            <div class = "col-sm-11">
                <input type ="text" class="form-control" name= "nama" id="nama" placeholder = "Masukkan Nama">
            </div>
        </div>

        <div class = "input-group mb-3">
            <span for="jabatan" class="input-group-text col-sm-1">Jabatan</span>
            <div class = "col-sm-11">
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan">
        </div>
        </div>

        <div class="input-group mb-3">
            <label for="umur" class="input-group-text col-sm-1">Umur</label>
            <div class = "col-sm-11">
                <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur">
        </div>
        </div>

        <div class="input-group mb-3">
            <label for="alamat" class="input-group-text col-sm-1">Alamat</label>
            <div class = "col-sm-11">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
        </div>
        </div>
        <br />
        <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
    </form>
@endsection
