@extends('layouts.main_layout')

@section('content')
    <h2 class="display-1 text-center">Admin Page</h2>
    <p>Name: {{ $name }}</p>
    <p>Phone: {{ $phone }}</p>
@endsection
