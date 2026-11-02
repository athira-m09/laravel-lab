@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <p>
            Roll Number:
            <input type="text" name="roll_no" value="{{ old('roll_no') }}" required>
            @error('roll_no') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            Name:
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            Email:
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            Department:
            <input type="text" name="department" value="{{ old('department', 'CSE') }}" required>
            @error('department') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            Semester:
            <input type="number" name="semester" value="{{ old('semester', 7) }}" min="1" max="8" required>
            @error('semester') <span>{{ $message }}</span> @enderror
        </p>

        <p>
            CGPA:
            <input type="number" name="cgpa" step="0.01" min="0" max="10" value="{{ old('cgpa') }}">
            @error('cgpa') <span>{{ $message }}</span> @enderror
        </p>

        <button type="submit">Save Student</button>
    </form>

    <p><a href="{{ route('students.index') }}">Back to Students</a></p>
@endsection