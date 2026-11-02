<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    // Display the form to add a student
    public function create()
    {
        return view('students.create');
    }

    // Save a new student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roll_no' => 'required|string|unique:students,roll_no',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'department' => 'required|string|max:255',
            'semester' => 'required|integer|min:1|max:8',
            'cgpa' => 'nullable|numeric|min:0|max:10',
        ]);

        Student::create($validated);

      return redirect()
    ->route('students.index')
    ->with('status', 'Student added successfully!')
    ->with('success', 'Student created successfully!');
    }

    // Display one student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        abort(404);
    }

    public function update(Request $request, Student $student)
    {
        abort(404);
    }

    public function destroy(Student $student)
    {
        abort(404);
    }
}