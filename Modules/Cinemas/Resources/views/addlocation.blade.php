@extends('layout')
@section('content')

<div class="hero user-hero" style="height: 85px;">
</div>
<div class="page-single">
	<div class="container">
      <div class="row ipad-width">
      <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" >
					<form method="post" class="user" action="{{ route('addlocation')}}">
                  {{ csrf_field() }} 
						<div class="row">
							<div class="col-md-12 form-it">
								<label>City</label>
								<input type="text" placeholder="cinemas city" name="city" required>
							</div>
                  </div>

                  <div class="row">
							<div class="col-md-12 form-it">
								<label>Address</label>
								<input type="text" placeholder="cinemas address" name="address" required>
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