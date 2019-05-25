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
	<div class="is-primary temp" id="message">
		{{ session()->get('message') }}
	</div>
@endif
<form method="POST" action="/cow/{{$cowDetails['id']}}/update">
	<div class="columns">
		{{ csrf_field() }}
		<div class="column is-6">
			<div class="field">
				<label class="label">Name of Cow</label>
				<div class="control">
					<input class="input" name ="name" type="text" placeholder="Rename cow here" value="{{$cowDetails['name']}}" required>
				</div>
			</div>
		</div>
		<div class="column is-3">
			<div class="field">
				<label class="label">Cow Number</label>
				<div class="control">
					<input class="input" name ="iddetails" type="text" value="{{$cowDetails['id']}}" disabled>
					<input class="input" name ="id" type="hidden" value="{{$cowDetails['id']}}">
				</div>
			</div>
		</div>
		<div class="column is-3">
			<div class="field">
				<label class="label">First Added</label>
				<div class="control">
					<input class="input" name ="date" type="text" value="{{$cowDetails['clean_date']}}" disabled>
				</div>
			</div>
		</div>
	</div>
		<div class="columns">
			<div class="column">
				<div class="control">
					<button class="button is-link">Rename Cow</button>
				</div>
			</div>
		</div>
	</div>
</form>
@if ($errors->any())
	<div class="columns notification is-danger temp">
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
	  if ($('.temp').length > 0) {
	    $('.temp').remove();
	  }
	}, 2500)
</script>
@endsection