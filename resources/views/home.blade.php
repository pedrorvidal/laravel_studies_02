@extends('layouts.main_layout')

@section('content')
    @production
        <h1 class="text-center">Hello World from production</h1>
    @else
        <h1 class="text-center">Hello World from development</h1>
    @endproduction

    @env(['local', 'development'])
    <p>Estou no ambiente {{ env('APP_ENV') }}</p>
    @endenv

    {{-- formulario --}}
    <form action="{{ route('submit') }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Nome">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="text" name="country" placeholder="country">
            @error('country')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Enviar</button>
    </form>
@endsection
