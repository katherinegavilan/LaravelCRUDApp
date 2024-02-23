@extends('layouts.app')

@section('content')
<div>
<h1>Register</h1>
    <form wire:submit.prevent="register" method="post">
    @csrf
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" wire:model="name">
        @error('name') 
        <span>
            {{ $message }}</span> 
        @enderror
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" wire:model="email">
        @error('email')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" wire:model="password">
        @error('password') 
        <span>{{ $message }}</span> 
        @enderror
    </div>

    <div class="mb-3">
        <input type="checkbox" name="remember" wire:model="remember">
        <label for="remember">Recuérdame</label><br>
    </div>

    <div class="mb-3">
        <button type="submit">Register</button>
    </div>
    </form>
</div>
@endsection