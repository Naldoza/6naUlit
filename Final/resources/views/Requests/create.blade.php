@extends('master')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div id="EditContainer1">
      <div class="container-fluid">
      
       <a class="space" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
       
        <div id="EditContainer">
       
  <ul class="navbar-nav ">

        
      <div class="text-center text-white">
        <h3>UNIVERSITY OF THE PHILIPPILES</h3>
        <h3>Cebu COLLEGE</h3>
        <h4>Lahug, Cebu City</h4>
        <h2>CDMO REPORT / ACTION / JOB REQUEST SLIP</h2>   
        </div>
    </ul>    
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

          <a class="navbar-brand" href="#">
    <img src="/dist/img/up_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    CDMO
  </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                   <a class="nav-link btn btn-primary btn-outline-primary btn-sm" href="{{url('/homepage')}}" >Home</a>       
                </li>
            </ul>
          </div>
          DATE/TIME:&nbsp&nbsp
          <input type="text" name="updated_at" class="form-control col-2" id="updated_at" value="{{ date('Y-m-d  H:i:s') }}">
          
          
   
      </nav>

<br>

@if($errors->all())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </div>
  @endif
  

<div class="space text-white">
<form action="{{route('Requests.store')}}" method="post">
     {{ csrf_field() }}

<div class="form-group">
<div class="form-row">
    <div class="col-md-3 ">
      <b><label for="Subject">SUBJECT:</label></b>
      <input type="text" name="Subject" class="form-control" id="Subject" placeholder="Subject" required>
    </div>
    
    <div class="col-md-2 ">
      <b><label for="recommended">RECOMMENDED BY:</label></b>
      <input type="text" name="recommended" class="form-control" id="recommended" placeholder="(DIV / OFC HEAD)" required>
    </div>
 </div>
</div>

<div class="form-group">
  <div class="form-row">
     <div class="col-md-8">
      <b><label for="RequestingParty">Requesting Party</label></b>
        <input type="text" name="RequestingParty" class="form-control" id="RequestingParty" required>
     </div>
  </div>
</div>


<div class="form-group">
  <div class="form-row">
     <div class="col-md-8">
      <b><label for="area">AREA / OFFICE / ROOM</label></b>
        <input type="text" name="area" class="form-control" id="area" placeholder="AREA / OFFICE / ROOM" required>
     </div>
  </div>
</div>

<div class="form-group">
  <div class="form-row">
    <div class="col-md-5">
        <b><label for="workDescription">Work Description</label></b>
            <textarea name="workDescription" id="workDescription" cols="30" class="form-control" rows="3" required></textarea>
    </div>
    <div class="col-md-5">
        <b><label for="materialsNeeded">Materials Needed</label></b>
            <textarea name="materialsNeeded"
            id="materialsNeeded" cols="30" class="form-control" rows="3" required></textarea>
    </div>
  </div>
</div>
  
  <div class="form-group">
    <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Subject" required>
          <label class="form-check-label" for="Subject">
        <div class="font-color">
        Agree to terms and conditions
        </div>  
    </div>
  </div>

  <div class="form-group">
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </div>

</form>
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
                <a href="#" class="nav-link active" disabled>
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Request Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Requests.index')}}" class="nav-link">
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


