@extends('layouts.app')

@section('content')
    <h1>Students List</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p><a href="{{ route('students.create') }}">Add Student</a></p>

    @foreach ($students as $student)
        <div>
            <p>
                {{ $student->roll_no }} -
                {{ $student->name }}
                <a href="{{ route('students.show', $student->id) }}">View</a>
            </p>
        </div>
    @endforeach
@endsection