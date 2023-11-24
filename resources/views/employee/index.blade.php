@extends('components.layout')
@section('title', 'Employee')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</div>
@section('content')
<div class="row mb-2">
    <div class="col-sm-6">
        <h2 class="m-0 text-dark">Data Karyawan</h2>
    </div>
</div>
    <div class="card">
        <div class="card-header">
            <div class="box-header with-border">
                <a href="{{ route('employee.create') }}" class="btn btn-info btn-xs btn-flat"><i class="fa fa-plus-circle"></i>
                    + Tambah Data Karyawan
                </a>
            </div>

            
            <br>
            <div class="box-body table-responsive">
                <table class="table table-stiped table-bordered">
                    <thead>
                        <tr>

                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Gender</th>
                            <th>Unit Kerja</th>
                            <th>Jabatan</th>
                            <th width="20%"><i class="fas fa-cog">Aksi</i></th>
                        </tr>
                    </thead>
                    @foreach ($query as $row)
                        <tr>

                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->telepon }}</td>
                            <td>{{ $row->gender }}</td>
                            <td>{{ $row->unit_kerja }}</td>
                            <td>{{ $row->jabatan }}</td> 
                            <td>
                                <a href="{{ route('employee.show', [$row->id]) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('employee.edit', [$row->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form class="d-inline" action="{{ route('employee.destroy', [$row->id]) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin akan menghapus data ini?');"><i class="fa fa-trash"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

@endsection
