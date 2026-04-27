@extends('layouts.master')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-[#4B6344]">Student Enrollment</h2>
        <p class="text-[#8A9A81] italic">Enter the student details to generate their unique Matcha ID and QR Code.</p>
    </div>

    <div class="bg-[#F9FBF4] p-8 rounded-3xl border-2 border-[#DDEBCC] shadow-inner">
        <form action="{{ route('students.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-[#4B6344] mb-2">Student ID Number</label>
                <input type="text" name="student_id" placeholder="e.g. 2024-0001" required
                       class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-white">
            </div>

            <div>
                <label class="block text-sm font-semibold text-[#4B6344] mb-2">Full Name</label>
                <input type="text" name="name" placeholder="Enter complete name" required
                       class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-white">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-[#4B6344] mb-2">Email Address</label>
                    <input type="email" name="email" placeholder="student@matcha.edu" required
                           class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-white">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#4B6344] mb-2">Course/Program</label>
                    <select name="course" required
                            class="w-full p-3 rounded-xl border border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none bg-white">
                        <option value="">Select Course</option>
                        <option value="BSIT">BS Information Technology</option>
                        <option value="BSCS">BS Computer Science</option>
                        <option value="BSCrim">BS Criminology</option>
                        <option value="BSEntrep">BS Entrepreneurship</option>
                    </select>
                </div>
            </div>

            <div class="pt-4 flex items-center justify-end space-x-4">
                <a href="{{ route('students.index') }}" class="text-[#8A9A81] hover:text-[#4B6344] font-semibold transition">Cancel</a>
                <button type="submit" 
                        class="bg-[#4B6344] text-[#F2F5E9] px-8 py-3 rounded-full font-bold shadow-lg hover:bg-[#3A4D34] transform hover:-translate-y-1 transition duration-200">
                    Register & Generate QR 🍵
                </button>
            </div>
        </form>
    </div>
</div>
@endsection