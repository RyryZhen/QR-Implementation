<!DOCTYPE html>
<html>
<head>
    <title>Student Evaluation System</title>
</head>
<body>

<h2>Student Evaluation System</h2>

@if($name && $prelim && $midterm && $final)

    @php
        $average = ($prelim + $midterm + $final) / 3;
    @endphp

    <h3>Student Name: {{ $name }}</h3>
    <p>Prelim: {{ $prelim }}</p>
    <p>Midterm: {{ $midterm }}</p>
    <p>Final: {{ $final }}</p>

    <hr>

    <h3>Results:</h3>

    <p>Average: {{ number_format($average,2) }}</p>

    {{-- Letter Grade --}}
    <p>
    Letter Grade:
    @if($average >= 90)
        A
    @elseif($average >= 80)
        B
    @elseif($average >= 70)
        C
    @elseif($average >= 60)
        D
    @else
        F
    @endif
    </p>

    {{-- Remarks --}}
    <p>
    Remarks:
    @if($average >= 75)
        Passed
    @else
        Failed
    @endif
    </p>

    {{-- Award --}}
    <p>
    Award:
    @if($average >= 98)
        With Highest Honors
    @elseif($average >= 95)
        With High Honors 
    @elseif($average >= 90)
        With Honors
    @else
        No Award
    @endif
    </p>

@else

    <h3>No student data provided.</h3>

@endif

</body>
</html>
