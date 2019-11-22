@extends('layouts.app')

@section('js')
    <script type="text/javascript">
        $(".student_approval").hide();

        function valueChanged() {

            if ($('.if_select').is(":checked"))
                $(".student_approval").show();
            else
                $(".student_approval").hide();
        }
    </script>

@endsection

@section('css')
    <style>
        .student_approval {
            display: none
        }
    </style>
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
                        <form action="{{route('update_applicant',$applicant->id)}}" method="post">
                            @csrf
                            <div class="form-body">


                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf">Form No: </label>
                                            <input type="number" name="form_no" value="{{$applicant->form_no}}"
                                                   placeholder="210"
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf">Name</label>
                                            <input type="text" name="student_name" value="{{$applicant->student_name}}"
                                                   placeholder="Md. Alvi"
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="admissionf">Phone Number</label>
                                            <input type="tel" name="phone" value="{{$applicant->phone}}"
                                                   placeholder="0191370...."
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-3">


                                        <div class="form-group">
                                            <label>Student Type</label>
                                            <select name="student_type" class="form-control">


                                                <option value="1" {{ $applicant->student_type == 1 ? 'selected' : '' }}>
                                                    New
                                                </option>
                                                <option value="2" {{ $applicant->student_type == 2 ? 'selected' : '' }}>
                                                    Old
                                                </option>


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

                                                <option value="11" {{ $applicant->class == 1 ? 'selected' : '' }}>
                                                    Class A
                                                </option>
                                                <option value="22" {{ $applicant->class == 2 ? 'selected' : '' }}>
                                                    Class B
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Section </label>
                                            <select name="section" class="form-control">

                                                <option value="1111" {{ $applicant->section == 1111 ? 'selected' : '' }}>
                                                    Class A Section AA
                                                </option>
                                                <option value="2222" {{ $applicant->section == 2222 ? 'selected' : '' }}>
                                                    Class A Section AA
                                                </option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Previous Class </label>
                                            <select name="previous_class" class="form-control">

                                                <option value="1" {{ $applicant->previous_class == 1 ? 'selected' : '' }}>
                                                    Class A
                                                </option>
                                                <option value="2" {{ $applicant->previous_class == 2 ? 'selected' : '' }}>
                                                    Class A
                                                </option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Hotel</label>
                                            <select name="hotel" class="form-control">

                                                <option value="1" {{ $applicant->hotel == 1 ? 'selected' : '' }}>
                                                    Residential
                                                </option>
                                                <option value="2" {{ $applicant->hotel == 2 ? 'selected' : '' }}>
                                                    Non Residential
                                                </option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Admission Date</label>
                                            <div class="input-group">
                                                <input type="text" name="admission_date"
                                                       class="form-control mydatepicker"
                                                       value="{{date('d-m-Y', strtotime($applicant->admission_date))}}"
                                                >
                                                <span class="input-group-addon"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="admissionf">Admission Free: </label>
                                            <input type="number" name="admission_free"
                                                   value="{{$applicant->admission_free}}" placeholder="Tk."
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label style="color: red">student approval:</label>
                                            <div class="checkbox_minimal-red">
                                                <input onchange="valueChanged()" name="active" type="checkbox"
                                                       class="check if_select"
                                                       id="minimal-checkbox-1" data-checkbox="icheckbox_flat-red">
                                                <label for="flat-checkbox-1">(Be Careful Submitted)</label>
                                            </div>


                                        </div>
                                    </div>

                                    {{--// hiden div--}}

                                    <div class="col-md-4 student_approval">
                                        <div class="form-group">
                                            <label for="admissionf">Roll No: </label>
                                            <input type="text" name="rollNumber" value=""
                                                   placeholder="555"
                                                   class="form-control"
                                                   id="admissionf">
                                        </div>
                                    </div>
                                    <div class="col-md-4 student_approval">
                                        <div class="form-group">
                                            <label for="admissionf">Note:</label>
                                            <textarea name="note" class="form-control" rows="2"></textarea>
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