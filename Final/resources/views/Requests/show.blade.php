
@extends('master')


@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div id="EditContainer1">
      <div class="container-fluid">
        <div id="EditContainer">
       
  <ul class="navbar-nav ">

        
      <div class="text-center text-white">
        <h4>UNIVERSITY OF THE PHILIPPILES</h4>
        <h4>Cebu COLLEGE</h4>
        <h5>Lahug, Cebu City</h5>
        <h3>CDMO REPORT / ACTION / JOB REQUEST SLIP</h3>   
        </div>
    </ul>    
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">        
    <img src="/dist/img/up_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    
    &nbsp&nbsp&nbsp&nbsp&nbsp

       <a class="space" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>

       &nbsp&nbsp&nbsp&nbsp&nbsp


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                   <span class="navbar-text ">
                      Campus Mentainance Office
                    </span>
                </li>
            </ul>
          </div>   
            {{ date('Y-m-d H:i:s') }}
      </nav>

<br>
  
<div class="space">
<div class="text-white">
<form action="{{route('Requests.store')}}" method="post">
     {{ csrf_field() }}

     <div class="col-1 md-2 float-right">
      <b><label for="recommended">Ctrl No:</label></b>
      <input type="text" name="recommended" class="form-control d-inline-block" id="recommended" value="{{$Request->id}}" disabled> 
    </div>

<div class="form-group">
<div class="form-row">
    <div class="col-md-3">
      <b><label for="Subject">Subject</label></b>
      <input type="text" name="Subject" class="form-control" id="Subject" value="{{$Request->Subject}}" disabled>
    </div>
    
    <div class="col-md-2">
      <b><label for="recommended">Recommended:</label></b>
      <input type="text" name="recommended" class="form-control" id="recommended" value="{{$Request->recommended}}" disabled>
    </div>

    
       <div class="col-md-3 d-inline-block">
      <b><label for="recommended">Date Created:</label></b>
      <input type="text" name="created_at" class="form-control" id="created_at" value="{{$Request->created_at}}" disabled>
 </div>
</div>

<div class="form-group">
  <div class="form-row">
     <div class="col-md-8">
      <b><label for="RequestingParty">Requesting Party</label></b>
        <input type="text" name="RequestingParty" class="form-control" id="RequestingParty" value="{{$Request->RequestingParty}}" disabled>
     </div>
  </div>
</div>

<div class="form-group">
  <div class="form-row">
     <div class="col-md-8">
      <b><label for="area">AREA / OFFICE / ROOM</label></b>
        <input type="text" name="area" class="form-control" id="area" value="{{$Request->area}}" disabled>
     </div>
  </div>
</div>


<div class="form-group">
  <div class="form-row">
    <div class="col-md-5">
        <b><label for="materialsNeeded">Materials Needed</label></b>
            <textarea name="materialsNeeded" id="materialsNeeded" cols="30" class="form-control" rows="3" disabled>       {{$Request->materialsNeeded}}
            </textarea>
    </div>
    <div class="col-md-5">
        <b><label for="workDescription">Materials to purchase</label></b>
            <textarea name="workDescription"
            id="workDescription" cols="30" class="form-control" rows="3" disabled>
              {{$Request->workDescription}}
            </textarea>
    </div>
  </div>
</div>
  
  <div class="form-group">
    <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Subject" disabled>
          <label class="form-check-label" for="Subject">
        <div class="font-color">
        Agree to terms and conditions
        </div>  
    </div>
  </div>

  <div class="form-group">
    <a class="btn btn-primary btn-outline-info" href="{{route('Requests.edit', $Request->id)}}">Edit</a>

     <a class="btn btn-primary btn-outline-primary" href="{{url('/homepage')}}" >Home</a>       
    </div>

</form>
          </div>
       </div>
    </div>
  </div>
</div>
@endsection


@section('content1')
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <!-- Dashboard -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/Request')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Request Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/InProcessRequest')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>In Process Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/FinishedJob')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List of Approved Request</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
@endsection