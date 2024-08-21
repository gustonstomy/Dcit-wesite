<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Teaching Staff</title>
   
</head>
<body>
    <!--======================= Down navbar====================== -->
@include('includes.Navbar')

 <div id="slider" class="relative w-full h-[20rem] lg:h-[35rem]">
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-100">
            <img src="../../images/T12.jpg" alt="Slide 1" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/pro.jpg" alt="Slide 2" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/T6.jpg" alt="Slide 3" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/T4.jpg" alt="Slide 4" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/T5.png" alt="Slide 5" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/Reg.jpg" alt="Slide 6" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/T7.jpg" alt="Slide 7" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/NOT6.jpg" alt="Slide 8" class="w-full h-full object-cover" />
        </div>
    </div>

  <!-- =================Staff Grid=========================================== -->
    <div>
        <h2 class="text-center text-2xl underline font-bold mt-8">Our Teaching Staff</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-8 md:px-16 lg:px-32 mt-8">
            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/hodd.jpg" alt="Dr. Abdul-Lateef Yussif" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Dr. Abdul-Lateef Yussif</h3>
                <p class="text-gray-600">Head Of Department</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/haruna.jpg" alt="Dr. Charles Roland Haruna" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Dr. Charles Roland Haruna</h3>
                <p class="text-gray-600">Departmental Registration & Examination Officer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/ppp.jpg" alt="Prof. Nii Narku Quaynor" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Prof. Nii Narku Quaynor</h3>
                <p class="text-gray-600">Associate Professor</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/george.jpg" alt="Prof. George Aggrey" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Prof. George Aggrey</h3>
                <p class="text-gray-600">Associate Professor</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/MrsAlimatu.png" alt="Dr. Mrs. Alimatu Saadia Yussiff" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Dr. Mrs. Alimatu Saadia Yussiff</h3>
                <p class="text-gray-600">Senior Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Regina.jpg" alt="Dr. Regina Esi Turkson" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Dr. Regina Esi Turkson</h3>
                <p class="text-gray-600">Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/welborn.jpg" alt="Mr. Welborn Amoako Marful" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Welborn Amoako Marful</h3>
                <p class="text-gray-600">Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Akotoye.jpg" alt="Mr. Xavier Kofi Akotoye" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Xavier Kofi Akotoye</h3>
                <p class="text-gray-600">Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Isaac.jpg" alt="Mr. Isaac Armah" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Isaac Armah</h3>
                <p class="text-gray-600">Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Elliot.jpg" alt="Mr. Elliot Kojo Attipoe" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Elliot Kojo Attipoe</h3>
                <p class="text-gray-600">Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/paul-arhin.jpg" alt="Mr. Paul Kobina Arhin Jnr." class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Paul Kobina Arhin Jnr.</h3>
                <p class="text-gray-600">Assistant Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Mr_Frank.png" alt="Mr. Franklin Kome Amoo" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Franklin Kome Amoo</h3>
                <p class="text-gray-600">Assistant Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Twum.jpg" alt="Mr. Francis Oppong Twum" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Francis Oppong Twum</h3>
                <p class="text-gray-600">Assistant Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/linda.png" alt="Miss Linda Otoo" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Miss Linda Otoo</h3>
                <p class="text-gray-600">Assistant Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/EDT.jpg" alt="Dr. Emmanuel Dortey Tetteh" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Dr. Emmanuel Dortey Tetteh</h3>
                <p class="text-gray-600">Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/mr-obuobi.jpg" alt="Dr. Daniel Obuobi" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Dr. Daniel Obuobi</h3>
                <p class="text-gray-600">Lecturer</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Akua.jpg" alt="Mrs. Akua Gyanba Morgan Acquah" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mrs. Akua Gyanba Morgan Acquah</h3>
                <p class="text-gray-600">Principal Research Assistant (Teaching Associate)</p>
            </a>
        </div>
    </div>
 
 <!--=======================Footer====================== -->
@include('includes.Footer')

  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>