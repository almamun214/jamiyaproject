@extends('layouts.app')

@section('js')

    <!-- Export Js  -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- Export Js  -->

    <script type="text/javascript">

        $(document).ready(function () {
            $('#donarlist-export').DataTable({
                dom: 'Bfrtip',
                "paging": false,
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>


@endsection

@section('css')
    <!-- Export Button css  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
    <!-- Export Button css  -->


@endsection


@section('content')

    <div class="page-content">


    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Teacher </h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="{{ route('applicantCreate') }}" class="active btn btn-danger btn-sm"
                       style="color:#fff;font-weight:600">Add Applicant</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- .row -->
    <div class="row">

        <div class="col-lg-12 col-sm-6 col-xs-12">
            <div class="white-box">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active nav-item">
                        <a href="#home" class="nav-link" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">Personal Details</span>
                        </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#profile1" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Additional Information </span></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#profile2" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Permanent Address</span></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Present Address</span></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Educational Qualification</span></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Document</span></a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-info">

                                    <div class="panel-wrapper collapse in" aria-expanded="true">
                                        <div class="panel-body">
                                            <form action="#" method="post">
                                                <div class="form-body">

                                                   <div class="row">
                                                    <div class="col-md-6" style="padding: 0;">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Father's name</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Mother's name</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 ">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Join Date</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy">
                                                                    <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Father's Profession</label>
                                                                <select class="form-control">
                                                                    <option value="">--Select--</option>
                                                                    <option value="female">Teacher</option>
                                                                    <option value="female">Doctor</option>
                                                                    <option value="female">NGO job</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Mother's Profession</label>
                                                                <select class="form-control">
                                                                    <option value="">--Select--</option>
                                                                    <option value="female">Teacher</option>
                                                                    <option value="female">Doctor</option>
                                                                    <option value="female">NGO job</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="padding:0 44px;">
                                                        <div class="form-group">
                                                            <div class="teacher-image">
                                                                <img class="img-responsive img-thumbnail" src="/adminAssets/image/images.png">
                                                            </div>
                                                            <label>Uploading img</label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Birthday</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy">
                                                                <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Hostel Incharge</label>
                                                                <select class="form-control">
                                                                    <option value="">--Select--</option>
                                                                    <option value="">Mr. Abul Hossain</option>
                                                                    <option value="">ballal Hossain</option>
                                                                    <option value="">Abdul Malak</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>NID Number</label>
                                                                <input type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Blood Group</label>
                                                                <select class="form-control">
                                                                    <option value="a">A+</option>
                                                                    <option value="a-">A-</option>
                                                                    <option value="a-">B+</option>
                                                                    <option value="a-">B-</option>
                                                                    <option value="a-">O+</option>
                                                                    <option value="a-">O-</option>
                                                                    <option value="a-">AB+</option>
                                                                    <option value="a-">AB-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Designation</label>
                                                                <select class="form-control">
                                                                    <option value="">--Select--</option>
                                                                    <option value="">Princpal</option>
                                                                    <option value="">Assistant Princpal</option>
                                                                    <option value="">Assistant Teacher</option>
                                                                    <option value="">Assistant Teacher</option>
                                                                    <option value="">Assistant Teacher</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile1">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="married">Married Status</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-1" name="minimal-radio">
                                        <label for="minimal-radio-1">Married</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-1" name="minimal-radio">
                                        <label for="minimal-radio-1">Unmarried</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row wife-rowadd">
                                <label for="wife" class="col-md-2" style="font-weight: 500; color:#111;">Wife's Name</label>
                                <div class="form-group col-md-5">
                                    <input type="text" name="wife_name" class="form-control">
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="button" class="btn btn-md btn-info " id="addrow-wife" value="Add Row" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="wife" class="col-md-2">Number Of Children</label>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="input-group family-person">
															<span class="input-group-addon">
                                                                Boy
                                                            </span>
                                            <input type="text" class="form-control" name="boy">
                                            <span class="input-group-addon">
                                                                Person
                                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="input-group family-person">
															<span class="input-group-addon">
                                                                Girl
                                                            </span>
                                            <input type="text" class="form-control" name="boy">
                                            <span class="input-group-addon">
                                                                Person
                                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="wife" class="col-md-2">Brother And Sister</label>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="input-group family-person">
															<span class="input-group-addon">
                                                                Brother
                                                            </span>
                                            <input type="text" class="form-control" name="boy">
                                            <span class="input-group-addon">
                                                                Person
                                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="input-group family-person">
															<span class="input-group-addon">
                                                                Sister
                                                            </span>
                                            <input type="text" class="form-control" name="boy">
                                            <span class="input-group-addon">
                                                                Person
                                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile2">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control">
                                            <option>--Select District--</option>
                                            <option>Barisal</option>
                                            <option>Dhaka</option>
                                            <option>Khulna</option>
                                            <option>Rajshahi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Thana</label>
                                        <select class="form-control">
                                            <option>--Select thana--</option>
                                            <option>Barisal Sadar</option>
                                            <option>Chormonai</option>
                                            <option>Chadpura</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Post Office</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile4">
                        <div class="col-lg-12">

                        </div>
                        <div class="clearfix"></div>
                    </div><div role="tabpanel" class="tab-pane" id="profile5">
                        <div class="col-lg-12">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



@endsection