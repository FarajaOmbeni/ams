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
        <a href="dashboard">Home</a>
        <a href="accept">Acceptance Letter</a>
        <a href="enrol">Enrol Students</a>
        <a href="lecturers">Lecturers</a>
        <a href="courses">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>
        <a href="registration_requests">Send Registration Requests</a>
        <a class="active" href="#">Assign Lecturers</a>
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">
      
      <div class="formBox">
        <h1>Assign Lecturers</h1> <br><br>
        @foreach($units as $unit)
        @foreach($lecturers as $lecturer)
        <form class="form-group" action="assign/lec_id={{$lecturer->id}}/unit_id={{$unit->id}}" method="post">
          @csrf
            <label for="lecturers" >Lecturer</label><br>
            <select class="form-control">
              
                <option name="lecturer_id" value="{{$lecturer->id}}">{{$lecturer->name}}</option>
              @endforeach
            </select><br><br><br>

            <label for="classes" >Unit</label><br>
            <select class="form-control">
              
                <option name="unit_id" value="{{$unit->unit_code}}">{{$unit->name}}</option>
              @endforeach
            </select><br><br><br>

            <input type="submit" value="ASSIGN" class="btn btn-primary">
        </form>
      </div>
        
    </div>
    </div>
  </div>
@endsection

