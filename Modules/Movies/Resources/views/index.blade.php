@extends('layout')
@section('content')

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> Movies - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Movies listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- blog list section-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12 col-xs-12">
            @foreach($movie as $movies)

                <div class="blog-item-style-1 blog-item-style-3">
            		<img src="{{ asset('upload/'.$movies->img)  }}" alt="" style="width: 230px; height:180px" >
            		<div class="blog-it-infor">
            			<h3><a href="{{ route('moviesingle',['id'=>$movies->slug]) }}">{{$movies->title}}</a></h3>
                        <span class="time">{{$movies->genre}}</span>
            			<p>{{$movies->synopsis}}</p>
            		</div>
            	</div>
										
			@endforeach

			</div>
		</div>
	</div>
</div>
<!--end of blog list section-->
@endsection