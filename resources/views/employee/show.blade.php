@extends('components.layout')
@section('title', 'Karyawan')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<div class="row mb-2">
    <div class="col-sm-6">
        <h2 class="m-0 text-dark">Employee | Detail Data</h2>
    </div>
</div>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td> : {{ $employee->nama }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td> : {{ $employee->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td> : {{ $employee->telepon }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td> : {{ $employee->gender }}</td>
                        </tr>
                        <tr>
                            <th>Pendidikan</th>
                            <td> : {{ $employee->pendidikan }}</td>
                        </tr>
                        <tr>
                            <th>Unit Kerja</th>
                            <td> : {{ $employee->unit_kerja }}</td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td> : {{ $employee->jabatan }}</td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
            <a href="{{ route('employee.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="col-md-4">
            @if ($employee->foto)
                    <img src="{{ asset('storage/foto/' . $employee->foto) }}" class="rounded float-end" alt="Employee Photo" style="max-width: 100%;">
                @endif
        </div>
        </div>
        </div>
        @endsection
