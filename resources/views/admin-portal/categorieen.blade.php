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

                                <th>Categorie Naam</th>

                                <th>Gepubliceerd</th>

                                <th>Acties</th>

                            </tr>

                            </thead>

                            <tbody>
                                @foreach($categorie as $cat)
                                        <tr>
                                            <td>{{$cat->category_id}}</td>

                                            <td>{{$cat->category_name}}</td>

                                            @if($cat->gepubliceerd == 'on')
                                                <td style="text-align: center;">&#10004;</td>
                                            @else
                                                <td style="text-align: center;">&#x2716;</td>
                                            @endif

                                            <td style="color:#2176ff"><a href=""><b>Bewerken</b></a></td>

                                        </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <?php echo $categorie->render() ?>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection