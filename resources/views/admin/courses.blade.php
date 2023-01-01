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
        <a href="#" class="active ">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>
        <a href="registration_requests">Send Registration Requests</a>
        <a href="assign_lecturers">Assign Lecturers</a>
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add new course
          </button><br><br>
    
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add course</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="addcourse" method="post">
                  @csrf
                  <div class="modal-body">
                        <input type="text" name="course_code" placeholder="Course code" style="border-bottom: 1px solid" required><br><br>
                        <input type="int" name="course_name" placeholder="Course name" style="border-bottom: 1px solid" required><br><br>
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
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>  
            @foreach($courses as $course)
            <tr>
                <td>{{$course->course_name}}</td>
                <td>{{$course->course_code}}</td>
                <form action="courses/{{$course->id}}" method="post">
                  @csrf
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
                        Edit
                      </button>
                
                      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="edit">Edit Course</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="editCourse/{{$course->id}}" method="post">
                              @csrf
                              <div class="modal-body">
                                    <label for="name">Course Name</label><br>
                                    <input type="text" name="course_name" value="{{$course->course_name}}" style="border-bottom: 1px solid" required><br><br>
                                    <label for="code">Course Code</label><br>
                                    <input type="int" name="course_code" value="{{$course->course_code}}" style="border-bottom: 1px solid" required><br><br>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                          </form>
                          </div>
                        </div>
                      </div>
                  </td>
                </form>
                <form action="deleteCourse/{{$course->id}}" method="post">
                    @csrf
                    <input type="hidden" name="isdeleted" value="1">
                    <td ><input type="submit" value="Delete" class="btn btn-danger"></td>
                </form>
            </tr>  
            @endforeach
        </table> 
    </div>
      
    </div>
    </div>
  </div>
@endsection