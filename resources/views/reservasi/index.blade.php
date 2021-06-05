@extends('layouts.main')

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a href="#" class="fw-normal">Dashboard</a></li>
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
                <a href="{{route('reservasi.create')}}" class="btn btn-primary float-end mb-3">Tambah Reservasi</a>
                <h3 class="box-title">Table Reservasi</h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Kamar</th>
                                    <th class="border-top-0">checkin</th>
                                    <th class="border-top-0">checkout</th>
                                    <th class="border-top-0">total</th>
                                    <th class="border-top-0">status</th>
                                    <th class="border-top-0" width="280px">Action</th>

                            </tr>
                        </thead>
                        @foreach ($reservasi as $items)
                            <tr>
                                <td>{{$items->id}}</td>
                                <td>{{$items->kamar_id}}</td>
                                <td>{{$items->checkin}}</td>
                                <td>{{$items->checkout}}</td>
                                <td>{{$items->total}}</td>
                                <td>{{$items->status}}</td>
                                <td>
                                <form action="{{ route('reservasi.destroy', $items->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('reservasi.edit', $items->id) }}">Edit</a>
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
