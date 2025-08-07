@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($students as $student)
            <a href="{{ url('/students/' . $student['id']) }}">
                <x-student-card 
                    :nama="$student['nama']"
                    :username="$student['username']"
                    :foto="$student['foto']"
                    :deskripsi="$student['deskripsi']"
                />
            </a>
        @endforeach
    </div>
@endsection