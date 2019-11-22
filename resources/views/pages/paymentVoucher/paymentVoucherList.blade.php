@extends('layouts.app')


@section('js')


@endsection


@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->


    @include('pages.include.beginPageHeader')


    <!-- END PAGE HEADER-->

        <div class="row">
            <div class="col-md-12">



                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                    
                            <div  class="dt-buttons" style="margin-top: 5px;">
                            <a class="dt-button buttons-print btn default" tabindex="0" aria-controls="sample_2" href="{{route('paymentVoucerCrate')}}"><span>  <i class="fa fa-plus"></i>&nbsp; Brand Add</span>
                              
                                 </a>
                          </div>
                     
                    </div>


                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                            <tr>
                                <th> Brand Name</th>
                                <th> Description</th>
                                <th> Brand Banner Image</th>
                                <th> Brand Logo Image</th>
                                <th> Active</th>
                                <th> Created At</th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>

 <tr>
                                <th> Brand Name</th>
                                <th> Description</th>
                                <th> Brand Banner Image</th>
                                <th> Brand Logo Image</th>
                                <th> Active</th>
                                <th> Created At</th>
                                <th> Action</th>
                            </tr>
                          
                               
                           


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

    </div>
    <!-- END CONTENT BODY -->
@endsection
