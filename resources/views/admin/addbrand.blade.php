@extends('layouts.app')

@section('content')

             <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                            <li><a href="javascript:void(0)">Brand</a></li>
                            <li><a href="javascript:void(0)">Add Brand	</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row animated fadeInUp">

			<!-- add Brand -->
			     <div class="col-md-12">
			     	
                    <div class="panel">

                        <div class="panel-content">
                            <div class="row">
                            	<a href="" style="float: right; margin-right: 20px"><button class="btn btn-primary">Manage Brand</button></a>
                            	<h6 class="mb-xlg " style="margin-left: 20px"><b>Brand Add Form</b></h6>
                            	 
                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('create')}}" class="form-horizontal form-stripe" >
                                      @csrf  
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" placeholder="Enter the Brand name" name="name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Add Brand</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
   

            </div>

         
@endsection

