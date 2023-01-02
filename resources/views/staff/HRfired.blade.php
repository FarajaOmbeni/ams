
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.home</title>
  <link rel="stylesheet" href="view_client_test.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
  </header>

  <div class="container">

    <nav>
      <div class="side_navbar">
        <a href="staffHome" class="active" class="text-decoration-none"><i class="fa-solid fa-house"></i>  Home Page</a>
        <!--<a href="announcements" class="text-decoration-none"><i class="fa-solid fa-bell-on"></i>  Announcements</a> -->
        <a href="allstaff" class="text-decoration-none"><i class="fa-solid fa-circle-info"></i>  Staff Details</a>
        <a href="departments" class="text-decoration-none"><i class="fas fa-id-badge"></i>  Departments</a>
      </div>
    </nav>
    
    <div class="main-body">
      <table>
      <tr>
        <td>id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td> 
        <td>Phone Number</td>
        <td>Identification Number</td>
        <td>Nationality</td> 
        <td>County</td> 
        <td>Address</td> 
        <td>Department</td> 
        <td>Update</td>
      </tr>

      @foreach ($staff as $singlestaff)
      
      <tr>
        <td>{{ $staff->id }}</td> 
        <td>{{ $staff->fname }}</td>       
        <td>{{ $staff->lname }}</td>
        <td>{{ $staff->email }}</td>
        <td>{{ $staff->tel }}</td>
        <td>{{ $staff->identification_number }}</td>
        <td>{{ $staff->nationality }}</td>
        <td>{{ $staff->county }}</td>
        <td>{{ $staff->address }}</td>
        <td>{{ $staff->dep_id }}</td>
      </tr>

      @endforeach

      </table>

  </div>

</body>
</html>
