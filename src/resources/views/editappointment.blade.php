@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!--form for editing -->
  <div class="edit-appointment">
    <form method="POST" action="/appointment/update/{{$appointment->id}}">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" name="cus_name" placeholder="Enter your name" value="{{ $appointment->cus_name }}">
        </div>
        <div class="form-group col-md-12">
          <label for="inputStartDate">Start Date</label>
          <input type="date" class="form-control" id="inputStartDate" name="start_date" placeholder="Enter start date" value="{{ $appointment->start_date }}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEndDate">End Date</label>
          <input type="date" class="form-control" id="inputEndDate" name="end_date" placeholder="Enter end date" value="{{ $appointment->end_date }}">
        </div>
        <div class="form-group col-md-12">
          <label for="inputEvent">Event</label>
          <input type="text" class="form-control" id="inputEvent" name="event" placeholder="Enter event" value="{{ $appointment->event }}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputStartTime">Start Time</label>
          <input type="text" class="form-control" id="inputStartTime" name="start_time" placeholder="Enter start time" value="{{ $appointment->start_time }}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <button type="button" class="btn btn-secondary me-1 mt-2 cancel-button" onclick="window.history.back();">Cancel</button>
          <button type="submit" class="btn btn-primary mt-2">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection