<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>Admin</title>

</head>
<body>
    @yield('content')
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
  
  .formBox{
      background-color: white;
      width: 60%;
      margin-left: 20%;
      height: 100%;
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
      width: 150px;
      padding: 10px;
      margin-top: 10px;
      background-color: #aec6cf;
  }
  #button:hover{
      background-color: #798f97;
  }
  
  label{
      font-size: 25px;
  }
  
  #input-text{
      width: 60%;
      height: 60px;
      padding:10px 0;
      margin:5px 0;
      border: 1px solid rgb(20, 9, 9);
      outline:none;
      background: transparent;
  }
  #input-textarea{
      width: 60%;
      height: 170px;
      padding:10px 0;
      margin:5px 0;
      border: 1px solid rgb(20, 9, 9);
      outline:none;
      background: transparent;
  }
  
  body{
    background: #fcf0d4;
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