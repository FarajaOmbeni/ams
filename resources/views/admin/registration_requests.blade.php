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

  <div class="container_me"_me">
    <nav>
      <div class="side_navbar">
        <a href="dashboard">Home</a>
        <a href="accept">Acceptance Letter</a>
        <a href="enrol">Enrol Students</a>
        <a href="lecturers">Lecturers</a>
        <a class="active" href="#">Students</a>
        <a href="courses">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>

        
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">

        <table >
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Academic Year</th>
                <th>Register</th>
            </tr>  
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->course_code}}</td>
                <form action="sendrequest/{{$student->id}}" method="post">
                    @csrf
                    <td><input type="hidden" name="academic_year" id="academic_year">{{$student->academic_year}}</td>
                  <td><input type="submit" value="Register" id="sendbutton" class="btn btn-primary" onclick="var year = document.getElementById('academic_year'); year.value += 1"></td>

                    </form>
            </tr>  
            @endforeach
        </table> 
    </div>
      
    </div>
    </div>
  </div>
@endsection