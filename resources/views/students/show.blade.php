@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img src="{{ $student['foto'] }}" class="w-24 h-24 rounded-full mx-auto mb-4">
        <h2 class="text-2xl font-bold">{{ $student['nama'] }}</h2>
        <p class="text-gray-500">@{{ $student['username'] }}</p>
        <p class="text-sm">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        <p class="mt-4">{{ $student['deskripsi'] }}</p>

        <div class="flex justify-center mt-6 gap-4">
            <x-button> Edit Profile </x-button>
            <x-button> Delete Account </x-button>
        </div>
    </div>
@endsection