<?php 
session_start();

	include("connection.php");
	include("functions.php");
   
    
	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
  <!--  <link rel="stylesheet" type="text/css" href="style.css">-->

<link rel="icon" type="image/png"
			href="https://www.google.com/s2/favicons?domain=https://www.apachefriends.org/index.html">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="./styles/style.css">
    </head>
    <style type="text/css">
        .nav-wrapper1 {
            border-radius: 5px 5px 0 0;
            grid-area: nav-wrapper;
            border-bottom: 1px solid var(--borderColor);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(7, 106, 155);
             
}
body{
    font-size: 18px;
}
input {

display: block;

border: 2px solid #ccc;

width: 95%;

padding: 10px;

margin: 10px auto;

border-radius: 5px;

}

label {

color: rgb(37, 1, 1);
font-size: 18px;
padding: 10px;

}
h1,
h2,
h3,
h4,
h5,
h6,
strong {
  color: var(--mainText);
  font-family: "Russo One", sans-serif;
  font-weight: 500;
}
p,
li,
span,
label,
input,
textarea {
  color: var(--secondaryText);
  font-family: "Lato", sans-serif;
  font-weight: 600;
  font-size: 18px;
}
.post-wrapper {
   
  display: grid;
  grid-template-columns: repeat(auto-fit, 320px);
  
  justify-content: center;
  
  background-color: var(--secondaryColor);
  width: 100%;
  border: 15px solid rgb(7, 106, 155);
 
  margin: 5px;
  display: grid;
  font-size: 18px;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));

 
        }
   
        

        a{
  color: black;
  background-color: transparent;
  text-decoration: none;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
        </style>
<body>
 <!--   <table id="output" border="2" style="width:40%; float:left;">
        <tr>
            <th>E_id</th>
            <th>E_name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Employment_No</th>
            <th>Emp_salary</th>
           
        </tr> --> 
 
        <?php
     
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
     //something was posted
    
     //$query2 = $_POST['query'];
          

 // mysqli_query($con,$query3);
 $query1 = "SELECT * FROM employee ;";
 $data = mysqli_query($con,$query1);
 $total = mysqli_num_rows($data);
 echo $total;
// echo $total;
 


 if($total!=0)
 {
     //$res = mysqli_fetch_assoc($data); 
     //echo $res['id']." " . $res['user_name']. " " . $res['password']. " " . $res['date'] ;
     while($res = mysqli_fetch_assoc($data)) 
     {
         echo "
         <tr>
         <th>".$res["E_id"]."</th>
         <th>".$res["E_name"]."</th>
         <th>".$res["Username"]."</th>
         <th>".$res["Password"]."</th>
         <th>".$res["Employment_No"]."</th>
         <th>".$res["Emp_salary"]."</th>
         </tr>";
     }
 }
 //echo "$total";

}
        
        ?>
      <!--  <form action="login.php" method="post">-->



<?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
<div class="nav-wrapper1">

        <!-- Link around dots-wrapper added after tutorial video -->
        <a class="fb" class="w3-jumbo w3-teal" href="./index.html"><i class="fa fa-home" style="font-size:35px;" aria-hidden="true"></i></a>
        <h2>Hello, <?php echo $user_data['user_name']; ?></h2> 
        
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span><h6><a href="login.php" >Logout</a></h6>
        </button>
      
          

        
    </div>


