
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
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Tel</th>
                <th>ID/PP Number</th>
                <th>County</th>
                <th>Address</th>
                <th>Course</th>
                <th>Parent Name</th>
                <th>Parent Email</th>
                <th>Parent Tel</th>
                <th>Sponsor Name</th>
                <th>Sponsor Email</th>
                <th>Sponsor Tel</th>
                <th>Enrol</th>
                <th>Edit</th>
            </tr>  
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->fname}}</td>
                <td>{{$student->lname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone_number}}</td>
                <td>{{$student->identification_number}}</td>
                <td>{{$student->county}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->parent_name}}</td>
                <td>{{$student->parent_email}}</td>
                <td>{{$student->parent_tel}}</td>
                <td>{{$student->sponsor_name}}</td>
                <td>{{$student->sponsor_email}}</td>
                <td>{{$student->sponsor_tel}}</td>
                <form action="enrolStudent/{{$student->id}}" method="post">
                  @csrf
                  <td><input type="hidden" name="enrol" value="1">No</td>
                <td><input type="submit" value="Enrol" class="btn btn-primary"></td>
                  </form>
            </tr>  
            @endforeach
        </table> 
    </div>
      
    </div>
    </div>
  </div>
@endsection