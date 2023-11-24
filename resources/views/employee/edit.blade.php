
@extends('components.layout')
@section('title', 'Karyawan')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Tambah Data Karyawan</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
    </div>
    <br>
    <form method="POST" action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-2">
            <div class="col-6">
                <strong>Nama</strong>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $employee->nama }}">
            </div>
            <div class="col-6">
                <label for="tgl_lahir"><strong>Tanggal Lahir</strong> </label>
                <input type="date" name="tgl_lahir" class="form-control @if($errors->has('tgl_lahir')) is-invalid @endif" placeholder="Masukkan Tanggal Lahir" value="{{ $employee->tgl_lahir}}">                  
                  @if($errors->has('tgl_lahir'))
                  <small class="text-danger">
                    {{$errors->first('tgl_lahir')}}
                  </small>
                  @endif
            </div>
            <div class="col-6">
                <div class="form-group">
                    <strong>Telepon</strong>
                    <input type="text" name="telepon" class="form-control" placeholder="Masukan Nomer Telepon" value="{{ $employee->telepon }}">
                </div>
            </div>
            <div class="col-6">                
                <label>Jenis Kelamin</label><br>
                <input type="radio" name="gender" value="L" checked> Laki-laki <br>
                <input type="radio" name="gender" value="P"> Perempuan
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <select class="form-select" name="pendidikan" aria-label="Default select example" value="{{ $employee->pendidikan }}">
                        <option selected>-- Pilih Pendidikan --</option>
                        <option value="S3">S3 | Doktoral</option>
                        <option value="S2">S2 | Strata 2</option>
                        <option value="S1">S1 | Strata 1</option>
                        <option value="D4">D4 | Diploma IV</option>
                        <option value="D3">D3 | Diploma III</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <label for="unit_kerja">Unit Kerja</label>
                    <select class="form-select" name="unit_kerja" aria-label="Default select example" value="{{ $employee->unit_kerja }}">
                        <option selected>-- Pilih Unit Kerja --</option>
                        <option value="SDM">SDM</option>
                        <option value="Pemasaran">Pemasaran</option>
                        <option value="Operasional">Operasional</option>
                        <option value="TI">TI</option>
                    </select>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukan Jabatan" value="{{ $employee->jabatan }}">
                </div>
            </div>
                <div class="col-6">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" class="form-control @if($errors->has('foto')) is-invalid @endif" placeholder="Pilih Foto" value="{{old('foto')}}">
                  <small>Tipe Foto : PNG, JPG, JPEG. Max : 2 MB.</small>                  
                    @if($errors->has('foto'))
                    <br>
                    <small class="text-danger">
                      {{$errors->first('foto')}}
                    </small>
                    @endif       
                </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/employees" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i>
                    << Kembali </a>
            </div>
        </div>
    </form>
@endsection

