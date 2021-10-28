<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<style>
.tabs{
	
	background-color:green;
	padding-top:10px;
	padding-bottom:10px;
	margin-bottom:2px;
	color: #FFF;
}
ul{
	list-style:none;
}
.tabContent{
	border: 1px solid grey;
	height:auto;
	padding:20px;
}
</style>
</head>
<body>
<h1> Hello to  </h1>

  
<div class="container">
  <div class="row" style="height:200px;"></div>
  <div class="row">
    <div class="col-md-3" style="border-right:1px solid #c0c0c0;">
			<ul>
				<li id="1" class="tabs"> All Users</li>
				<li id="2" class="tabs"> All teachers</li>
				<li id="3" class="tabs"> All Students</li>
			</ul>
	</div>
	 <div class="col-md-9">
				<div id="tab1Div" class="tabContent">
					
	<table id="allUsersTbl" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
			<?php
			$sql = "SELECT * FROM teachers";
			$result = $conn->query($sql);
			$i=0;
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				  $i++;
			
			 ?>
			<tr>
                <td><?=$row["id"] ?></td>
                <td><?=$row["name"] ?></td>
                <td><?=$row["email"]?></td>
                <td>
					<a href="user_details.php"> 
						<i class="fa fa-eye"></i>
					</a>
					
					<a href="edit_user.php"> 
						<i class="fa fa-edit"></i>
					</a>
					
					<a href="del_user.php"> 
						<i class="fa fa-user-times"></i>
					</a>
				</td>
            </tr>
			 
			 <?php


			 }
			} else {
			  echo "0 results";
			}
	
			
			?>
			
           
          
        </tbody>
        <tfoot>
            <tr>
              <th>Name</th>
                <th>Email</th>
                <th>password</th>
            </tr>
        </tfoot>
    </table>
				</div>	
				<div id="tab2Div" class="tabContent">
				<?php
					
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "mustafa_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
					
	<table id="allUsersTbl" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
			<?php
			$sql = "SELECT * FROM USERS";
			$result = $conn->query($sql);
			$i=0;
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				  $i++;
			
			 ?>
			<tr>
                <td><?=$row["id"] ?></td>
                <td><?=$row["name"] ?></td>
                <td><?=$row["email"]?></td>
                <td>
					<a href="user_details.php"> 
						<i class="fa fa-eye"></i>
					</a>
					
					<a href="edit_user.php"> 
						<i class="fa fa-edit"></i>
					</a>
					
					<a href="del_user.php"> 
						<i class="fa fa-user-times"></i>
					</a>
				</td>
            </tr>
			 
			 <?php


			 }
			} else {
			  echo "0 results";
			}
	
			
			?>
			
           
          
        </tbody>
        <tfoot>
            <tr>
              <th>Name</th>
                <th>Email</th>
                <th>password</th>
            </tr>
        </tfoot>
    </table>
				</div>	
				<div id="tab3Div" class="tabContent">
					ALL STUDENTS DATA
				</div>	
	</div>
  </div>
</div>
<script>
$( document ).ready(function() {
  //  console.log( "ready!" );

    $('#allUsersTbl').DataTable();

  $(".tabContent").hide();
  $("#tab1Div").show();
  
});

$( ".tabs" ).click(function() {
  //console.log( "A tab is clicked with name=" + this.id );
  
   $(".tabContent").hide();
  $("#tab"+ this.id +"Div").show();
});
</script>
</body>
</html>
