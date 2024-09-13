{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>I nostri pacchetti viaggio</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="text-nowrap">Departure date</th>
                    <th scope="col" class="text-nowrap">Arrive date</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            @foreach ($travel_packs as $pack)
                <tr>
                    @php
                        $departure_date = date_create($pack->departure_date);
                        $arrive_date = date_create($pack->arrive_date);
                    @endphp
                    <td>{{ $pack->name }}</td>
                    <td>{{ $pack->destination }}</td>
                    <td>{{ $pack->description }}</td>
                    <td>{{ $departure_date->format('Y-m-d') }}</td>
                    <td>{{ $arrive_date->format('Y-m-d') }}</td>
                    <td class="d-flex flex-column align-items-center">{{ $pack->price }}&euro; <a href="#"
                            class="btn btn-danger">Prenota</a></td>
                </tr>
            @endforeach
            <tbody>
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    departure-train
@endsection
