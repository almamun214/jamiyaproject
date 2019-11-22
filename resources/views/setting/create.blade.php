@extends('layouts.app')

@section('js')


@endsection

@section('css')

@endsection


@section('content')


    <div class="page-content">


    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Student Admissions Form</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="{{route('applicantList')}}" class="active btn btn-danger btn-sm"
                       style="color:#fff;font-weight:600">Applicant List</a></li>
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
                        <form action="{{route('storeApplicant')}}" method="post">
                            @csrf
                            <div class="form-body">


                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf"> Session Name: </label>
                                            <input type="sessionName" name="form_no" value="" placeholder="aaa"
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
                                            <label>Active Type</label>
                                            <select name="student_type" class="form-control">
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label style="color: red">student approval:</label>
                                            <div class="checkbox_minimal-red">
                                                <input name="active" type="checkbox" class="check" id="minimal-checkbox-1" data-checkbox="icheckbox_flat-red">
                                                <label for="flat-checkbox-1">(Be Careful Submitted)</label>
                                            </div>
                                            <textarea name="note" class="form-control" placeholder="Note" rows="2"></textarea>
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