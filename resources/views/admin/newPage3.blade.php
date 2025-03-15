@extends('layouts.main_layout')

{{-- blade comment --}}

@section('content')
    <h2 class="display-1 text-center">Admin Page</h2>
    @switch($value)
        @case(100)
            <h2>Valor 100</h2>
        @break

        @case(200)
            <h2>Valor 200</h2>
        @break

        @case(300)
            <h2>Valor 300</h2>
        @break

        @default
            <h2>Outro valor.</h2>
    @endswitch
@endsection
