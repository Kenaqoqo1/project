@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                      <h2>Register</h2>
                        <form method="POST" action="{{ route('post.store') }}">
                          @csrf
                            <div class="form-inline">
                                <label for="firstName">First Name:</label>
                                <input type="text" required class="form-control" id="firstName" name="firstName" placeholder="First Name">
                                <label for="secondName">Second Name:</label>
                                <input type="text" required class="form-control" id="secondName" name="secondName" placeholder="Second Name" >
                                </div><br>
                            <div class="form-inline">
                              <label for="date_of_birth">Date of Birth:</label>
                              <input type="date" required class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth">
                              <label for="gender">Gender:</label>
                                <select class="form-control" required name="gender">
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                </select>
                            </div> <br>
                            <div class="form-inline">
                              <label for="parent_name">Parent Name</label>
                              <input type="text" required class="form-control" id="parent_name" name="parent_name" placeholder="Parent name">
                                <label for="phoneWork">Work Phone</label>
                                <input type="integer" required class="form-control" id="phoneWork" name="phoneWork" placeholder="Work Phone">
                            </div><br>
                            <div class="form-inline">
                              <label for="phoneHome">Home Phone</label>
                              <input type="integer" required class="form-control" id="phoneHome" name="phoneHome" placeholder="Home Phone">
                                <label for="patiet_insuarance">Insuarance</label>
                                <input type="text" required class="form-control" id="patiet_insuarance" name="patiet_insuarance" placeholder="Insuarance">
                            </div><br>
                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
