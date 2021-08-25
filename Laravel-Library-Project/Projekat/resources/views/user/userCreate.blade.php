@extends('layouts.app')



@section('content')

<h1>Kreiraj korisnika</h1>


<form method ="POST" action="/user/store">

    @csrf
    

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label for="firstName">Ime:</label>
                <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="ime">

                @error('firstName')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                @enderror

            </div>
            <br>
            
            <div class="form-group">
                <label for="lastName">Prezime:</label>
                <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="Prezime">

                @error('lastName')
                        <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">

                @error('password')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
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
                <label for="minibar">Izaberite tip usera: </label>
                <select name="privilegeLevel" id="privilegeLevel" class="form-control">
                    
                        <option value="ADMINISTRATOR">Administrator</option>
                        <option value="EDITOR">Editor</option>
                        <option value="USER" selected>Users</option>

                </select>
            </div>
            <br>
            <input class="btn btn-primary" type="submit">


        </div>



    </div>









</form>








@endsection