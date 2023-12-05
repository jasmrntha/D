@extends('master2')

@section('konten')
    <h3>Data Nilai</h3>

    <a href="/nilai/index" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/nilai/add" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <span class="input-group-text">NRP</span>
            <input type="text" name="nrp" class="form-control"> <br />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Nilai</span>
            <input type="number" name="nilai" class="form-control"> <br />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">SKS</span>
            <input type="number" name="sks" class="form-control"> <br />
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
