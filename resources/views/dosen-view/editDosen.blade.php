@extends('master2')

@section('konten')
    <h3>Edit Pegawai</h3>

    <a href="/dosen/index" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($dosen as $p)
        <form action="/dosen/edit-dosen" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}" class="form-control"> <br />
            <div class="input-group mb-3">
                <span class="input-group-text">Nama</span>
                <input type="text" name="nama" class="form-control" required="required" value="{{ $p->nama }}"> <br />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Jabatan</span>
                <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}" class="form-control"> <br />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Umur</span>
                <input type="number" required="required" name="umur" value="{{ $p->umur }}" class="form-control"> <br />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Alamat</span>
                <textarea  name="alamat" class="form-control">{{ $p->alamat }}</textarea> <br />
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
            
        <form action="/dosen/edit-dosen" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}" class="form-control"> <br />
            <div class = "input-group mb-3">
                <span for = "nama" class="input-group-text col-sm-1">Nama</span>
                <div class = "col-sm-11">
                    <input type ="text" class="form-control" name= "nama" id="nama" value="{{ $p->nama }}">
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
    @endforeach
@endsection
