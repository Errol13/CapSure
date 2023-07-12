@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="container my-3">
    <div class="row app-fnt">
      <div class="col-md-2">
        <button class="btn btn-aqua add-button" type="button" href="#">Add a schedule</button>
      </div>
    </div>
  </div>

  <div class="container my-4">
    <table class="table  border-black">
      <thead>
        <tr class="table-brd-clr text-white text-center">
          <th scope="col" class="column-cus_name">Client/Agent Name</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Event</th>
          <th scope="col">Time Start</th>
          <th scope="col" class="column-actions">Actions</th>
        </tr>
      </thead>
      <tbody class="text-center ">
        @if(count($appointments) === 0)
        <td colspan="6" class="text-muted fs-5 ">No Appointment</td>

        @else
        @foreach ($appointments as $appointment)
        <tr>
          <td class="text-start">{{$appointment->cus_name}}</td>
          <td>{{$appointment->start_date}}</td>
          <td>{{$appointment->end_date}}</td>
          <td>{{$appointment->event}}</td>
          <td>{{$appointment->start_time}}</td>
          <td>
            <div class="row text-center">
              <div class="col-md-1 me-2 ms-3">
                <a href="/appointment/edit/{{$appointment->id}}" class="btn btn-aqua" type="button"><i class="bi bi-pencil"></i> </a>
              </div>



              <div class="col-md-1 ms-4">
                <form action="{{ route('appointment.delete', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-red" type="submit"><i class="bi bi-trash"></i></button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
    <!--Pagination --->
    <div class="text-end">
      {{ $appointments->links('pagination::bootstrap-4') }}
    </div>
  </div>
  <x-appointment-form></x-appointment-form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
  // adding appointments
  const addButton = document.querySelector('.add-button');
  const createApp = document.querySelector('.create-appointment');
  const body = document.querySelector('body');
  const cancelButton = createApp.querySelector('button[data-dismiss="modal"]');

  addButton.addEventListener('click', () => {
    createApp.hidden = !createApp.hidden;
    body.classList.toggle('no-scroll');
  });

  cancelButton.addEventListener('click', () => {
    createApp.hidden = true;
    body.classList.remove('no-scroll');
  });

  // editing appointments
  /*
  const editButtons = document.querySelectorAll('.edit-button');
  const editForm = document.querySelector('.edit-appointment');

  editButtons.forEach(editButton => {
    editButton.addEventListener('click', () => {
      editForm.hidden = false;
      body.classList.add('no-scroll');
    });
  });

  const cancelEditButton = editForm.querySelector('.cancel-button');
  cancelEditButton.addEventListener('click', () => {
    editForm.hidden = true;
    body.classList.remove('no-scroll');
  });*/

  //delete confirmation
  document.getElementById('deleteForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    if (confirm('Are you sure you want to delete this appointment?')) {
      this.submit(); // Submit the form if user confirms
    }
  });
</script>

@endsection