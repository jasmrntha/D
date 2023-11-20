@extends('master')

@section('konten')
    <h3>Data Pegawai</h3>

    <a href="/dosen/add" class="btn btn-info">Tambah Pegawai Baru</a>

    <br/>
    <br/>

    <table border="1" class="table">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($dosen as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jabatan }}</td>
                <td>{{ $p->umur }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="/dosen/edit/{{ $p->id }}">Edit</a>
                    |
                    <a href="/dosen/delete-dosen/{{ $p->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
