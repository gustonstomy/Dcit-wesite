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
    <title>About us</title>
    
</head>
<body>
 <!--=======================Navbar====================== -->
@include('includes.Navbar')

<!-- ===========================Header Section======================================== -->
<div class="bg-gray-800 text-white py-16 text-center">
  <h1 class="text-4xl font-bold">About Us</h1>
</div>





    <!-- ===============================Mission and Vission========================== -->
    <div class="flex flex-col lg:flex-row h-[120vh] sm:h-[90vh] md:h-[72vh] lg:h-[60vh] xl:h-[50vh]">
      <div class="bg-[#0d2980] bg-opacity-85 flex flex-col justify-center w-full lg:w-1/2 p-5 md:px-10 lg:h-[20em] ">
        <h1 class="text-white text-[1.5em] md:text-3xl mb-4  justify-center text-center">Our Vision</h1>
        <p class="text-[#ffffff] leading-[2rem] text-[1.2em] md:text-xl mb-6">
          To produce the best trained Computer Science graduates and IT professionals through a well-equipped department with the finest researchers, qualified personnel, and state-of-the-art facilities.
        </p>
      </div>
      <div class="bg-[#ff6b42] bg-opacity-85  flex flex-col justify-center w-full lg:w-1/2 p-5 md:px-10 lg:h-[20em] ">
        <h1 class="text-white text-[1.5em] md:text-3xl mb-4  justify-center text-center">Our Mission</h1>
        <p class="text-[#ffffff] leading-[2rem] text-[1.2em] md:text-xl mb-6">
          Providing quality Computer Science and Information Technology education using the finest researchers, qualified personnel, and state-of-the-art facilities.
        </p>
      </div>
    </div>

    <!-- ==============================History========================================= -->
     <div class="mt-12 px-6">

      <h1 class="text-3xl font-bold mb-6 text-center">History</h1>

      <p class="text-justify px-4">
        For more than 25 years, computing courses have been provided for students from various departments by the computer centre.
        With the recent developments and trends in the information technology (IT), the University of Cape Coast established an academic department known as the Department of Computer Science and Information Technology.
      </p>
      <p class="text-justify px-4">
        The primary focus of this department is teaching and research in computing. Furthermore, the need for trained computer scientists and information technologists is one of the challenges that face the rapidly growing Ghanaian economy.
      </p>
      <p class="text-justify px-4">
        The worldwide shortage of qualified human resources in IT has been the main obstacle to the deployment, exploitation and development of ICT to accelerate socio-economic development. In Ghana there is an urgent need to meet this shortfall in computer science with graduates having the requisite skills.
      </p>
      <p class="text-justify px-4">
        This programme is geared toward this major area of manpower requirement by preparing qualified SSS graduate for a career in IT.
      </p>
      <p class="text-justify px-4">
        The programmes that the DCSIT runs are geared towards this major area of manpower requirement. In this regard, the department admits qualified SSS graduates and train them for a career in computing. The Department offers three programs: BSc Computer Science, BSc Information Technology and a PhD in Computer Science and Application. These programs provide a comprehensive education in both theoretical and practical aspects of Computer Science (CS) and Information Technology (IT).
      </p>
      <p class="text-justify px-4">
        There are a variety of exciting courses, including software engineering, artificial intelligence, internet systems and technology, computer security, algorithms, data structures, programming languages, operating systems hardware development, databases, networks design, business management and practices, as well cryptography, Data mining, Optimization as some of our doctoral studies in computing-related fields.
      </p>
      <p class="text-justify px-4">
        The Computer Science and Information Technology field is very broad and dynamic. It encompasses new technological developments and its applications. Our academic program in Computer Science and Information Technology aims to provide our students a firm foundation in the field of Computer Science and its applications and prepare them to become an effective computer science professional. 
      </p>
      <p class="text-justify px-4">
        The Department is dedicated to quality education and research, our graduates are highly recruited within educational and research institutions, government agencies, and private industry. You can also find detailed information about all of our degree options, courses, faculty and research throughout this website. 
      </p>
      <p class="text-justify px-4">
        To prospective scholars and students, we welcome you to be part of our challenging and exciting environment in your quest to seek an opportunity to develop yourself into competent computer or information technology scientist. I hope you consider joining us. I would encourage you to spend time to navigate our webpage. 
      </p>
      <p class="text-justify px-4">
            To all our dear students, we in the Computer Science and Information Technology Department look forward in making your UCC Education a success.
      </p>

      
      <h1 class="text-3xl font-bold mb-6 mt-6 text-center">Core Values</h1>
      <p class="text-justify px-4">
         Diversity – The Department has as one of its values the respect for all persons regardless his or her race, religion, tribe or creed.  We believe that diversity is strength and not a weakness.  Therefore, we ensure there is equal opportunity for all.  
      </p>
      <p class="text-justify px-4">
        Academic Excellence – The University of Cape of Cape Coast stands for academic excellence and the department shares in that value.   Ergonomic Environment – The department also ensures that there is a safe and enabling working environment for staff, students etc.  Cordial student – departmental relationship.  The department also cherishes cordial relationship with our students for they are the reason we are existing
      </p>
    </div>
    <!--=======================Footer====================== -->
@include('includes.Footer')

  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>