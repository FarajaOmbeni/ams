
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Lecturer.home</title>
  <link rel="stylesheet" href="lecturer.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Lecturer</span>
    </div>
    <div class="header-icons">
      <div class="account">
        <a href="../../lecturer"><h4>Homepage</h4></a>
        <h4>Lecturer Name</h4>
      </div>
    </div>
  </header>

  <div class="container_me">
    <nav>
      <div class="side_navbar">
        <a href="../dashboard/{{Auth::user()->id}}">Home</a>
        <a href="../units/{{Auth::user()->id}}">Course Units</a>
        <a class = "active" href="#">Students enrolled</a>
        <a href="../marks/{{Auth::user()->id}}">Coursework Marks</a>
        <a href="../attendance/{{Auth::user()->id}}">Attendance</a>
      </div>
    </nav>

    <div class="main-body">
     <h2>Home</h2>
      <div class="promo_card"> 
       <h1>STUDENTS ENROLLED!</h1>
       <table>
       <tr>

       <th>course code</th>
       <th>course name</th>
       <th>unit code</th>
       <th>student ID</th>

       </tr>
       @foreach($units as $unit)
        <tr>
            <td>{{$unit->course_code}}</td>
            <td>{{$unit->name}}</td>
            <td>{{$unit->unit_code}}</td>
            <td>{{$unit->registered_student}}</td>
            
        </tr>
        @endforeach
</table>
      
      </div>
    </div>
  </div>

</body>
</html>



<style>/*  import google fonts */
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
  background: #c0d4c2;
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
.container_me{
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
  text-align: left;
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

b{
  color: #2e8b57;
}
</style>