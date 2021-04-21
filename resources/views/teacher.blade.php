@extends('nav')

@section('title')
Teachers
@endsection
@section('lang')
<li class="nav-item">
  <a class="nav-link text-right" href="/courses/ru">ru</a>
</li>
<li class="nav-item">
  <a class="nav-link text-right" href="/courses/en">en</a>
</li>

@endsection
@section('main_page')

<style>
  

header{
  width: 100%;
  background:white;
  background-size: 100%;
  position: relative;
}
header a {
   font-family: var(--Sniglet-font);
  font-size: 0.9em;
  color: white;
}

.navbar {
  width: 100%;
  background: rgba(0, 0, 0, 0.815);
  z-index: 9999;
  
}
.section_techers{
margin-top:3% ;
} 

/********** section 1 **************/

.section-1 {
  padding: 10vmin 0vmin;
}

.section-1 .row .col-md-6 .pray img {
  opacity: 0.8;
  width: 80%;
  border-radius: 0.2em;
}

.section-1 .row .col-md-6:last-child {
  position: relative;
}

.section-1 .row .col-md-6 .panel {
  top: 7vmin;
  left: -18vmin;
  background: white;
  border-radius: 3px;
  text-align: left;
  padding: 13vmin 5vmin 20vmin 10vmin;
  box-shadow: 0px 25px 42px rgba(0, 0, 0, 0.2);
  font-family: var(--Rubik);
  z-index: 1;
}

.section-1 .row .col-md-6 .panel h1 {
  font-weight: bold;
  padding: 0.4em 0;
  font-size: 2em;
}

.section-1 .row .col-md-6 .panel p {
  font-size: 0.9em;
  color: rgba(0, 0, 0, 0.5);
}

.section-4 .container h1 {
  font-size: 6vmin;
  padding-top: 14vmin;
}

.section-4 .team {
  padding: 10vmin 4vmin;
}

.section-4 .card {
  width: 22em;
  margin-top: 10vmin;
}

.section-4 .card .card-text {
  padding: 0.5em;
}

.section-4 .card-body > a {
  font-size: 1.5em;
}

.section-4 .carousel-item {
  padding-left: 3rem;
}

.border-radius {
  border-radius: 340px;
  width: 60%;
}
.about{
  width: 100%;
  text-align: center;
  margin-top: 50px;
}
</style>


<h1 class="text-center text-dark about" >{{__("h1_c")}}
  
</h1>
@foreach ($courses as $el)         
   
   <section class="section-1">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="pray">
            <img src="{{ $el->link_to_img }}" alt="Pray" class="" />
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="panel text-left">
            <h1>{{ $el->course_name }}</h1>
            <p class="pt-4">
              <p> {{__("price")}} :  <i>{{ $el->price}}</i> TG</p> 
      <p>{{__("hours")}}  : <i>{{ $el->hours}}</i></p>
      <h5> {{__("Teachers")}}  :</h5>
      @forelse ($el->courseTeachers as $teacher)
         <li class="inline  italic  text-gray-600 px-1 py-6">
            {{$teacher['teacher_name']}}
         </li>
            
         @empty <p>{{__("no_t")}}  :</p>
            
         @endforelse
         <h5> {{__("Students")}}:</h5>
         @forelse ($el->students as $student)
         <li class="inline  italic  text-gray-600 px-1 py-6">
            {{$student->name}}
         </li>
            
         @empty <p>{{__("no_s")}}</p>
            
         @endforelse
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae, tenetur quidem eum aliquid vel
              labore sint placeat
              ad deserunt consectetur fugit ullam. Eius unde neque ducimus obcaecati ipsum quos vero totam recusandae
              hic
              expedita nemo sit, illum harum. Quisquam impedit ullam itaque facere et ad molestiae quod reprehenderit
              excepturi!
            </p>
            <div class="pricing">
              <a href="/upload/en" class="btn btn-dark px-5 py-2 primary-btn mb-5"> {{__("btn_home")}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach

<div class="section_techers">
   
   <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">{{__("our_t")}}</h1>
        <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="team row ">
         @foreach ($teachers as $el)
        <div class="col-md col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
              <div class="card-img-top">
                <img src="{{ $el->link_to_img}}"
                  class="img-fluid border-radius p-4" alt="">
              </div>
                <div class="card-body">
                  <h3 class="card-title">{{ $el->teacher_name}}</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                </div>
              </div>
        </div>
        @endforeach
      </div>
    </section>
      
</div>


  
   

   @endsection