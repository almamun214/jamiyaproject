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
            <h4 class="page-title">Current Student List </h4>
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


    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">


                <div class="table-responsive">
                    <table id="donarlist-export" class="table color-table info-table">
                        <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Form No</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Phone</th>
                            <th>Student Type</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach ($activeStudent as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->form_no}}</td>

                                <td>{{$item->student_name}}</td>
                                <td>{{$item->class}}</td>
                                <td>{{$item->phone}}</td>
                                <td> @if($item->student_type == 1) {{'New'}} @else {{'Old'}} @endif</td>


                                <td>
                                    <a href="{{route('applicantShow',$item->id)}}"><i class="fa fa-eye"
                                                                                      style="margin-right:7px;color:green"></i></a>
                                    <a href="{{route('editApplicant',$item->id)}}"><i class="fa fa-edit"></i></a>
                                    <a href="#"><i class="fa fa-trash"></i></a>
                                    <a href="#" style="color:red;padding-left:7px"><i class="fa fa-print"></i></a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>


                    </table>
                    {!! $activeStudent->links() !!}
                </div>
            </div>
        </div>
    </div>

    </div>



@endsection