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
        <a href="courses">Courses</a>
        <a href="units">Units</a>
        <a href="rooms">Rooms</a>
        <a href="registration_requests">Send Registration Requests</a>
        <a href="assign_lecturers">Assign Lecturers</a>
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Home</h2>
      <div class="promo_card">
        <h1>Welcome:</h1>
        <p>Here are a few tips to get you going:</p>
        <p>
          <ol>
            <li>You are provided with a <b>client code</b> and your agent's <b>agent code</b></li>
            <li>You shall be prompted to enter you <b>client code</b> as you access some of the facilities on this dashboard</li>
            <li>In case you don't remember your <b>client code</b> you can use the <b>code information</b> facility on the sidebar</li>
          </ol>
        </p>
        <p><b>Click an option on the sidebar to get started</b></p>
        <br>
        <br>
        <br>
        <p>Feel free to contact us:</p>
        <ol>
          <li>Write us an email: <b>info@discoverkenya.co.ke</b></li>
          <li>Call us: <b>(+254)71234578</b> or <b>(+254)78524163</b></li>
        </ol>
        <br>
      </div>
    </div>
    </div>
  </div>
@endsection