@extends('template.layout')
@section('judul', 'Reservasi_hotel')
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            Daftar Reservasi
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>Kamar_id</th>
                            <th>Nama Tamu</th>
                            <th>No telp</th>
                            <th>Tanggal Booking</th>
                            <th>Tanggal Checkin</th>
                            <th>Tanggal Checkout</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rsv)
                        <tr>
                            <td>{{ $rsv->kamar->jeniskamar->n_jenis_kamar }}</td>
                            <td>{{ $rsv->nama_tamu }}</td>
                            <td>{{ $rsv->no_telp }}</td>
                            <td>{{ $rsv->tanggal_booking }}</td>
                            <td>{{ $rsv->tanggal_checkin }}</td>
                            <td>{{ $rsv->tanggal_checkout }}</td>
                            <td>{{ $rsv->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection