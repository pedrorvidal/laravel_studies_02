@extends('layouts.main_layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="" method="POST">
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
@endsection
