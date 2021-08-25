@extends('layouts.app')



@section('content')


<div class="container">
    <div class="row">
      <div style="display: flex;justify-content: center;align-items: center">
        <h1>Kontakt</h1>
      </div>
    </div>

    <br><br><br>

    <div class="row">
      <div style="display: flex;justify-left: center;align-items: center">
        <h4>Broj telefona: 061-54-68-124</h4>
      </div>
    </div>

    <div class="row">
        <div style="display: flex;justify-content: left;align-items: center">
          <h4>Email: projekat@gmail.com</h4>
        </div>
    </div>

    <br><br><br>

    <div class="row">
        <div style="display: flex;justify-content: center;align-items: center">
          <h1>Mapa</h1>
        </div>
    </div>

    <div class="row">
        <div style="display: flex;justify-content: center;align-items: center">
          <h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3007421997722!2d20.45758061580434!3d44.815437484517055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab26947331d%3A0x67586e044140009b!2z0JrQvdC10LfQsCDQnNC40YXQsNC40LvQsCA2LCDQkdC10L7Qs9GA0LDQtCAxMTAwMA!5e0!3m2!1ssr!2srs!4v1627757192961!5m2!1ssr!2srs" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div style="display: flex;justify-content: center;align-items: center">
          <h1>Radno vreme</h1>
        </div>
    </div>

    <br><br>

    <div class="row">
        <div style="display: flex;justify-content: center;align-items: center">
          <p>Ponedeljak - Petak: od 08h do 20h</p>
        </div>
    </div>

    <div class="row">
        <div style="display: flex;justify-content: center;align-items: center">
          <p>Subota: od 09h do 16:30h</p>
        </div>
    </div>

    <div class="row" id="nedelja">
        <div style="display: flex;justify-content: center;align-items: center">
          <p>Nedelja: neradni dan</p>
        </div>
    </div>

</div>







@endsection