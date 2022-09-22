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
                    <a href="{{ route('profile.create') }}" class="btn btn-primary mb-2">
                            TAMBAH PROFILE
                        </a>
                        <table class="table table-hover table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Nama Lengkap</th>
                                    <th>Karir</th>
                                    <th>Details</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($Profiles as $key => $profile)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img src="/image/{{ $profile->Image }}" width="100px"></td>
                                    <td>{{ $profile->NamaLengkap }}</td>
                                    <td>{{ $profile->Karir }}</td>
                                    <td>{{ $profile->Email }}</td>
                                    <td>
                                    <a href="{{route('profile.edit', $profile)}}" class="btn btn-primary btn-xs">
                                            Edit
                                        </a>
                                        <form action="{{ route('profile.destroy', $profile->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger btn-xs" type="submit" value="Delete" />
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
