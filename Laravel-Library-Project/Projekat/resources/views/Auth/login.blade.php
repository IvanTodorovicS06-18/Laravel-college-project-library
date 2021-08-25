@extends('layouts.app')



@section('content')





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">


                        @if(session('status'))
                            {{session('status')}}
                        @endif

                        

                        <form action="{{route('login')}}" method = "POST">
                            <div class="form-group">
                            @csrf
                            <label for = "email">Email</label>    
                            <input type="email" name = "email" id = "email" placeholder ="your email"  class="form-control" value="{{old('email')}}">
                    
                            @error('email')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                            <br>
                             <br>
                             <div class="form-group">
                            <label for = "password">Password:</label>
                            <input type = "password" name="password" id="password"  class="form-control" placeholder="your password" >
                            @error('password')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                             </div>
                            <br>
                            <div class="form-group">
                            <input type="checkbox" name="remember" id="remember"  class="form-check-input">
                            <label for="remember">Remember me</label>
                            <br>
                            </div>
                            <div style="display: flex;justify-content: center;align-items: center ">
                            <button type="submit"  class="btn btn-primary" style="width:50%; margin-top:5%">Login</button>
                            </div>
                            @if (session('status'))
                                <p>{{ session('status') }}</p>
                           
                            @endif
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
