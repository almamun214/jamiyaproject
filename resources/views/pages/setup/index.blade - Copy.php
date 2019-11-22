@extends('layouts.app')
@section('title', 'Account Setup')

@section('js')






@endsection
@section('css')

@endsection


@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

    {{-- @include('pages/include/beginPageHeader')--}}

    {{--        @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif--}}
    <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_0">

                            {{-- <div class="portlet box blue-hoki">--}}
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Chart Of Account View
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-danger btn-icon-only btn-default"
                                           href="">
                                            <i class="fa fa-list bigger-130" style="color:#fff;"></i>
                                        </a>
                                        <a class="btn btn-danger btn-icon-only btn-default" href="#">
                                            <i class="fa fa-search-plus bigger-130" style="color:#fff;"></i>
                                        </a>
                                        <a class="btn btn-danger btn-icon-only btn-default" href="#">
                                            <i class="fa fa-pencil" style="color:#fff;"></i>
                                        </a>
                                        <a class="btn btn-danger btn-icon-only btn-default" href="#">
                                            <i class="fa fa-trash-o bigger-130" style="color:#fff;"></i>
                                        </a>
                                    </div>

                                </div>

                                <!-- BEGIN FORM-->

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet box blue">

                                                <div class="portlet-body">

                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <div>
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <td align="center"><strong>Account Group [ Root
                                                                                - Parent - Child ]</strong></td>
                                                                        <td align="center"><strong>Range of
                                                                                Code</strong></td>
                                                                        <td align="center"><strong>Child
                                                                                Account</strong></td>
                                                                        <td align="center"><strong>Head Account</strong>
                                                                        </td>
                                                                        <td align="center"><strong>Total</strong></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <!-- Assets -->
                                                                    <tr class="item-row">
                                                                        <td colspan="5"
                                                                            style="color:#d68080!important;"><strong>A.
                                                                                Assets</strong></td>
                                                                    </tr>
                                                                    <!-- chart_class -->

                                                                    <tr class="item-row">
                                                                        <td style="padding-left: 20px!important;"
                                                                            colspan="5"><strong>A.1. Non-current
                                                                                assets</strong></td>
                                                                    </tr>
                                                                    <!-- hart_type -->
                                                                    <tr class="item-row">
                                                                        <td style="padding-left: 40px;"><a
                                                                                    style="color:green!important;font-weight: bold;"
                                                                                    title="Show Chart of View" href="#"
                                                                                    onclick="showChartHead('325')"
                                                                                    data-toggle="modal"
                                                                                    data-target="#myModal">A.1.1.
                                                                                Property ,plant &amp; equipment</a>
                                                                        </td>
                                                                        <td align="center">[1 - 01 - 001] <i
                                                                                    class="fa fa-arrows-h"></i> [0]
                                                                        </td>
                                                                        <td align="center">1</td>
                                                                        <td align="center"><a title="Show Chart of View"
                                                                                              href="#"
                                                                                              onclick="showChartHead('325')"
                                                                                              data-toggle="modal"
                                                                                              data-target="#myModal">0</a>
                                                                        </td>
                                                                        <td align="center">1</td>
                                                                    </tr>
                                                                    <tr class="item-row">
                                                                        <td style="padding-left: 60px;"><a
                                                                                    title="Show Chart of View" href="#"
                                                                                    onclick="showChartHead('327')"
                                                                                    data-toggle="modal"
                                                                                    data-target="#myModal">A.1.1.
                                                                                1.
                                                                                Land and Land Development</a>
                                                                        </td>

                                                                        <td align="center">[1 - 01 - 001] <i
                                                                                    class="fa fa-arrows-h"></i> [0]
                                                                        </td>

                                                                        <td align="center">1</td>
                                                                        <td align="center"><a title="Show Chart of View"
                                                                                              href="#"
                                                                                              onclick="showChartHead('325')"
                                                                                              data-toggle="modal"
                                                                                              data-target="#myModal">0</a>
                                                                        </td>
                                                                        <td align="center">1</td>
                                                                    </tr>


                                                                    <!-- /chart_type -->


                                                                    <!-- hart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- Liabilities & Equity-->


                                                                    <!-- chart_class -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- Income-->


                                                                    <!-- chart_class -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_class -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <!-- chart_type -->


                                                                    <!-- /chart_type -->


                                                                    <tr>

                                                                        <td align="right" colspan="2"><strong>Total
                                                                                =</strong></td>

                                                                        <td align="center"><strong>78</strong></td>

                                                                        <td align="center"><strong>0</strong></td>

                                                                        <td align="center"><strong>78</strong></td>

                                                                    </tr>

                                                                    </tbody>

                                                                </table>

                                                            </div>

                                                        </div><!-- /.col -->
                                                    </div><!-- /.col -->
                                                </div><!-- /.col -->
                                            </div><!-- /.col -->
                                        </div><!-- /.col -->
                                    </div>
                                </div>


                                <!-- END FORM-->

                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- END CONTENT BODY -->
@endsection
