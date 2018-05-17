

@extends('layouts.master1')

@section('content')
<br>
<div class="container-fluid">
    <div class="row">


            <div class="col-md-12">
                <h2>{{$institute->name}}</h2>
            </div>
            <!--/span-->
<br>


            <div class="well center" id="divshadow" align="center">
                @if (Session::get('message'))
                    <div class="alert alert-success text-center">
                        <button data-dismiss="alert" class="close" type="button">×</button>
                        <strong> {{ Session::get('message')}} </strong>

                    </div>
                @endif
                <img src="img/logo.png" style="height:120px;">

                <form class="form-horizontal" action="users/login" method="post">
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <input type="text" class="form-control" name="login" placeholder="Username">
                        </div>
                        <div class="clearfix"></div><br>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="clearfix"></div>

                    
                        <div class="clearfix"></div>
                        @if (isset($error))
                                <div class="alert alert-danger">
                                <button data-dismiss="alert" class="close" type="button">×</button>
                                <strong>{{ $error }}.</strong>
                            </div>
                        @endif


                        <p class="center col-md-5">
                            <button type="submit" class="btn btn-success">Login</button>
                        </p>
                    </fieldset>
                </form>
            </div>
            <!--/span-->

    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->



@stop
