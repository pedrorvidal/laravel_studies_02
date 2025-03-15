@extends('layouts.main_layout')

@section('content')
    <h2 class="display-1 text-center">Hello home</h2>
    @for ($i = 0; $i < 5; $i++)
        <h2>Hello {{ $i }}</h2>
    @endfor

    @foreach ($cities as $city)
        <h2>{{ $city }}</h2>
    @endforeach

    {{-- ciclo foreach com um fallback caso esteja vazio o array pra ser iterado --}}
    @forelse ($names as $name)
        <h2>{{ $name }}</h2>
    @empty
        <h2>Names está vazio</h2>
    @endforelse

    @while ($indice < 10)
        <h2>{{ $indice }}</h2>

        @php
            $indice++;
        @endphp
    @endwhile
@endsection
