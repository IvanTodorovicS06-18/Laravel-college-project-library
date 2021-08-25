@extends('layouts.app')



@section('content')


<div class="container">

    <h1>Ime knjige: {{$knjige->imeKnjige}}</h1>
    <h4>Ime i prezime autora: {{$knjige->Autor->firstName}} {{$knjige->Autor->lastName}}</h4>
    <h4>Izdavac: {{$knjige->Izdavac->imeIzdavaca}}</h4>
    <h4>Zanr: {{$knjige->Zanr->imeZanra}}</h4>
    <h4>Kolicina: {{$knjige->kolicina}}</h4>
    <h4>Ocena: {{$knjige->ocena}}</h4>
    <h4><b> Opis: {{$knjige->opis}} </b></h4>

    @if (!Auth::user() == 0)
      @if ($knjige->kolicina <= 0)
        <h4 style="color: red">Zeljena knjiga nije na stanju</h4>
      @else
        <a href="{{route('createRent', $knjige->knjigaID)}}" class="btn btn-success">Iznajmi </a>  
      @endif
    @else
    <br><br>
        <h4 style="color: red">Morati biti ulogovani da biste iznajmili knjigu</h4>    
    @endif

 
<hr>
</div>

<br><br>

    <div class="container" >
      
      @auth
      <h3 style="text-align: center"> Dodaj post </h3>
      <br><br>
          <form method ="POST" action="/book/storePost">

            @csrf
        
            <div class="row" style="display: flex;justify-content: center;align-items: center">
            
                <div class="col-md-6">
        
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
                        <label for="opis">Komentar:</label>
                        <textarea name="opis" id="opis" cols="30" rows="6" placeholder="Opis....."   class="form-control"> </textarea>
        
                    </div>
                    <br>
                    <br>
                    <div style="display: flex;justify-content: center;align-items: center">
                      <button type="submit" class="btn btn-primary" style="width: 50%;">Post</button>
                    </div>
        
        
                </div>
            </div>
        </form>
        <hr>
        @endauth
        
        <br><br><br>
        
        <h3 style="text-align: center"> Postovi </h3>
        <br><br>
        @foreach ($post as $p)

          <div style=" display: flex;justify-content: center;align-items: center">
            
        
              <div class="card" style="width: 40rem; margin-bottom: 5%; "  >
                  <div class="card-header">
                    <h4>Korisnik: {{$p->User->firstName}} {{$p->User->lastName}}</h4>
                  </div>
                  <div class="card-body">
                    <p class="card-text"> Ime knjige: {{$p->Knjige->imeKnjige}}</p>
                    <p class="card-text"> Komentar: {{$p->opis}}</p> 
                  </div>
                    <div class="card-footer">
                
                    
                
                  </div>
              </div>
            
              <br>
          
            <br>
            <br>
          </div>
        @endforeach

        <div style="display: flex;justify-content: center;align-items: center" id="paginate-number">
          <div class="text-center">

              {{$post->links("pagination::bootstrap-4") }}

          </div>
        </div>
      </div>

@endsection