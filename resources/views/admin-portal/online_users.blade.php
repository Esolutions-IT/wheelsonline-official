@extends('admin-portal.adminlayout')
@section('admincontent')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <table class="table table-bordered table-hover">

                            <thead>

                            <tr>

                                <th>ID</th>

                                <th>Volledige Name</th>

                                <th>Telefoon</th>

                                <th>Email</th>

                                <th>Adres</th>

                                <th>Plaats + Postcode</th>

                                <th>Type</th>

                                <th>Aangemaakt op</th>

                            </tr>

                            </thead>

                            <tbody>
                            @if($online)
                                @foreach($online as $on)
                                    @if($on->isOnline())
                                        <tr>
                                            <td>{{$on->id}}</td>

                                            <td>{{$on->name}} {{$on->lastname}}</td>

                                            <td>{{$on->telefoon}}</td>

                                            <td>{{$on->email}}</td>

                                            <td>{{$on->straat}}</td>

                                            <td>{{$on->plaats}}, {{$on->postcode}}</td>

                                            <td>{{$on->user_level}}</td>

                                            <td>{{$on->created_at}}</td>

                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection