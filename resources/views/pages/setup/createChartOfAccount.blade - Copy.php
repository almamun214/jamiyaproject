@extends('layouts.app')
@section('title', 'Category Create')

@section('js')

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getParentAccountList(rootId) {


        if (rootId) {
            $.ajax({
                url: '/getParentListAndCode/ajax/' + rootId,

                type: "GET",

                dataType: "json",
                success: function (data) {

                    console.log(data);

                    if (data['ParentAccount'].length == 0) {
                        // alert("Empty");
                        $('#ajaxParentList').text('Not Parent');
                    } else {
                        //alert("Not empty");
                        $('#ajaxParentList').load('{{URL::to("/getParentListTree")}}/' + rootId + '/view');
                    }



                    $("#accountCode").val(data['Code']);


                    $.each(data['ParentAccount'], function (key, value) {
                        $('select[name="parent_account"]').append($('<option>', {
                            value: value.chart_id,
                            text: value.title,
                            'data-mark': value.chart_id
                        }));
                    });

                    /*  $('select[name="parent_account"]').empty();
                     
                     $.each(data['ParentAccount'], function (key, value) {
                     $('select[name="parent_account"]').append('<option value="' + key + '">' + value.title + '</option>');
                     });
                     
                     
                     $('select[name="parent_account"]').trigger("chosen:updated");*/


                }
            });
        } else {
            $('select[name="parent_account"]').empty('');
        }

    }
</script>




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
                                        <i class="fa fa-gift"></i>Chart Of Account
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
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet box blue">

                                                    <div class="portlet-body">

                                                        {{-- <form action="{{route('chart_store')}}" method="post" class="form-horizontal"
                                                                   enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="text" name="post_check">
                                                            <input type="submit">

                                                        </form>--}}

                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <form action="/chart_store" method="post" class="form-horizontal" enctype="multipart/form-data">

                                                                    <div class="form-group">
                                                                        <label for="single"
                                                                               class="col-md-3 control-label"> Root
                                                                            Account ( * )
                                                                        </label>
                                                                        <div class="col-md-8">
                                                                            <select name="root_account" id="single"
                                                                                    class="form-control select2"
                                                                                    onchange="getParentAccountList(this.value)">
                                                                                <option value="0">--Selection--</option>

                                                                                @foreach($chartOfAccountActiveList as $item)
                                                                                <option value="{{$item->chart_id}}">{{$item->title}}
                                                                                </option>
                                                                                @endforeach


                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right"
                                                                               for="form-field-1">Parent Account
                                                                        </label>
                                                                        <div class="col-sm-8">
                                                                            <select name="parent_account"
                                                                                    class="form-control select2">
                                                                                <option value="0">--Selection--</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right"
                                                                               for="form-field-1">Child Account

                                                                        </label>
                                                                        <div class="col-sm-8">
                                                                            <select name="child_account"
                                                                                    class="form-control select2">
                                                                                <option value="0">--Selection--</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right"
                                                                               for="form-field-1"> <span
                                                                                style="color:red;">*</span> Account
                                                                            Code</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" value="" id="accountCode"
                                                                                   class="form-control" readonly
                                                                                   placeholder="Account Code"
                                                                                   name="account_code"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right"
                                                                               for="form-field-1"> <span
                                                                                style="color:red;">*</span> Account
                                                                            Head</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Account Head"
                                                                                   name="account_head"/>
                                                                            <span id="errorMsg"
                                                                                  style="color:red;display: none;"><i
                                                                                    class="ace-icon fa fa-spinner fa-spin orange bigger-120"></i> &nbsp;&nbsp;Account Head already Exits!!Please Type Different Name.</span>
                                                                        </div>
                                                                    </div>
                                                                    {{--<div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right"
                                                                               for="form-field-1"> Posted</label>
                                                                        <div class="col-sm-8">
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                       class="form-check-input"
                                                                                       id="exampleCheck1">

                                                                            </div>

                                                                        </div>
                                                                    </div>--}}
                                                                    <div>
                                                                        <div class="col-md-offset-4 col-md-offset-4">
                                                                            <div class="form-actions top">
                                                                                <div class="row">
                                                                                    <div class="col-md-offset-4 col-md-8">
                                                                                        <button type="submit" class="btn green">Submit</button>
                                                                                        <button type="button" class="btn default">Cancel</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top:10px">
                                                                <div id="ajaxParentList">


                                                                </div>
                                                            </div>

                                                        </div><!-- /.col -->
                                                    </div><!-- /.col -->
                                                </div><!-- /.col -->
                                            </div><!-- /.col -->
                                        </div>
                                    </div>

                                </form>
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
