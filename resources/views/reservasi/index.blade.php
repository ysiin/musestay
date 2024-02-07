@extends('template.layout')
@section('judul', 'Reservasi')
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
                            <th>Nama</th>
                            <th>harga total</th>
                            <th>Tanggal Datang</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rsv)
                        <tr>
                            <td>{{ $rsv->nama }}</td>
                            <td>{{ $rsv->harga_total }}</td>
                            <td>{{ $rsv->tanggal_datang }}</td>
                            <td>{{ $rsv->no_telp }}</td>
                            <td>{{ $rsv->email }}</td>
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
