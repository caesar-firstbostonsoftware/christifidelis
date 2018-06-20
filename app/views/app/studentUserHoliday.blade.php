Editing:  
/home/ggoston/public_html/cebuwebsites.com/app/views/app/studentUserClearance.blade.php
 Encoding:       

@extends('layouts.master')
@section("style")
<link href='<?php echo url();?>/css/custom.min.css' rel='stylesheet'>
<link href='<?php echo url();?>/font-awesome/css/font-awesome.min.css' rel='stylesheet'>

<style>
.fc-today{
  background-color: #2AA2E6;
  color:#fff;


}
.fc-button-today
{
  display: none;
}
.green{
  color: #1ABB9C;
}

</style>
@stop

@section('content')
<div class="container-fluid">
<div class="row">  
<div class="col-12 text-center bg-success"> <h2>{{ucWords(Session::get('inName'))}}' Holidays Dates </h2> </div>
<div>
  <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>Description</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      
@foreach($holidays as $holiday)
<tr>
        <td>
          {{$holiday->description}}
        </td>


        <td>
          {{Carbon\Carbon::parse($holiday->holiDate)->format('m-d-Y')}}

        </td>
</tr>
@endforeach
      

    </tbody>
  </table>
</div>
</div>
</div>


@stop


@section("script")

@stop

