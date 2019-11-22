<?php

namespace App\Http\Controllers;

use App\studentInfo;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{

    public function addStaff()
    {

        return view('staff.addStaff');
    }

    public function addTeacher()
    {

        return view('teacher.addTeacher');
    }


    public function index()
    {
        /*$activeStudent  = studentInfo::all();

        foreach ($activeStudent as $item){
            echo $item->sessionsActive->sessionName;
        }

        exit();*/
        $activeStudent = studentInfo::all();

        $activeStudent = studentInfo::whereHas('sessionsActive', function ($q) {
            $q->where('active', 1);
        })->paginate(5);

        /* echo '<pre>';

         foreach ($activeStudent as $item){
             echo $item->sessionsActive->sessionName;
         }*/


        return view('students.activeStudent', compact('activeStudent'));


    }

    public function oldStudent()
    {

        $oldStudent = studentInfo::whereHas('sessionsActive', function ($q) {
            $q->where('active', 0);
        })->paginate(3);

        return view('students.oldStudent', compact('oldStudent'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\studentInfo $studentInfo
     * @return \Illuminate\Http\Response
     */
    public function show(studentInfo $studentInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\studentInfo $studentInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(studentInfo $studentInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\studentInfo $studentInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentInfo $studentInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\studentInfo $studentInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentInfo $studentInfo)
    {
        //
    }
}
