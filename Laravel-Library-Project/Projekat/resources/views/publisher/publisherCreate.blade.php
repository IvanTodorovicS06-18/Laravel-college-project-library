@extends('layouts.app')



@section('content')

<h1>Kreiraj izdavaca</h1>


<form method ="POST" action="/publisher/store">

    @csrf
    

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="imeIzdavaca">Ime izdavaca:</label>
                <input type="text" class="form-control @error('imeIzdavaca') is-invalid @enderror" id="imeIzdavaca" name="imeIzdavaca" placeholder="ime izdavaca">

                @error('imeIzdavaca')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <br>
            
            <div class="form-group">
                <label for="adress">Adresa:</label>
                <input type="text" class="form-control @error('adress') is-invalid @enderror" id="adress" name="adress" placeholder="Adresa">

                @error('adress')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">

                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="brojTelefona">Broj telefona:</label>
                <input type="text" class="form-control @error('brojTelefona') is-invalid @enderror" id="brojTelefona" name="brojTelefona" placeholder="Broj telefona">

                @error('brojTelefona')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <br>
            <br>
            <br>
            <input class="btn btn-primary" type="submit">


        </div>



    </div>









</form>








@endsection