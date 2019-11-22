@extends('layouts.app')

@section('js')


@endsection

@section('css')

@endsection


@section('content')

    <div class="page-content">



    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Student Session Form</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="{{route('sessionsList')}}" class="active btn btn-danger btn-sm"
                       style="color:#fff;font-weight:600">Sessions List </a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- .row -->
    <div class="row">


        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Student Admission</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('storeSession')}}" method="post">
                            @csrf
                            <div class="form-body">


                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf"> Session Name: </label>
                                            <input type="text" name="sessionName" value="" placeholder="aaa"
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf">Session Year</label>
                                            <input type="text" name="sessionYear" value="" placeholder="2019-2020"
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Note:</label>

                                            <textarea name="note" class="form-control" placeholder="Note"
                                                      rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-3">


                                        <div class="form-group">
                                            <label>Active Type</label>
                                            <select name="active" class="form-control">
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>

                                    </div>

                                    <!--/span-->
                                </div>


                            </div>
                            <div class="form-actions text-center">
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection