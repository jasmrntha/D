@extends('master2')

@section('konten')
    <h3>Data Penggaris</h3>

    <a href="/penggaris/index" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    @foreach ($penggaris as $p)
        <form action="/penggaris/edit" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kodepenggaris }}" class="form-control"> <br />
            <div class="input-group mb-3">
                <span class="input-group-text">Merk</span>
                <input type="text" name="merk" class="form-control" value="{{ $p->merkpenggaris }}"> <br />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Stock</span>
                <input type="number" name="stock" class="form-control" value="{{ $p->stockpenggaris }}"> <br />
            </div>
            <div class="input-group mb-3">
                <div class="input-group">
                    <select class="form-select" id="tersedia" name="tersedia" value="{{ $p->tersedia }}">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak tersedia</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
