@extends('layouts.authentication')

@section('title', 'Register')
@section('name', 'Register no telepon')

@section('form-card')
@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="modal-body p-5 pt-0">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input name="name" type="text" class="form-control rounded-3" id="input-name" placeholder="Name"
                autocomplete="off" required>
            <label for="input-name">Nama</label>
        </div>
        <div class="form-floating mb-3">
            <input name="phone_number" type="text" class="form-control rounded-3" id="input-phone-number"
                placeholder="No Telepon" autocomplete="off" required>
            <label for="input-phone-number">No. Telepon</label>
        </div>
        <div class="form-floating mb-3">
            <input name="password" type="password" class="form-control rounded-3" id="input-password"
                placeholder="Password" autocomplete="off" required>
            <label for="input-password">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input name="password_confirmation" type="password" class="form-control rounded-3"
                id="input-password-confirmation" placeholder="Confirm Password" autocomplete="off" required>
            <label for="input-password-confirmation">Confirm Password</label>
        </div>
        <button type="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Register</button>
    </form>
    <hr class="my-2">
    <h2 class="fs-6 fw-bold mb-3">Sudah register? kamu dapat login</h2>
    <a href="{{ route('login') }}" class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3">Login</a>
</div>
@endsection
