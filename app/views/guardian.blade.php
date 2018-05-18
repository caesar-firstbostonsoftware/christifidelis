

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
                <h2>CHISTIFIDELIS Parents/Guardian Helper</h2>
                <h3><center>Year {{$date->year}} - {{$name}}'s latest records</center></h3>
            </div>
            <!--/span-->
<br>

    <div class="container col-md-6">
      
     <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>Subject</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      @foreach($grades as $grade)
      @if($grade->session == $date->year)
      <tr>
        <td>
          @foreach($subjects as $subject)
          @if($grade->subject == $subject->code)
            {{$subject->name}}
          @endif
      @endforeach
        </td>

        <td>
          @if($grade->point < 70)
          <font color="red">
          @else
          <font color="blue">
          @endif 
          {{$grade->point}}
          </font>
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>
    <div class="container col-md-6">
      
     <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>Attendance</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($attendance as $attendances)
      @if($attendances->date->year === $date->year && $attendances->date->month === $date->month)
      <tr>
        <td>
          <p>Present</p>
        </td>
        
        <td>
         <p> {{$attendances->date->toFormattedDateString()}}</p>
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>
            <!--/span-->

    </div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

  </fieldset>


@stop
