
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
  


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fa fa-info"></i> Note:</h5>
              
            </div>


             <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <form action="{{route('Foreman.store')}}" method="post">
                {{ csrf_field() }}
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-globe"></i>CMO
                    
                    <small class="float-right">DATE:  {{ date('Y-m-d') }}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
            
                <div class="col-sm-4 invoice-col">
                  <strong>Ctrl No:</strong><i disabled>&nbsp&nbsp&nbsp{{$Foreman->id}}</i>
                  <address>
                    <strong>SUBJECT:</strong>&nbsp&nbsp&nbsp{{$Foreman->Subject}}<br>
                    <strong>RECOMMENDED BY:</strong>&nbsp&nbsp&nbsp{{$Foreman->recommended}}<br>
                    <strong>REQUESTING PARTY:</strong>&nbsp&nbsp&nbsp{{$Foreman->RequestingParty}}<br>
                    <strong>AREA / OFFICE / ROOM:</strong>&nbsp&nbsp&nbsp{{$Foreman->area}}<br>
                    <strong>MATERIALS NEEDED:</strong>&nbsp&nbsp&nbsp{{$Foreman->materialsNeeded}}<br>
                    <strong>WORK DESCRIPTION:</strong>&nbsp&nbsp&nbsp{{$Foreman->workDescription}}<br>
                  </address>
                </div>

                      <div class="form-group">
                          <a class="btn btn-primary btn-outline-info" href="{{url('/ForemanForm')}}">Approved</a>
                            <a class="btn btn-primary btn-outline-primary" href="{{url('/homepage')}}" >Home</a>
                          </div>
              </form>
           </div>
         </div>
       </div>
     </div>
   </section>



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