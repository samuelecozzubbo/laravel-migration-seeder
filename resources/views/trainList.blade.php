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
                        @php
                            $departure_time = date_create($train->departure_time);
                        @endphp
                        <th>{{ $train->id }}</th>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrive_station }}</td>
                        {{-- <td>{{ substr($train->departure_date, 0, 10) }}</td> --}}
                        {{-- Ho trasformato departure date da stringa a datetime usando il
                        metodo carbon dentro al model e poi stampo con format
                        Poteco anche fare un tag php qua usando date_create e poi format --}}
                        {{-- https://www.w3schools.com/php/func_date_date_format.asp --}}
                        {{--  NB ESISTE LA FUNZIONE STRTOTIME --}}
                        <td>{{ $train->departure_date->format('Y-m-d') }}</td>
                        <td>{{ date_format($departure_time, 'H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    departure-train
@endsection
