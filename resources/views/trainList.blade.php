{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>Treni in partenza oggi</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Ora di partenza</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th>{{ $train->id }}</th>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrive_station }}</td>
                        <td>{{ $train->departure_date }}</td>
                        <td>{{ $train->departure_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    departure-train
@endsection
