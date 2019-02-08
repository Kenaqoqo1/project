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
                            <div class="form-group">
                                <label for="firstName">First Name:</label>
                                <input type="text" required class="form-control" id="firstName" name="firstName" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <label for="secondName">Second Name:</label>
                                <input type="text" required class="form-control" id="secondName" name="secondName" placeholder="Second Name" >
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select class="form-control" required name="gender">
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth:</label>
                                <input type="date" required class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth">
                            </div>

                            <div class="form-group">
                                <label for="parent_name">Parent Name</label>
                                <input type="text" required class="form-control" id="parent_name" name="parent_name" placeholder="Parent name">
                            </div>

                            <div class="form-group">
                                <label for="phoneWork">Work Phone</label>
                                <input type="integer" required class="form-control" id="phoneWork" name="phoneWork" placeholder="Work Phone">
                            </div>

                            <div class="form-group">
                                <label for="phoneHome">Home Phone</label>
                                <input type="integer" required class="form-control" id="phoneHome" name="phoneHome" placeholder="Home Phone">
                            </div>

                            <div class="form-group">
                                <label for="patiet_insuarance">Insuarance</label>
                                <input type="text" required class="form-control" id="patiet_insuarance" name="patiet_insuarance" placeholder="Insuarance">
                            </div>

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
