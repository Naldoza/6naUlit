
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
                  I HEREBY CERTIFY That the requested materials is not available in the CMO STOCKS.              
            </div>


             <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <form action="{{route('Foreman.store')}}" method="post">
                {{ csrf_field() }}
              <div class="card card-warning">
              <div class="card-header">
                <h4><i class="fa fa-globe d-inline-block"></i>CMO
                    <small class="float-right">DATE:  {{ date('Y-m-d') }}</small>
                </h4>

                <strong><h2 class="card-title text-center">WORK STATUS</h2></strong>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body bg-dark">
                <form role="form">
                  <!-- text input -->             
                    <label>
                    <i type="text" class="fa fa-check">
                        </i>
                      Materials to be purchased:</label>
                    <textarea type="text" class="form-control col-7" placeholder="Materials to be purchased" rows="2">
                    </textarea>
                  
                       <label>
                        <i type="text" class="fa fa-check">
                        </i>
                            Work Duration:
                        </label>
                            <input type="text" class="form-control col-7" placeholder="hour/min/sec" name="">

                        <label>
                             <i type="text" class="fa fa-check">
                        </i>
                        DATE COMPLETED:
                        </label>
                            <input type="text" class="form-control col-7" placeholder="Month/Day/Year" name="">
                            

                    <label>
                    <i type="text" class="fa fa-check">
                        </i>
                      OTHERS:</label>
                    <textarea type="text" class="form-control col-7" placeholder="OTHERS" rows="2">
                    </textarea>

                      <div class="form-group">
                    <label>
                      <i type="text" class="fa fa-check">
                        </i>Select</label>
                    <select class="form-control col-7">
                      <option>CARPENTER</option>
                      <option>PLUMBER</option>
                      <option>ELECTRICIAL</option>
                      <option>WORKERS</option>
                    </select>

                        <label>
                        <i type="text" class="fa fa-check">
                        </i>
                            Worker:
                        </label>
                                  <a class="btn btn-primary btn-outline-info fa fa-check float-right" href="{{url('/ForemanForm')}}">&nbsp&nbspSend</a>
                            <input type="text" class="form-control col-7" placeholder="Worker name" name="">

                  </div>                    
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