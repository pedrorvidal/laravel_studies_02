@extends('layouts.main_layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('submit') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @php
        $valor = 'vidal';
        $valor1 = '<span class="text-warning">' . $valor . '</span>';
        $nome = 'Pedro Vidal';
    @endphp
    <h3>{{ $valor }}</h3>
    <h3>{!! $valor1 !!}</h3>
    <h3>$nome tem <span class="text-info">{{ strlen($nome) }}</span> caracteres.</h3>
@endsection
