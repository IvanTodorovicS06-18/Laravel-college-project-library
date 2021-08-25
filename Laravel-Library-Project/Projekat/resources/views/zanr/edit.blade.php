@extends('layouts.app')



@section('content')

<h1>Izmeni zanr</h1>


<form method ="POST" action="/zanr/update/{{$zanr->zanrID}}">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="imeZanra">Ime:</label>
                <input type="text" class="form-control" id="imeZanra" name="imeZanra" placeholder="ime zanra" value="{{$zanr->imeZanra}}">
            </div>

            <br>

            <input class="btn btn-primary" type="submit">

        </div>
    </div>
</form>

@endsection