@extends('layouts.main_layout')

@section('content')
    <h2 class="display-1 text-center">Hello home</h2>
    {{-- empty --}}
    @empty($value)
        <h2>Não existe</h2>
    @else
        <h2>Existe</h2>
    @endempty

    {{-- isset --}}
    @isset($values)
        <h2>Existe a variável</h2>
    @else
        <h2>Não existe a variável</h2>
    @endisset

    {{-- unless --}}
    @unless ($value != 100)
        <h2>OK</h2>
    @else
        <h2>Não existe</h2>
    @endunless
@endsection
