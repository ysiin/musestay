@extends('template.layout')

@section('judul')
    Pembayaran Hotel
@endsection

@section('content')
        <div class="d-flex flex-wrap">
            @foreach ($reservasi as $item)

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Reservasi Tiket</h4>
                    </div>
                    <div class="card-body">
                        <h6>{{ $item->kamar->jeniskamar->hotel->nama_hotel }}</h6>
                        <p>{{ $item->nama_tamu }}</p>
                        <p>{{ $item->tanggal_checkin }} - {{ $item->tanggal_checkout }}</p>
                        <p></p>
                        <a class="btn btn-primary" href="{{ url('pembayaran-hotel') . '/' .  $item->id  }}">Bayar</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
@endsection
