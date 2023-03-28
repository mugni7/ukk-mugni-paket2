@extends('Layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endsection

@section('title', 'Data Masyarakat')

@section('header', 'Data Masyarakat')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="masyarakatTable" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Jenis Kelamin</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        @foreach ($masyarakat as $k => $v)
                            <tbody>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $v->nik }}</td>
                                <td>{{ $v->nama }}</td>
                                <td>{{ $v->username }}</td>
                                <td>{{ $v->jenis_kelamin }}</td>
                                <td>{{ $v->telp }}</td>
                                <td>{{ $v->alamat }}</td>
                                <td>
                                    <a href="{{ route('masyarakat.show', $v->nik) }}">Lihat</a>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#masyarakatTable').DataTable();
        });
    </script>

@endsection
