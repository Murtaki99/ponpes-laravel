<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::latest()->paginate(10);

        return view('dashboard.students.index', [
            'title' => 'Students',
            'students' => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.students.create', [
            'title' => 'Create new student'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nisn' => 'required|max:10|unique:students',
            'name' => 'required|max:255|string',
            'gender' => 'required|string',
            'birthday' => 'required|date',
            'address' => 'required|max:255',
            'class_year' => 'required',
        ]);
        Student::create($validated);
        return redirect('/dashboard/student')->withSuccess('Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
