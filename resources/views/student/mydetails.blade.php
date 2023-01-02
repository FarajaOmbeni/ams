
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
      <a href="../../../student"><h3>HOMEPAGE</h3></a>
      <div class="account">
      </div>
    </div>
  </header>

  <div class="container_me">
    <nav>
      <div class="side_navbar">
      <a href="../../dashboard/{{Auth::user()->application_id}}/{{Auth::user()->id}}" class="text-decoration-none"><i class="fa-solid fa-house"></i>  Home Page</a>
        <a href="#" class="active" class="text-decoration-none"><i class="fa-solid fa-circle-info"></i>  My Details</a>
        registration_requests
        <a href="../../courseworkmarks/{{Auth::user()->application_id}}/{{Auth::user()->id}}/{{Auth::user()->course_code}}" class="text-decoration-none"><i class="fa-solid fa-marker"></i>  Coursework Marks</a>
        <a href="../../attendance/{{Auth::user()->application_id}}/{{Auth::user()->id}}" class="text-decoration-none"><i class="fa-solid fa-clipboard-user"></i>  Attendance</a>
      </div>
    </nav>

    <div class="main-body">
        <h1>My Details</h1>
      <div class="promo_card">

        <div class="one">
          <h2>Personal Details</h2>
        </div>

        <div class="two">
          <h3>Edit persoal information. Kindly contact your school to update your parents' or guardians' details.</h3>
        </div><br>

        <div class="detailsform">
          <form>
            <h4>Personal details</h4>
            <div class="pd-parent">

            <div class="pd1">
              <label for="ID">ID/Passport Number:</label>
              <input type="text" name="id" value="{{$student->identification_number}}" style="margin-left:33px;" readonly><br><br>

              <label for="postal-address">Postal Address:</label>
              <input type="text" name="postal-address" value="{{$student->postal_address}}" style="margin-left: 70px" readonly><br><br>

              <label for="town">City:</label>
              <input type="text" name="town" value="{{$student->town}}" style="margin-left: 137px" readonly><br><br>

              <label for="nationality">Nationality:</label>
              <input type="text" name="nationality" value="{{$student->nationality}}" style="margin-left: 93px" readonly><br><br>
              
              <label for="residence">Residence:</label>
              <input type="text" name="residence" value="{{$student->address}}" style="margin-left: 100px" readonly>
            </div>

            <div class="pd2">
              <label for="religion">Religion</label>
              <input name="religion" value="{{$student->religion}}" style="margin-left: 109px" readonly><br><br>

              <label for="postal-code">Postal Code:</label>
              <input type="text" name="postal-code" value="{{$student->postal_code}}" readonly style="margin-left: 83px"><br><br>

              <label for="marital-status">Marital Status:</label>
              <input name="marital-status" id="marital-status" value="{{$student->marital_status}}" readonly style="margin-left: 70px"><br><br>

              <label for="mobile-number">Mobile Number:</label>
              <input type="text" name="mobile-number" value="{{$student->phone_number}}" readonly style="margin-left: 58px"><br><br>

              <label for="personal-email">Personal Email:</label>
              <input type="email" name="personal-email" value="{{$student->email}}" readonly style="margin-left: 62px">


            </div>

            </div>

            <h4>Parents/Guardian details</h4>
            <div class="pd-parent">

            <div class="pd1">
              <label for="father">Father's Name:</label>
              <input type="text" name="father" value="{{$student->father_name}}" readonly style="margin-left:110px;"><br><br>

              <label for="father-mobile">Father's Mobile Number:</label>
              <input type="text" name="father-mobile" value="{{$student->father_tel}}" readonly style="margin-left: 46px"><br><br>

              <label for="mother">Mother's Name:</label>
              <input type="text" name="mother" value="{{$student->mother_name}}" readonly style="margin-left: 104px"><br><br>

              <label for="mother-mobile">Mother's Mobile Number:</label>
              <input type="text" name="mother-mobile" value="{{$student->mother_tel}}" readonly style="margin-left: 39px"><br><br>
              
              <label for="guardian">Guardian's Name:</label>
              <input type="text" name="guardian" value="{{$student->guardian_name}}" readonly style="margin-left: 90px"><br><br>

              <label for="guardian-mobile">Guardian's Mobile Number:</label>
              <input type="text" name="guardian-mobile" value="{{$student->guardian_tel}}" readonly style="margin-left: 26px">
            </div>

            <div class="pd2">
              <label for="father-email">Father's Email:</label>
              <input type="text" name="father-email" value="{{$student->father_email}}" readonly style="margin-left:93px;"><br><br>

              <label for="father-occupation">Father's Occupation:</label>
              <input type="text" name="father-occupation" value="{{$student->father_occupation}}" readonly style="margin-left: 55px"><br><br>

              <label for="mother-email">Mother's Email:</label>
              <input type="text" name="mother-email" value="{{$student->mother_email}}" readonly style="margin-left: 84px"><br><br>

              <label for="mother-occupation">Mother's Occupation:</label>
              <input type="text" name="mother-occupation" value="{{$student->mother_occupation}}" readonly style="margin-left: 48px"><br><br>
              
              <label for="guardian-email">Guardian's Email:</label>
              <input type="text" name="guardian-email" value="{{$student->guardian_email}}" readonly style="margin-left: 71px"><br><br>

              <label for="guardian-occupation">Guardian's Occupation:</label>
              <input type="text" name="guardian-occupation" value="{{$student->guardian_occupation}}" readonly style="margin-left: 35px">


            </div>

            </div><br>


          

          </form>

        </div>

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
  font-family:serif;
}
p{
  font-family:serif;
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
  padding: 0.5rem 1rem;
  color: black;
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

.detailsform{
  background-color: lightgray;
}

.detailsform h4{
  text-align: center;
}
.pd-parent{
  border: 1px solid black;
  margin: 1rem;
  padding: 2rem 2rem;
}

.pd1,.pd2{
  display: inline-block;
  width: 515px;
  padding: 0.5rem;
  
}
.pd2{
  background: #d6cfc7;
}
.pd1{
  background: #d9dddc;
}
label{
  text-align: right;
}
.save{
  text-align: right;
}

input[type="submit"]{
  margin-left: 45%;
  margin-bottom: 30px;
  padding: 7px 35px;
}

</style>