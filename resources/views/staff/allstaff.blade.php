<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Staff Dashboard</title>
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
      <a href="../allstaff"><h3>HOMEPAGE</h3></a>
      </div>
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
        <table border = 1>
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
                <td>Status</td>
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
  </div>
</body>
</html>

<style>

.picture{
  width: 200px;
  height: 230px;
  margin-top: 50px;
  border-radius: 8px;
  background-size: contain;
  background-color: gray;
}
.details{
  width: 600px;
  margin-left:20%;
  margin-top:-23.6%
}
table,td, th{
  border: 0.1px solid gray;
  padding: 2px 5px;
  border-collapse: collapse;
  
}
th{
  background:#F9A603;
}


  /*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: serif;
}
p{
  font-family: serif;
  font-weight: bold;
  font-size: 30px;
  text-align: center;
  margin-top: 25px;
}

body{
  background:  #F9A603;
}
.header{
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  padding: 20px;
  background:white;
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
  background:white;
}
.side_navbar span{
  color: white;
  margin: 1rem 3rem;
  font-size: 12px;
}
.side_navbar a{
  width: 100%;
  padding: 0.8rem 3rem;
  font-weight: 500;
  font-size: 15px;
  color: black;
  transition: all 0.35s;
}
.side_navbar .log-out-button{
  color:red;
}
.side_navbar a:hover{
  background: rgb(235, 235, 235);
}
.side_navbar .active{
  background-color: #d5e5ff;
  color: black;
}

/*-------------------------------------------Main Body Section---------------------------------------*/
.main-body{
  width: 80%;
  padding: 1rem;
  
}
.promo_card{
  background-color: white;
  width: 100%;
  height: 100vh;
  margin-top: 10px;
  border-radius: 8px;
  padding: 0.5rem 1rem 1rem 3rem;
  background-size: contain;
  color: black;
}
.promo_card h1, .promo_card span, button{
  margin: 10px;
}
.promo_card a{
  width: 130px;
  border: 2px solid #2e8b57;
  background-color: white;
  text-decoration: none;
  font-size: 15px;
  color: #2e8b57 ;
  display: block;
  padding: 15px 20px;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.35s;
}
.promo_card a:hover{
  border: 2px solid #2e8b57;
  background-color: #2e8b57;
  color:  white;
}
.promo_card a:active{
  opacity: 0.7;
}
</style>