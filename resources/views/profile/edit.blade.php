@extends('layouts.main')

@section('content')
    <!-- Votre code de formulaire de mise à jour de profil ici -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mise à jour du profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('profile.update', $employe->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div>
                            <label for="name" class="block font-medium text-sm text-gray-700">Nom</label>
                            <input type="text" name="name" id="name" value="{{ $employe->name }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mt-4">
                            <label for="email" class="block font-medium text-sm text-gray-700">Adresse e-mail</label>
                            <input type="email" name="email" id="email" value="{{ $employe->email }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
