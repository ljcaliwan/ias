@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->fullname }}</h5>
        <p class="card-text">Address : {{ $students->age }}</p>
        <p class="card-text">Mobile : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->contact_no }}</p>
  </div>
    </hr>
  </div>
</div>