<div class="nav-container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!--<a class="navbar-brand" href="#">SQL Injection</a>-->
            <h6>SQL Injection</h6>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			<!--	<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="view/docs.html">Docs</a>
				</li>-->
				<li class="nav-item">
				<a class="nav-link" href="codeij.php"><strong>Injection queries</strong></a>
				</li>
			<!--	<li class="nav-item">
					<a class="nav-link" href="view/database.html">Database</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://github.com/AswinBarath/sql-injection-and-prevention" target="__blank">
						GitHub
					</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>-->
			</ul>
			</div>
			</nav>
		</div>
		
		<div class="card-container">
			<div class="card mb-3" style="max-width: 100%;">
				<div class="row no-gutters">
				<div class="col-md-4">
					<img src="sql injection image.jpg" class="card-img" alt="Server with injection" width="100%">
				</div>
                
				<div class="col-md-8">
                
                <div class="post-wrapper">
                <div id="box">
					<div class="card-body">
                        
					<h5 class="card-title"><h1> SQL Injection and Prevention </h1></h5>

					<form action="demo1.php" method="post"  >
					<!--	<label for="fname">Query Execution</label><br>
						<input type="text" id="uname" name="query" placeholder="Enter query"><br>
                       
						<input type="submit" id="btn" value="Execute" href="#output">-->
                        <div style="font-size: 20px;margin: 10px;color: white;" >Login</div>
            <label>User Name</label>

       

        
			<input id="text" type="text" name="user_name1"><br><br>
            <label>Password</label>
			<input id="text" type="text" name="password1"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

					</form>
</div>
					</div>
				</div>
				</div>
			</div>
		</div>
        </div>
     <!--   <div class="post-wrapper">
			<div class="card-deck">
            <div class="post-wrapper">
				<div class="card">
							<div class="card-body">
								<h5 class="card-title"> Additional where queries:
</h5>
								<p class="card-text">
									<form>
										<label for="fname">Original query:</label>
										
<h6><textarea rows="2" cols="50">
SELECT * FROM employee WHERE
E_name='Manju' and E_id='2'
;
</textarea></h6> 
  
										<label for="lname">Injection query:
</label>
										
<h6><textarea rows="3" cols="50">
SELECT * from employee WHERE
E_name='Manju' 
UNION ALL SELECT * from
employee WHERE 1 = 1 AND E_id='99999'
;

</textarea></h6> 

										
                                       
									</form>
								</p>
							</div>
				</div>
                </div>
                </div>
                <div class="post-wrapper">
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">SQL Manipulation</h5>
								<p class="card-text">
									<form>
										<label for="fname">Original query:</label>
										
<h6><textarea rows="3" cols="50">
SELECT * FROM employee WHERE
username='Manju' and Password='agc157';
                                       </textarea></h6> 

										<label for="lname">Manipulation query:
</label>
                                        <h6><textarea rows="3" cols="50">SELECT * FROM employee WHERE
 username= 'Manju' OR '2'>'1' and Password='-----';
</textarea></h6>
									
									</form>
								</p>
							</div>
				</div>
			</div>
            </div>
            </div>
            
            <br>
        <br>
        <br>
            <h3 style="text-align: center;" >Code Injection</h3>
            <div class="post-wrapper">
            
			<div class="card-deck">
            
            <div class="post-wrapper">
				<div class="card">
							<div class="card-body">
								<h5 class="card-title"> Like queries
</h5>
								<p class="card-text">
									<form>
                                    <label for="fname">Manipulation query:</label>
										<h6><textarea rows="3" cols="50">SELECT * FROM employee WHERE
 E_name LIKE 'M%';
</textarea></h6>
<label for="fname">Insert subselect Queries:</label>
										<h6><textarea rows="3" cols="50">SELECT * FROM employee WHERE Employment_No = (SELECT id FROM users WHERE user_name='Mamatha');
</textarea></h6>
<label for="fname">Manipulation query:</label>
										<h6><textarea rows="3" cols="50">SELECT *FROM employee WHERE
E_name='Manju' OR 'A'='A' AND Password='-------';
</textarea></h6>

		<br>
        <br>
        <br>
										


									
                                       
									</form>
								</p>
							</div>
				</div>
                </div>
                </div>
                <div class="post-wrapper">
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">Column Mismatch:</h5>
								<p class="card-text">
									<form>
										<label for="fname">Normal query:</label>
										
<h6><textarea rows="3" cols="50">
SELECT * FROM employee WHERE
E_name like '_a%'
                                       </textarea></h6> 

										<label for="lname">Manipulation query:
</label>
                                        <h6><textarea rows="3" cols="50">SELECT * FROM employee WHERE E_name like '_%';
</textarea></h6>
										
									</form>
								</p>
							</div>
				</div>
			</div>
            </div>
            </div>-->
		<script src="script.js"></script>

</form>
</body>
</html>