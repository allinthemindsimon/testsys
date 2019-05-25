@extends("layout")

@section("content")
<style>
	#message {
		color:green;
		font-size: 1.5em;
	}
</style>

<hr>
@if(session()->has('message'))
	<div class="is-primary" id="message">
		{{ session()->get('message') }}
	</div>
@endif
<div class="columns">
	<form class="column" method="POST" action="/cow/store">
		{{ csrf_field() }}
		<div class="field">
			<label class="label">Name of New Cow</label>
			<div class="control">
				<input class="input" name ="name" type="text" placeholder="Please type name of new cow here" required>
			</div>
		</div>
		<div class="control">
			<button class="button is-link">Add New Cow</button>
		</div>
	</form>
</div>
@if ($errors->any())
	<div class="columns notification is-danger">
		<div class="column">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif

<hr>

<script>
	setTimeout(function(){
	  if ($('#message').length > 0) {
	    $('#message').remove();
	  }
	}, 2000)
</script>
@endsection