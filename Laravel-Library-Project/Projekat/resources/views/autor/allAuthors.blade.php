@extends('layouts.app')



@section('content')


<div class="container-fluid">
    <div class="col-md-12" id="izdavac">
        <H1>Svi autori</H1>
    </div>
    @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
        <a href="/autor/autorCreate" class="btn btn-primary">Kreiraj autora </a> <br> <br>    
    @endif

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
                @foreach($autor as $a)

                    <tr>
                        <td>
                            {{$a->autorID}}
                        </td>
                        <td>
                            {{$a->firstName}}
                        </td>
                        <td>
                            {{$a->lastName}}
                        </td>

                        @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))

                            <td class="text-right">
                                <a href="{{route('autor.edit', $a->autorID)}}" class="btn btn-primary">EDIT </a>
                            </td>
                            @if(Auth::user()->privilegeLevel =='ADMINISTRATOR')
                                <td>
                                    <form action="{{route('autor.delete', $a->autorID)}}" method="post">

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

                    {{$autor->links("pagination::bootstrap-4") }}

                </div>
            </div>
        </div>

</div>




@endsection


