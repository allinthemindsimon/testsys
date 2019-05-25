@extends('layout')

@section('content')
<div class="columns">
    <div class="column">
        <h1>Click on a cow's name to <strong>"Change the Name"</strong> of that cow or add <strong>"Milk Measurements".</strong></h1>
    </div>  
</div>  
<hr>
{{-- {{dd($pageType, $cows)}} --}}
@if ($cows)
    <div class="columns is-multiline">
        @foreach ($cows as $id => $name)
            <div class="column is-3">
                <a href="/cow/{{$id}}/edit">{{$name}}</a>
            </div>
        @endforeach
    </div>
@endif
<hr>
@endsection