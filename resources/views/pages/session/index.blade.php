@extends('layouts.app')

@section('js')

    <!-- Export Js  -->
    <script src="/public/adminAssets/datatables/jquery.dataTables.min.js"></script>
    <script src="/public/adminAssets/datatables/dataTables.buttons.min.js"></script>
    <script src="/public/adminAssets/datatables/buttons.flash.min.js"></script>
    <script src="/public/adminAssets/datatables/jszip.min.js"></script>
    <script src="/public/adminAssets/datatables/pdfmake.min.js"></script>
    <script src="/public/adminAssets/datatables/vfs_fonts.js"></script>
    <script src="/public/adminAssets/datatables/buttons.html5.min.js"></script>
    <script src="/public/adminAssets/datatables/buttons.print.min.js"></script>
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
            <h4 class="page-title">Student Session List</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="{{ route('sessionsCreate') }}" class="active btn btn-danger btn-sm"
                       style="color:#fff;font-weight:600">Sessions Add</a></li>
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
                            <th>Session Name</th>
                            <th>Session Year</th>
                            <th>note</th>

                            <th>Active Type</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach ($sessionsList as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->sessionName}}</td>

                                <td>{{$item->sessionYear}}</td>
                                <td>{{$item->note}}</td>

                                <td> @if($item->active == 1) {{'active session'}} @else {{'Old session'}} @endif</td>


                                <td>


                                    <a class="btn btn-danger" href="{{route('sessionsDestroy',$item->id)}}"><i class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>


                    </table>
                    {!! $sessionsList->links() !!}
                </div>
            </div>
        </div>
    </div>

    </div>



@endsection