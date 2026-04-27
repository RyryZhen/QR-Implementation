<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matcha Student Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Quicksand', sans-serif; }
    </style>
</head>
<body class="bg-[#F2F5E9] text-[#2D3A27] min-h-screen flex flex-col">

    <nav class="bg-[#4B6344] text-[#F2F5E9] shadow-lg border-b-4 border-[#3A4D34]">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-2xl">🍵</span>
                <a href="{{ route('students.index') }}" class="text-xl font-bold tracking-tight">MATCHA ACADEMY</a>
            </div>
            <div class="space-x-6 font-semibold">
                <a href="{{ route('students.index') }}" class="hover:text-[#C8E0A1] transition">Students</a>
                <a href="{{ route('students.create') }}" class="bg-[#C8E0A1] text-[#2D3A27] px-4 py-2 rounded-full hover:bg-white transition shadow-sm">New Entry</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-10 flex-grow">
        @if(session('success'))
            <div class="bg-[#DDEBCC] border-l-4 border-[#4B6344] text-[#2D3A27] p-4 mb-6 rounded shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-xl p-8 border border-[#E0E7D1]">
            @yield('content')
        </div>
    </main>

    <footer class="text-center py-6 text-[#8A9A81] text-sm italic">
        © {{ date('Y') }} Matcha School Boy System • Stay Fresh, Study Hard.
    </footer>

</body>
</html>