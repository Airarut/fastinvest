@extends('layouts.app')

@section('content')

	<!-- <form name="search_form" method="GET" action="/index">

&nbsp; &nbsp; Ieškoti darbuotojo duomenų: <input type="text" name="search" />
<input type="submit" value="Ieškoti" >
</form>
<table width="70%" cellpading="5" cellspace="5"> -->
	<div>
		<form action="/user_account" method="POST">
			{{ csrf_field() }}
			<div class="container">
				<div class="row">

					<div class="form-group">
					  <label class="control-label">The ammount of transfering money</label>
					  <div class="form-group">
					    <div class="input-group mb-3">
					      <div class="input-group-prepend">
					        <span class="input-group-text">€</span>
					      </div>
					      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
					      <div class="input-group-append">
					        <span class="input-group-text">.00</span>
					      </div>
					    </div>

					    <label class="col-form-label col-form-label-lg" for="inputLarge">User account number(whom to transfer)</label>
					  <input class="form-control form-control-lg" type="text" placeholder="user id" id="inputLarge">
					  </div>

					  <button type="submit" class="btn btn-primary">Submit</button>


					  
					</div>
			

				</div>
			</div>
		</form>

@endsection