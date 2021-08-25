@extends('layouts.app')



@section('content')

<h1>Izmeni izdavaca</h1>


<form method ="POST" action="/rent/store">

    @csrf

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <input type="hidden" class="form-control" id="knjigaID" name="knjigaID" value="{{$knjige->knjigaID}}">
            </div>

            <div class="form-group">
                <label for="imeKnjige">Ime knjige:</label>
                <h4> {{$knjige->imeKnjige}} </h4>
            </div>
            
            
            <div class="form-group">
                <label for="firstName">Korisnik:</label>
                <h4> {{Auth::user()->firstName}} {{Auth::user()->lastName}} </h4> 
                 
            </div>
     
            <div class="form-group">
                <label for="datumIzdavanja">Datum izdavanja:</label>
                <input type="date" class="form-control @error('datumIzdavanja') is-invalid @enderror" id="datumIzdavanja" name="datumIzdavanja">

                @error('datumIzdavanja')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" name="Potvrdi">


        </div>



    </div>









</form>








@endsection