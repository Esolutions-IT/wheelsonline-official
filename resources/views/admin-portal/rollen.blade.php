@extends('admin-portal.adminlayout')
@section('admincontent')
    <div class="row">
        <div class="col-md-12">
            <a href="{{URL::to('/admin-portal/rollen/create')}}" class="btn btn-default pull-right" style="margin-top:-15px;"><i class="glyphicon glyphicon-pencil"></i> <strong>Nieuwe Toevoegen</strong></a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <table class="table table-bordered table-hover">

                            <thead>

                            <tr>

                                <th>ID</th>

                                <th>Gebruikers rol</th>

                                <th>Gratis verzending</th>

                                <th>BTW uitzondering</th>

                                <th>Actief</th>

                                <th>Is systeem rol</th>

                                <th>Acties</th>

                            </tr>

                            </thead>

                            <tbody>
                            @foreach ($rols as $rollen)
                                <tr>
                                    <td>{{$rollen->rol_id}}</td>

                                    <td>{{$rollen->rol_naam}}</td>
                                @if($rollen->gratis_verzending == 'on')
                                        <td style="text-align: center;">&#10004;</td>
                                @else
                                        <td style="text-align: center;">&#x2716;</td>
                                @endif

                                @if($rollen->btw_uitzondering == 'on')
                                    <td style="text-align: center;">&#10004;</td>
                                @else
                                    <td style="text-align: center;">&#x2716;</td>
                                @endif

                                @if($rollen->actief == 'on')
                                    <td style="text-align: center;">&#10004;</td>
                                @else
                                    <td style="text-align: center;">&#x2716;</td>
                                @endif

                                @if($rollen->in_systeem_rol == 'on')
                                    <td style="text-align: center;">&#10004;</td>
                                @else
                                    <td style="text-align: center;">&#x2716;</td>
                                @endif

                                    <td style="color:#2176ff"><a href="{{URL::to('/admin-portal/rollen/edit/' .$rollen->rol_id)}}"><b>Bewerken</b></a></td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection