
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
        <a class="active" href="#">Enrol Students</a>
        <a href="lecturers">Lecturers</a>
        <a href="courses">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>
        <a href="registration_requests">Send Registration Requests</a>
        <a href="assign_lecturers">Assign Lecturers</a>
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">
        <table >
            <tr>
                <th>Application ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Tel</th>
                <th>ID/PP Number</th>
                <th>Course</th>
                <th>Enrolled?</th>
                <th>Edit</th>
            </tr>  
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->fname}}</td>
                <td>{{$student->lname}}</td>
                <td>{{$student->personal_email}}</td>
                <td>{{$student->phone_number}}</td>
                <td>{{$student->identification_number}}</td>
                <td>{{$student->course}}</td>
                <form action="enrolStudent/{{$student->id}}" method="post">
                  @csrf
                  <td><input type="hidden" name="enrol" value="1">No</td>
                <td><input type="submit" value="Enrol" class="btn btn-primary"></td>

                <input type="hidden" name="username" value="{{$student->fname}} {{$student->lname}}">

                <input type="hidden" name="school_email" value="{{$student->fname}}.{{$student->lname}}@ams.com">
                
                <input type="hidden" name="password" value="password">
                  </form>
            </tr> 
            
            @endforeach
        </table> 
    </div>
      
    </div>
    </div>
  </div>
@endsection