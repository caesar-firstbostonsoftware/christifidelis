@extends('layouts.master')
@section('style')

@stop
@section('content')
@if (Session::get('success'))
<div class="alert alert-success">
  <button data-dismiss="alert" class="close" type="button">×</button>
    <strong>Process Success.</strong> {{ Session::get('success')}}

</div>
@endif
<div class="row">
<div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2><i class="glyphicon glyphicon-user"></i> GPA Rules</h2>

            </div>
          <div class="box-content">
            @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                  @endif
                   @if($gpa)
                     <form role="form" action="/gpa/update" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="id" value="{{$gpa->id}}">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="row">
                     <div class="col-md-12">
                       <div class="col-md-4">
                           <div class="form-group">
                         <label for="for">GPA for</label>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                             <select name="for" class="form-control">
                               <option value="Grade 1" selected="true">Grade 1</option>
                               <option value="Grade 2">Grade 2 </option>
                               <option value="Grade 3">Grade 3 </option>
                               <option value="Grade 4">Grade 4 </option>
                               <option value="Grade 5">Grade 5 </option>
                               <option value="Grade 6">Grade 6 </option>
                               <option value="Grade 7">Grade 7 </option>
                               <option value="Grade 8">Grade 8 </option>
                               <option value="Grade 9">Grade 9 </option>
                               <option value="Grade 10">Grade 10 </option>
                               <option value="Grade 11">Grade 11 </option>
                               <option value="Grade 12">Grade 12 </option>
                             </select>
                         </div>
                     </div>
                       </div>
                       <div class="col-md-2">
                           <div class="form-group">
                         <label for="gpa">Grade</label>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                             <input type="text" class="form-control" required name="gpa" value="{{$gpa->gpa}}" placeholder="A+,B,C etc">
                         </div>
                     </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                             <label for="grade">Point</label>
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                 <input type="text" class="form-control" value="{{$gpa->grade}}" required name="grade" placeholder="4.00,3.50 etc">
                             </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                             <label for="markfrom">Mark Percentage From</label>
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                 <input type="text" class="form-control" value="{{$gpa->markfrom}}" required name="markfrom" placeholder="40,60,90 etc">
                             </div>
                         </div>
                       </div>
                       <div class="col-md-2">
                         <div class="form-group">
                             <label for="markto">Mark Percentage To</label>
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                 <input type="text" class="form-control" value="{{$gpa->markto}}" required name="markto" placeholder="40,60,90 etc">
                             </div>
                         </div>
                       </div>

                     </div>
                   </div>
                    <button class="btn btn-primary pull-right" type="submit"><i class="glyphicon glyphicon-plus"></i>Update</button>
                      </form>
                    @else
                    <form role="form" action="/gpa/create" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-4">
                          <div class="form-group">
                        <label for="for">Grade For</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                            <select name="for" class="form-control">

                               <option value="Grade 1" selected="true">Grade 1</option>
                               <option value="Grade 2">Grade 2 </option>
                               <option value="Grade 3">Grade 3 </option>
                               <option value="Grade 4">Grade 4 </option>
                               <option value="Grade 5">Grade 5 </option>
                               <option value="Grade 6">Grade 6 </option>
                               <option value="Grade 7">Grade 7 </option>
                               <option value="Grade 8">Grade 8 </option>
                               <option value="Grade 9">Grade 9 </option>
                               <option value="Grade 10">Grade 10 </option>
                               <option value="Grade 11">Grade 11 </option>
                               <option value="Grade 12">Grade 12 </option>

                            </select>
                        </div>
                    </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group">
                        <label for="gpa">Grade</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                            <input type="text" class="form-control" required name="gpa"  placeholder="A+,B,C etc">
                        </div>
                    </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                            <label for="grade">Point</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required name="grade" placeholder="4.00,3.50 etc">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                            <label for="markfrom">Mark Percentage From</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required name="markfrom" placeholder="40,60,90 etc">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                            <label for="markto">Mark Percentage To</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                                <input type="text" class="form-control" required name="markto" placeholder="40,60,90 etc">
                            </div>
                        </div>
                      </div>

                    </div>
                  </div>


                      <button class="btn btn-primary pull-right" type="submit"><i class="glyphicon glyphicon-plus"></i>Add</button>
                      <br>
                        </form>
                    @endif
                    <br>
                  </div>


                @if(count($gpaes)>0)
                <div class="row">
                  <div class="col-md-12">
                    <table id="gpaList" class="table table-striped table-bordered table-hover">
                                                               <thead>
                                                                   <tr>
                                                                       <th>GPA For</th>
                                                                       <th>GPA Name</th>
                                                                       <th>Grade</th>
                                                                       <th>Mark From</th>

                                                                        <th>Mark To</th>
                                                                          <th>Action</th>
                                                                   </tr>
                                                               </thead>
                                                               <tbody>
                                                                 @foreach($gpaes as $gpa)

                                                                   <tr>
                                                                      <td>{{$gpa->for}}</td>
                                                                      <td>{{$gpa->gpa}}</td>
                                                                     <td>{{$gpa->grade}}</td>
                                                                     <td>{{$gpa->markfrom}}%</td>
                                                                     <td>{{$gpa->markto}}%</td>

                                                             <td>
                                                                       <a title='Edit' class='btn btn-info' href='{{url("/gpa/edit")}}/{{$gpa->id}}'> <i class="glyphicon glyphicon-edit icon-white"></i></a>&nbsp&nbsp<a title='Delete' class='btn btn-danger' href='{{url("/gpa/delete")}}/{{$gpa->id}}'> <i class="glyphicon glyphicon-trash icon-white"></i></a>
                                                                     </td>
                                                                 @endforeach
                                                                 </tbody>
                                      </table>

                  </div>
                </div>
                @endif






        </div>
    </div>
</div>
</div>
@stop
@section('script')
<script type="text/javascript">
    $( document ).ready(function() {
        $('#gpaList').dataTable();
    });
</script>

@stop
