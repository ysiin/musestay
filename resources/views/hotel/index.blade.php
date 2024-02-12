@extends('template.layout')

@section('judul')
    Data Hotel
@endsection

@section('content')
    <div class="d-flex flex-wrap">
        @foreach ($data as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $item->nama_hotel }}</h4>
                        @if ($item->bintang == 1)
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        @endif
                        @if ($item->bintang == 2)
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        @endif
                        @if ($item->bintang == 3)
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        @endif
                        @if ($item->bintang == 4)
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        @endif
                        @if ($item->bintang == 5)
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        <li class="ion ion-android-star" data-pack="android" data-tags="favorite, like, rate"></li> 
                        @endif
                    </div>
                    <div class="card-body">
                        <h4>{{ $item->alamat }}</h4>
                        <img src="{{ public_path($item->foto_hotel) }}" alt="{{ $item->nama_hotel }}" style="max-width: 200px; max-height: 150px;">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
