@extends('layouts.main')

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a class="fw-normal">Dashboard</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <a href="{{route('user.create')}}" class="btn btn-primary float-end mb-3">Tambah User</a>
                <h3 class="box-title">Table User</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Created_at</th>
                                    <th class="border-top-0">Update_at</th>

                            </tr>
                        </thead>
                        @foreach ($users as $items)
                            <tr>
                                <td>{{$items['id']}}</td>
                                <td>{{$items['name']}}</td>
                                <td>{{$items['email']}}</td>
                                <td>{{$items['created_at']}}</td>
                                <td>{{$items['updated_at']}}</td>
                                <td>
                                    <form action="{{ route('kamar.destroy', $items->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('user.edit', $items->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
