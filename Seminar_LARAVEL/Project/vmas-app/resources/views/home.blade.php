@extends('layouts.default')

@section('content')
    <p>Name: {{ $user['name'] }}</p>
    <p>Age: {{ $user['age'] }}</p>
    <p>Marital status: {{ $user['position'] }}</p>
    <p>From: {{ $user['address'] }}</p>
    @if ($user['age'] < 18)
        <p class="error">Вам нет 18-ти лет.</p>
    @endif
@endsection
