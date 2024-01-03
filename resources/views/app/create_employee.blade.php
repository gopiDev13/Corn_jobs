@extends('layouts.app')

@section('content')
<div class="col py-3">
          <div class="container mt-5">
  <form id="empform" action="{{ route('employee.store') }}" method="POST" >
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth:</label>
      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
    </div>

  {{--  <div class="mb-3">
      <label for="address" class="form-label">Address:</label>
      <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
    </div>--}}

    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number:</label>
      <input type="tel" class="form-control" id="phone" name="number" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
          
        </div>

@endsection