@extends('template.layout')

@section('judul')
    Data Pembayaran Tiket
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
                                <th>Transfer Via</th>
                                <th>Nama Pengirim</th>
                                <th>Tanggal Transfer</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->reservasi->nama }}</td>
                                    <td>{{ $item->reservasi->tanggal_datang }}</td>
                                    <td>{{ $item->bank_tf }}</td>
                                    <td>{{ $item->nama_rek }}</td>
                                    <td>{{ $item->tanggal_transfer }}</td>
                                    <td>s</td>
                                    <td>{{ $item->reservasi->status }}</td>
                                    <td>
                                        <form class="d-inline" action="{{ route('updateStatus', ['id' => $item->reservasi->id]) }}" method="POST">
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
