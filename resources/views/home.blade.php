@extends('layouts.app') {{-- estendo il layout app.blade.php, in pratica includo il file app.blade.php --}}


@section('content')
<div class="m-0">
    <div class="container">
        <div class="row row-cols-6 g-3">
            @foreach ($comics as $comic)
                <div class="col my-5">
                    <div class="card text-center border-0">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">Titolo : {{ $comic['series'] }}</h5>
                            <h5 class="card-title">Prezzo : {{ $comic['price'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
