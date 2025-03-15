@extends('layouts.main_layout')

@section('content')
    @for ($i = 0; $i < 10; $i++)
        {{-- continue --}}
        @if ($i == 5)
            @continue
        @endif

        <p>{{ $i }}</p>

        {{-- break --}}
        @if ($i == 7)
            @break
        @endif
    @endfor

    {{-- loop variable --}}
    @foreach ($cities as $city)
        <h3>{{ $loop->index }}</h3>
        <h2>{{ $city }}</h2>
        @if ($loop->first)
            <p>This is the first iteration.</p>
        @elseif ($loop->last)
            <p>This is the last iteration.</p>
        @endif
    @endforeach
@endsection
