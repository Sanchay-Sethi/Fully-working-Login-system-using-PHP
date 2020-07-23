<?php
$logo=false;
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/two-2.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Welcome - <?php echo $_SESSION['username'];?></title>

  <style>
    #confirm {
      display: none;
      background-color: #514E61;
      color: #FFFFFF;
      border: 1px solid #aaa;
      position: fixed;
      width: 250px;
      left: 50%;
      margin-left: -100px;
      padding: 6px 8px 8px;
      box-sizing: border-box;
      text-align: center;
      border-bottom-left-radius: 40px;
      border-bottom: 8px solid #aaa;

    }

    #confirm button {
      background-color: #6e35af;
      display: inline-block;
      border-radius: 5px;
      border: 1px solid #aaa;
      padding: 5px;
      text-align: center;
      width: 80px;
      cursor: pointer;
    }

    #confirm .message {
      text-align: left;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top"
    style="border-bottom: 10px solid rgb(155, 98, 216); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; z-index:99999999999999999999">
    <a class="navbar-brand" href="/loginsys/welcome.php">SS Artistic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/loginsys/welcome.php">Home <span class="sr-only">(current)</span></a>


        </li>


        <li class="nav-item">
          <a class="nav-link" href="#" onclick="functionAlert();">Login</a>
          <div id="confirm">
            <div class="message">You have already Logged in , Chillax</div>
            <button class="yes">OK</button>
          </div>



        </li>




        <li class="nav-item">
          <a class="nav-link" href="#" onclick="functionAlert()">Signup</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/loginsys/logout.php">Logout</a>
        </li>

        <div class="container ml-5 col-md-10">
          <marquee behavior="alternate" direction="left" onmouseover="stop()" onmouseout="start()">
            <li class="nav-item ml-5">
              <a class="nav-link ml-5" href="#">Welcome <b><i><?php echo $_SESSION['username'];?></i></b> To Our
                beautiful Website</a>
            </li>
          </marquee>
        </div>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>



  <!-- about -->

  <section class="text-gray-700 body-font about-e">
    <video autoplay muted loop id="myVideo">
      <source src="img/bgvd.mp4" type="video/mp4">
    </video>

    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"
          style="color: aliceblue; opacity: 0.8;">Want to Make your website.
          <br class="hidden lg:inline-block">Hit this website..
        </h1>
        <p class="mb-8 leading-relaxed" style="color: azure; text-shadow: 1.2px 1.2px purple; font-size: 18px;">The best
          website template and best web developer you will find here...Its a multipurpose website. You can add your
          blogs too and can hire the graphic designer and photo editor as well...So do come and subscribe..</p>
        <div class="flex justify-center">
          <button
            class="inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">Join</button>
          <button
            class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Explore</button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 logo-e">
        <img class="object-cover object-center rounded" alt="hero" src="img/two-2.png">
      </div>
    </div>

  </section>

  </div>





  <section class="text-gray-700 body-font my-ed">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
        <img alt="" class="object-cover object-center h-full w-full img-anim" src="">
      </div>
      <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
        <div class="flex flex-col mb-10 lg:items-start items-center">
          <div
            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-5">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Web developer</h2>
            <p class="leading-relaxed text-base" style="color: black;">Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Non molestias, corrupti explicabo quibusdam dolores sed!</p>
            <a class="mt-3 text-purple-500 inline-flex items-center" style="color: blueviolet;">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex flex-col mb-10 lg:items-start items-center">
          <div
            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-5">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-6 h-6" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Photo Editor</h2>
            <p class="leading-relaxed text-base" style="color: black;">Lorem ipsum dolor sit, amet consectetur
              adipisicing elit. Accusamus obcaecati adipisci, ea nostrum possimus ducimus!</p>
            <a class="mt-3 text-purple-500 inline-flex items-center" style="color: blueviolet;">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex flex-col mb-10 lg:items-start items-center">
          <div
            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-5">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Graphic Designing</h2>
            <p class="leading-relaxed text-base" style="color: black;">Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Sint animi reiciendis quae tenetur commodi quisquam.</p>
            <a class="mt-3 text-purple-500 inline-flex items-center" style="color: blueviolet;">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
          <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div
          class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
          1</div>
        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
          <div
            class="flex-shrink-0 w-24 h-24 bg-purple-100 text-purple-500 rounded-full inline-flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-12 h-12" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl" style="color: whitesmoke;">Front-End</h2>
            <p class="leading-relaxed" style="color: whitesmoke;">Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Nemo veritatis earum similique autem.</p>
          </div>
        </div>
      </div>
      <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
          <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div
          class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
          2</div>
        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
          <div
            class="flex-shrink-0 w-24 h-24 bg-purple-100 text-purple-500 rounded-full inline-flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-12 h-12" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl" style="color: whitesmoke;">Back End</h2>
            <p class="leading-relaxed" style="color: whitesmoke;">Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Nobis et debitis perspiciatis officia voluptatum.</p>
          </div>
        </div>
      </div>
      <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
          <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div
          class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
          3</div>
        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
          <div
            class="flex-shrink-0 w-24 h-24 bg-purple-100 text-purple-500 rounded-full inline-flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-12 h-12" viewBox="0 0 24 24">
              <circle cx="12" cy="5" r="3"></circle>
              <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
            </svg>
          </div>
          <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl" style="color: whitesmoke;">Play with Graphics
            </h2>
            <p class="leading-relaxed" style="color: whitesmoke;">Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Ut deleniti accusamus reiciendis veniam quaerat!</p>
          </div>
        </div>
      </div>
      <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
        <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
          <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div
          class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
          4</div>
        <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
          <div
            class="flex-shrink-0 w-24 h-24 bg-purple-100 text-purple-500 rounded-full inline-flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-12 h-12" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl" style="color: whitesmoke;">Editing</h2>
            <p class="leading-relaxed" style="color: whitesmoke;">Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Perferendis minima neque nulla eos beatae.</p>
          </div>
        </div>
      </div>
    </div>
  </section>






  <section class="text-gray-700 body-font team-e">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">OUR TEAM</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="color: black;">The Best Developers and the best
          graphic designer you will find here..So what are you looking for ,, do subscribethe website.. </p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4 img-team1">
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">Sanchay Sethi</h2>
              <h3 class="text-gray-500 mb-3" style="color:purple">Full Stack Developer</h3>
              <p class="mb-4" style="color: white;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4 img-team2">
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">Parichay Sethi</h2>
              <h3 class="text-gray-500 mb-3" style="color:purple">Photo Editor</h3>
              <p class="mb-4" style="color: white;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4 img-team3">
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">Sudhanshu Rajput</h2>
              <h3 class="text-gray-500 mb-3" style="color:purple">Blogger</h3>
              <p class="mb-4" style="color: white;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/4 md:w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <img class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4 img-team4">
            <div class="w-full">
              <h2 class="title-font font-medium text-lg text-gray-900">Abhishek yadav</h2>
              <h3 class="text-gray-500 mb-3" style="color:purple">UI Developer</h3>
              <p class="mb-4" style="color: white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                    </path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                    viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="text-gray-700 body-font rate-e">
    <video autoplay muted loop id="myVideo3">
      <source src="img/ppp.mp4" type="video/mp4">
    </video>

    <div class="container px-5 py-24 mx-auto flex flex-wrap">

      <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
        <div class="w-full sm:p-4 px-4 mb-6">
          <h1 class="title-font font-medium text-xl mb-2 text-gray-900" style="color: whitesmoke; font-size: 30px;">Moon
            cross Rating...</h1>
          <div class="leading-relaxed" style="color: whitesmoke;">Give us your support and makes enhance our skills
          </div>
        </div>

        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">

          <h2 class="title-font font-medium text-3xl text-gray-900" style="color: white;">2.7K</h2>
          <p class="leading-relaxed"
            style="color: black;background-color: rgba(245, 245, 245, 0.445); text-align: center; border-radius: 10px;">
            Users</p>

        </div>
        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
          <h2 class="title-font font-medium text-3xl text-gray-900" style="color:white;">1.8K</h2>
          <p class="leading-relaxed"
            style="color: black;background-color: rgba(245, 245, 245, 0.445); text-align: center; border-radius: 10px;">
            Subscribes</p>
        </div>
        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
          <h2 class="title-font font-medium text-3xl text-gray-900" style="color: white;">35</h2>
          <p class="leading-relaxed"
            style="color: black;background-color: rgba(245, 245, 245, 0.445); text-align: center; border-radius: 10px;">
            Shop</p>
        </div>
        <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
          <h2 class="title-font font-medium text-3xl text-gray-900" style="color: white;">4</h2>
          <p class="leading-relaxed"
            style="color: black;background-color: rgba(245, 245, 245, 0.445); text-align: center; border-radius: 10px;">
            Share</p>
        </div>

      </div>

      <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
        <video autoplay muted loop id="myVideo2">
          <source src="img/Workaholic.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </section>





  <section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
          <div class="h-full text-center">
            <img alt="testimonial"
              class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
              src="img/roshan2.png">
            <p class="leading-relaxed" style="color: whitesmoke;">Lorem, ipsum dolor sit amet consectetur adipisicing
              elit. Minima officia, nulla exercitationem obcaecati illum mollitia sed ullam doloribus harum quos veniam
              blanditiis cupiditate corporis maiores. Atque alias dolor omnis, et suscipit minus autem praesentium vitae
              voluptatibus nisi libero. Placeat, molestiae.</p>
            <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm" style="color:white">Roshan Kumar
            </h2>
            <p class="text-gray-500">Full stack developer</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
          <div class="h-full text-center">
            <img alt="testimonial"
              class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
              src="img/c4.jpg">
            <p class="leading-relaxed" style="color: whitesmoke;">Lorem ipsum dolor sit amet consectetur, adipisicing
              elit. Saepe eaque distinctio porro sed cupiditate iste perferendis, velit beatae nisi ratione alias ex
              sequi amet ut ad est, nam omnis consectetur dolor ipsum itaque inventore. Quo, deleniti quas iusto ea
              fugiat beatae laborum ipsum, amet consectetur sapiente porro neque, at quos!</p>
            <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm" style="color:white">Rohit munjal
            </h2>
            <p class="text-gray-500">UI Develeoper</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:mb-0 p-4">
          <div class="h-full text-center">
            <img alt="testimonial"
              class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
              src="img/card33.jpeg">
            <p class="leading-relaxed" style="color: whitesmoke;">Lorem, ipsum dolor sit amet consectetur adipisicing
              elit. Sapiente dolores sint reiciendis quod praesentium porro ipsam iste, labore quaerat! Non, optio dolor
              voluptatum iusto repellat, eligendi eius eaque ad voluptates perferendis, deserunt atque nulla itaque
              saepe soluta quo ut iure accusantium molestias qui cumque aut natus ullam odio. Atque, vitae.</p>
            <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm" style="color:white">Anubhav</h2>
            <p class="text-gray-500">Backend developer</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-gray-700 body-font foot-e">
    <div class="container px-5 py-24 mx-auto foot-eee">
      <div class="flex flex-wrap md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" style="color:black">CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Login</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Blog</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Price</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Contact us</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" style="color:black">DEVELOPERS
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Sanchay Sethi</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Parichay Sethi</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Sudhanshu Singh</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Abhishek</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3"></h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" style="color:black">Join</h2>
          <div class="flex xl:flex-no-wrap md:flex-no-wrap lg:flex-wrap flex-wrap justify-center md:justify-start">
            <input
              class="w-40 sm:w-auto bg-gray-100 rounded xl:mr-4 lg:mr-0 sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-purple-500 text-base py-2 px-4"
              placeholder="Email" type="text">
            <button
              class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded">Join</button>
          </div>
          <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Put your Email here
            <br class="lg:block hidden">
          </p>
        </div>
      </div>
    </div>
    <div class="bg-gray-200">
      <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col foot-ee">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <img class="img-e" src="img/two.png" style="width: 40px; height: auto;">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24"> -->
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">SSArtistic</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 All Right Reserved | SS Artistic
          <a href="#" rel="noopener noreferrer" class="text-gray-600 ml-1">@Sanchaysethi</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-gray-500" href="https://www.facebook.com/sanchay.sethi.3/" target="_blanck">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500" href="https://www.instagram.com/sethi.sanchay/" target="_blanck">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500" href="https://www.linkedin.com/in/sanchay-sethi/" target="_blanck">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

<script>
  function fun1() {
    alert("Chillax , You are already logged in ..")
  }
</script>

<script>
  function functionAlert(msg, myYes) {

    var confirmBox = $("#confirm");
    confirmBox.find(".message").text(msg);
    confirmBox.find(".yes").unbind().click(function () {
      confirmBox.hide();
    });
    confirmBox.find(".yes").click(myYes);
    confirmBox.show();
  }
</script>

</html>