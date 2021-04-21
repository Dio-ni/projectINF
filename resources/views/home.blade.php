@extends('nav')

@section('title')
Home
@endsection
@section('lang')
<li class="nav-item">
  <a class="nav-link text-right" href="/ru">ru</a>
</li>
<li class="nav-item">
  <a class="nav-link text-right" href="/en">en</a>
</li>

@endsection

@section('home_section')

<div class="container text-center">
   <div class="row">
     <div class="col-md-7 col-sm-12  text-white">
       <h6>{{__("h6_home")}}</h6>
       <h1>{{__("h1_home")}}</h1>
       <p>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusamus eum dignissimos ipsa sequi expedita.
       </p>
       <a class="btn btn-light px-5 py-2 primary-btn" href="/upload/en">
         {{__("btn_home")}}
       </a>
     </div>
     
   </div>
 </div>
 @endsection