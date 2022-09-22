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
                    <a href="{{route('employees.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>RolePekerjaan</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $key => $employee)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$employee->NamaPegawai}}</td>
                                <td>{{$employee->Alamat}}</td>
                                <td>{{$employee->RolePekerjaan}}</td>
                                <td>
                                    <a href="{{route('employees.edit', $employee)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
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