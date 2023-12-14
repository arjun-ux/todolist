@extends('layouts.main')
@section('content')
<style>
    .border {
        box-shadow: 18px;
        background-color:transparent;
    }
    form {
        background-color: transparent;
    }
    button important {
        align-items: center;
    }
    p {
        font-style: italic;
    }
    a important {
        text-decoration: none;
        font-style: italic;
        text-decoration-color: rgb(10, 0, 0);
    }
</style>
    <div class="container">
        <div class="row justify-content-end my-5">
            <div class="col-md-4 border">
                <h3 class="text-center">Login</h3>
                <form action="{{ route('doLogin') }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName" name="name">
                    </div>
                    <div class="mb-2">
                        <label for="inputpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputpassword" name="password">
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
                <p>*) Belum Punya Akun? <a href="{{ route('register') }}">Daftar</a></p>
            </div>
        </div>
    </div>
@endsection
