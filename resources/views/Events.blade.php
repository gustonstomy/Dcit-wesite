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
    <title>Events</title>

</head>
<body>
   <!--======================= Down navbar====================== -->
@include('includes.Navbar')
  <!--========================= event header================================================= -->
  <div class="bg-black bg-opacity-70 text-white p-8 max-w-full text-center flex items-center justify-center h-[15vh] font-montserrat">
      <h1 class="text-3xl mb-4 font-bold">Upcoming Events</h1>
    </div>
<!-- ====================Events section============================================ -->
  <div class="flex flex-col items-center text-center py-8 mt-16 mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Event 1 -->
            <div class="bg-[#f2f8f7] p-6 rounded-lg w-80 md:w-[40rem] lg:w-[30rem] xl:w-[35rem] text-left shadow-md">
                <div class="bg-[#ff6b42] text-white py-2 px-4 rounded-md text-sm inline-block">
                    <span>18 Feb</span>
                </div>
                <h3 class="mt-4 text-xl text-black">CITSA Week Celebration 2024</h3>
                <div class="my-4 text-lg text-gray-600 flex flex-col items-start gap-2">
                    <div class="flex items-center">
                        <span class="border-2 border-gray-600 rounded-full w-6 h-6 text-center leading-5 mr-2">➜</span>
                        01:00 PM - 03:00 PM
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="../images/lo.png" alt="Location Icon" class="w-12 h-12">
                        Main Auditorium
                    </div>
                </div>
                <p class="text-gray-600 mb-4">CITSA is excited to announce CITSA Week Celebration 2024! This year's celebration will be held from February 20-24, 2024, and will feature a variety of events and activities for students to enjoy.</p>
            </div>

            <!-- Event 2 -->
            <div class="bg-[#f2f8f7] p-6 rounded-lg w-80 md:w-[40rem] lg:w-[30rem] xl:w-[35rem] text-left shadow-md">
                <div class="bg-[#ff6b42] text-white py-2 px-4 rounded-md text-sm inline-block">
                    <span>18 Feb</span>
                </div>
                <h3 class="mt-4 text-xl text-black">Women in Tech: A Panel Discussion</h3>
                <div class="my-4 text-lg text-gray-600 flex flex-col items-start gap-2">
                    <div class="flex items-center">
                        <span class="border-2 border-gray-600 rounded-full w-6 h-6 text-center leading-5 mr-2">➜</span>
                        01:00 PM - 03:00 PM
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="../images/lo.png" alt="Location Icon" class="w-12 h-12">
                        Huawei Lab
                    </div>
                </div>
                <p class="text-gray-600 mb-4">This panel discussion will feature a group of women working in the tech industry. The panelists will share their experiences and insights on a variety of topics.</p>
            </div>
        </div>
    </div>
 <!--=======================Footer====================== -->
@include('includes.Footer')
  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>