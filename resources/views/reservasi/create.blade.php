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
                <h3 class="box-title">Tambah Reservasi</h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('reservasi.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="kamar_id">Kamar_id</label>
                        <input type="text" name="kamar_id" class="form-control" id="kamar_id" aria-describedby="kamar_id" >
                    </div>
                    <div class="form-group">
                        <label for="checkin">Check In</label>
                        <input type="date" name="checkin" class="form-control" id="checkin" aria-describedby="checkin" >
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check Out</label>
                        <input type="date" name="checkout" class="form-control" id="checkout" aria-describedby="checkout" >
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" name="total" class="form-control" id="total" aria-describedby="total" >
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control" id="status" aria-describedby="status" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
