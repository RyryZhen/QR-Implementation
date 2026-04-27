@extends('layouts.master')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-3xl shadow-lg text-center border-t-8 border-[#4B6344]">
    <h2 class="text-2xl font-bold mb-2">{{ $student->name }}</h2>
    <p class="text-gray-500 mb-6">{{ $student->course }} | {{ $student->student_id }}</p>
    
    <div class="bg-[#F2F5E9] p-4 rounded-2xl inline-block mb-6 shadow-inner">
        {!! $qr !!}
    </div>
    
    <p class="text-xs text-[#8A9A81] mb-6">Scan the code above to retrieve complete student profile data.</p>
    
    <div class="flex justify-between">
        <a href="{{ route('students.index') }}" class="text-[#4B6344]">← Back</a>
        <button onclick="window.print()" class="font-bold text-[#4B6344]">Print ID</button>
    </div>
</div>
@endsection