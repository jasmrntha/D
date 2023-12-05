@extends('master2')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Penggaris</h3>

    <a href="/penggaris/add" class="btn btn-primary">Tambah Penggaris</a>

    <br />
    <br />
@endsection

@section('konten')
    <table border="1" class="table table-strip table-hover">
        <tr>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($penggaris as $p)
            <tr>
                <td>{{ $p->merkpenggaris }}</td>
                <td>{{ $p->stockpenggaris }}</td>

                @if ($p->tersedia == 1)
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="option1" value="1" checked>
                        </div>
                    </td>
                @else
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1" name="option1" value="0">
                        </div>
                    </td>
                @endif
                <td>
                    <a href="/penggaris/edit/{{ $p->kodepenggaris }}" class="btn btn-warning">Edit</a>
                    <a href="/penggaris/delete/{{ $p->kodepenggaris }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
