@extends('master2')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Nilai</h3>

    <a href="/nilai/add" class="btn btn-primary">Tambah Nilai</a>

    <br />
    <br />
@endsection

@section('konten')
    <table border="1" class="table table-strip table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>

                @if (($n->NilaiAngka) <= 40)
                    <td>D</td>
                @elseif (($n->NilaiAngka) >= 41 && ($n->NilaiAngka) <= 60)
                    <td>C</td>
                @elseif (($n->NilaiAngka) >= 61 && ($n->NilaiAngka) <= 80)
                    <td>B</td>
                @elseif (($n->NilaiAngka) >= 81)
                    <td>A</td>
                @endif

                <td>{{$n->NilaiAngka * $n->SKS}}</td>
            </tr>
        @endforeach
    </table>
@endsection
