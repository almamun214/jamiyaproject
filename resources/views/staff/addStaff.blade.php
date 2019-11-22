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
            <h4 class="page-title">Add Staff </h4>
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
                        <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Additional Information </span></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Permanent Address</span></a>
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
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="term">User Type</label>
                                                                <select id="term" class="form-control">
                                                                    <option>Student</option>
                                                                    <option>Teacher</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="term">Roll No</label>
                                                                <input type="text" name="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="term">Class</label>
                                                                <input type="text" name="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="term">Student Name</label>
                                                                <input type="text" name="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="term">Book Issue Date</label>
                                                                <input type="date" name="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="term">Due Date</label>
                                                                <input type="date" name="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                                                    <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                                </div>
                                                            </div>
                                                        </div> -->
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
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <div class="table-responsive">
                                    <table class="table table-bordered color-table">
                                        <thead>
                                        <tr>
                                            <th>Si.No</th>
                                            <th>User Type</th>
                                            <th>User</th>
                                            <th>Book No</th>
                                            <th>Title</th>
                                            <th>Book Issue Date</th>
                                            <th>Due Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#1</td>
                                            <td>Student</td>
                                            <td>User Name</td>
                                            <td>A-49</td>
                                            <td>Book Title</td>
                                            <td>10/12/2017</td>
                                            <td>10/12/2018</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <a href="#" style="color:red;padding-left:7px "><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1</td>
                                            <td>Teacher</td>
                                            <td>User Name</td>
                                            <td>A-49</td>
                                            <td>Book Title</td>
                                            <td>10/12/2017</td>
                                            <td>10/12/2018</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <a href="#" style="color:red;padding-left:7px "><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1</td>
                                            <td>Student</td>
                                            <td>User Name</td>
                                            <td>A-49</td>
                                            <td>Book Title</td>
                                            <td>10/12/2017</td>
                                            <td>10/12/2018</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <a href="#" style="color:red;padding-left:7px "><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1</td>
                                            <td>Teacher</td>
                                            <td>User Name</td>
                                            <td>A-49</td>
                                            <td>Book Title</td>
                                            <td>10/12/2017</td>
                                            <td>10/12/2018</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <a href="#" style="color:red;padding-left:7px "><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1</td>
                                            <td>Student</td>
                                            <td>User Name</td>
                                            <td>A-49</td>
                                            <td>Book Title</td>
                                            <td>10/12/2017</td>
                                            <td>10/12/2018</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <a href="#" style="color:red;padding-left:7px "><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#1</td>
                                            <td>Teacher</td>
                                            <td>User Name</td>
                                            <td>A-49</td>
                                            <td>Book Title</td>
                                            <td>10/12/2017</td>
                                            <td>10/12/2018</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <a href="#" style="color:red;padding-left:7px "><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>


@endsection