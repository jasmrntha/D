@extends('master2')

@section('konten')
    <h3>Data Karyawan</h3>

    <a href="/eas/index" class="btn btn-primary">KEMBALI</a>

    <br />
    <br />

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/eas/insert" method="post">
        {{ csrf_field() }}

        <div class = "form-group row mb-3">
            <label for = "kode" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class = "col-sm-10">
                <input type ="text" class="form-control" name= "kodepegawai" id="kode"
                    placeholder = "Masukkan kode karyawan">
            </div>
        </div>

        <div class = "form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class = "col-sm-10">
                <input type="text" class="form-control" id="nama" name="namalengkap"
                    placeholder="Masukkan nama lengkap">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class = "col-sm-10">
                <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan divisi">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class = "col-sm-10">
                <input type="text" class="form-control" id="departemen" name="departemen"
                    placeholder="Masukkan departemen">
            </div>
        </div>
        <br />
        <button type="submit" class="btn btn-success" value="Simpan Data">SIMPAN</button>
    </form>
@endsection
