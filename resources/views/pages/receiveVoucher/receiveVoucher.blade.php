@extends('layouts.app') @section('title', 'Receive Voucher Add')
@section('js') @endsection 
@section('css') @endsection
@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    {{-- @include('pages/include/beginPageHeader')--}} {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <br>
        <br>
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

                        {{--
                        <div class="portlet box blue-hoki">--}}
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Receive Voucher Add
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-danger btn-icon-only btn-default" href="">
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
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="{{route('receivedVoucherSave')}}" method="post" class="form-horizontal">
                                                                @csrf

                                                              
                                                                    <div class="form-body">

                                                                        <div class="row">
                                                                            <div class="col-md-6">

                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3">Date *</label>
                                                                                    <div class="col-md-9">
                                                                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                                                            <input type="text" class="form-control" value="<?php echo date('d-m-Y'); ?>" name="date" readonly>
                                                                                            <span class="input-group-btn">
                                                                                                <button class="btn default" type="button">
                                                                                                    <i class="fa fa-calendar"></i>
                                                                                                </button>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!-- /input-group -->

                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3">Received Type * </label>
                                                                                    <div class="col-md-9">
                                                                                        <select name="foo" name="payType" class="form-control select2">
                                                                                            <option></option>
                                                                                            <option value="1">Accounts</option>
                                                                                            <option value="2">Student</option>
                                                                                            <option value="3">Teacher</option>
                                                                                            <option value="4">Supplier</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3">Deposit ( DR )*</label>
                                                                                    <div class="col-md-9">
                                                                                        <select name="payAccount" id="single" class="form-control select2">
                                                                                            <option></option>
                                                                                            <optgroup label="Mountain Time Zone wewe">
                                                                                                <option value="AZ">Arizona</option>
                                                                                                <option value="CO">Colorado</option>
                                                                                                <option value="ID">Idaho</option>
                                                                                                <option value="MT">Montana</option>
                                                                                                <option value="NE">Nebraska</option>
                                                                                                <option value="NM">New Mexico</option>
                                                                                                <option value="ND">North Dakota</option>
                                                                                                <option value="UT">Utah</option>
                                                                                                <option value="WY">Wyoming</option>
                                                                                            </optgroup>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3"> Voucher ID *</label>
                                                                                    <div class="col-md-9">
                                                                                        <input type="text" name="voucherId" class="form-control" readonly value="PV191100001"> </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3"> Supplier *</label>
                                                                                    <div class="col-md-9">
                                                                                        <select name="supplier" name="foo" class="form-control">
                                                                                            <option value="1">Supplier1</option>
                                                                                            <option value="1">Supplier2</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <!--/span-->

                                                                            <div class="col-md-12">
                                                                                <br>
                                                                                <div class="table-header">
                                                                                    Select Account Head
                                                                                </div>
                                                                                <table class="table table-bordered table-hover" id="show_item">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td style="width:50%" align="center"><strong>Account Head<span style="color:red;"> *</span></strong></td>
                                                                                            <td style="width:22%" align="center"><strong>Amount<span style="color:red;"> *</span></strong></td>
                                                                                            <td style="width:23%" align="center"><strong>Memo</strong></td>
                                                                                            <td style="width:5%" align="center"><strong>Action</strong></td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody></tbody>
                                                                                    <tfoot>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <select class="chosen-select form-control paytoAccount" id="form-field-select-3" data-placeholder="Search by Account Head">
                                                                                                    <option value=""></option>
                                                                                                    <optgroup label="Mountain Time Zone wewe">
                                                                                                        <option  paytoAccountCode="0001" paytoAccountName="Arizona" value="AZ">Arizona</option>
                                                                                                        <option   paytoAccountCode="0002" paytoAccountName="Colorado" value="CO">Colorado</option>
                                                                                                        <option  paytoAccountCode="0003" paytoAccountName="Idaho" value="ID">Idaho</option>
                                                                                                        <option   paytoAccountCode="0004" paytoAccountName="Montana" value="MT">Montana</option>
                                                                                                        <option  paytoAccountCode="0005" paytoAccountName="Nebraska" value="NE">Nebraska</option>
                                                                                                        <option  paytoAccountCode="0006" paytoAccountName="New Mexico" value="NM">New Mexico</option>
                                                                                                        <option  paytoAccountCode="0007" paytoAccountName="North Dakota" value="ND">North Dakota</option>
                                                                                                        <option  paytoAccountCode="0008" paytoAccountName="Utah" value="UT">Utah</option>
                                                                                                        <option  paytoAccountCode="0009" paytoAccountName="Wyoming" value="WY">Wyoming</option>
                                                                                                    </optgroup>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control text-right amountt amount3"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" placeholder="0.00">
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="text" class="form-control text-right memo" placeholder="Memo">
                                                                                            </td>
                                                                                            <td><a id="add_item" class="btn btn-info form-control" href="javascript:;" title="Add Item"><i class="fa fa-plus"></i>&nbsp;&nbsp;</a></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="right"><strong>Sub-Total(BDT)</strong></td>
                                                                                            <td align="right"><strong class="tttotal_amount"></strong></td>
                                                                                            <td align="right"><strong class=""></strong></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tfoot>
                                                                                </table>
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                <div class="form-group col-md-12">
                                                                                    <label class="control-label">Narration</label>
                                                                                    <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/row-->

                                                                    </div>

                                                                    <div class="form-actions right">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-offset-3 col-md-9">
                                                                                        <button type="submit" class="btn green">Submit</button>
                                                                                        <button type="reset" class="btn red">Reset</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </form>
                                                                <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.col -->
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

    <script>

        $(document).on("keyup", ".amount", function () {

            findAmount();
        });



        $('.amountt').change(function () {
            $(this).val(parseFloat($(this).val()).toFixed(2));
        });
        var findAmount = function () {
            var ttotal_amount = 0;
            $.each($('.amount'), function () {
                amount = $(this).val();
                if (isNaN(amount)) {
                    amount = 0;
                }
                amount = Number(amount);
                ttotal_amount += amount;
            });
            if (ttotal_amount > 0) {
                $("#subBtn").attr('disabled', false);
            }
            $('.tttotal_amount').html(parseFloat(ttotal_amount).toFixed(2));
        };


        $(document).ready(function () {

            $("#add_item").click(function () {
                var accountId = $('.paytoAccount').val();
                var accountName = $(".paytoAccount").find('option:selected').attr('paytoAccountName');
                var accountCode = $(".paytoAccount").find('option:selected').attr('paytoAccountCode');
                var amount = $('.amountt').val();
                var memo = $('.memo').val();

                if (accountId == '' || accountId == null) {
                    alert("Account Head can't be empty.");
                    return false;
                } else if (amount == '') {
                    alert("Amount can't be empty.");
                    return false;
                } else {
                    $("#show_item tbody").append('<tr class="new_item' + accountId + '"><td style="padding-left:15px;">' + accountName + ' [ ' + accountCode + ' ] ' + '<input type="hidden" name="accountDr[]" value="' + accountId + '"></td><td style="padding-left:15px;"  align="right"><input class="amount amount3 text-right form-control decimal" type="text"  name="amountDr[]" value="' + amount + '"></td><td align="right"><input type="text" class="add_quantity form-control text-right" name="memoDr[]" value="' + memo + '"></td><td><a del_id="' + accountId + '" class="delete_item btn form-control btn-danger" href="javascript:;" title=""><i class="fa fa-times"></i></a></td></tr>');
                }
                $('.amountt').val('');
                $('.memo').val('');
                $('.paytoAccount').val('').trigger('chosen:updated');
                // $(".paytoAccount").trigger("chosen:updated");
                findAmount();

            });
            $(document).on('click', '.delete_item', function () {
                var id = $(this).attr("del_id");
                $('.new_item' + id).remove();
                findAmount();
            });
        });
    </script>

    <!-- END CONTENT BODY -->
    @endsection