
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Home</title>
  <!--<link rel="stylesheet" href="student.css" /-->
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

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="dashboard" class="text-decoration-none"><i class="fa-solid fa-house"></i>  Home Page</a>
        <a href="mydetails" class="text-decoration-none"><i class="fa-solid fa-circle-info"></i>  My Details</a>
        <a href="selfregistration" class="text-decoration-none"><i class="fa-solid fa-address-card"></i>  Self-Registration</a>
        <a href="courseworkmarks" class="text-decoration-none"><i class="fa-solid fa-marker"></i>  Coursework Marks</a>
        <a href="attendance" class="text-decoration-none"><i class="fa-solid fa-clipboard-user"></i>  Attendance</a>
        <a href="progressreport" class="active" class="text-decoration-none"><i class="fa-solid fa-bars-progress"></i>  Progress Report</a>
        <a href="examcard" class="text-decoration-none"><i class="fa-solid fa-scroll"></i>  Exam Card</a>
        <a href="feestructure" class="text-decoration-none"><i class="fa-sharp fa-solid fa-money-check-dollar"></i></i>  Fee Structure</a>
        <a href="feestatement" class="text-decoration-none"><i class="fa-solid fa-cash-register"></i>  Fee Statement</a>
        <a href="graduation" class="text-decoration-none"><i class="fa-solid fa-graduation-cap"></i>  Register for Graduation</a>
      </div>
    </nav>

    <div class="main-body">
        <h1>THIS IS THE HOME PAGE</h1>
      <div class="promo_card">
        <h1>Promo Card</h1>
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
p{
  font-family: "Poppins", sans-serif;
  font-weight: bold;
  font-size: 30px;
  text-align: center;
  margin-top: 25px;
}

body{
  background:  #f77a06;
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
  background-image: linear-gradient(rgb(235, 235, 235), #d5e5ff), url(../Index/Images/agentHomeBg.jpg);
  width: 100%;
  height: 200px;
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