@if(count($week))
<div class="row detail">
    <div class="col-md-12">
        <div class="posts">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>N<sup>0</sup></th>
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Telefoon</th>
                        <th>Email</th>
                        <th>Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($week as $key => $weeks)
                        <tr>
                            <td class="id">{{$key+1}}</td>
                            <td>{{$weeks->id}}</td>
                            <td>{{$weeks->name}}</td>
                            <td>{{$weeks->telefoon}}</td>
                            <td>{{$weeks->email}}</td>
                            <td>{{$weeks->created_at}}</td>
                            <td class="none">
                                <button class="btn btn-info btn-sm" value="{{$weeks->id}}" id="view">
                                    <i class="glyphicon glyphicon-eye-open"></i>View
                                </button>
                            <?php if(Auth::guard('admin')->user()->user_level== 'Admin') :?>
                                <button class="btn btn-danger btn-sm">
                                    <i class="glyphicon glyphicon-trash"></i>Remove
                                </button>
                            <?php endif ?>
                            </td>
                            {{--<td><span class="label label-success">COMPLETED</span></td>--}}
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10">{{$week->render()}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@else
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <b>{{$search}}</b> was not fount
                </div>
            </div>
        </div>
    </div>
@endif