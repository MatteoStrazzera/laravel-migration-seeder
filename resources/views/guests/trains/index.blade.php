@extends('layouts.app')

@section('content')
    <h2>Elenco treni</h2>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">
                                {{ $train->train_company }}
                            </h3>
                            <p>
                                {{ $train->departure_station }}
                            </p>
                            <p>
                                {{ $train->arrival_station }}
                            </p>
                            <p>
                                {{ $train->departure_time }}
                            </p>
                            <p>
                                {{ $train->arrival_time }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
