
@extends('layouts.master2')

@section('content')

<style>


.news {
    -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 2s; /* Firefox < 16 */
        -ms-animation: fadein 2s; /* Internet Explorer */
         -o-animation: fadein 2s; /* Opera < 12.1 */
            animation: fadein 2s;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}


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
  <div class="row news">
   <div><sup><font color="red"><i> {{$news->created_at->diffForHumans($date)}}</i></font></sup><br> 
 {{$news->news}}
<br><br>
<center><a href="http://cebuwebsites.com/news-updates" class="btn btn-success btn-sm form-control" role="button"> BACK</a></div></center>
</div>
</div>

</fieldset>
</div>

            <!--/span-->

    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

  </fieldset>


@stop
