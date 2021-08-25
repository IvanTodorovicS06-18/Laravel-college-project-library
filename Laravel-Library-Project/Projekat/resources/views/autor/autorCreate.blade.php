@extends('layouts.app')



@section('content')

<h1>Kreiraj autora</h1>


<form method ="POST" action="/autor/store">

    @csrf

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="firstName">Ime:</label>
                <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="Ime...">

                @error('firstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <br>
            
            <div class="form-group">
                <label for="lastName">Prezime:</label>
                <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="Prezime...">

                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror

            </div>

            <br>
            <br>
            <input class="btn btn-primary" type="submit">


        </div>



    </div>









</form>








@endsection