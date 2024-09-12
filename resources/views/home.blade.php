{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>Home</h1>
        <p>
            Vedi i treni in partenza oggi
        </p>
    </div>
@endsection


@section('titlePage')
    home
@endsection
