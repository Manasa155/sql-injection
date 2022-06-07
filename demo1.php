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
th{
  text-align: center;
 
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
<h2>Query Output</h2> 

<button type="button" class="btn btn-default btn-sm" >
  <span class="glyphicon glyphicon-log-out"></span><h6><a href="index.php">Back</a></h6>
</button>

  


</div>

    <br>
    <br>

<table  border="2" style="width:100%; float:left;">
        <tr>
            <th style="color:blue;"><strong>E_id</strong></th>
            <th style="color:blue;"><strong>E_name</strong></th>
            <th style="color:blue;"><strong>Username</strong></th>
            <th style="color:blue;"><strong>Password</strong></th>
            <th style="color:blue;"><strong>Employment_No</strong></th>
            <th style="color:blue;"><strong>Emp_salary</strong></th>
           
        </tr> 
</body>
</html>

<?php 


	
   
include("connection.php");
 
$query_username = $_POST['user_name1'];
$query_password = $_POST['password1'];
if(!empty($query_username) && !empty($query_password) && !is_numeric($query_username))
{
$query3="SELECT * FROM employee where E_name = '$query_username' and Password = '$query_password'";
echo$query3;
echo"<br>";

//code for multiquery execution
mysqli_multi_query($con,$query3);
echo"\nTable has been maipulated";


//code for single query execution
/*$data = mysqli_query($con,$query3);
//mysqli_multi_query($con,$query3);

$total = mysqli_num_rows($data);   

//$query4="SELECT * from employee where Password='$pass';";
//$data1 = mysqli_query($con,$query4);
 //$total1 = mysqli_num_rows($data1);
 if($total!=0) //and $total1!=0)
 {
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
    }*/
  }
?>
