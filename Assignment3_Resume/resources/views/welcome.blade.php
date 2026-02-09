@php
  
    $name = "Ryan Fernandez";
    $jobTitle = "Web and Mobile Technologist";
    $phone = "09318464399";
    $email = "22ur0979gmail.com";
    $linkedin = "linkedin.com/in/ryan-fernandez";
    $github = "github.com/fernandezryan";
    $address = "2430 Manaoag, Pangasinan";
    $dob = "2003-08-14"; 
    $gender = "Male";
    $nationality = "Filipino";

    
    $age = \Carbon\Carbon::parse($dob)->age;
    $ageTranslation = '';

    
    if ($age == 21) {
        $ageTranslation = "Dalawampu't isa (Tagalog)";
    } elseif ($age >= 22 && $age <= 23) {
        $ageTranslation = "Duapulo ket dua/tallo (Ilocano)";
    } elseif ($age > 24) {
        $ageTranslation = "Balikas na taon (Pangasinan)"; 
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }} - Resume</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; }
        .section-title { color: #2b5a91; border-bottom: 2px solid #333; margin-bottom: 1rem; }
    </style>
</head>
<body class="bg-gray-100 py-10">

    <div class="max-w-4xl mx-auto bg-white shadow-lg overflow-hidden">
        
        <div class="flex bg-[#2b5a91] text-white">
            <div class="w-1/3 bg-gray-300">
                <img src="{{ asset('assets/profile_pic.jpeg') }}" alt="{{ $name }}" class="w-full h-full object-cover">
            </div>
            
            <div class="w-2/3 p-8">
                <h1 class="text-5xl font-light mb-1">{{ $name }}</h1>
                <p class="text-xl mb-6">{{ $jobTitle }}</p>
                
                <div class="grid grid-cols-2 gap-y-2 text-sm">
                    <div><strong>Phone:</strong> {{ $phone }}</div>
                    <div><strong>Address:</strong> {{ $address }}</div>
                    <div><strong>Email:</strong> {{ $email }}</div>
                    <div><strong>Date of birth:</strong> {{ \Carbon\Carbon::parse($dob)->format('d F Y') }}</div>
                    <div><strong>LinkedIn:</strong> {{ $linkedin }}</div>
                    
                    <div>
                        <strong>Age:</strong> {{ $age }} 
                        <span class="ml-1 text-xs italic text-blue-200">{{ $ageTranslation }}</span>
                    </div>
                    
                    <div><strong>GitHub:</strong> {{ $github }}</div>
                    <div><strong>Nationality:</strong> {{ $nationality }}</div>
                </div>
            </div>
        </div>

        <div class="p-8 pb-4">
            <p class="text-gray-700 leading-relaxed">
                Currently 3rd-year Bachelor of Science in Information Technology Major in Web and Mobile Technology and is passionate about developing school-level systems and applications to enhance proficiency in using development platforms and engagement in emerging technologies.
        </div>

        <div class="px-8 py-4">
            <h2 class="text-2xl font-bold section-title">Education</h2>
            <div class="flex mb-6">
                <div class="w-1/4 font-bold">2021–2022</div>
                <div class="w-3/4">
                    <p class="font-bold">High School Diploma</p>
                    <p class="italic text-gray-600">Manaoag National High School</p>
                    <p>With Honors</p>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/4 font-bold">2022–2027</div>
                <div class="w-3/4">
                    <p class="font-bold">Bachelor of Science in Information Technology</p>
                    <p class="italic text-gray-600">Pangasinan State University, Urdaneta Campus, Urdaneta, Philippines</p>
                    <p>Major in Web and Mobile Technology</p>
                </div>
            </div>
        </div>

        <div class="px-8 py-4">
            <h2 class="text-2xl font-bold section-title">Experience</h2>
            <div class="flex">
                <div class="w-1/4 font-bold">2024 - 2025</div>
                <div class="w-3/4">
                    <p class="font-bold uppercase">BIKE BUDDY DEVELOPER (A CYCLIST COMPANION APP)</p>
                    <p class="italic text-gray-600 mb-2">Pangasinan State University, Urdaneta Campus</p>
                    <ul class="list-disc ml-5 space-y-2 text-sm text-gray-800">
               Developed an application using Flutter framework and Dart Programming that accompany cyclist in daily
rides providing quick emergency fixes instruction. 
                </ul>
                </div>
            </div>
        </div>

        <div class="px-8 py-8">
            <h2 class="text-2xl font-bold section-title">Skills</h2>
            <div class="flex">
                <div class="w-1/4"></div>
                <div class="w-3/4">
                    <ul class="list-disc ml-5 space-y-1 text-gray-800">
                        <li>Visual Studio Code</li>
                        <li>Figma</li>
                        <li>Flutter/Dart</li>
                        <li>Capcut</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</body>
</html>