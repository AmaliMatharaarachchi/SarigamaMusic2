@extends('layouts.master')

@section('side-bar')
    <h4>SaRigaMa MusIc</h4>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Class</a></li>
        <li><a href="#section2">Add Payment</a></li>
        <li><a href="#section2">Payment history</a></li>
        <li><a href="#section2">Teacher salary</a></li>
        <li><a href="#section2">Teacher Salary's History</a></li>
        <li><a href="#section3">Add Student</a></li>
        <li><a href="#section3">All Student</a></li>
        <li><a href="#section3">Leave Student</a></li>
        <li><a href="#section3">Teacher</a></li>
        <li><a href="#section3">Add Teacher</a></li>
        <li><a href="#section3">Leave Teacher</a></li>
        <li><a href="#section3">Assignment Summary</a></li>
        <li><a href="#section3">Student Attendance</a></li>
        <li><a href="#section2">Student Attendance History</a></li>
        <li><a href="#section2">Teacher Attendance</a></li>
        <li><a href="#section2">Teacher Attendance History</a></li>

    </ul><br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
    </div>
@endsection