

@extends('layouts.master2')

@section('content')

<style>
        fieldset 
    {
        border: 1px solid #ddd !important;
        margin: 0;
        xmin-width: 0;
        padding: 10px;       
        position: relative;
        border-radius:4px;
        background-color:#f5f5f5;
        padding-left:10px!important;
    }   
    
        legend
        {
            font-size:14px;
            font-weight:bold;
            margin-bottom: 0px; 
            width: 35%; 
            border: 1px solid #ddd;
            border-radius: 4px; 
            padding: 5px 5px 5px 10px; 
            background-color: #ffffff;
        }
</style>

<div class="container-fluid">
              <div class="col-md-12" align="center">
                <h2>CHISTIFIDELIS Parents/Guardian Helper</h2>
            </div>
<div class="container">
<form class="form-horizontal" action="/parents-guardian" method="post">
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="input-group input-group-lg center col-md-6">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <input type="text" class="form-control" name="firstName" placeholder="First Name">
                        </div>
                        <div class="clearfix"></div><br>

                        <div class="input-group input-group-lg center col-md-6">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
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
                            <button type="submit" class="btn btn-success form-control">Search Your Son's Performance</button>
                        </p>
                    </fieldset>
                </form>
              </div>
</div>

<br>
            <!--/span-->

    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

  </fieldset>


@stop
