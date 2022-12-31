
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Home</title>
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesone.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
  <header class="header">
    <div class="title">
      <span>STUDENT</span>
    </div>
    <div class="header-icons">
      <a href="../student"><h3>HOMEPAGE</h3></a>
      <div class="account">
      </div>
    </div>
  </header>

  <div class="container_me"">
    <nav>
      <div class="side_navbar">
        <a href="dashboard" class="active" class="text-decoration-none"><i class="fa-solid fa-house"></i>  Home Page</a>
        <a href="mydetails" class="text-decoration-none"><i class="fa-solid fa-circle-info"></i>  My Details</a>
        <a href="selfregistration" class="text-decoration-none"><i class="fa-solid fa-address-card"></i>  Self-Registration</a>
        <a href="courseworkmarks" class="text-decoration-none"><i class="fa-solid fa-marker"></i>  Coursework Marks</a>
        <a href="attendance" class="text-decoration-none"><i class="fa-solid fa-clipboard-user"></i>  Attendance</a>
      </div>
    </nav>

    <div class="main-body">
        <h1>STUDENT PROFILE</h1>
      <div class="promo_card">

        <div class="picture">
        <img src="myles.jpg" width="200px" height="230px" margin-top="10px">
          <h5>Johnson Adebayo Myles</h5>

        </div><br><br>

        <div class="details">
          <table>
            <tr>
              <td style="padding-left: 268px; background-color: lightgray;">Student No:</td>
              <td>&emsp;1999</td>
            </tr>

            <tr>
              <td style="padding-left: 285px; background-color: lightgray;">Names:</td>
              <td>&emsp;Myles Johnson</td>
            </tr>

            <tr>
              <td style="padding-left: 259px; background-color: lightgray;">Date of Birth:</td>
              <td>&emsp;20-20-2022</td>
            </tr>

            <tr>
              <td style="padding-left: 240px; background-color: lightgray;">Mobile Number:</td>
              <td>&emsp;+2547787767</td>
            </tr>

            <tr>
              <td style="padding-left: 245px; background-color: lightgray;">Email-Address:</td>
              <td>&emsp;mylesadebayo@gmail.com</td>
            </tr>


            
          </table>
        </div><br><br><br><br><br><br><br><br><br><br>

        <div class="programs">
          <h4>Academic Programmes</h4><br>
          <table>
            <tr>
              <th>Programme</th>
              <th>Status</th>
              <th>Intake</th>
              <th>&emsp;&emsp;&emsp;&emsp;</th>
            </tr>

            <tr>
              <td>Bachelor of Science in Informatics and Computer Science</td>
              <td>Open</td>
              <td>January 2021</td>
              <td>Coursework | Attendance</td>
              
            </tr>
          </table><br><br><br>
        </div>

        
      </div>
    </div>
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
  height: 70vh;
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

