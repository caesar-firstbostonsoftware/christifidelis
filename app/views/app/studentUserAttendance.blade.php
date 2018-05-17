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
<div class="col-12 text-center bg-success"> <h2>{{ucWords(Session::get('name'))}}'s Attendance Sheet </h2> </div>
<div class="well well-sm">
@if($countattendance)
Number of Absent/s: {{$countattendance}}
@else
No Absent/s
@endif
</div>
<div>
  <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>Absents</th>
        <th>Dates</th>
      </tr>
    </thead>
    <tbody>
      @foreach($attendances as $attendance)
      <tr>
        <td>
          {{$attendance->Absent}}
        </td>

        <td>
          {{$attendance->updated_at->format('m/d/Y');}}
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
