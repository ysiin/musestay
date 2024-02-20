@extends('template.layout')

@section('judul')
    Tambah Kamar
@endsection

@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Jenis Kamar</label>
                    <select name="jeniskamar_id" class="form-control select2">
                        <option></option>
                        @foreach ($jeniskamar as $item)
                        <option  value="{{ $item->id }}">{{ $item->n_jenis_kamar . "  (" . $item->hotel->nama_hotel . ")"}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_kamar">Nomor Kamar</label>
                    <input type="number" min="1" class="form-control" id="no_kamar" name="no_kamar" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection