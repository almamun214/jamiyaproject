<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Sessions;
use App\studentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{

    public function index()
    {
        $applicantList = Applicant::where('active', 1)->paginate(15);

        return view('students.applicantList', compact('applicantList'));
    }


    public function create()
    {
        $sessionActiveList = Sessions::orderBy('id', 'DESC')->where('active', 1)->get()->first();
        return view('students.admissionFormCreate', compact('sessionActiveList'));
    }


    public function store(Request $request)
    {


        $requestData = new Applicant();

        $requestData->form_no = $request->input('form_no');
        $requestData->student_name = $request->input('student_name');
        $requestData->phone = $request->input('phone');
        $requestData->student_type = $request->input('student_type');
        $requestData->class = $request->input('class');
        $requestData->section = $request->input('section');
        $requestData->previous_class = $request->input('previous_class');
        $requestData->hotel = $request->input('hotel');
        //$requestData->admission_date = Carbon::parse($request->input('admission_date'));
        $requestData->admission_date = date('Y-m-d', strtotime($request->input('admission_date')));


        $requestData->admission_free = $request->input('admission_free');
        $requestData->created_name = Auth::user()->name;
        $requestData->sessionId = $request->sessionId;


        if ($requestData->save()) {
            // $requestData->id == last insert id;
            return redirect()->route('applicantShow', $requestData->id)->with('success', 'created successfully And Prints !');
        }
        return back()->with('success', 'Please check values and submit again!');


    }


    public function show(Applicant $applicant)
    {
        return view('students.showOrPrint', compact('applicant'));
    }


    public function edit(Applicant $applicant)
    {
        return view('students.editApplicant', compact('applicant'));
    }


    public function update(Request $request, Applicant $applicant)
    {


        $requestData['form_no'] = $request->input('form_no');
        $requestData['student_name'] = $request->input('student_name');
        $requestData['phone'] = $request->input('phone');
        $requestData['student_type'] = $request->input('student_type');
        $requestData['class'] = $request->input('class');
        $requestData['section'] = $request->input('section');
        $requestData['previous_class'] = $request->input('previous_class');
        $requestData['hotel'] = $request->input('hotel');
        $requestData['admission_date'] = date('Y-m-d', strtotime($request->input('admission_date')));
        $requestData['created_name'] = $request->input('created_name');
        $requestData['section'] = $request->input('section');
        $requestData['note'] = $request->input('note');
        $requestData['created_name'] = $applicant->created_name;

        if ($request->has('active')) {
            $requestData['active'] = 0;
        } else {
            $requestData['active'] = 1;
        }


        if ($applicant->update($requestData)) {


            if ($applicant->active == 0) {
                $applicantToAdmin = new studentInfo();

                $applicantToAdmin['applicantId'] = $applicant->id;
                $applicantToAdmin['form_no'] = $applicant->form_no;
                $applicantToAdmin['student_name'] = $applicant->student_name;
                $applicantToAdmin['phone'] = $applicant->phone;
                $applicantToAdmin['student_type'] = $applicant->student_type;
                $applicantToAdmin['class'] = $applicant->class;
                $applicantToAdmin['section'] = $applicant->section;
                $applicantToAdmin['previous_class'] = $applicant->previous_class;
                $applicantToAdmin['hotel'] = $applicant->hotel;
                $applicantToAdmin['admission_date'] = $applicant->admission_date;
                $applicantToAdmin['created_name'] = $applicant->created_name;
                $applicantToAdmin['admission_free'] = $applicant->admission_free;
                $applicantToAdmin['active'] = $applicant->active;

                $applicantToAdmin['note'] = $applicant->note;
                $applicantToAdmin['sessionId'] = $applicant->sessionId;


                $applicantToAdmin['rollNumber'] = $request->rollNumber;
                $applicantToAdmin['note'] = $request->note;

                $applicantToAdmin->save();


            }


            return redirect()->route('applicantList')->with('success', 'Update successfully!');

        } else {

            return back()->with('success', 'Please check values and submit again!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
