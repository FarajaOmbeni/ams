
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Security department lost and found</span>
    </div>
  </header>

  <div class="container">

    <nav>
      <div class="side_navbar">
        <a href="lostandfoundHome" class="text-decoration-none"><i class="fa-solid fa-house"></i>  Home Page</a>
        <!--<a href="announcements" class="text-decoration-none"><i class="fa-solid fa-bell-on"></i>  Announcements</a> -->
        <a href="alllostandfound" class="text-decoration-none"><i class="fa-solid fa-circle-info"></i>  lostandfound Details</a>
        <a href="departments" class="text-decoration-none"><i class="fas fa-id-badge"></i>  Departments</a>
        <a href="cleanrota" class="text-decoration-none"><i class="fas fa-id-badge"></i>  Cleaners' Duty Rota</a>
        <a href="lostandfound" class="active" class="text-decoration-none"><i class="fas fa-id-badge"></i>  Lost and Found</a>
      </div>
    </nav>
    
    <div class="main-body">

      <table>
      <tr>
      $table->id();
            $table->string('item_name');
            $table->string('location_found');
            $table->string('description');
            $table->timestamps();
            $table->Integer('isclaimed')->default(0);
        <td>id</td>
        <td>Item Name</td>
        <td>Location found</td>
        <td>Description</td>  
        <td>isclaimed</td>
      </tr>

      @foreach ($lostandfound as $singlelostandfound)
      
      <tr>
        <td>{{ $lostandfound->id }}</td> 
        <td>{{ $lostandfound->item_name }}</td>       
        <td>{{ $lostandfound->location_found }}</td>
        <td>{{ $lostandfound->description }}</td>
        <td>{{ $lostandfound->isclaimed }}</td>
      </tr>

      @endforeach

      </table>

  </div>

</body>
</html>
