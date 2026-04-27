<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Search logic
        $students = Student::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('student_id', 'like', "%{$search}%");
        })->get();

        // Attach QR code to each student for the list view
        $students->map(function ($student) {
            $student->qr = QrCode::size(80)->generate(route('students.show', $student->id));
            return $student;
        });

        return view('students.index', compact('students'));
    }

    public function create() { return view('students.create'); }

    public function store(Request $request) {
        $data = $request->validate([
            'student_id' => 'required|unique:students',
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required'
        ]);
        Student::create($data);
        return redirect()->route('students.index');
    }

    public function show(Student $student) {
        // Encode all student data into the QR Code
        $studentData = json_encode([
            'ID' => $student->student_id,
            'Full Name' => $student->name,
            'Email' => $student->email,
            'Course' => $student->course
        ]);
        
        $qr = QrCode::size(250)->color(0, 0, 102)->generate($studentData);
        return view('students.show', compact('student', 'qr'));
    }

    // Show the edit form
public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}

// Update the student data
public function update(Request $request, Student $student)
{
    $data = $request->validate([
        'student_id' => 'required|unique:students,student_id,' . $student->id,
        'name' => 'required',
        'email' => 'required|email',
        'course' => 'required'
    ]);

    $student->update($data);

    return redirect()->route('students.index')->with('success', 'Student profile updated! 🍵');
}

// Remove the student
public function destroy(Student $student)
{
    $student->delete();
    return redirect()->route('students.index')->with('success', 'Student record removed.');
}
}