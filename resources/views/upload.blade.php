@extends('nav')

@section('title')
Test
@endsection
@section('lang')
<li class="nav-item">
  <a class="nav-link text-right" href="/upload/ru">ru</a>
</li>
<li class="nav-item">
  <a class="nav-link text-right" href="/upload/en">en</a>
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
		.container {
			margin: auto;
			width: 100%;
			max-width: 90%;
			margin-top: 20px;
		}
		.form{
			width: 70%;
		}
		.container form {
			width: 100%;
			height: 100%;
			padding: 20px;
			background: white;
			border-radius: 4px;
			box-shadow: 0 8px 16px rgba(0, 0, 0, .3);
		}

		.container form h1 {
			text-align: center;
			margin-bottom: 24px;
			color: #222;
		}

		.container form .form-control {
			width: 100%;
			height: 40px;
			background: white;
			border-radius: 4px;
			border: 1px solid silver;
			margin: 10px 0 18px 0;
			padding: 0 10px;
		}

		.container form .btn {
			margin-left: 50%;
			transform: translateX(-50%);
			width: 120px;
			height: 34px;
			border: none;
			outline: none;
			background: #27a327;
			cursor: pointer;
			font-size: 16px;
			text-transform: uppercase;
			color: white;
			border-radius: 4px;
			transition: .3s;
		}

		.container form .btn {
			opacity: .7;
		}
		.forming{
			display: flex;
			flex-direction: row
		}
		.test{
			width: 100%;
			text-align: center;
			align-items: center;
			height: 100%;
			margin: 8%;
		}
	</style>

	<div class="container">
		<form action="{{ route('add') }}" method="POST" enctype="multipart/form-data" class="forming">
			@csrf
			<div class="form">
			<h1>{{__("sendAnswer")}}</h1>
			<div class="form-group">
				<label for="Name">{{__("name")}}</label>
				<input type="text" placeholder="Name" name="name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="Surname">{{__("surename")}}</label>
				<input type="text" placeholder="Surname" name="surname" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="Email">{{__("email")}}</label>
				<input type="email" placeholder="Email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="Profile Photo"> {{__("photo")}}</label>
				<input class="form-control" type="file" name="photos" multiple />
				<input id="btn" type="submit" class="btn btn-primary" value="Submit" />

			</div>
			</div>
			<div class="test">
				<h1> {{__("test")}}</h1>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae, tenetur quidem eum aliquid vel
					labore sint placeat
					ad deserunt consectetur fugit ullam. Eius unde neque ducimus obcaecati ipsum quos vero totam recusandae
					hic
					expedita nemo sit, illum harum. Quisquam impedit ullam itaque facere et ad molestiae quod reprehenderit
					excepturi!
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae, tenetur quidem eum aliquid vel
					labore sint placeat
					ad deserunt consectetur fugit ullam. Eius unde neque ducimus obcaecati ipsum quos vero totam recusandae
					hic
					expedita nemo sit, illum harum. Quisquam impedit ullam itaque facere et ad molestiae quod reprehenderit
					excepturi!
				</p>
				
			</div>
		</form>
	</div>
	@endsection 