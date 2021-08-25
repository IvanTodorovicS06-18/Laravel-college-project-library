@extends('layouts.app')



@section('content')


<div class="container-fluid">

    <div class="col-md-6">
        <H1>Sve knjige</H1>

    </div>

    <div class="col-md-2" id="search">
        <form action="/search" method="GET">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Pretrazi</button>
                    </span>
            </div>
        </form>
    </div>
    <br>

    @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
        <a href="/book/create" class="btn btn-primary">Kreiraj knjigu </a> <br> <br>    
    @endif
    

    
        <div class="col-md-9">
            
        
            <table class="table table-striped table-dark table-bordered" id="datatable">
                <thead class="thead-dark">
                <th>
                    ID
                </th>

                <th>
                    Ime knjige
                </th>
                <th>
                    Ime i prezime
                </th>
                
                <th class="text-right">
                    Ime izdavaca
                </th>
                <th class="text-right">
                    Zanr
                </th>
                <th class="text-right">
                    Kolicina
                </th>
                <th class="text-right">
                    Ocena
                </th>
                <th class="text-right">
                    Opis
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
                @foreach($knjige as $knjiga)

                    <tr>
                        <td>
                            {{$knjiga->knjigaID}}
                        </td>
                        <td>
                        <a href="{{route('show.Book', $knjiga->knjigaID)}}" id="tableLink">{{$knjiga->imeKnjige}} </a>    
                        </td>
                        <td>
                            {{$knjiga->Autor->firstName}} {{$knjiga->Autor->lastName}}
                        </td>
                        <td class="text-right">
                            {{$knjiga->Izdavac->imeIzdavaca}}
                        </td>
                        <td class="text-right">
                            {{$knjiga->Zanr->imeZanra}}
                        </td>
                        <td class="text-right">
                            {{$knjiga->kolicina}}
                        </td>
                        <td class="text-right">
                            {{$knjiga->ocena}}
                        </td>
                        <td class="text-right">
                            {{$knjiga->opis}}
                        </td>
                        @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
                            <td class="text-right">
                                <a href="{{route('book.edit', $knjiga->knjigaID)}}" class="btn btn-primary">EDIT </a>
                            </td> 
                            @if(Auth::user()->privilegeLevel == 'ADMINISTRATOR')
                                <td>
                                    <form action="{{route('book.delete', $knjiga->knjigaID)}}" method="post">

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

                    {{$knjige->links("pagination::bootstrap-4") }}

                </div>
            </div>

        </div>

    </div>

</div>


@endsection


