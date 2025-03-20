@extends('layouts.main_layout')

@section('content')
    <h1>Home</h1>

    @session('name')
        <h3>Olá {{ session('name') }}</h3>
    @endsession

@endsection
