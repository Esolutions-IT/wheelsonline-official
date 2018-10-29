@extends('admin-portal.adminlayout')
@section('admincontent')
<style>
    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }
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

    #myDIV {
        text-align: center;
        display:none;
        margin-top:-70px;
    }
</style>
    @foreach($userdata as $user)
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1>{{$user->name}} {{$user->lastname}}</h1></div>
            <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="../../{{$user->profile_picture}}" style="width: 100px;"></a></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->

                <ul class="list-group">
                    <li class="list-group-item text-muted">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Lid sinds</strong></span> {{$user->created_at}}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Volledige naam</strong></span> {{$user->name}} {{$user->lastname}}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Gebruikers rol</strong></span> {{$user->user_level}}</li>

                </ul>

                <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="http://{{$user->website}}">{{$user->website}}</a></div>
                </div>


                <ul class="list-group">
                    <li class="list-group-item text-muted">AANTAL</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Orders</strong></span>{{$count_orders}}</li>
                    {{--<li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>--}}
                    {{--<li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>--}}
                    {{--<li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>--}}
                </ul>


            </div><!--/col-3-->
            <div class="col-sm-9">

                <ul class="nav nav-tabs" id="myTab">
                    <li><a href="#home" data-toggle="tab">Orders</a></li>
                    <li><a href="#messages" data-toggle="tab">Gegevens</a></li>
                    <li><a href="#settings" data-toggle="tab">Gegevens aanpassen</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Order</th>
                                    <th>Order status</th>
                                    <th>Betaal status</th>
                                    <th>Verzendstatus</th>
                                    <th>Klant </th>
                                    <th>Aangemaakt op</th>
                                    <th>Order totaal</th>
                                </tr>
                                </thead>
                                <tbody id="items">
                                @foreach($orderdata as $order)
                                <tr>
                                    <td>{{$order->order_id}}</td>
                                    <td>{{$order->order_naam}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->betaal_status}}</td>
                                    <td>{{$order->verzend_status}}</td>
                                    <td>{{$order->klant}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->order_totaal}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div><!--/table-resp-->

                        <hr>

                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="messages">

                        <div class="container emp-profile">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-img">
                                            <img src="../../{{$user->profile_picture}}" alt=""/>
                                            <div class="file btn btn-lg btn-primary">
                                                Change Photo
                                                <input type="file" name="file"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="profile-head">
                                            <h5>
                                                {{$user->name}} {{$user->lastname}}
                                            </h5>
                                            <h6>
                                                {{$user->telefoon}}
                                            </h6>
                                            <p class="proile-rating"><span>{{$user->user_level}}</span></p>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#over" role="tab" aria-controls="home" aria-selected="true">Over</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Adres</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-work">
                                            <p>LINKS</p>
                                            <a href="https://{{$user->website}}">{{$user->website}}</a><br/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tab-content profile-tab" id="myTabContent">
                                            <div class="tab-pane fade show active" id="over" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Volledige naam</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->name}} {{$user->lastname}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->email}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Telefoon</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->telefoon}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Leeftijd</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->leeftijd}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Geboorte jaar</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->geboorte_datum}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Straat</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->straat}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Plaats</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->plaats}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Postcode</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>{{$user->postcode}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--/tab-pane-->
                    <div class="tab-pane" id="settings">


                        <hr>
                        <form class="form" action="{{URL::to('/admin-portal/users/update')}}" method="post" id="registrationForm">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$user->id}}" />
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Voornaam</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{$user->name}}" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Achternaam</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{$user->lastname}}" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Telefoon Nummer</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{$user->telefoon}}" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobiele Nummer</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="{{$user->email}}" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Straat + Huisnummer</h4></label>
                                    <input type="text" class="form-control" id="location" name="straat" value="{{$user->straat}}" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Plaats</h4></label>
                                    <input type="text" class="form-control" id="location" name="plaats" value="{{$user->plaats}}" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Postcode</h4></label>
                                    <input type="text" class="form-control" id="location" name="postcode" value="{{$user->postcode}}" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:50px;">Is BTW vrijgesteld</h6></label>
                                    @if($user->btw_vrijgesteld == 'on')
                                        <input type="checkbox" name="btw" checked>
                                    @else
                                        <input type="checkbox" name="btw">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:88px;">Nieuwsbrief</h6></label>
                                    @if($user->nieuwsbrief == 'on')
                                        <input type="checkbox" name="nieuw" checked>
                                    @else
                                        <input type="checkbox" name="nieuw">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="email"><h6 style="font-size:14px; margin-top:7px; padding-right:129px;">Actief</h6></label>
                                    @if($user->actief == 'on')
                                        <input type="checkbox" name="actief" checked>
                                    @else
                                        <input type="checkbox" name="actief">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-2">
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>

                                </div>
                            </div>
                        </form>
                                <div class="form-group">
                                    <div class="col-xs-2">
                                        <button class="btn btn-lg btn-danger" onclick="myFunction()"><i class="glyphicon glyphicon-trash"></i>Verwijder</button>
                                    </div>
                                </div>

                        <div class="col-xs-8">

                            <div id="myDIV">
                                Weet u zeker dat u <b>{{$user->name}} {{$user->lastname}}</b> wilt verwijderen?<br />
                                <form action="{{URL::to('/admin-portal/users/delete')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$user->id}}" />
                                    <button class="btn btn-success" type="submit"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-danger" onclick="cancel()" type="reset"><i class="fa fa-times"></i></button>
                                </form>
                            </div>
                        </div>

                        {{--</form>--}}
                    </div>

                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display == "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        function cancel() {
            var x = document.getElementById("myDIV");
            if (x.style.display == "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    @endforeach
@endsection