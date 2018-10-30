@extends('admin-portal.adminlayout')
@section('admincontent')
    <style>
        input[type="checkbox"]{
            position: relative;
            width:40px;
            height:20px;
            -webkit-appearance: none;
            background: #c6c6c6;
            outline: none!important;
            box-shadow: inset 0 0 5px rgba(0,0,0,.2);
            border-radius: 20px;
            transition: .5s;
        }
        input:checked[type="checkbox"]{
            background: #03a9f4;
        }
        input[type="checkbox"]:before{
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 20px;
            top: 0;
            left: 0;
            background: #fff;
            transform: scale(1.1);
            box-shadow: 0 2px 5px rgba(0,0,0,.2);
            transition: .5s;
        }
        input:checked[type="checkbox"]:before{
            Left: 20px;
        }
    </style>
    @foreach($roldata as $rollen)
    <!-- Name Section -->
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form class="form-horizontal" action="{{URL::to('/admin-portal/rollen/geedit')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$rollen->rol_id}}" />
                <fieldset>

                    <!-- Form Name -->
                    <legend>Nieuwe Gebruikers Rol</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="rol" placeholder="Rol Naam" class="form-control" value="{{$rollen->rol_naam}}">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="systeem_rol" placeholder="Systeem Naam" class="form-control" value="{{$rollen->rol_naam}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:50px;">Gratis verzending</h6></label>
                        @if($rollen->gratis_verzending == 'on')
                            <input type="checkbox" name="gratis_verzending" checked>
                        @else
                            <input type="checkbox" name="gratis_verzending">
                        @endif
                        </div>
                        <div class="col-xs-5">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:50px;">BTW uitzondering</h6></label>
                        @if($rollen->btw_uitzondering == 'on')
                            <input type="checkbox" name="btw_uitzondering" checked>
                        @else
                            <input type="checkbox" name="btw_uitzondering">
                        @endif
                        </div>
                        <div class="col-xs-3">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:88px;">Actief</h6></label>
                        @if($rollen->actief == 'on')
                            <input type="checkbox" name="actief" checked>
                        @else
                            <input type="checkbox" name="actief">
                        @endif
                        </div>
                        <div class="col-xs-5">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:91px;">Systeem rol</h6></label>
                        @if($rollen->in_systeem_rol == 'on')
                            <input type="checkbox" name="is_systeem_rol" checked>
                        @else
                            <input type="checkbox" name="is_systeem_rol">
                        @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="pull-right">
                                <button type="reset" class="btn btn-danger">Verwijder</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>


                </fieldset>
            </form>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    @endforeach
@endsection