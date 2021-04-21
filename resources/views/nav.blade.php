<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <style>
     @import url("https://fonts.googleapis.com/css?family=Acme|Lobster|Patua+One|Rubik|Sniglet");
* {
  box-sizing: border-box;
}

header,
section {
  overflow-x: hidden;
}
header{
  width: 100%;
  background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0)),url("https://i.pinimg.com/originals/60/0c/b7/600cb7d152d5dcc537f28bb7b2589eb7.jpg");
  background-size: 100%;
  position: relative;
  
}

:root {
  --Sniglet-font: "Sniglet", cursive;
  --Rubik: "Rubik", cursive;
  --Patua: "Patua One", cursive;
  --Lobster: "lobster", cursive;
  --light-black: #2e2c2caf;
  --light-gray: rgba(255, 255, 255, 0.877);
}

header a {
  font-family: var(--Sniglet-font);
  font-size: 0.9em;
  color: white;
}

header .nav-item:last-child {
  padding-right: 10.5em;
}

header .nav-item {
  padding: 0.9em;
}

header .navbar-brand {
  padding-left: 8rem;
}

header .nav-link:hover {
  color: black;
}

header .row{
   width: 100%;
   margin-left: 20%;

}
header .row .col-md-7 {
  padding: 22vmin 1vmin;
  padding-bottom: 35vmin;
}

header .container .col-md-7 {
  font-family: "Rubik", sans-serif;
}

header .container .col-md-7 h6 {
  padding: 1vmin;
  letter-spacing: 4px;
}

header .container .col-md-7 h1 {
  font-size: 8.5vmin;
  font-weight: bold;
  padding: 0.1em 0em;
}

header .container .col-md-7 p {
  padding: 1vmin 5vmin;
}

.primary-btn {
  border-radius: 30px;
  font-weight: bold;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.815);
  z-index: 9999;
  transition: all 1.5s ease;
}

  </style>
  <style>

  </style>
  <link rel="stylesheet" href="./mobile-style.css">

  

</head>
<body >
   <header>
      <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand" href="#">
           <i class="fas fa-book-reader fa-2x mx-3"></i>{{__()}}</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
           aria-label="Toggle navigation">
           <i class="fas fa-align-right text-light"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
           <div class="mr-auto"></div>
           <ul class="navbar-nav">
             <li class="nav-item active">
               <a class="nav-link" href="/"> {{__("home_nav")}}
                 <span class="sr-only">(current)</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/courses/en">{{__("course_nav")}}</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/about/en"> {{__("about_nav")}}</a>
             </li>
             @yield('lang')
           </ul>
         </div>
       </nav>
      </div>
      <div class="container ">
         @yield('home_section')
      </div>
   </header>


   <div class="container ">
      @yield('main_page')
   </div>

</body>
</html>