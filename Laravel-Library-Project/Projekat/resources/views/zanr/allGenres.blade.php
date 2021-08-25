@extends('layouts.app')



@section('content')


<div class="container-fluid">
    <div class="col-md-12" id="izdavac">
        <H1>Svi zanrovi</H1>
    </div>
    @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
        <a href="/zanr/genreCreate" class="btn btn-primary">Kreiraj zanr </a> <br> <br>    
    @endif

        <div class="col-md-6">

            <table class="table table-striped table-dark table-bordered" id="datatable">
                <thead class="thead-dark">
                <th>
                    ID
                </th>

                <th>
                    ime zanra
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
                @foreach($zanr as $z)

                    <tr>
                        <td>
                            {{$z->zanrID}}
                        </td>
                        <td>
                            {{$z->imeZanra}}
                        </td>
                    
                        @if (Auth::user() && (Auth::user()->privilegeLevel == 'ADMINISTRATOR' || Auth::user()->privilegeLevel == 'EDITOR'))
                            <td class="text-right">
                                <a href="{{route('zanr.edit', $z->zanrID)}}" class="btn btn-primary">EDIT </a>
                            </td>
                            @if(Auth::user()->privilegeLevel =='ADMINISTRATOR')
                                <td>
                                    <form action="{{route('zanr.delete', $z->zanrID)}}" method="post">

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

                    {{$zanr->links("pagination::bootstrap-4") }}

                </div>
            </div>

        </div>

</div>




@endsection


