@extends('template.layout')

@section('judul')
    Data Pembayaran Hotel
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
                                <th>Nama Hotel</th>
                                <th>Tipe Kamar</th>
                                <th>No. Kamar</th>
                                <th>Tanggal Transfer</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->reservasi_hotel->nama_tamu }}</td>
                                    <td>{{ $item->reservasi_hotel->kamar->jeniskamar->hotel->nama_hotel }}</td>
                                    <td>{{ $item->reservasi_hotel->kamar->jeniskamar->n_jenis_kamar }}</td>
                                    <td>{{ $item->reservasi_hotel->kamar->no_kamar }}</td>
                                    <td>{{ $item->tanggal_transfer }}</td>
                                    <td>s</td>
                                    <td>{{ $item->reservasi_hotel->status }}</td>
                                    <td>
                                        <form class="d-inline" action="{{ route('updateStatusHotel', ['id' => $item->reservasi_hotel->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-icon btn-sm icon-left btn-success"><i class="fas fa-check"></i>
                                        </button>
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
@endsection
