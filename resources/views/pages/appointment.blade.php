@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Appointment</div>
        <div class="card-body">
          <form  action="{{ route('appoint.store') }}" method="post">
            <div class="form-group">
              <label for="details">Details</label>
              <textarea required class="form-control" name="details">
              </textarea>

            </div>

          </form>

        </div>
      </div>

    </div>

  </div>
</div>
@endsection
