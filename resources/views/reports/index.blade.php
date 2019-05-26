@extends('layout')

@section('content')

<style>
    .table {
        width: 100%;
        max-width: 960px;
    }
   tr .alignr {
        text-align: right;
    }
    .clickable-row:hover {
          color: blue;
          cursor: pointer;
    }
</style>

<hr>

<div class="columns">
    <div class="column">
        <h1>Table showing milk production, ordered by average yield per cow in Litres</h1>
    </div>  
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th class ="alignr">Number</th>
            <th class ="alignr">Arrived</th>
            <th class ="alignr">Average Daily Yield</th>
            <th class ="alignr">Maximum Daily Yield</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cows as $cow)
                <tr class ="clickable-row" data-href="/report/{{$cow->cow_id}}/show">
                    <td>{{$cow->cow_name}}</td>
                    <td class ="alignr">{{$cow->cow_id}}</td>
                    <td class ="alignr">{{$cow->arrived}}</td>
                    <td class ="alignr">{{$cow->average}}</td>
                    <td class ="alignr">{{$cow->maximum}}</td>
                </tr>
        @endforeach
    </tbody>
</table>

<hr>

<script>
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
</script>
@endsection
{{-- body > section:nth-child(3) > table > thead > tr > th:nth-child(5) --}}