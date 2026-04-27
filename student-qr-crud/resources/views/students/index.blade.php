@extends('layouts.master')

@section('content')
<div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
    <div>
        <h1 class="text-3xl font-bold text-[#4B6344]">Academy Registry</h1>
        <p class="text-[#8A9A81] italic">Viewing all enrolled students and their unique identifiers.</p>
    </div>
    <a href="{{ route('students.create') }}" class="bg-[#4B6344] text-[#F2F5E9] px-6 py-3 rounded-full font-bold shadow-lg hover:bg-[#3A4D34] transition">
        + Enroll New Student
    </a>
</div>

<form action="{{ route('students.index') }}" method="GET" class="mb-10">
    <div class="relative max-w-xl mx-auto">
        <input type="text" name="search" 
               class="w-full pl-12 pr-4 py-4 rounded-2xl bg-white border-2 border-[#DDEBCC] focus:ring-2 focus:ring-[#4B6344] focus:outline-none shadow-sm" 
               placeholder="Search by name or student number..." 
               value="{{ request('search') }}">
        <div class="absolute left-4 top-4.5 text-[#8A9A81]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>
</form>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @forelse($students as $student)
    <div class="bg-white rounded-3xl border-2 border-[#DDEBCC] overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
        <div class="h-3 bg-[#4B6344]"></div>
        
        <div class="p-6 flex flex-col items-center text-center">
            <div class="p-3 bg-[#F2F5E9] rounded-2xl border border-[#DDEBCC] mb-4 shadow-inner">
                {!! $student->qr !!}
            </div>

            <h3 class="text-xl font-bold text-[#2D3A27]">{{ $student->name }}</h3>
            <p class="text-sm font-mono text-[#8A9A81] mb-1">{{ $student->student_id }}</p>
            <span class="px-3 py-1 bg-[#DDEBCC] text-[#4B6344] text-xs font-bold rounded-full uppercase tracking-wider">
                {{ $student->course }}
            </span>

            <hr class="w-full my-4 border-[#F2F5E9]">

            <div class="w-full space-y-2">
    <a href="{{ route('students.show', $student->id) }}" 
       class="block w-full py-2 bg-[#4B6344] text-white rounded-xl font-semibold hover:bg-[#3A4D34] transition text-sm text-center">
        View Profile
    </a>

    <div class="flex gap-2">
        <a href="{{ route('students.edit', $student->id) }}" 
           class="flex-1 py-2 bg-[#DDEBCC] text-[#4B6344] rounded-xl font-semibold hover:bg-[#C8E0A1] transition text-xs text-center">
            Edit
        </a>

        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure you want to remove this student?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full py-2 bg-red-50 text-red-600 border border-red-100 rounded-xl font-semibold hover:bg-red-100 transition text-xs">
                Delete
            </button>
        </form>
    </div>
</div>
        </div>
    </div>
    @empty
    <div class="col-span-full text-center py-20 bg-white rounded-3xl border-2 border-dashed border-[#DDEBCC]">
        <p class="text-[#8A9A81] italic">No students found matching your search.</p>
    </div>
    @endforelse
</div>
@endsection