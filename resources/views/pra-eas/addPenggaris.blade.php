@extends('master2')

@section('konten')
    <h3>Data Penggaris</h3>

    <a href="/penggaris/index" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/penggaris/add" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <span class="input-group-text">Merk</span>
            <input type="text" name="merk" class="form-control"> <br />
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Stock</span>
            <input type="number" name="stock" class="form-control"> <br />
        </div>
        <div class="input-group mb-3">
            <div class="input-group">
                <select class="form-select" id="tersedia" name="tersedia">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak tersedia</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
