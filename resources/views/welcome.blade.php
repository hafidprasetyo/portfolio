<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
<!--Bagian Navbar-->
  <div id="home" class="container-full bg-gradient-to-t from-gradasi2 to-gradasi1">
  <nav class="bg-transparent px-2 sm:px-4 py-2.5 ">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a class="flex items-center">
          <img src="{{ asset('image/Logo.png')}}" class="h-10 mr-3 sm:ml-3 mt-2" alt="Flowbite Logo" />
          <span class="self-center font-medium whitespace-nowrap font-navbar text-navbar text-white mt-2">Hafid</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 bg-transparent md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#home" class="block py-2 mt-2 pl-3 pr-4 font-navbar text-white md:hover:text-blue-700 bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 dark:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#about" class="block py-2 mt-2 pl-3 pr-4 font-navbar text-white rounded  hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="#service" class="block py-2 mt-2 pl-3 pr-4 font-navbar text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
            <a href="#project" class="block py-2 mt-2 pl-3 pr-4 font-navbar text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">My Project</a>
          </li>
          <li>
            <a href="#blog" class="block py-2 mt-2 pl-3 pr-4 font-navbar text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700  md:dark:hover:bg-transparent">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!--Bagian Judul-->
  <h1 class="text-center text-judul font-navbar font-bold text-judull sm:text-lg mt-6"> I'm Hafid Arief Prasetyo</h1>
  <h4 class="text-center text-judul font-navbar font-medium text-hold sm:text-lg">A Web Developer</h4>
  <img src="{{ asset('image/PID.png')}}" class="mx-auto" alt="foto hafid">
  </div>
<!--Bagian Social Media-->
  <div class="container-full bg-gradasi3">
        <ul class="flex flex-wrap justify-center p-2 md:flex-wrap-reverse dark:border-gray-700">
          <li>
            <a href="https://www.linkedin.com/in/hafidprasetyo/" class="block md:mr-56 py-2 pl-3 pr-4 font-medium text-holdd text-judul">Linkedin</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 font-medium text-holdd text-judul">Instagram</a>
          </li>
          <li>
            <a href="#" class="block md:ml-56 py-2 pl-3 pr-4 font-medium text-holdd  text-judul">Github</a>
          </li>
        </ul>
  </div>
<!--Bagian Introduce My Self-->
  <div id="about" class="container-full bg-gradient-to-t from-gradasi2 to-gradasi7 justify-between ">
        <ul class="flex flex-wrap justify-center p-4 md:flex-wrap-reverse ">
          <li class="mx-auto">
          <img class="items-center w-72 md:h-auto md:w-72 md:items-center mt-7 mb-7" src="{{ asset('image/PIDDA.png')}}" alt="Poto Hafid">
          </li>
          <li class="mt-7 mx-auto">
            <a class="block text-gradasi4 text-center font-bold text-judull font-navbar">About Me</a>
            <p class="block text-justify text-white font-bold font-navbar text-hold mb-5">My name is Hafid Arief Prasetyo. I'm a passionate web developer.<br> I am a student at the Telkom Purwokerto Institute of Technology</p>
            <p class="block text-gradasi5 text-start font-bold text-hold font-navbar">Name : Hafid Arief Prasetyo</p>
            <p class="block text-gradasi5 text-start font-bold text-hold font-navbar">Birthday : 06 January 2002</p>
            <p class="block text-gradasi5 text-start font-bold text-hold font-navbar">Phone Number : 082216342736</p>
            <p class="block text-gradasi5 text-start font-bold text-hold font-navbar">Email : hafidariefprasetyo@gmail.com</p> 
            <p class="block text-gradasi5 text-start font-bold text-hold font-navbar">Address : Bekasi, West Java, Indonesia</p>
            <button type="button" class="focus:outline-none mt-3 text-gradasi5 bg-gradasi6 font-semibold rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 hover:bg-zinc-600">Donwload CV</button>
          </li>
  </div>
<!--Bagian Keahlian-->
  <div class="container-full bg-gradasi3">
        <ul class="flex flex-wrap justify-center p-2 md:flex-wrap-reverse dark:border-gray-700">
          <li>
            <a href="https://www.linkedin.com/in/hafidprasetyo/" class="block py-2 pl-3 pr-4 font-medium text-holdd text-judul">HTML</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 font-medium text-holdd text-judul">CSS</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 font-medium text-holdd  text-judul">Java Script</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 font-medium text-holdd  text-judul">Boostrap</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 font-medium text-holdd  text-judul">Laravel</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 font-medium text-holdd  text-judul">PHP</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 font-medium text-holdd  text-judul">Tailwind CSS</a>
          </li>
        </ul>
  </div>
<!--Bagian Pelayanan-->
  <div id="service" class="container-full bg-gradient-to-t from-gradasi2 to-gradasi7">
  <ul class="flex flex-wrap justify-center p-2 md:flex-wrap-reverse dark:border-gray-700">
    <li class="mx-auto mt-8 mb-5">
        <div class="max-w-xs p-9  bg-gradasi8 rounded-lg shadow">
        <img src="{{ asset('image/HIHI.png')}}" class="mx-auto" alt="Logo Web Design">
        <h1 class="text-center text-pelayanan font-navbar font-bold text-holdd mt-5">Web Design</h1>
            <p class="text-center text-pelayanan font-navbar fon-bold text-hold mt-5">Designing a website as an initial design in building a website</p>
        </div>
    </li>
    <li class="mt-8 mx-auto">
      <div class="max-w-xs p-9 bg-gradasi8 rounded-lg shadow">
      <img src="{{ asset('image/HAHA.png')}}" class="mx-auto" alt="Logo Development">
      <h1 class="text-center text-pelayanan font-navbar font-bold text-holdd mt-5">Development</h1>
          <p class="text-center text-pelayanan font-navbar fon-bold text-hold mt-5">Implementing the website design in the form of coding</p>
      </div>
    </li>
    <li class="mx-auto mb-5">
      <h1 class="text-center text-judul font-navbar font-bold text-judull mt-16 md:mt-36">WHAT<br>DO I<br>HELP</h1>
    </li>
  </ul>
  </div>
