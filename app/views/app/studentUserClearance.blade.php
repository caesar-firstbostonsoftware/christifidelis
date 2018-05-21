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
<div class="col-12 text-center bg-success"> <h2>{{ucWords(Session::get('name'))}}'s Clearance Sheet </h2> </div>
<div class="well well-sm">
  Requirements for clearance here...
</div>
<div>
  <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>Teachers/Clearance To Sign</th>
        <th>Signature</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          Name Here...
        </td>

        <td>
          Signature Here...
        </td>

        <td>
          Date Here...
        </td>
      </tr>

    </tbody>
  </table>
</div>
</div>
</div>


@stop


@section("script")

@stop
