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
                <div class="panel-heading"> Session: 
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('storeApplicant')}}" method="post">
                            @csrf
                            <input type="text" name="sessionId" value="{{$sessionActiveList->id}}" required>
                            <div class="form-body">


                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf">Form No: </label>
                                            <input type="number" name="form_no" value="" placeholder="210"
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf">Name</label>
                                            <input type="text" name="student_name" value="" placeholder="Md. Alvi"
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf">Phone Number</label>
                                            <input type="tel" name="phone" placeholder="0191370...."
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-3">


                                        <div class="form-group">
                                            <label>Student Type</label>
                                            <select name="student_type" class="form-control selectpicker" data-live-search="true">
                                                <option value="1">New</option>
                                                <option value="2">Old1</option>
                                                <option value="2">Old3</option>
                                                <option value="2">Old4</option>
                                                <option value="2">Old4e</option>
                                                <option value="2">Old4d</option>
                                                <option value="2">Old4d</option>
                                                <option value="2">Old4</option>
                                                <option value="2">Oldr4</option>
                                                <option value="2">Old4</option>
                                            </select>
                                        </div>

                                    </div>

                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Class </label>
                                            <select name="class" class="form-control">
                                                <option value="11">Class A</option>
                                                <option value="11">Class B</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Section </label>
                                            <select name="section" class="form-control">
                                                <option value="1111">Class A Section AA</option>
                                                <option value="2222">Class B Section BB</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Previous Class </label>
                                            <select name="previous_class" class="form-control">
                                                <option value="1">Class A</option>
                                                <option value="2">Class B</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Hotel</label>
                                            <select name="hotel" class="form-control">
                                                <option value="1">Residential</option>
                                                <option value="2">Non Residential</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Admission Date</label>
                                            <div class="input-group">
                                                <input type="text" name="admission_date"
                                                       class="form-control mydatepicker"
                                                       placeholder="dd/mm/yyyy">
                                                <span class="input-group-addon"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="admissionf">Admission Free: </label>
                                            <input type="number" name="admission_free" value="" placeholder="Tk."
                                                   class="form-control"
                                                   id="admissionf">
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