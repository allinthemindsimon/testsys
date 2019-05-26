@extends("layout")

@section("content")
<style>
    .temp {
        font-size: 1.5em;
    }
    .vabot {
        padding-top:1.39em;
    }
</style>

<hr>

@if(session()->has('cowmessage'))
    <div class="is-success temp" id="cowmessage">
        {{ session()->get('cowmessage') }}
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
                    <button class="button is-success">Rename Cow</button>
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

@if(session()->has('milkmessage'))
    <div class="{{ session()->get('class') }} temp" id="milkmessage">
        <p>{{ session()->get('milkmessage') }}</p>
    </div>
@endif
<form method="POST" action="/milk/{{$cowDetails['id']}}/store">
    <div class="columns">
        {{ csrf_field() }}
        <input class="input" name ="cow_id" type="hidden" value="{{$cowDetails['id']}}">
        <div class="column is-4">
            <div class="field">
                <label class="label">Amount in Litres</label>
                <div class="control">
                    <input class="input lactose" name ="amount_litres" type="number" step="1">
                </div>
            </div>
        </div>
        <div class="column vabot">
            <div class="control vabot">
                <button class="button is-success">Submit Daily Amount</button>
            </div>
        </div>
    </div>
</form>

<hr>

<script>
    setTimeout(function(){
        if ($('.temp').length > 0) {
            $('.temp').remove();
        }
    }, 3500)

    $(".lactose").change(function() {
        this.value = parseFloat(this.value).toFixed(3);
        if (this.value < 0) {
            alert ("Please enter zero or a positive number for the amount of milk");
            this.value = 0.000;
        }
    });
</script>
@endsection