@extends('auth.layout')

@section('card')
    <h2>Регистрация</h2>
    <form method="POST" action="{{ route('user.register') }}">
        @csrf
        <label for="email">Электронная почта</label>
        <input id="email" name="email" value="{{ old('email') }}" type="email" placeholder="example@email.com">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="name">Имя</label>
        <input id="name" name="name" value="{{ old('name') }}" type="text" placeholder="">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="password">Пароль</label>
        <input id="password" name="password" type="password" placeholder="8 символов">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Подтвердите пароль</label>
        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Повторите пароль">

        <button type="submit">Подтвердить</button>
    </form>
@endsection
