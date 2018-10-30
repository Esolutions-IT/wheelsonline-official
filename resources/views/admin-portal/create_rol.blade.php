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
    <!-- Name Section -->
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form class="form-horizontal" action="{{URL::to('/admin-portal/rollen/created')}}" method="post">
                {{csrf_field()}}
                <fieldset>

                    <!-- Form Name -->
                    <legend>Nieuwe Gebruikers Rol</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="rol" placeholder="Rol Naam" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="systeem_rol" placeholder="Systeem Naam" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:50px;">Gratis verzending</h6></label>
                            <input type="checkbox" name="gratis_verzending">
                        </div>
                        <div class="col-xs-5">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:50px;">BTW uitzondering</h6></label>
                            <input type="checkbox" name="btw_uitzondering">
                        </div>
                        <div class="col-xs-3">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:88px;">Actief</h6></label>
                            <input type="checkbox" name="actief" checked>
                        </div>
                        <div class="col-xs-5">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:91px;">Systeem rol</h6></label>
                            <input type="checkbox" name="is_systeem_rol">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>


                </fieldset>
            </form>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->




@endsection