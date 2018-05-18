

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
    <div class="row">


            <div class="col-md-12" align="center">
                <h2>CHISTIFIDELIS News and Updates</h2>
            </div>
            <!--/span-->
<br>

<div class="form-control" style="box-shadow: 5px 10px 8px #888888; margin-top: 30px;">
 <fieldset>
  <legend style="text-align: center"> <font color="green">News And Updates</font></legend>
  <div class="container-fluid">
  @foreach ($news as $new)  
  <div class="row">
   <div><p  style="text-align: right;"><sub><font color="red"><i> {{$new->created_at->diffForHumans($date)}}</i></font></sub></p>
<a href="{{ url('/news-updates/show/'.$new->id) }}"> {{str_limit($new->news, $limit = 400, $end = '...')}}</a></div>
</div><br>
<hr>
  @endforeach
<!-- <div class="row"> 
  <div class="col-sm">Soccer</div><br>
  <div class="col-sm">Grade 10 - 5 sections</div><br>
  <div class="col-sm">Grade 11 - 5 sections</div><br>
  <div class="col-sm">Grade 12 - 5 sections</div><br>
</div>-->
</div>

</fieldset>
</div>

            <!--/span-->

    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

  </fieldset>


@stop
