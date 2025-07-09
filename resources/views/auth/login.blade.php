@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Вход в систему</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus class="form-control">
        </div>

        <div class="mb-3">
            <label for="password">Пароль</label>
            <input id="password" type="password" name="password" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection
