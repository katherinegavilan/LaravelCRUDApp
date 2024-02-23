@extends('layouts.app')

@section('content')
<div>
    <a href="/">Inicio</a>
    @auth
        <a href="/home">Principal</a>
        <form style="display: inline" action="/logout" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit()">Logout</a>
        </form>
    @else
        <a href="/login">Login</a>
    @endauth
</div>

@endsection
