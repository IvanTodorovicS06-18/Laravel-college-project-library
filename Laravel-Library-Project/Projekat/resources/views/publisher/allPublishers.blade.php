@extends('layouts.app')



@section('content')


<div class="container-fluid">

    <div class="col-md-12" id="izdavac">    
        <H1>Svi izdavaci</H1>
    </div>
    @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
        <a href="/publisher/publisherCreate" class="btn btn-primary">Kreiraj izdavaca </a> <br> <br>    

    @endif
        <div class="col-md-6">

            <table class="table table-striped table-dark table-bordered" id="datatable">
                <thead class="thead-dark">
                <th>
                    ID
                </th>

                <th>
                    Ime izdavaca
                </th>
                <th>
                    Adresa
                </th>
                <th class="text-right">
                    Email
                </th>

                <th class="text-right">
                    Broj telefona
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
                @foreach($izdavac as $i)

                    <tr>
                        <td>
                            {{$i->izdavacID}}
                        </td>
                        <td>
                            {{$i->imeIzdavaca}}
                        </td>
                        <td>
                            {{$i->adress}}
                        </td>
                        <td>
                            {{$i->email}}
                        </td>
                        <td>
                            {{$i->brojTelefona}}
                        </td>
                        @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
                            <td class="text-right">
                                <a href="{{route('publishers.edit', $i->izdavacID)}}" class="btn btn-primary">EDIT </a>
                            </td>
                            @if(Auth::user()->privilegeLevel =='ADMINISTRATOR')
                                <td>
                                    <form action="{{route('publisher.delete', $i->izdavacID)}}" method="post">

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

                    {{$izdavac->links("pagination::bootstrap-4") }}
                </div>
            </div>
            

        </div>

    </div>



@endsection


