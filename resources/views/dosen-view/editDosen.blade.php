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
            Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}" class="form-control"> <br />
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}" class="form-control"> <br />
            Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}" class="form-control"> <br />
            Alamat
            <textarea required="required" name="alamat" class="form-control">{{ $p->alamat }}</textarea> <br />
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
