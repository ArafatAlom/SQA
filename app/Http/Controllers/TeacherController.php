<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    // Display a listing of teachers
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    // Show the form for creating a new teacher
    public function create()
    {
        return view('teachers.create');
    }

    // Store a newly created teacher in storage
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:teachers,email',
            // Add more validation rules as needed
        ]);

        // Create the teacher
        Teacher::create($validatedData);

        // Redirect to the index page
        return redirect('/teachers')->with('success', 'Teacher created successfully!');
    }

    // Display the specified teacher
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    // Show the form for editing the specified teacher
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    // Update the specified teacher in storage
    public function update(Request $request, Teacher $teacher)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:teachers,email,' . $teacher->id,
            // Add more validation rules as needed
        ]);

        // Update the teacher
        $teacher->update($validatedData);

        // Redirect to the index page
        return redirect('/teachers')->with('success', 'Teacher updated successfully!');
    }

    // Remove the specified teacher from storage
    public function destroy(Teacher $teacher)
    {
        // Delete the teacher
        $teacher->delete();

        // Redirect to the index page
        return redirect('/teachers')->with('success', 'Teacher deleted successfully!');
    }
}
