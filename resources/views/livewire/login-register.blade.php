@extends('layouts.app')

@section('content')
<div>
<h1>Login</h1>
    <form method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" autofocus required>
            @error('name')
            {{ $message}}
            @enderror
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" required value="{{ old('email') }}">
            @error('email')
            {{ $message}}
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" required>Password</label>
            <input type="password" name="password">
            @error('password')
            {{ $message}}
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="remember">
            <label for="password">Remember me</label><br>
        </div>
        <button wire:click.prevent="login">Login</button>  
    </form>
    <div class="mt-3">Don't have an account? <a href="{{ 'register' }}">Register here</a></div>
</div>
@endsection