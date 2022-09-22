@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah User</h1>
@stop
@section('content')
<form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('NamaLengkap') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="NamaLengkap" value="{{old('NamaLengkap')}}">
                        @error('NamaLengkap') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Karir</label>
                        <input type="text" class="form-control @error('Karir') is-invalid @enderror" id="exampleInputKarir" placeholder="Masukkan Karir" name="Karir" value="{{old('Karir')}}">
                        @error('Karir') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Location</label>
                        <input type="text" class="form-control @error('Location') is-invalid @enderror" id="exampleInputLocation" placeholder="Location" name="Location">
                        @error('Location') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDegree">Degree</label>
                        <input type="text" class="form-control @error('Degree') is-invalid @enderror" id="exampleInputDegree" placeholder="Degree" name="Degree">
                        @error('Degree') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="text" class="form-control @error('Email') is-invalid @enderror" id="exampleInputEmail" placeholder="Email" name="Email">
                        @error('Email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLinkid">Linkid</label>
                        <input type="text" class="form-control @error('Linkid') is-invalid @enderror" id="exampleInputLinkid" placeholder="Linkid" name="Linkid">
                        @error('Linkid') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAbout">About</label>
                        <input type="text" class="form-control @error('About') is-invalid @enderror" id="exampleInputAbout" placeholder="About" name="About">
                        @error('About') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputImage">Image</label>
                        <input type="file" class="form-control @error('Image') is-invalid @enderror" id="exampleInputImage" placeholder="Image" name="Image">
                        @error('Image') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('profile.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
