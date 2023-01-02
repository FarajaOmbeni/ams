@extends('admin/imports')

@section('content')
  <header class="header">
    <div class="title">
      <span>Admin Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
        <a href="../admin"><h4>Homepage</h4></a>
        <h4>Admin Name</h4>
      </div>
    </div>
  </header>

  <div class="container_me"">
    <nav>
      <div class="side_navbar">
        <a class="active" href="dashboard">Home</a>
        <a href="accept">Acceptance Letter</a>
        <a href="enrol">Enrol Students</a>
        <a href="lecturers">Lecturers</a>
        <a href="registration_requests">Students</a>
        <a href="courses">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>
        
      </div>
    </nav>

    <div class="main-body">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" value="{{Auth::user()->email}}" readonly>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>
@endsection