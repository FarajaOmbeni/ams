
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
        <a href="enrol">Enrol Students</a>
        <a href="registration_requests">Send Registration Requests</a>
        <a class="active" href="#">Assign Lecturers</a>
        <a href="timetable">Timetable</a>
      </div>
    </nav>

    <div class="main-body">
      
      <div class="formBox">
        <h1>Assign Lecturers</h1> <br><br>
        <form action="">
            <label for="lecturers" >Assign</label><br>
            <select name="lecturers" id="input-text">
                <option value="lec_id_1">Lec_Name 1</option>
                <option value="lec_id_2">Lec_Name 2</option>
                <option value="lec_id_3">Lec_Name 3</option>
                <option value="lec_id_4">Lec_Name 4</option>
            </select><br><br><br>

            <label for="classes" >To the Class</label><br>
            <select name="classes" id="input-text">
                <option value="class_id_A">Class A</option>
                <option value="class_id_B">Class B</option>
                <option value="class_id_C">Class C</option>
                <option value="class_id_D">Class D</option>
            </select><br><br><br>

            <input type="submit" value="ASSIGN" id="button">
        </form>
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

.formBox{
    background-color: white;
    width: 60%;
    margin-left: 20%;
    height: 80%;
}

#button{
    width: 100px;
    padding: 10px;
    margin-top: 10px;
    background-color: #aec6cf;
    margin-left: 40%;
}
#button:hover{
    background-color: #798f97;
}

label{
    font-size: 25px;
}

#input-text{
    width: 70%;
    height: 40px;
    padding:10px 0;
    margin:5px 0;
    border-left:0;
    border-top:0;
    border-right:0;
    border-bottom: 1px solid rgb(20, 9, 9);
    outline:none;
    background: transparent;
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
