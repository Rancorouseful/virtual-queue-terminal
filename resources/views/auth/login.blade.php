@extends('auth.layout')

@section('card')
    <h2>Вход</h2>
    <form method="POST" action="{{ route('user.login') }}">
        @csrf
        <label for="email">Электронная почта</label>
        <input id="email" name="email" value="" type="email" placeholder="example@email.com"><br>
        <label for="username">Имя</label>
        <input id="password" name="password" value="" type="password" placeholder="8 символов">
        <button type="submit">Подтвердить</button>
    </form>
@endsection
