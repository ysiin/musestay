@extends('template.layout')

@section('judul')
    Pembayaran Tiket
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
                        <h6>{{ $item->nama }}</h6>
                        <p>{{ $item->tanggal_datang }}</p>
                        <p>{{ $item->harga_total }}</p>
                        <a class="btn btn-primary" href="{{ url('pembayaran-tiket') . '/' .  $item->id  }}">Bayar</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
@endsection
