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
    <title>Document</title>
     <link rel="stylesheet" href="NonTeachingStaff.css">
</head>
<body>
 <!--======================= Down navbar====================== -->
@include('includes.Navbar')

  <!-- ============================Image Slider Section================================== -->
{{-- <div class="img-slider">
    <div class="slider active">
      <img src="../../images/NOT1.jpg" alt="Slide 1" class="slide">
    </div>
    <div class="slider">
      <img src="../../images/NOT2.jpg" alt="Slide 2" class="slide">
    </div>
    <div class="slider">
      <img src="../../images/NOT3.jpg" alt="Slide 3" class="slide">
    </div>
    <div class="slider">
      <img src="../../images/NOT4.jpg" alt="Slide 4" class="slide">
      
    </div>
    <div class="slider">
      <img src="../../images/NOT5.jpg" alt="Slide 5" class="slide">
     
    </div>
    <div class="slider">
      <img src="../../images/NOT6.jpg" alt="Slide 6" class="slide">
      
    </div>
    <div class="slider">
      <img src="../../images/NOT7.jpg" alt="Slide 7" class="slide">
     
    </div>
  </div> --}}
   <div id="slider" class="relative w-full h-[20rem] lg:h-[35rem]">
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-100">
            <img src="../../images/NOT7.jpg" alt="Slide 7" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/NOT1.jpg" alt="Slide 1" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/NOT2.jpg" alt="Slide 2" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/NOT3.jpg" alt="Slide 3" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/NOT4.jpg" alt="Slide 4" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/NOT5.jpg" alt="Slide 5" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="../../images/NOT6.jpg" alt="Slide 6" class="w-full h-full object-cover" />
        </div>
        
    </div>

   <!-- =================Non Staff Grid=========================================== -->

   <div>
        <h2 class="text-center text-2xl underline font-bold mt-8">Non-Teaching Staff</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-8 md:px-16 lg:px-32 mt-8">
            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Afua.jpg" alt="D" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mrs. Justina Afua Thompson</h3>
                <p class="text-gray-600">Chief Administrative Assistant</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Sarfo.jfif" alt="Dr" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Benedicta Sarfo Arthur</h3>
                <p class="text-gray-600">Administrative Assistant</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Kwesi.jpg" alt="Prof. Nii Narku Quaynor" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Kwesi Duku Nkrumah</h3>
                <p class="text-gray-600">Senior Clerk</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Amiss.jpg" alt="Prof. George Aggrey" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Isaac Amissah</h3>
                <p class="text-gray-600">Oversear (Cleaner)</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Ocran.jpg" alt="Dr. Mrs. Alimatu Saadia Yussiff" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Ebenezer Joojo Ocran</h3>
                <p class="text-gray-600">Oversear (Cleaner)</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Kwesi.jpg" alt="Dr. Regina Esi Turkson" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Miss Georgina Gyimah</h3>
                <p class="text-gray-600">Senior Head Cleaner</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Eshun.jpg" alt="Mr. Welborn Amoako Marful" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Miss Hannah Eshun</h3>
                <p class="text-gray-600">Messenger / Cleaner</p>
            </a>

            <a href="https://example.com/dr-charles-roland-haruna" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="../../images/Jerry.jpg" alt="Mr. Xavier Kofi Akotoye" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Mr. Jerry Tamakloe</h3>
                <p class="text-gray-600">Technician</p>
            </a>
        </div>
  <!--=======================Footer====================== -->
@include('includes.Footer')

  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>