<!--Bagian Motivasi-->
  <div class="container-full bg-gradasi3">
        <ul class="flex flex-wrap justify-center p-2 md:flex-wrap-reverse dark:border-gray-700">
          <li>
            <a class="block py-2 pl-3 pr-4 font-medium text-holdd font-navbar text-judul">Lets Start</a>
          </li>
        </ul>
  </div>
<!--Bagian Project-->
  <div id="project" class="container-full bg-gradient-to-t from-gradasi2 to-gradasi7">
  <h1 class="text-center font-bold text-judull text-judul font-navbar pt-10">My Project</h1>

  <ul class="flex flex-wrap justify-center p-2 md:flex-wrap-reverse dark:border-gray-700">
  <li>
    <a href=""><button type="button" class="focus:outline-none mt-3 text-gradasi5 bg-gradasi9 font-bold font-navbar rounded-xl px-5 py-2.5 mr-3">Website</button></a>
  </li>
  <li>
    <a class=""><button type="button" class="focus:outline-none mt-3 text-gradasi5 bg-zinc-600 font-bold font-navbar rounded-xl px-5 py-2.5 ml-3 hover:bg-gradasi9">UI/UX Design</button></a>
  </li>
  </ul>
  <ul class="flex flex-wrap justify-center p-2 dark:border-gray-700">
    <li class="mx-auto mt-8 mb-5">
        <img src="{{ asset('image/Layanansurat.png')}}" class="mx-auto" alt="Logo Web Design">
    </li>
    <li class="mt-8 mx-auto">
      <img src="{{ asset('image/Layananpertanian.png')}}" class="mx-auto" alt="Logo Development">
    </li>
  </ul>
  </div>
<!--Bagian Motivasi 2-->
  <div class="container-full bg-gradasi3">
        <ul class="flex flex-wrap justify-center p-2 md:flex-wrap-reverse dark:border-gray-700">
          <li>
            <a class="block py-2 pl-3 pr-4 font-medium text-holdd font-navbar text-judul">Lets Go</a>
          </li>
        </ul>
  </div>
<!--Bagian Blog-->
 <div id="blog" class="container-full bg-gradient-to-t from-gradasi2 to-gradasi7 ">
 <h1 class="text-center font-bold text-judull text-judul font-navbar pt-10">Our Blog</h1>

 <ul class="flex flex-wrap justify-center p-8  ">
    <div class="max-w-md p-9 mx-auto mt-3 mb-5 bg-transparent ">
    <li>
        <img src="{{ asset('image/HMIF.png')}}" class="h-56 mx-auto" alt="Logo Web Design">
        <h1 class="text-center text-pelayanan font-navbar font-bold text-hold mt-5">ITTP Informatics Engineering Student Association Farewell</h1>
            <p class=" text-pelayanan font-navbar fon-bold text-hold mt-5">The process of self-development by joining an organization on campus. Meeting, learning and arguing is one of the extraordinary journeys of life on campus.</p>
    </li>
    </div>
    <div class="max-w-md p-9 mt-3 mx-auto  bg-transparent ">
    <li>
      <img src="{{ asset('image/KKNT.png')}}" class="h-56 mx-auto" alt="Logo Development">
      <h1 class="text-center text-pelayanan font-navbar font-bold text-hold mt-5">KKNT Independent Campus</h1>
          <p class="text-pelayanan font-navbar fon-bold text-hold mt-5">Following one of the government programs, especially the ministry of education, namely the Independent Campus KKNT. Here I, as a developer, create a village letter service website using the Laravel 8 framework and the Boostrap framework</p>
    </li>
    </div>
    <div class="max-w-md p-9 mx-auto mt-3  bg-transparent">
    <li>
    <img src="{{ asset('image/Innovillagetegal.png')}}" class="h-56 mx-auto" alt="Logo Development">
      <h1 class="text-center text-pelayanan font-navbar font-bold text-holdd mt-5">Innovillage 2022 by Telkom Indonesia</h1>
          <p class="text-pelayanan font-navbar fon-bold text-hold mt-5">Happy end of the year, by qualifying to become the top 150 of innovillage 2022 by telkom Indonesia. Here I am a website developer with the title Sihanggawana, this website aims to manage the agricultural system of P4S hanggawana. Making this website using the laravel 9 framework and the tailwindcss framework.</p>
    </li>
        </div>
        
  </ul>

 <h2 class="text-white text-center font-bold text-navbar pb-7">Let's Start by Saying Hello!</h2>
 </div>
<!--Bagian Footer-->
 <div class="container-full bg-gradient-to-t from-gradasi7 to-gradasi2 ">
        <ul class="flex flex-wrap justify-center p-2">
          <li>
            <a class="block py-2   text-center font-normal text-hold text-judul">Create By Hafid | All Right Reserved</a>
          </li>
        </ul>
        <br>
  </div>
@vite('resources/js/app.js')
</body>
</html>