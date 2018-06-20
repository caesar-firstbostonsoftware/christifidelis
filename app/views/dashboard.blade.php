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


/* unvisited link */
a.red:link {
    color: red;
}

/* visited link */
a.red:visited {
    color: red;
}

/* mouse over link */
a.red:hover {
    color: hotpink;
}

/* selected link */
a.red:active {
    color: blue;
}

/* unvisited link */
a.green:link {
    color: green;
}

/* visited link */
a.green:visited {
    color: green;
}

/* mouse over link */
a.green:hover {
    color: hotpink;
}

/* selected link */
a.green:active {
    color: blue;
}

/* unvisited link */
a.orange:link {
    color: orange;
}

/* visited link */
a.orange:visited {
    color: orange;
}

/* mouse over link */
a.orange:hover {
    color: hotpink;
}

/* selected link */
a.orange:active {
    color: blue;
}

</style>
@stop
@section('content')
@if (Session::get('accessdined'))
<div class="alert alert-danger">
  <button data-dismiss="alert" class="close" type="button">×</button>
  <strong>Process Failed.</strong> {{ Session::get('accessdined')}}

</div>
@endif
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <!-- /top tiles -->
    @if (Session::get('userRole')!="Student")  
    <div class="row tile_count text-center">
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-2x fa-home green"></i> Sections</span>
        <div class="count "><a href="/class/list" class="red">{{$total['class']}}</a></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-2x fa-users green"></i> Students</span>
        <div class="count blue"><a href="/student/list" class="green">{{$total['student']}}</a></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-2x fa-file green"></i> Subjects</span>
        <div class="count yellow"><a href="/subject/list" class="orange">{{$total['subject']}}</a></div>
      </div>
    </div>
    <div class="row tile_count text-center">
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-2x fa-edit green"></i> Teachers/Staffs</span>
        <div class="count red"><a href="/teacher/list" class="red">{{$total['attendance']}}</a></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-2x fa-pencil green"></i> Class Off</span>
        <div class="count blue"><a href="/class-off" class="green">{{$total['classoff']}}</a></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-2x fa-book green"></i> Holidays</span>
        <div class="count yellow"><a href="/student/holiday" class="orange">{{$total['holiday']}}</a></div>
      </div>
    </div>
    <!-- /top tiles -->
    @else
    <div class="container">
      <h2>Current Year {{$date->year}}</h2>
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
    
    <div class="container">
      @foreach($gradeshistories as $gradeshistory)
      @if($gradeshistory->session != $date->year)
      <div class="well">
      <h2>History {{$gradeshistory->session}}</h2>
     <table class="table table-striped">
    <thead>
      <tr class="info">
        <th>Subject</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      @foreach($grades as $grade)
      @if($grade->session == $gradeshistory->session)
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
  @endif
  @endforeach
</div>


    @endif
    <!-- Graph start -->
    @if (Session::get('userRole')!="Student") 
  <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Accounting Report<small>(Monthly)</small></h2>
            <label class="total_bal">
              Balance: {{$balance}}
            </label>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
            <canvas height="136" id="lineChart" width="821" style="width: 821px; height: 136px;"></canvas>
          </div>
        </div>
      </div>

    </div>

  </div>
</div> 
@endif

@stop
@section("script")

<script src="<?php echo url();?>/js/Chart.min.js"></script>

<script>
Chart.defaults.global.legend = {
  enabled: false
};

// Line chart
   var ctx = document.getElementById("lineChart");
   var lineChart = new Chart(ctx, {
     type: 'line',
     data: {
       labels: ["<?php echo join($incomes['key'], '","')?>"],
       datasets: [{
         label: "Income",
         backgroundColor: "rgba(38, 185, 154, 0.31)",
         borderColor: "rgba(38, 185, 154, 0.7)",
         pointBorderColor: "rgba(38, 185, 154, 0.7)",
         pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
         pointHoverBackgroundColor: "#fff",
         pointHoverBorderColor: "rgba(220,220,220,1)",
         pointBorderWidth: 1,
         data: [<?php echo join($incomes['value'], ',')?>]
       }, {
         label: "Expence",
         backgroundColor: "rgba(3, 88, 106, 0.3)",
         borderColor: "rgba(3, 88, 106, 0.70)",
         pointBorderColor: "rgba(3, 88, 106, 0.70)",
         pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
         pointHoverBackgroundColor: "#fff",
         pointHoverBorderColor: "rgba(151,187,205,1)",
         pointBorderWidth: 1,
         data: [<?php echo join($expences['value'], ',')?>]
       }]
     },
   });



</script>

@stop
