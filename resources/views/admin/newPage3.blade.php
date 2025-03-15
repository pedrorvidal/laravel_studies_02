@extends('layouts.main_layout')

{{-- blade comment --}}

@section('content')
    <h2 class="display-1 text-center">Admin Page</h2>
    {{-- instrução IF --}}
    {{-- @if ($value == 100)
        <h3>Value is 100</h3>
    @endif
    @if ($value != 100)
        <h3>Primeira parte do código</h3>
    @else
        <h3>Segunda parte do código</h3>
    @endif --}}

    {{-- instrução IF ELSEIF ELSE ENDIF --}}
    @if ($value < 10)
        <p>primeiro</p>
    @elseif($value < 20)
        <p>segundo</p>
    @elseif($value > 50)
        <p>terceiro</p>
    @elseif($value == 100)
        <p>quarto</p>
    @else
        <p>outro case</p>
    @endif
@endsection
