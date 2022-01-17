<?php
include "database.php";
$id=$_GET['updateid'];
$sql= "select * from `clients` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['names'];
$telephone=$row['telephone'];
$amount=$row['amount'];
$haircut=$row['haircut'];
$date=$row['dateop'];

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$telephone=$_POST['telephone'];
	$amount=$_POST['amount'];
	$haircut=$_POST['haircut'];
	$date=$_POST['date'];

	$sql= "update `clients` set id=$id,names='$name',telephone='$telephone',
    amount='$amount',haircut='$haircut',dateop='$date' where id=$id";
	$result=mysqli_query($conn,$sql);

    if($result){
        // echo 'Updated Successfully';
        header('location:client.php');
    } else{
	die(mysqli_error($conn));
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hortensia Organisation</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="client.css">
</head>
<body>
    <div class="container">
        <div class="title">
			<div class="navbar">
				<div>
					<a href="../Home/index.html"><img src="../images/logo.png" class="logo"></a>
				</div>
				<div id="sidenav">
					<nav>
						<ul>
							<li><a href="../About/about.html">About</a></li>
							<li><a href="http://localhost/Barbershop/Client/client.php">Clients</a></li>
							<li><a href="../contact/contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
            <h1>Clients Management</h1>
        </div>
        <div class="info">
			<div class="registor">
				<h3>Update Client transaction Details</h3>
				<div id="error"></div>
				<form id="form" method="Post">
					<div>
						<div>
							<label for="Name">Name</label>
							<input id="Name" placeholder="Name" type="text" name="name" 
                            autocomplete="off" value=<?php echo $name ?> >
						</div>
						<div>
							<label for="Telephone">Telephone</label>
							<input id="Telephone" placeholder="0783333333" type="text" name="telephone" 
                            autocomplete="off" value=<?php echo $telephone ?> >
						</div>
						<div>
							<label for="Amount">Amount paid</label>
							<input id="Amount" placeholder="5000 Rwf" name="amount" 
                            autocomplete="off" value=<?php echo $amount ?> >
						</div>
					</div>
					<div>
						<div>
							<label for="Type">Type of Haircut</label>
							<select name='haircut' value=<?php echo $haircut ?>>
								<option value="Hair shape with razors">Hair shape with razors</option>
								<option value="Facial hair maintenance">Facial hair maintenance</option>
								<option value="Custom shaves with clippers">Custom shaves with clippers</option>
								<option value="Taper hair using scissors">Taper hair using scissors</option>
							  </select>	
						</div>
						<div>
							<label for="Date">Date</label>
							<input type="date" id="Date" required name="date" value=<?php echo $date ?>>
						</div>
						<button type="submit" name="submit" id="btn">Update Client</button>
					</div>
				</form>
			</div>

            </div>


<!--FOOTER-->

<section id="footer">
<img src="../images/logo.png" class="footer-img">
<div class="title-text">
<p>CONTACT</p>
<h1>Visit us today</h1>	
</div>
<div class="footer-row">
<div class="footer-left">
    <h1>Opening Hours </h1>
    <p><i class="fa fa-clock-o"></i> Monday to Friday from - 08AM to 02PM</p>
    <p><i class="fa fa-clock-o"></i> Saturday to Sunday from - 10AM to 12PM</p>

</div>
<div class="footer-right">
    <h1>Get in touch</h1>
    <p>Chick,Kigali/Rwanda <i class="fa fa-map-marker"></i></p>
    <P>Hortensia@email.org <i class="fa fa-paper-plane"></i></P>
    <p>+25078-5049-908 <i class="fa fa-phone"></i></p>
</div>

</div>
<div class="social-links">
<i class="fa fa-facebook"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-youtube"></i>
<i class="fa fa-whatsapp"></i>
<p>Copyright Glody@2021</p>

</div>

</section>

</div>
</body>
<script src="./script.js"></script>
</html>