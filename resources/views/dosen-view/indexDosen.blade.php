@extends('master2')

@section('title', 'Database Dosen')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Dosen</h3>

    <a href="/dosen/add" class="btn btn-primary">Tambah Dosen Baru</a>

    <br />
    <br />
@endsection

@section('konten')
    <h5>Cari Data Dosen :</h5>
    <form action="/dosen/cari" method="GET" class="d-md-flex justify-content-md-end">
        <input type="text" name="cari" placeholder="cari dosen" value="{{ old('cari') }}" class="form-control">
        <input type="submit" value="search" class="btn btn-primary">
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

                @if ( ($p->umur) <= 30 )
                    <td class="bg-dark text-light">{{ $p->umur }}</td>
                @elseif( ($p->umur) >= 31 )
                    <td class="bg-danger text-light">{{ $p->umur }}</td>
                @endif

                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="/dosen/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                    <a href="/dosen/delete-dosen/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                    <a href="/dosen/view/{{ $p->id }}" class="btn btn-info">View</a>
                </td>
            </tr>
        @endforeach 
    </table>

    {{ $dosen->links() }}
@endsection
