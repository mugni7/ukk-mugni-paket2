@extends('Layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
@endsection

@section('title', 'Data Petugas')

@section('header', 'Data Petugas')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('petugas.create') }}" class="btn btn-primary mb-2">Tambah Petugas</a>
            </div>
            <div class="card-body">
                <table class="table" id="petugasTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Telp</th>
                            <th>Level</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $k => $v)
                            <tr>
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->nama_petugas }}</td>
                                <td>{{ $v->username }}</td>
                                <td>{{ $v->telp }}</td>
                                <td>{{ $v->level }}</td>
                                <td>
                                    <a href="{{ route('petugas.edit', $v->id_petugas) }}" style="text-decoration: underline">Lihat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
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
            $('#petugasTable').DataTable({});
        });
    </script>
@endsection
