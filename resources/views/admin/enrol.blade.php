
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin</title>
  <link rel="stylesheet" href="client-dashboard-home.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
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

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="dashboard">Home</a>
        <a href="accept">Acceptance Letter</a>
        <a class="active" href="#">Enrol Students</a>
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
                <td><input type="submit" value="Enrol" id="button"></td>
                  </form>
            </tr>  
            @endforeach
        </table> 
    </div>
      
    </div>
    </div>
  </div>
</body>
</html>

<style>

  /*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: #fcf0d4;
}

table{
    border-collapse: collapse;
}
table, th, td{
    border: 1px solid;
}
table:nth-child(even){
    background-color: #f2f2f2;
}

#button{
    width: 50px;
    padding: 10px;
    background-color: #aec6cf;
    
}
#button:hover{
    background-color: #798f97;
}

.header{
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  padding: 20px;
  background: white;
}
.title{
  display: flex;
  align-items: center;
}
.title span{
  color: black;
  font-size: 18px;
  font-weight: 600;
  margin: 2rem 8rem 2rem 2rem;
}
.header-icons{
  display: flex;
  align-items: center;
}
.container{
  margin-top: 10px;
  display: flex;
  justify-content: space-between;
  height: auto;
}
nav{
  background: white;
}

/*-----------------------------------Sidebar---------------------------------------------*/
.side_navbar{
  padding: 1px;
  display: flex;
  flex-direction: column;
  height: 100vh;
}
.side_navbar span{
  color: gray;
  margin: 1rem 3rem;
  font-size: 12px;
}
.side_navbar a{
  width: 100%;
  padding: 0.8rem 3rem;
  font-weight: 500;
  font-size: 15px;
  color: rgb(100, 100, 100);
  transition: all 0.35s;
}
.side_navbar .log-out-button{
  color: red;
}
.side_navbar a:hover{
  background: rgb(235, 235, 235);
}
.side_navbar .active{
  background-color: #d5e5ff;
  color: white;
}

/*-------------------------------------------Main Body Section---------------------------------------*/
.main-body{
  width: 80%;
  padding: 1rem;
}
.promo_card{
  width: 100%;
  color: black;
  margin-top: 10px;
  border-radius: 8px;
  padding: 0.5rem 1rem 1rem 3rem;
  background: #d5e5ff;
}
.promo_card h1{
  margin: 8px;
}
.promo_card p{
  margin: 10px;
  font-size: 20px;
}
.promo_card ol{
  margin-top: 10px;
  margin-left: 16px;
  font-size: 16px;
}

b{
  /*color: #2e8b57;*/
  color: #1AC92C;
}

</style>
