
@extends('master')


@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div id="EditContainer3">
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


      <nav class="navbar-nav navbar-expand bg-dark navbar-light border-bottom">        
    <img src="/dist/img/up_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    
    &nbsp&nbsp&nbsp&nbsp&nbsp

       <a class="space d-inline-block" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>

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
  
@if($errors->all())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </div>
  @endif

@if (session()->has('message'))
  <div class="alert alert-success d-inline-block">
    {{session()->get('message')}}
  </div>
  @endif
<div class="space">
<div class="text-white">
<form action="{{route('Requests.update', $Request->id)}}" method="post">
     {{ csrf_field() }}
     {{method_field('put')}}

     <div class="col-1 md-2 mb-4 float-right">
      <b><label for="recommended">Ctrl No:</label></b>
      <input type="text" name="recommended" class="form-control d-inline-block" id="recommended" value="{{$Request->id}}" disabled>
    </div>

<div class="form-group">
<div class="form-row">
    <div class="col-md-3">
      <b><label for="Subject">Subject</label></b>
      <input type="text" name="Subject" class="form-control" id="Subject" value="{{$Request->Subject}}">
    </div>
    
    <div class="col-md-2">
      <b><label for="recommended">Recommended:</label></b>
      <input type="text" name="recommended" class="form-control" id="recommended" value="{{$Request->recommended}}">
    </div>

    <div class="col-md-3">
      <b><label for="updated_at">DATE TIME UPDATE:</label></b>
      <input type="text" name="updated_at" class="form-control" id="updated_at" value="{{ date('Y-m-d  H:i:s') }}" disabled>
    </div>
 </div>
</div>

<div class="form-group">
  <div class="form-row">
     <div class="col-md-8">
      <b><label for="RequestingParty">Requesting Party</label></b>
        <input type="text" name="RequestingParty" class="form-control" id="RequestingParty" value="{{$Request->RequestingParty}}" >
     </div>
  </div>
</div>

<div class="form-group">
  <div class="form-row">
     <div class="col-md-8">
      <b><label for="area">AREA / OFFICE / ROOM</label></b>
        <input type="text" name="area" class="form-control" id="area" value="{{$Request->area}}" >
     </div>
  </div>
</div>

<div class="form-group">
  <div class="form-row">
    <div class="col-md-5">
        <b><label for="materialsNeeded">Materials Needed</label></b>
            <textarea name="materialsNeeded" id="materialsNeeded" cols="30" class="form-control" rows="3">       {{$Request->materialsNeeded}}
            </textarea>
    </div>
    <div class="col-md-5">
        <b><label for="workDescription">Materials to purchase</label></b>
            <textarea name="workDescription"
            id="workDescription" cols="30" class="form-control" rows="3">
              {{$Request->workDescription}}
            </textarea>
    </div>
  </div>
</div>
  
  <div class="form-group">
    <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Subject">
          <label class="form-check-label" for="Subject">
        <div class="font-color">
        Agree to terms and conditions
        </div>  
    </div>
  </div>

  <div class="form-group">
      <button type="submit" class="btn btn-outline-info" active>Update</button>

     <a class="btn btn-primary btn-outline-primary" href="{{url('/homepage')}}" >Home</a>

     <a class="float-center btn btn-warning btn-outline-warning" href="{{route('Requests.index')}}" >Cancel</a>
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