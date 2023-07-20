@extends('layouts.main')
@section('content')

<style>
    .container {
        margin-top: 10%;
        margin-left: 25%;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-wrapper {
        max-width: 500px;
        padding: 40px;
        background: linear-gradient(#DFD9FF, #FCFFD9);
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .col-form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 0;
    }

    .btn-warning {
        border-radius: 0;
    }
</style>
<div class="container">
        <div class="form-wrapper">
<h1 class="mb-0">Add employe</h1>
    <hr />
     <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>


            <button type="submite" class="btn btn-danger m-0">Register</button>
        </div>
    </form>
        </div>
</div>

@endsection