<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@1,468&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="Home.css" />
  <title>Home</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-0">
    <div class="container">
      <span class="navbar-brand animate__animated animate__bounceIn" href="#"><img alt="Life-Line" class="logo" src="logo2.png" /></span>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto">
          <ul class="navbar-nav animate__animated animate__bounceInRight">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="Donationsignin.php">Donation</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="hospitaluser.php">Hospitals</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="#about">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="https://www.cowin.gov.in/">Let's Vaccinated</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <header class="header">
    <div class="container-head">
      <div class="heading_head">
        <h1>
          <em class="fas fa-stethoscope head-icon"></em> A HEALTHY OUTSIDE
          STARTS FROM THE INSIDE
        </h1>
        <p>
          <em>"Take care of your body.<br />It's the only place you have to
            live."</em>
        </p>
      </div>
    </div>
  </header>
  <section id="services" class="services text-gray-600 body-font">
    <div class="container mx-auto">
      <div class="heading">
        <h1>Services</h1>
        <div class="hborder"></div>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-200 p-4 rounded-lg">
            <img class="h-60 rounded w-full object-cover object-center mb-6" src="blood.jpg" alt="Blood" />
            <h3 class="
                  tracking-widest
                  text-indigo-500 text-xs
                  font-medium
                  title-font
                ">
              In M.P.
            </h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
              Blood Bank
            </h2>
            <p>
              With our huge network of various hospitals and blood banks in
              the city we aim to allow people to donate blood and arrange
              blood for the needy ones 24/7.
            </p>

            <div class="btn">
              <button class="more-btn" type="button">
                <a href="bloodsignuser.php" target="_blank">More</a>
              </button>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-200 p-4 rounded-lg">
            <img class="h-60 rounded w-full object-cover object-center mb-6" src="oxygen.jpg" alt="oxygen" />
            <h3 class="
                  tracking-widest
                  text-indigo-500 text-xs
                  font-medium
                  title-font
                ">
              M.P. & Metro cities
            </h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
              Oxygen Service
            </h2>
            <p>
              MediGwalior has connections with various oxygen suppliers in the
              city and therefore we provide phone numbers of such retailers
              who provide oxygen at the lowest possible cost.
            </p>
            <div class="btn">
              <button class="more-btn" type="button">
                <a href="ouser.php" target="_blank">More</a>
              </button>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-200 p-4 rounded-lg">
            <img class="h-60 rounded w-full object-cover object-center mb-6" src="medicine.jpg" alt="medicine" />
            <h3 class="
                  tracking-widest
                  text-indigo-500 text-xs
                  font-medium
                  title-font
                ">
              All over India
            </h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
              Medicines
            </h2>
            <p class="mb-4">
              With the help of our database we provide phone numbers of
              various medicine sellers who can provide medicines at cheap
              price.
            </p>
            <div class="btn">
              <button class="more-btn" type="button">
                <a href="muser.php" target="_blank">More</a>
              </button>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-200 p-4 rounded-lg">
            <img class="h-60 rounded w-full object-cover object-center mb-6" src="am.jpg" alt="Ambulance" />
            <h3 class="
                  tracking-widest
                  text-indigo-500 text-xs
                  font-medium
                  title-font
                ">
              M.P,Bhopal,Indore
            </h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
              Ambulance
            </h2>
            <p class="mb-6">
              The purpose of this service is to provide facilities/contact
              number of active ambulance providers available in city.
            </p>
            <div class="btn">
              <button class="more-btn" type="button">
                <a href="auser.php" target="_blank">More</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="
        animate__animated
        wow
        animate__rotateInDownLeft
        text-gray-400
        body-font
      ">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex w-full mb-20 flex-wrap">
        <h1 class="
              sm:text-3xl
              text-2xl
              font-medium
              title-font
              text-black
              lg:w-1/3 lg:mb-0
              mb-4
            ">
          At Last everything will be fine.
        </h1>
        <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">
          <meanspace style="font-size: 15px">
            "Technology now allows people to connect anytime, anywhere, to
            anyone in the world, from almost any device. This is dramatically
            changing the way people work, facilitating 24/7 collaboration with
            colleagues who are dispersed across time zones, countries, and
            continents.”</meanspace>
        </p>
      </div>
      <div class="flex flex-wrap md:-m-2 -m-1">
        <div class="flex flex-wrap w-1/2">
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="
                  animate__animated
                  wow
                  animate__bounceInLeft
                  w-full
                  object-cover
                  h-full
                  object-center
                  block
                " src="https://www.redcross.org/content/dam/redcross/about-us/news/2020/coronavirus-safety-tw.jpg" />
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="
                  animate__animated
                  wow
                  animate__bounceInLeft
                  w-full
                  object-cover
                  h-full
                  object-center
                  block
                " src="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2020/09/05/Pictures/_c5bc9666-ef31-11ea-970b-cd9b3c0381e8.jpg" />
          </div>
          <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="
                  animate__animated
                  wow
                  animate__bounceInUp
                  w-full
                  h-full
                  object-cover object-center
                  block
                " src="https://static.toiimg.com/thumb/imgsize-98944,msid-82469818,width-600,resizemode-4/82469818.jpg" />
          </div>
        </div>
        <div class="flex flex-wrap w-1/2">
          <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="
                  animate__animated
                  wow
                  animate__bounceInDown
                  w-full
                  h-full
                  object-cover object-center
                  block
                " src="https://secureservercdn.net/160.153.137.99/96q.02f.myftpupload.com/wp-content/uploads/2020/05/63549-601x361.jpg" />
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="
                  animate__animated
                  wow
                  animate__bounceInRight
                  w-full
                  object-cover
                  h-full
                  object-center
                  block
                " src="https://media.istockphoto.com/photos/closeup-of-bottles-of-covid19-vaccine-picture-id1288583851?b=1&k=6&m=1288583851&s=170667a&w=0&h=y-dm0-sLnQ89Jw3QHfOXfnYJ6hPsjRctXPAY-edf4nY=" />
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="
                  animate__animated
                  wow
                  animate__bounceInRight
                  w-full
                  object-cover
                  h-full
                  object-center
                  block
                " src="https://www.oneindia.com/ph-big/2021/03/an-elderly-woman-shows-thumbs-up-after-she-got-vaccinated-with-covid-19-vaccine-a-vaccination-ce_161475557160.jpg" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="text-3xl font-medium title-font text-white mb-12 text-center">
        Testimonials
      </h1>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-800 bg-opacity-40 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-500 mb-4" viewbox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6">
              Wonderful experience with
              <strong style="font-size: 15px">MediGwalior </strong>; recently
              i found this website very helpful;when i need medical help this
              website help me to found a good hospital.It is their dedication
              and consistency that they don’t let down their customers and
              patient. They try to provide the best facility to their customer
              as early as possible. They keep their website updated from time
              to time so that all new facilities should be available to
              everyone.
            </p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="viveks.jpg" class="
                    w-12
                    h-12
                    rounded-full
                    flex-shrink-0
                    object-cover object-center
                  " />
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-white">Udit Sharma</span>
                <span class="text-gray-500 text-sm">User</span>
              </span>
            </a>
          </div>
        </div>
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-800 bg-opacity-40 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-500 mb-4" viewbox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6">
              <strong>MEDGWALIOR</strong> is the most helpful and a perfect
              place where one can look for the contact numbers of blood banks,
              available hospitals and ambulances. Even in any serious
              situation MEDGWALIOR will provide you all the necessary details
              and will help you in the best way possible. It is their
              dedication and consistency that they don’t let down their
              customers and patient. They try to provide the best facility to
              their customer as early as possible. They keep their website
              updated from time to time so that all new facilities should be
              available to everyone.
            </p>
            <a class="inline-flex items-center">
              <img alt="testimonial" src="visha.jpg" class="
                    w-12
                    h-12
                    rounded-full
                    flex-shrink-0
                    object-cover object-center
                  " />
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-medium text-white">Tanya Gupta</span>
                <span class="text-gray-500 text-sm">User</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="about-section">
    <div class="heading">
      <h1>About Us</h1>
      <div class="hborder"></div>
    </div>
    <div class="about_us">
      <p class="pfirst animate__animated wow animate__bounceInRight">
        <q>
          <strong style="font-size: 19px">
            <abbr style="text-decoration: none; cursor: pointer" title="MediGwalior.com">
              MediGwalior</abbr></strong>
          Founded by the students of Institute of Technology and Management
          Gwalior, We believe in delivering medical services that make all
          areas of healthcare available from any location with simplified
          access from your own mobile phone/tablet/PC or laptops. MediGwalior
          leverages Technology, and Knowledge for delivering comprehensive
          patient-centric services – anytime, anywhere.<br />
          <em>
            We provide services such as: Blood banks Medicine facilities
            Ambulance 24/7 Oxygen Supply Hospitals Availabilty</em></q>
      </p>
      <p class="psecond animate__animated wow animate__bounceInLeft">
        <q>
          <strong style="font-size: 19px"> MediGwalior.com</strong> houses a
          unique portfolio of services that keep healthcare professionals
          abreast of the latest and most significant developments within their
          clinical, surgical or management area. Covering all aspects of the
          hospital environment, MediGwl.com provides both clinical and senior
          administrative staff with instant access to a comprehensive
          reference source introducing technologies, services and procedures
          our audience can employ to improve the management of their
          facilities.</q>
      </p>
    </div>
  </section>

  <section id="team" class="animate__animated wow animate__flip text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 style="
              font-weight: bold;
              font-size: 26px;
              text-transform: uppercase;
            ">
          meet the doers and builders
        </h1>
        <div style="width: 450px" class="hborder"></div>
        <p class="mx-auto leading-relaxed text-base">
          <em style="font-size: 14px">
            <q>This website is a group project for State level hackathon 1.0
              organized by</q>:-
            <br />
            <strong>Rajiv Gandhi proudyogiki Vishwavidyalaya,Bhopal</strong><br />
            "This event will provide a platform to a young students by enable
            them to identify real life problems ."
          </em>
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="
              animate__animated
              wow
              animate__heartBeat animate__delay-3s animate__slow
              p-4
              lg:w-1/4
              md:w-1/2
            ">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="
                  flex-shrink-0
                  rounded-full
                  w-56
                  h-56
                  object-cover object-center
                  mb-4
                " src="vivek.jpg" />
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">
                Vivek Sharma
              </h2>
              <h3 class="text-gray-500 mb-3">
                Web page Engineer & Project Manager
              </h3>
              <p class="mb-4">
                Most Talented and Hardworking person with positive attitude and kind nature.
              </p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>

          </div>
        </div>
        <div class="
              animate__animated
              wow
              animate__heartBeat animate__delay-4s animate__slow
              p-4
              lg:w-1/4
              md:w-1/2
            ">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="
                  flex-shrink-0
                  rounded-full
                  w-56
                  h-56
                  object-cover object-center
                  mb-4

                " src="manvi.jpeg" />
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">
                Manvi Chauhan
              </h2>
              <h3 class="text-gray-500 mb-3">Database Administrator</h3>
              <p class="mb-4">
                Highly intelligent and talented person with kind nature and a beautiful smile.
              </p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>

          </div>
        </div>
        <div class="
              animate__animated
              wow
              animate__heartBeat animate__delay-5s animate__slow
              p-4
              lg:w-1/4
              md:w-1/2
            ">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="
                  flex-shrink-0
                  rounded-full
                  w-56
                  h-56
                  object-cover object-center
                  mb-4

                " src="sikhar.jpeg" />
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">
                Shikhar Singhal
              </h2>
              <h3 class="text-gray-500 mb-3">Frontend Developer</h3>
              <p class="mb-4">
                Good person with Cold mind and simple living habit.
              </p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>

          </div>
        </div>
        <div class="
              animate__animated
              wow
              animate__heartBeat animate__delay-3s animate__slow
              p-4
              lg:w-1/4
              md:w-1/2
            ">
          <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="
                  flex-shrink-0
                  rounded-full
                  w-56
                  h-56
                  object-cover object-center
                  mb-4

                " src="visha.jpg" />
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">
                Vishakha Gandhi
              </h2>
              <h3 class="text-gray-500 mb-3">Graphics designer</h3>
              <p class="mb-4">
                Highly Qualified person with Humble nature and Great senseofhumour.
              </p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="
        animate__animated
        wow
        animate__backInDown
        text-gray-400
        bg-gray-900
        body-font
        relative
      ">
    <div class="absolute inset-0 bg-gray-900">
      <iframe title="map" width="100%" height="100%" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Madhya pradesh&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.16)"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="
            lg:w-1/3
            md:w-1/2
            bg-gray-900
            shadow-md
            rounded-lg
            p-8
            flex flex-col
            md:ml-auto
            w-full
            mt-10
            md:mt-0
            relative
            z-10
          ">
        <h2 class="text-white text-lg mb-1 font-medium title-font">
          Contact Us
        </h2>
        <p class="leading-relaxed mb-5">
          You can feel free to contact us for any kind of help....
        </p>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
          <input type="email" id="email" name="email" class="
                w-full
                bg-gray-800
                rounded
                border border-gray-700
                focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900
                text-base
                outline-none
                text-gray-100
                py-1
                px-3
                leading-8
                transition-colors
                duration-200
                ease-in-out
              " />
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
          <textarea id="message" name="message" class="
                w-full
                bg-gray-800
                rounded
                border border-gray-700
                focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900
                h-32
                text-base
                outline-none
                text-gray-100
                py-1
                px-3
                resize-none
                leading-6
                transition-colors
                duration-200
                ease-in-out
              " spellcheck="false" data-ms-editor="true"></textarea>
        </div>
        <button class="
              text-white
              bg-indigo-500
              border-0
              py-2
              px-6
              focus:outline-none
              hover:bg-indigo-600
              rounded
              text-lg
            ">
          Submit
        </button>
        <p class="text-xs text-gray-400 text-opacity-90 mt-3">
          S.l.v Technology solution Pvt. Ltd. Gwalior, Madhya pradesh...
        </p>
      </div>
    </div>
  </section>
  <button onclick="topFunction()" class="
        scrollToTop
        animate__animated animate__heartBeat animate__infinite animate__slower
      " id="btnScrollToTop">
    <em data-aos="fade-up" class="fas fa-arrow-up"></em>
  </button>
  <footer class="text-gray-400 bg-gray-900 body-font">
    <div class="
          container
          px-5
          py-8
          mx-auto
          flex
          items-center
          sm:flex-row
          flex-col
        ">
      <p class="
            text-sm text-gray-400
            sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0
            mt-4
          ">
        COPYRIGHT @2020, All rights are reserved.—
        <a href="https://github.com/Slv1-webpage" class="text-gray-500 ml-1 text-xl" target="_blank" rel="noopener noreferrer">@s.l.v Group</a>
      </p>
      <span class="
            inline-flex
            sm:ml-auto sm:mt-0
            mt-4
            justify-center
            sm:justify-start
          ">
        <a href="https://www.facebook.com/viveksupmanyu" class="text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="https://twitter.com/viveksh76483611" class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a href="https://www.instagram.com/the_r.r_upmanyu_ji.s_son/" class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewbox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/in/viveksharma5u/" class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewbox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  <script>
    new WOW().init();

    // window.addEventListener("scroll", function () {
    //   let header = document.querySelector("navbar");
    //   if (window.pageXOffset > 0) {
    //     header.classList.add("sticky");
    //   } else {
    //     header.classList.remove("sticky");
    //   }

    // });

    var mybutton = document.querySelector(".scrollToTop");

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <script src="bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector("nav");

    window.addEventListener("scroll", function() {
      if (window.pageYOffset > 100) {
        nav.classList.add("bg-dark-1", "shadow");
        mybutton.style.display = "block";
      } else {
        nav.classList.remove("bg-dark-1", "shadow");
        mybutton.style.display = "none";
      }
    });
  </script>
</body>

</html>