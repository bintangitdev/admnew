@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Employee</h1>
@stop
@section('content')
    <form action="{{route('employees.update', $employees->id)}}" method="post">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                                <label class="font-weight-bold">NamaPegawai</label>
                                <input type="text" class="form-control @error('NamaPegawai') is-invalid @enderror" name="NamaPegawai" value="{{ old('NamaPegawai', $employees->NamaPegawai) }}" placeholder="Masukkan Nama Tempat Kerja">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" value="{{ old('Alamat', $employees->Alamat) }}" placeholder="Masukkan Nama Alamat">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">RolePekerjaan</label>
                                <input type="text" class="form-control @error('RolePekerjaan') is-invalid @enderror" name="RolePekerjaan" value="{{ old('RolePekerjaan', $employees->RolePekerjaan) }}" placeholder="Masukkan Nama Alamat">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
