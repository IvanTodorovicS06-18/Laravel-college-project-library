@extends('layouts.app')



@section('content')

<h1>Izmeni izdavaca</h1>


<form method ="POST" action="/publisher/update/{{$izdavac->izdavacID}}">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="imeIzdavaca">Ime izdavaca:</label>
                <input type="text" class="form-control" id="imeIzdavaca" name="imeIzdavaca" placeholder="ime izdavaca" value="{{$izdavac->imeIzdavaca}}">
            </div>
            <br>
            
            <div class="form-group">
                <label for="adress">Adresa:</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Adresa" value="{{$izdavac->adress}}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$izdavac->email}}">
            </div>
            <br>
            <div class="form-group">
                <label for="brojTelefona">Broj telefona:</label>
                <input type="text" class="form-control" id="brojTelefona" name="brojTelefona" placeholder="Broj telefona" value="{{$izdavac->brojTelefona}}">
            </div>
            <br>
            <br>
            <br>
            <input class="btn btn-primary" type="submit">


        </div>



    </div>









</form>








@endsection