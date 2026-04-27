@extends('layouts.master')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold text-[#4B6344] mb-8">Update Student Profile</h2>

    <div class="bg-white p-8 rounded-3xl border-2 border-[#DDEBCC] shadow-sm">
        <form action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold text-[#4B6344] mb-2">Student ID</label>
                <input type="text" name="student_id" value="{{ $student->student_id }}" required
                       class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-[#F9FBF4]">
            </div>

            <div>
                <label class="block text-sm font-semibold text-[#4B6344] mb-2">Full Name</label>
                <input type="text" name="name" value="{{ $student->name }}" required
                       class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-[#F9FBF4]">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-[#4B6344] mb-2">Email</label>
                    <input type="email" name="email" value="{{ $student->email }}" required
                           class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-[#F9FBF4]">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-[#4B6344] mb-2">Course</label>
                    <input type="text" name="course" value="{{ $student->course }}" required
                           class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-[#F9FBF4]">
                </div>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('students.index') }}" class="py-3 px-6 text-[#8A9A81]">Cancel</a>
                <button type="submit" class="bg-[#4B6344] text-white px-8 py-3 rounded-full font-bold">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection