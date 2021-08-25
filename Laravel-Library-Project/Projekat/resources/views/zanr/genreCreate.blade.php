@extends('layouts.app')



@section('content')

<h1>Kreiraj zanr</h1>


<form method ="POST" action="/zanr/store">

    @csrf

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="imeZanra">Ime zanra:</label>
                <input type="text" class="form-control @error('imeZanra') is-invalid @enderror" id="imeZanra" name="imeZanra" placeholder="ime zanra">

                @error('imeZanra')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <br>
       
            <input class="btn btn-primary" type="submit">


        </div>



    </div>









</form>








@endsection