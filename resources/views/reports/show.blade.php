@extends('layout')

@section('content')

<style>
    .table {
        width: 100%;
        max-width: 300px;
    }
   tr .alignr {
        text-align: right;
    }
</style>

<hr>

<div class="columns">
    <div class="column">
        @if ($yields)
            <h1>Milk Production from {{$yields->first()->cow->name}} in litres</h1>
        @endif
    </div>  
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <th class ="alignr">Date</th>
            <th class ="alignr">Daily Yield</th>
        </tr>
    </thead>
    <tbody>
        @if ($yields)
            @foreach ($yields as $yield)
                <tr>
                    <td class ="alignr">{{$yield->clean_date}}</td>
                    <td class ="alignr">{{$yield->amount_litres}}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<hr>

@endsection
