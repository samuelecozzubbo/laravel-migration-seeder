{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>I nostri pacchetti viaggio</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    departure-train
@endsection
