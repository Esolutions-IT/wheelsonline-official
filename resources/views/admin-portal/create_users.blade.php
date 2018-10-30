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
            <form class="form-horizontal" action="{{URL::to('/admin-portal/users/created')}}" method="post">
                {{csrf_field()}}
                <fieldset>

                    <!-- Form Name -->
                    <legend>Persoonlijke informatie</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="firstname" placeholder="Voornaam" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="lastname" placeholder="Achternaam" class="form-control">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="date" placeholder="Geboorte datum" name='gdatum' class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <select type="gender" placeholder="Gebruikers Rol" name='rol' class="form-control">
                                <option value="-">-</option>
                                @foreach($rols as $rollen)
                                    <option value="{{$rollen->rol_naam}}">{{$rollen->rol_naam}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <select type="gender" placeholder="Gender" name="gender" class="form-control">
                                <option value="man">Man</option>
                                <option value="vrouw">Vrouw</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:50px;">Is BTW vrijgesteld</h6></label>
                            <input type="checkbox" name="btw">
                        </div>
                        <div class="col-xs-5">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:129px;">Actief</h6></label>
                            <input type="checkbox" name="actief" checked>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:88px;">Nieuwsbrief</h6></label>
                            <input type="checkbox" name="nieuw">
                        </div>
                    </div>

                    <legend>Contact informatie</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-5">
                            <input type="text" name="telefoon" placeholder="Telefoon nummer" class="form-control">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="mobiel" placeholder="Mobiele nummer" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" name="email" placeholder="Email adres" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1">
                            <p style="margin-top:8px;">www.  |</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="website" placeholder="example.nl" class="form-control">
                        </div>
                    </div>
                    <!-- Address Section -->
                    <!-- Form Name -->
                    <legend>Adres Informatie</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" name="straat" placeholder="Straat + Huisnummer" class="form-control">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="text" name="plaats" placeholder="Plaats" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="state" placeholder="Land" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="postcode" placeholder="Postcode" class="form-control">
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
                    <!-- Emergency Contact Section -->
                    <!-- Form Name -->

                </fieldset>
            </form>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->


    <!-- Has Sibling Modal -->
    <div class="modal fade" id="sibling" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Select His/Her Sibling</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="text" name="filter" style="border-radius: 10px" placeholder="filter">
                    </div>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <tr>
                                <th> </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>Tam</td>
                                <td>VuTran</td>
                                <td>3085 Aspen Dr Coonrapid MN 44532</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>Thuy-Sa</td>
                                <td>Truong</td>
                                <td>13231 Cliff Ave Burnsville, MN 55337</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>Han</td>
                                <td>Bui</td>
                                <td>1341 Trailer Tl Lakeville, MN 55321</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" aria-hidden="true" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Done</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- Payment Modal -->
    <div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Payment</h4>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-horizontal" role="form">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label>Viet Ngu Payment</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="vnPayment" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label>Math Payment</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="mathPayment" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label>Other Payment</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="otherPayment" placeholder="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" aria-hidden="true" style="width: 100%;">
                                    <span class="glyphicon glyphicon-ok-sign"></span>  Done</button>
                            </div>
                        </form>
                    </div>  <!-- div class="col-md-8 col-md-offset-1" -->
                </div>  <!-- div class="row" -->
            </div><!-- /.modal-content -->
        </div><!-- div class="modal-dialog -->
    </div>
@endsection