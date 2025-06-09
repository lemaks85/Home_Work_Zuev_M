@extends('layouts.default')

@section('content')
    <p>From: {{ $user['address'] }}</p>
    <p>Postal code: {{ $user['post_code'] }}</p>
    <p>E-mail: {{ $user['email'] }}</p>
    <p>Telephone: +{{ $user['phone'] }}</p>
    @if ($user['email'] === '')
        <p class="error">Адрес электронной почты не указан.</p>
    @endif
@endsection
