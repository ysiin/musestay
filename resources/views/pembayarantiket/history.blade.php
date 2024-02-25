@extends('template.layout')

@section('judul')
    History Tiket
@endsection 

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body  p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <thead>
                            <tr>
                                <th>Nama Pemesan</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Jumlah Tiket</th>
                                <th>Pembayaran Via</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->reservasi->nama }}</td>
                                    <td>{{ $item->reservasi->tanggal_datang }}</td>
                                    <td>{{ $item->reservasi->jumlah_tiket }}</td>
                                    <td>{{ $item->bank_tf }}</td>
                                    <td>{{ $item->tanggal_transfer }}</td>
                                    <td>{{ $item->reservasi->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
