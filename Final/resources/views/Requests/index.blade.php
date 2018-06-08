@extends('master')


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
                <a href="{{route('Requests.create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Request Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/InProcessRequest')}}" class="nav-link active">
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
    <!-- /.sidebar -->
@endsection

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div id="EditContainer1">
      <div class="container-fluid">
        
        <nav class="navbar-nav navbar-expand bg-dark navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/homepage')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->
<br>
    


@if (session()->has('message'))
  <div class="alert alert-success d-inline-block">
    {{session()->get('message')}}
  </div>
  @endif
     <div class="card card-primary card-outline">
         <div class="card-header">
              
              <h4 class="card-title">Requests</h4>

          </div>
            @foreach($requests as $Request)
            <!-- /.card-header -->
              <div class="card-body">
                
                <ul class="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                     
                     <a href="{{route('Requests.show', $Request->id)}}">
                      {{$Request->Subject}}
                      </a>     

                      <div class="tools">
                          <a class="btn btn-info btn-sm" href="{{route('Requests.edit', $Request->id)}}">Edit</a>
                          

                           <form onsubmit="return confirm('Are you sure you want to delete this record?')" class="d-inline-block" method="post" action="{{route('Requests.destroy', $Request->id)}}">
                          
                          {{ csrf_field() }}
                                  {{method_field('delete') }}
                            <button type="submit" class=" btn btn-danger btn-sm">Delete</button>
                            </form>
                               
                      </div>
                    </li>
                  </ul>
              </div>
                  @endforeach
                   
<div class="mt-4 ">
                {{$requests->links()}}
              </div> 
          </div>
         </div>
       </div>
</div>
@endsection