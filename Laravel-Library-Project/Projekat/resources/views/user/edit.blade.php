@extends('layouts.app')



@section('content')

<h1>Izmeni korisnika</h1>


<form method ="POST" action="/user/update/{{$user->userID}}">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-md-4">

        <h3>{{$user->firstName}} {{$user->lastName}}</h3>
            <div class="form-group">
                <label for="adress">Adresa:</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Adresa" value="{{$user->adress}}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$user->email}}">
            </div>
            <br>
            <div class="form-group">
                <label for="minibar">Izaberite tip usera: </label>
                <select name="privilegeLevel" id="privilegeLevel" class="form-control" value="{{$user->privilegeLevel}}">
                    
                        <option {{ ($user->privilegeLevel) == 'ADMINISTRATOR' ? 'selected' : '' }} value="ADMINISTRATOR">Administrator</option>
                        <option {{ ($user->privilegeLevel) == 'EDITOR' ? 'selected' : '' }} value="EDITOR">Editor</option>
                        <option {{ ($user->privilegeLevel) == 'USER' ? 'selected' : '' }} value="USER">Users</option>

                </select>
            </div>
            <br>
            <br>
            <br>
            <input class="btn btn-primary" type="submit">


        </div>



    </div>









</form>








@endsection