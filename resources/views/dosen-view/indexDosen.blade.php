@extends('master2')

@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <a href="/dosen/add" class="btn btn-info">Tambah Pegawai Baru</a>

    <br />
    <br />
@endsection

@section('konten')
    <h5>Cari Data Pegawai :</h5>
    <form action="/dosen/cari" method="GET">
        <input type="text" name="cari" placeholder="cari dosen" value="{{ old('cari') }}" class="form-control">
        <br>
        <input type="submit" value="search" class="btn btn-info">
    </form>
    <br><br>
    <table border="1" class="table table-strip table-hover">
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
                    <a href="/dosen/edit/{{ $p->id }}" class="btn btn-success">Edit</a>
                    |
                    <a href="/dosen/delete-dosen/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $dosen->links() }}
@endsection
