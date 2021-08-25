@extends('layouts.app')

<link href="https://code.jquery.com/jquery-3.5.1.js">
<link href="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js">
<link href="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js">

@section('content')

<link href="//cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

<div class="container-fluid">

    <div class="col-md-6">
        <H1>Izdavanje</H1>

    </div>

   

    <br> <br>

        <div class="col-md-6">

            <table class="table table-striped table-dark table-bordered" id="datatable">
                <thead class="thead-dark">
                <th>
                    ID
                </th>
                <th>
                    Ime, prezime Korisnika
                </th>
                <th>
                    Ime knjige
                </th>
                <th>
                    Datum izdavanja
                </th>
                
                <th class="text-right">
                    Datum vracanja
                </th>
                <th class="text-right">
                    
                </th>

                
                </thead>
                <tbody>
                @foreach($rentBook as $r)

                    <tr>
                        <td>
                            {{$r->id}}
                        </td>
                        <td>
                            {{$r->User->firstName}} {{$r->User->lastName}}
                        </td>
                    
                        <td class="text-right">
                            {{$r->Knjige->imeKnjige}}
                        </td>
                        <td class="text-right">
                            {{$r->datumIzdavanja}}
                        </td>
                        <td class="text-right">
                            {{$r->datumVracanja}}
                        </td>

                        <td>
                            @if($r->datumVracanja == null)

                                <form action="{{route('rent.update', $r->id)}}" method="post">

                                    @csrf
                                    @method('PUT')
                                    
                                    <button type="submit" class="btn btn-primary">Vrati knjigu</button>

                                </form>
                            @else

                            <h5>Knjiga je vracena</h5>

                            @endif
                            

                        </td>

                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


    <script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
    
    </script>


@endsection


