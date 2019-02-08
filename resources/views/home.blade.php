@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="">
          <a href="{{ route('post.create')}}" type="button" style="cursor:pointer" class="btn btn-primary">Register</a>
        </div>

      </div>
      <div class="col-md-2">
        <div class="">
          <a href="{{route('post.show_patient')}}" type="button" style="cursor:pointer" class="btn btn-primary">View</a>
        </div>
        <div class="col-md-2">
          <div class="">
            <a href="{{ route('appoint.create')}}" type="button" style="cursor:pointer" class="btn btn-primary">Appointment</a>
          </div>

        </div>
      </div>
    </div>
  </div>




@endsection
