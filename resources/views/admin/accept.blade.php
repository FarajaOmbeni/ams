@extends('admin/imports')

@Section('content')
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

  <div class="container_me">
    <nav>
      <div class="side_navbar">
        <a href="dashboard">Home</a>
        <a class="active" href="#">Acceptance Letter</a>
        <a href="enrol">Enrol Students</a>
        <a href="lecturers">Lecturers</a>
        <a href="registration_requests">Students</a>
        <a href="courses">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>
        
      </div>
    </nav>

    <div class="main-body">
      <div class="formBox">
        <h2>Acceptance Letter</h2><br><br>
        <form action="sendLetter" method="post">
          @csrf
            <select name="email" class="form-control">
              @foreach($students as $student)
              <option value="{{$student->email}}" name="email">{{$student->email}}</option>
              @endforeach
            </select>
             <br><br><br>
            <label for="letter">Letter</label><br>
            <textarea name="letter" class="form-control" cols="30" rows="10"></textarea><br>
            @error('letter')
            <ul>
              <li style="color:red">{{$message}}</li>
            </ul>
    @enderror
            <input type="submit" name="" class="btn btn-primary" value="SEND">

        </form>
      </div>
      
    </div>
    </div>
  </div>
@endsection
