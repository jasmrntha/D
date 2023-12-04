@extends('master')

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
    @endforeach
@endsection
