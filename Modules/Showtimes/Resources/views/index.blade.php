@extends('layout')
@section('content')

<div class="hero user-hero" style="height: 85px;">
</div>
<div class="page-single">
	<div class="container">
      <div class="row ipad-width">
      <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" >
					<form method="post" class="user" action="{{ route('addshowtime')}}">
                        {{ csrf_field() }} 
                        <div class="row">
                            <div class="col-md-12 form-it">
								<label>Movie</label>
                                <select name="movie" required>
                                    @foreach($movie as $movies)
								        <option value="{{$movies->movies_id}}">{{$movies->title}}</option>
                                    @endforeach
								</select>
							</div>

                            <div class="col-md-6 form-it">
								<label>Location</label>
                                <select name="locations" required>
                                    @foreach($location as $locations)
								        <option value="{{$locations->cinema_id}}">{{$locations->city}}</option>
                                    @endforeach
								</select>
							</div>

                            <div class="col-md-6 form-it">
								<label>Showtime</label>
								<input type="datetime-local"  name="showtime" required>
							</div>
                        </div>
                        
                        <div class="row">                
							<div class="col-md-2">
								<input class="submit" type="submit" value="save">
							</div>
						</div>	
					</form>
					
				</div>
			</div>
      </div>
   </div>
</div>
@endsection

