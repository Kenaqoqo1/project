@extends('layouts.app')
@section('content')
  <h3></h3>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <body>
        <div class="table-responsive">
      <table class="table table-striped table-hover table-condensed">
        <thead>
          <tr>
            <th><strong>ID</strong></th>
            <th><strong>First Name</strong></th>
            <th><strong>Second Name</strong></th>
            <th><strong>Gender</strong></th>
            <th><strong>Date Of Birth</strong></th>
            <th><strong>Parent</strong></th>
            <th><strong>Phone Work</strong></th>
            <th><strong>Phone Home</strong></th>
            <th><strong>Insuarance</strong></th>
            <th><strong>Appointment</strong></th>


          </tr>
        </thead>
        <tbody>
          @foreach ($patients as $patient)
            <td>{{ $patient->patiet_id }}</td>
            <td>{{ $patient->firstName }}</td>
            <td>{{ $patient->secondName}}</td>
            <td>{{ $patient->gender}}</td>
            <td>{{ $patient->date_of_birth}}</td>
            <td>{{ $patient->parent_name}}</td>
            <td>0{{ $patient->phoneWork}}</td>
            <td>0{{ $patient->phoneHome}}</td>
            <td>{{ $patient->patiet_insuarance}}</td>
            <td><a href="/appoint/store/{{ $patient->patiet_id}}" style="cursor:pointer" type="submit" class="btn btn-primary">Appointment</a></td>
          @endforeach

        </tbody>
      </table>
    </div>
      </body>
    </body>
  </html>
  @endsection
