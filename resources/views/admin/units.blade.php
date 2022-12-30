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
        <a href="courses">Courses</a>
        <a href="#" class="active">Units</a>
        <a href="rooms">Rooms</a>
        <a href="registration_requests">Send Registration Requests</a>
        <a href="assign_lecturers">Assign Lecturers</a>
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add new unit
          </button><br><br>
    
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add unit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="addunit" method="post">
                  @csrf
                  <div class="modal-body">
                    <input type="text" name="name" placeholder="Unit Name" style="border-bottom: 1px solid" required><br><br>
                        <input type="text" name="unit_code" placeholder="Unit Code" style="border-bottom: 1px solid" required><br><br>
                        
                        <select name="course_code" required>
                            @foreach ($courses as $course)
                            <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                            @endforeach
                        </select>
                        
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
                <th>Unit Name</th>
                <th>unit Code</th>
                <th>Course code</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>  
            @foreach($units as $unit)
            <tr>
                <td>{{$unit->name}}</td>
                <td>{{$unit->unit_code}}</td>
                <td>{{$unit->course_code}}</td>
                <form action="units/{{$unit->id}}" method="post">
                  @csrf
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
                        Edit
                      </button>
                
                      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="edit">Edit Unit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="editunit/{{$unit->id}}" method="post">
                              @csrf
                              <div class="modal-body">
                                    <label for="name">Unit Name</label><br>
                                    <input type="text" name="name" value="{{$unit->name}}" style="border-bottom: 1px solid" required><br><br>
                                    <label for="unit_code">Unit Code</label><br>
                                    <input type="text" name="unit_code" value="{{$unit->unit_code}}" style="border-bottom: 1px solid" required><br><br>
                                    <label for="course_code">Course Code</label><br>
                                    <input type="int" name="course_code" value="{{$unit->course_code}}" style="border-bottom: 1px solid" required><br><br>
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
                <form action="deleteunit/{{$unit->id}}" method="post">
                    @csrf
                    <input type="hidden" name="isdeleted" value="1">
                    <td ><input type="submit" value="Delete" class="btn btn-primary"></td>
                </form>
            </tr>  
            @endforeach
        </table> 
    </div>
      
    </div>
    </div>
  </div>
@endsection