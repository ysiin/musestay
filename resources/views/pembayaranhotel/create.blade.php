@extends('template.layout')

@section('judul')
    Validasi Pembayaran Hotel
@endsection

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="detail-tiket">
                    <h5>Nama : {{ $reservasi->nama_tamu }}</h5>
                    <h5>Tanggal Checkin : {{ $reservasi->tanggal_checkin }}</h5>
                    <h5>Tanggal Checkout : {{ $reservasi->tanggal_checkout }}</h5>
                    <h5>No. Rekening</h5>
                    <h5>Mandiri : 1170011266178 An. Yaa Siin </h5>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pembayaran-hotel.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="pembayaran_via">Pembayaran Via</label>
                        <input type="text" class="form-control" placeholder="Contoh: Mandiri/BCA/Gopay dll"
                            id="bank_tf" name="bank_tf" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_rek">Nama Rekening Pengirim</label>
                        <input type="text" class="form-control" id="nama_rek" name="nama_rek" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_transfer">Tanggal Transfer</label>
                        <input type="text" class="form-control datepicker" id="tanggal_transfer" name="tanggal_transfer"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="bukti_transfer">Bukti Transfer</label>
                        <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer" required>
                    </div>
                    <input type="hidden" class="form-control" value="{{ $reservasi->id }}" name="reservasi_hotel_id" required>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
