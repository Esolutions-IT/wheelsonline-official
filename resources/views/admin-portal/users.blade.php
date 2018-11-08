@extends('admin-portal.adminlayout')
@section('admincontent')
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-default pull-right" style="margin-top:-15px;"><i class="glyphicon glyphicon glyphicon-download"></i> <strong>Exporteer naar Excel</strong></a>
                        <a href="#" class="btn btn-default pull-right" style="margin-top:-15px;"><i class="glyphicon glyphicon-file"></i> <strong>Exporteer naar XML</strong></a>
                        <a href="{{URL::to('/admin-portal/users/create')}}" class="btn btn-default pull-right" style="margin-top:-15px;"><i class="glyphicon glyphicon-pencil"></i> <strong>Nieuwe Toevoegen</strong></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <form action="" method="get" id="frmsearch" class="form-horizontal">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control" placeholder="Zoeken bij ID of Naam" id="search">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>

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

                                            <th>Acties</th>

                                        </tr>

                                        </thead>

                                        <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>

                                                <td>{{$user->name}} {{$user->lastname}}</td>

                                                <td>{{$user->telefoon}}</td>

                                                <td>{{$user->email}}</td>

                                                <td>{{$user->straat}}</td>

                                                <td>{{$user->plaats}}, {{$user->postcode}}</td>

                                                <td>{{$user->user_level}}</td>

                                                <td>{{$user->created_at}}</td>

                                                <td>
                                                    <span class="input-group-btn">
                                                        <a href="{{url('admin-portal/users/' .$user->id)}}">
                                                        <button class="btn btn-default" type="submit">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                        </button>
                                                        </a>
                                                    </span>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                        </button>
                                                    </span>
                                                </td>

                                            </tr>

                                        @endforeach
                                        </tbody>

                                    </table>
                                    <?php echo $users->render()?>

                                </div>

                            </div>

                        </div>

                    </div>

                                </div>


                            @endsection