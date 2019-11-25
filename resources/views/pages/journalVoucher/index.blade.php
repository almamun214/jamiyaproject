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
                        <a class="dt-button buttons-print btn default" tabindex="0" aria-controls="sample_2" href="{{route('journalVoucherCreate')}}"><span>  <i class="fa fa-plus"></i>&nbsp; Add Journal Voucher</span>

                        </a>
                    </div>

                </div>


                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Voucher No</th>
                                <th> Type</th>
                                <th>Amount</th>
                                <th> Note</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($journalVoucherList as $item)
                            <tr>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->voucher_no }}</td>
                                <td>Journal Voucher</td>
                                <td>{{ $item->debit }}</td>
                                <td>{{ $item->narration }}</td>
                                <td> 
                                    <a class="btn btn-info" href="">Show</a>
                                    <a class="btn btn-primary" href="">Edit</a>
                                </td>
                            </tr>

                            @endforeach



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
