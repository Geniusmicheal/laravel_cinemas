@extends('layout')
@section('content')
<style>
.btn-sm {
    padding: .25rem .5rem;
    line-height: 1.5;
    border-radius: .2rem;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    text-align: center;
    vertical-align: middle;
    margin: 0px 0px 5px 5px;
}
.movie-single .movie-single-ct .movie-rate .rate-star {
   min-height: 54px;
    flex-wrap: wrap;
    padding: 5px 0px 0px 30px;
}

footer{ margin-top: 100px;}
</style>

<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>

<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="{{ asset('upload/'.$movie->img)  }}" alt="">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd">{{ $movie->title}}</h1>
					<div class="social-btn">
						<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
						<div class="hover-bnt">
							<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
							<div class="hvr-item">
								<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
							</div>
						</div>		
					</div>
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span>8.1</span> /10<br>
								<span class="rv">56 Reviews</span>
							</p>
						</div>
                  <div class="rate-star">
							<p>Rate This Movie:  </p>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star-outline"></i>
						</div>
					</div>
               <div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#reviews"> Reviews</a></li>
								<li><a href="#cast">  Cast & Crew </a></li>
								<li><a href="#media"> Media</a></li> 
								<li><a href="#moviesrelated"> Related Movies</a></li>                        
							</ul>
						   <div class="tab-content">
                     <div id="overview" class="tab active">
                        <div class="row">
                           <div class="col-md-8 col-sm-12 col-xs-12">
                              <p>{{ $movie->synopsis}}</p>
                              <div class="title-hd-sm">
                              <h3>Location</h3>
                              <a href="#" class="time">All cinemas showtime location <i class="ion-ios-arrow-right"></i></a>
                           </div>
                           </div>

                           <div class="col-md-4 col-xs-12 col-sm-12">
                              <div class="sb-it">
                                 <h6>Genres:</h6>
                                 <p>{{ $movie->genre}}</p>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                           <?php $x='';?>
                              @foreach($showtime as $showtimes)
                              @if($x != $showtimes->city)
                              @if($x !='') </div></div>@endif
                              <?php $x=$showtimes->city; ?>
                                 <div class="movie-rate">
                                    <div class="rate">
                                    <p><span>{{$showtimes->city}} </span> </p>
                                    </div>
                                    <div class="rate-star">
                                 @endif 
                                 <span class="btn-sm"> {{ date("l jS \of F Y h:i:sa", strtotime($showtimes->showtime)) }} </span>
                              @endforeach
                              </div></div>
                             


                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection