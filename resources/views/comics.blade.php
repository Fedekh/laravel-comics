@extends('layouts.app') {{-- estendo il layout app.blade.php, in pratica includo il file app.blade.php --}}


@section('content')
<div class="py-2">
    <div class="container">
        <div class="row row-cols-6 g-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card text-center border-0">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Titolo : {{ $comic['series'] }}</h5>
                            <h5 class="card-title">Tipologia : {{ $comic['type'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection