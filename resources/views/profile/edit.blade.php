@extends('adminlte::page')
@section('title', 'List User')
@section('content_header')
    <h1 class="m-0 text-dark">List User</h1>
@stop
@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <form action="{{ route('profile.update', $Profiles->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">NamaLengkap</label>
                            <input type="text" class="form-control @error('NamaLengkap') is-invalid @enderror" name="NamaLengkap" value="{{ old('NamaLengkap', $Profiles->NamaLengkap) }}"  id="NamaLengkap" placeholder="Masukkan Nama Lengkap">
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Karir</label>
                            <input type="text" class="form-control @error('Karir') is-invalid @enderror" name="Karir" id="Karir" value="{{ old('Karir', $Profiles->Karir) }}" placeholder="Masukkan Nama Karir">

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Location</label>
                            <input type="text" class="form-control @error('Location') is-invalid @enderror" name="Location" id="Location" value="{{ old('Location', $Profiles->Location) }}" placeholder="Masukkan Nama Location">

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Degree</label>
                            <input type="text" class="form-control @error('Degree') is-invalid @enderror" name="Degree" id="Degree" value="{{ old('Degree', $Profiles->Degree) }}" placeholder="Masukkan Nama Degree">

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email" value="{{ old('Email', $Profiles->Email) }}" placeholder="Masukkan Nama Email">

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Linkid</label>
                            <input type="text" class="form-control @error('Linkid') is-invalid @enderror" name="Linkid" id="Linkid" value="{{ old('Linkid', $Profiles->Linkid) }}" placeholder="Masukkan Nama Linkid">

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">About</label>
                            <input type="text" class="form-control @error('About') is-invalid @enderror" name="About" id="About" value="{{ old('About', $Profiles->About) }}" placeholder="Masukkan Nama About">

                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Image</label>
                            <img src="/Image/{{ old('Image', $Profiles->Image) }}" width="300px">
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
