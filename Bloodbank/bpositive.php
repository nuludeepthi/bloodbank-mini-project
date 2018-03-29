<!DOCTYPE html>
<html>
<head>
  <title> Welcome to ANITS Blood Bank</title>

  <link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
#wrapper1{
  width: 1000px;
  height: 900px;
  background-color: #fff;
  margin: 0 auto;
}
  table td {
      transition: all .5s;
    }

    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 23px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 1px 1px;
    }
    .data-table caption {
      margin: 2px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>
<body>
  <div id="wrapper1">
        <header>
          <p align="center"><h2><font color="red">Welcome To ANITS Blood bank !</font></h2></p>
    
        </header>
  
        <nav>   
         <ul class="nav">
              <li class=""><a href="home.html">Home</a></li>
              <li><a href="main.html">Hisory Of Blood</a></li>
              <li><a href="register.php">Register</a></li>
                <li><a href="why2.html">Why To Donate?</a></li>
                <li><a href="whoneed.html">Who Needs Blood?</a></li>
                <li><a href="contact.html">Contact Us</a></li>
          </ul>
            
        </nav>  <?php

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM registeration where bgroup='B+'";
$mysqlresult=mysqli_query($conn, $sql);
//$row=mysqli_fetch_array($mysqlresult,MYSQLI_ASSOC);
$count=mysqli_num_rows($mysqlresult);

    ?>
<table border="2" border="2" class="data-table">
  <thead>
    <tr class="title">
      <th>Name </th>
      <th>Number</th>
      <th>Address </th>
      <th>Gender </th>
      <th>Year</th>
      <th>Section</th>
      <th>Email</th>
<th>DateOfBirth</th><th>Moblie</th>
      <th>BloodGroup</th>
      </tr>
  </thead>
  <tbody>
    <?php
      if( $count==0 ){
        echo '<tr><td colspan="4">No Data to Display</td></tr>';
      }else{
      
        while( $row =mysqli_fetch_assoc( $mysqlresult ) )
        {
          echo "<tr><td>{$row['name']}</td><td>{$row['num']}</td><td>{$row['address']}</td><td>{$row['gender']}</td><td>{$row['year']}</td><td>{$row['section']}</><td>{$row['email']}</td><td>{$row['dob']}</td><td>{$row['moblie']}</td><td>{$row['bgroup']}</td><td></tr>\n";

        
        }
      }
    ?>
  </tbody>
</table>
    <?php

?>
</body>
</html>