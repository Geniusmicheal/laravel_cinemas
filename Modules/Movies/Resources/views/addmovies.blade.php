@extends('layout')
@section('content')

<div class="hero user-hero" style="height: 85px;">
</div>
<div class="page-single">
	<div class="container">
      <div class="row ipad-width">
      <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" >
					<form method="post" enctype="multipart/form-data" class="user" action="{{ route('addmovie')}}">
						{{ csrf_field() }} 
						<div class="row">
							<div class="col-md-12 form-it">
								<label>Movie Title</label>
								<input type="text" placeholder="movie title" name="title" required>
							</div>

							<div class="col-md-6 form-it">
								<label>Genre</label>
                        <select name="genre" required>
								  <option>Animation</option>
								  <option>Action</option>
                          <option>Comedy</option>
                          <option>Romance</option> 
								</select>
							</div>

                     <div class="col-md-6 form-it">
								<label>Image</label>
								<input type="file" style="width:100%;" name="img" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 form-it">
								<label>Synopsis</label>
								<textarea style="height: 200px;" name="synopsis" required></textarea>
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