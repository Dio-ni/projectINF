@extends('nav')

@section('title')
Teachers
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
</style>

@foreach ($courses as $el)         
   
   <section class="section-1">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="pray">
            <img src="{{ }}" alt="Pray" class="" />
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="panel text-left">
            <h1>{{$el }}</h1>
            <p class="pt-4">
              <p>Price:   <i>{{ $el}}</i> TG</p> 
      <p>Hours:    <i>{{ $el}}</i></p>
      <h5>Techers:</h5>
      @forelse ($el->courseTeachers as $teacher)
         <li class="inline  italic  text-gray-600 px-1 py-6">
            {{$teacher['teacher_name']}}
         </li>
            
         @empty <p>No teachers</p>
            
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
              <h1>$99.99</h1>
              <a href="/{{ $el }}" class="btn btn-dark px-5 py-2 primary-btn mb-5">{{ $el}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach

@endsection