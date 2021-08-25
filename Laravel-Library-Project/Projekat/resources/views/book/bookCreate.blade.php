@extends('layouts.app')



@section('content')

<h1>Kreiraj knjigu</h1>


<form method ="POST" action="/book/store">

    @csrf

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="imeKnjige">Ime knjige:</label>
                <input type="text" class="form-control @error('imeKnjige') is-invalid @enderror" id="imeKnjige" name="imeKnjige" placeholder="ime knjige">

                @error('imeKnjige')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <br>

            <div class="form-group">
                <label for="minibar">Izaberite autora </label>
                <select name="autorID" id="autorID" class="form-control">
                    @foreach($autor as $a)
                        <option value="{{$a->autorID}} ">
                            Autor: {{$a->firstName}} {{$a->lastName}} 
                        </option>
                    @endforeach

                </select>
            </div>

            <br>

            <div class="form-group">
                <label for="minibar">Izaberite izdavaca </label>
                <select name="izdavacID" id="izdavacID" class="form-control">
                    @foreach($izdavac as $i)
                        <option value="{{$i->izdavacID}} ">
                            Autor: {{$i->imeIzdavaca}} 
                        </option>
                    @endforeach

                </select>
            </div>

            <br>

            <div class="form-group">
                <label for="minibar">Izaberite Zanr </label>
                <select name="zanrID" id="zanrID" class="form-control">
                    @foreach($zanr as $z)
                        <option value="{{$z->zanrID}} ">
                            Autor: {{$z->imeZanra}} 
                        </option>
                    @endforeach

                </select>
            </div>

            <br>

            <div class="form-group">
                <label for="kolicina">Kolicina:</label>
                <input type="text" class="form-control @error('kolicina') is-invalid @enderror" id="kolicina" name="kolicina" placeholder="kolicina">

                @error('kolicina')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>

            <br>

            <div class="form-group">
                <label for="ocena">Ocena</label>
                <input type="number" class="form-control @error('ocena') is-invalid @enderror" id="ocena" name="ocena" placeholder="Ocena">

                @error('ocena')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>

            <br>

            <div class="form-group">
                <textarea rows="4" class="@error('opis') is-invalid @enderror" cols="50" name="opis" id="opis" name="opis" placeholder="Enter text here..."></textarea>
                @error('opis')
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