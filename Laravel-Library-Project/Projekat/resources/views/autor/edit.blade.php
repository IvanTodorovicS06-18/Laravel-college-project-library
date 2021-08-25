@extends('layouts.app')



@section('content')

<h1>Izmeni autora</h1>


<form method ="POST" action="/autor/update/{{$autor->autorID}}">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="firstName">Ime:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Ime..." value="{{$autor->firstName}}">
            </div>

            <br>

            <div class="form-group">
                <label for="lastName">Prezime:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Prezime..."  value="{{ $autor->lastName}}">
            </div>

            <br>

            <input class="btn btn-primary" type="submit">

        </div>
    </div>
</form>

@endsection