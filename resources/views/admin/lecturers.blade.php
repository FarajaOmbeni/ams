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
        <a class="active" href="#">Lecturers</a>
        <a href="courses">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>
        <a href="registration_requests">Send Registration Requests</a>
        <a href="assign_lecturers">Assign Lecturers</a>
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add new lecturer
      </button><br><br>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Lecturer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="addlecturer" method="post">
              @csrf
              <div class="modal-body">
                    <input type="text" name="name" placeholder="Full Name" style="border-bottom: 1px solid" required><br><br>
                    <input type="text" name="email" placeholder="Email" style="border-bottom: 1px solid" required><br><br>
                    <select name="role" hidden>
                      <option value="2" name="role" selected>Lecturer</option>
                    </select>
                    <label for="password">Default Password</label>
                    <input type="text" name="password" style="border-bottom: 1px solid" value="password" readonly required><br><br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
          </div>
        </div>
      </div>

        <table >
            <tr>
                <th>Lecturer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>ID/PP Number</th>
                <th>Nationality</th>
                <th>Address</th>
                <th>Course</th>
                <th>Units</th>
            </tr>  
            @foreach($lecturers as $lecturer)
            <tr>
                <td>{{$lecturer->id}}</td>
                <td>{{$lecturer->name}}</td>
                <td>{{$lecturer->email}}</td>
                <td>{{$lecturer->phone_number}}</td>
                <td>{{$lecturer->identification_number}}</td>
                <td>{{$lecturer->nationality}}</td>
                <td>{{$lecturer->address}}</td>
                <td>{{$lecturer->course}}</td>
                <td>{{$lecturer->unit}}</td>
            </tr>  
            @endforeach
        </table> 
    </div>
      
    </div>
    </div>
  </div>
@endsection