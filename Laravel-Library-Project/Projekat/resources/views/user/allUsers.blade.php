@extends('layouts.app')



@section('content')


<div class="container-fluid">
    <div class="col-md-12" id="izdavac">
        <H1>Svi korisnici</H1>
    </div>

    <a href="/user/userCreate" class="btn btn-primary">Kreiraj korisnika </a> <br> <br>    


        <div class="col-md-6">

            <table class="table table-striped table-dark table-bordered" id="datatable">
                <thead class="thead-dark">
                <th>
                    ID
                </th>

                <th>
                    Ime
                </th>
                <th>
                    Prezime
                </th>
                <th class="text-right">
                    Adresa
                </th>
                
                <th class="text-right">
                    Email
                </th>

                <th class="text-right">
                    Tip korisnika
                </th>
                @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
                    <th class="text-right">
                        Edit
                    </th>
                    @if(Auth::user()->privilegeLevel =='ADMINISTRATOR')
                        <th class="text-right">
                            Delete
                        </th>
                    @endif
                @endif
                </thead>
                <tbody>
                @foreach($user as $u)

                    <tr>
                        <td>
                            {{$u->userID}}
                        </td>
                        <td>
                            {{$u->firstName}}
                        </td>
                        <td>
                            {{$u->lastName}}
                        </td>
                        <td>
                            {{$u->adress}}
                        </td>
                        <td>
                            {{$u->email}}
                        </td>
                        <td>
                            {{$u->privilegeLevel}}
                        </td>

                        @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
                            <td class="text-right">
                                <a href="{{route('user.edit', $u->userID)}}" class="btn btn-primary">EDIT </a>
                            </td>
                            @if(Auth::user()->privilegeLevel =='ADMINISTRATOR')
                                <td>
                                    <form action="{{route('user.delete', $u->userID)}}" method="post">

                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                </td>
                            @endif
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>

        

            <div style="display: flex;justify-content: center;align-items: center" id="paginate-number">
                <div class="text-center">

                    {{$user->links("pagination::bootstrap-4") }}

                </div>
            </div>

        </div>

</div>




@endsection


