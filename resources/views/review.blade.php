@extends('nav')

@section('title')
Review
@endsection

@section('main_page')
   <h1>Form for adding a review</h1>
   
   @if($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif
   
   <form method="post" action="/review/check" >
   @csrf
   
   <input type="email" name="email" id ="email" placeholder="Email" class="form-control mb-3">
   <input type="text" name="subject" id ="subject" placeholder="Review" class="form-control mb-3">
   <textarea name="message" id = "message" placeholder="Message" class="form-control mb-3"></textarea> <br>
   <button type="submit" class="btn btn-success">Submit</button>
   </form>

<br>
   <h1>All Reviews</h1>
   @foreach ($data as $el)
   <div class="alert alert-primary">
      <h3>{{ $el->subject }}</h3>
      <b>{{ $el->email}}</b>
      <p>{{ $el->message}}</p>
   </div>
       
   @endforeach
@endsection