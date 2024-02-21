@extends('template.layout')

@section('judul')
    Dashboard
@endsection

@section('content')
    <div class="d-flex flex-wrap">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Tiket Museum</h4>
                </div>
                <div class="card-body">
                    <h6>Beli tiket sekarang : </h6>
                    <a href="{{ url('reservasi/create') }}">
                        <button class="btn btn-warning">Beli Tiket</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Hotel</h4>
                </div>
                <div class="card-body">
                    <h6>Cari hotel terdekatmu </h6>
                    <a href="{{ url('pilih-hotel/') }}">
                        <button class="btn btn-warning">Cari Hotel</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
