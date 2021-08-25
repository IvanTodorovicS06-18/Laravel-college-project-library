@extends('layouts.app')



@section('content')

<h1>Izmeni knjigu</h1>


<form method ="POST" action="/book/update/{{$knjiga->knjigaID}}">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="imeKnjige">Ime knjige:</label>
                <input type="text" class="form-control" id="imeKnjige" name="imeKnjige" placeholder="ime knjige" value="{{$knjiga->imeKnjige}}" readonly>
            </div>
            <br>

            <div class="form-group">
                <label for="autorID">Izaberite autora </label>


                <select name="autorID" class="form-control">

                    @foreach($autor as $a)

                        <option value="{{ $a->autorID }}" {{ ($knjiga->Autor->autorID == $a->autorID) ? 'selected' : '' }}>
                            {{ $a->firstName }} {{$a->lastName}}
                        </option>

                    @endforeach

                </select>



            </div>

            <br>

            <div class="form-group">
                <label for="minibar">Izaberite izdavaca </label>
                <select name="izdavacID" id="izdavacID" class="form-control"  value="{{ $knjiga->izdavacID}}" >
                    @foreach($izdavac as $i)
                    <option value="{{ $i->izdavacID }}" {{ ($knjiga->Izdavac->izdavacID == $i->izdavacID) ? 'selected' : '' }}>
                        {{ $i->imeIzdavaca }}
                    </option>
                    @endforeach

                </select>
            </div>

            <br>

            <div class="form-group">
                <label for="minibar">Izaberite Zanr </label>
                <select name="zanrID" id="zanrID" class="form-control"  value="{{ $knjiga->zanrID}}">
                    @foreach($zanr as $z)
                    <option value="{{ $z->zanrID }}" {{ ($knjiga->Zanr->zanrID == $z->zanrID) ? 'selected' : '' }}>
                        {{ $z->imeZanra }}
                    </option>
                    @endforeach

                </select>
            </div>

            <br>

            <div class="form-group">
                <label for="kolicina">Kolicina:</label>
                <input type="text" class="form-control" id="kolicina" name="kolicina" placeholder="kolicina"  value="{{ $knjiga->kolicina}}">
            </div>

            <br>

            <div class="form-group">
                <label for="ocena">Ocena</label>
                <input type="number" class="form-control" id="ocena" name="ocena" placeholder="Ocena"  value="{{ $knjiga->ocena}}">
            </div>

            <br>

            <div class="form-group">
                <textarea rows="4" cols="50" name="opis" id="opis"> {{$knjiga->opis}}</textarea>
            </div>

            <br>

            <input class="btn btn-primary" type="submit">

        </div>
    </div>
</form>

@endsection